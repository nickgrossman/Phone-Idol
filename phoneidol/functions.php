<?php
/*
PI_TUMBLR_USERNAME, PI_TUMBLR_PASS, and PI_TUMBLR_GROUP
stored in wp-config.php
*/

if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

function pi_new_track($req) {

  $tumblr_id = pi_save_to_tumblr($req);
  
  if ($tumblr_id) {
    pi_save_to_wp($req, $tumblr_id);
  }
  
  // done.  returns nothing. 
}


function pi_save_to_tumblr($req) {

  // Authorization info
  $tumblr_email    = PI_TUMBLR_USERNAME;
  $tumblr_password = PI_TUMBLR_PASS;
  $tumblr_group = PI_TUMBLR_GROUP;
  
  // Data for new record
  $post_type  = 'audio';
  $post_title = 'The post title';
  $post_body  = 'This is the body of the post.';
  $externally_hosted_url = $req['RecordingUrl'] . '.mp3';
  
  // Prepare POST request
  $request_data = http_build_query(
      array(
          'email'     => $tumblr_email,
          'password'  => $tumblr_password,
          'group'     => $tumblr_group,
          'type'      => $post_type,
          'title'     => $post_title,
          'body'      => $post_body,
          'generator' => 'API example',
          'externally-hosted-url' => $externally_hosted_url
      )
  );
  
  // Send the POST request (with cURL)
  $c = curl_init('http://www.tumblr.com/api/write');
  curl_setopt($c, CURLOPT_POST, true);
  curl_setopt($c, CURLOPT_POSTFIELDS, $request_data);
  curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($c);
  $status = curl_getinfo($c, CURLINFO_HTTP_CODE);
  curl_close($c);


  $ret_val = '';
  if ($status == 201) {
      //$ret_val = "Success! The new post ID is $result.\n";
      $ret_val = $result; /* new post id */
  } else if ($status == 403) {
      $ret_val = 'Bad email or password';
  } else {
      $ret_val = "Error: $result\n";
  }
  
  return $ret_val;

} 

function pi_save_to_wp($req, $tumblr_id) {

  // Create post object
  $my_post = array();
  $my_post['post_content'] = '[audio:' . $req['RecordingUrl'] . '.mp3]';
  $my_post['post_status'] = 'publish';
  $my_post['post_author'] = 1;
  $my_post['tags_input'] = "'$req[Caller]', '$req[CallGuid]'";

  // Insert the post into the database
  $post_id = wp_insert_post($my_post);
  
  // Update post and set ID as title
  $my_post['ID'] = $post_id;
  $my_post['post_title'] = '# ' . $post_id;
  wp_update_post($my_post);
  
  // add tumblr id as post meta
  $tumblr_url = pi_get_tumblr_url($tumblr_id);
  add_post_meta($post_id, 'tumblr_url', $tumblr_url, true);
  
  return $post_id;
}

function pi_get_tumblr_url($tumblr_id) {
  
  $tumblr_url = 'http://' . PI_TUMBLR_GROUP . '/post/' . $tumblr_id;
  
  return $tumblr_url;
}


		
?>