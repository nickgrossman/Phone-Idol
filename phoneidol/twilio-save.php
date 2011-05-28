<?php
  #
  # This file will be called directly from twilio. 
  # so we need to include wp-config directly.
  #
  require('../../../wp-config.php');
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<?php $post_id = pi_new_track($_REQUEST); ?>

<Response>

<Say voice="woman">Thanks!  Go to Phone dash Idol dot com to hear your recording.  Your track eye dee number is <?php echo $post_id; ?>.  Thanks for playing Phone Idol.</Say>


</Response>

  
