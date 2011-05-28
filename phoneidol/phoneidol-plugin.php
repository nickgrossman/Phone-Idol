<?php
/**
 * @package Phone_Idol
 * @author Nick Grossman
 * @version 0.1
 */
/*
Plugin Name: Phone Idol
Plugin URI: http://wordpress.org/#
Description: 
Author: Nick Grossman
Version: 0.1
Author URI: http://wrkng.net
*/ 

#
# Create a new post, given a successful twilio recording.
#
function pi_new_track($req) {

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
  
  return $post_id;

}




?>