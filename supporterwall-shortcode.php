<?php
/*
Plugin Name: SupporterWall Shortcode
Description: Allows you to easily embed a SupporterWall into your site.
Author: Jeremy Baker
Via: http://www.supporterwall.com
*/

function embed_supporterwall($atts) {

  // Attributes
  extract(shortcode_atts(
    array(
      'key' => ''
    ), $atts)
  );

  if (is_ssl()) {
    $embed_url = 'https://s3.amazonaws.com/media.supporterwall.com/assets/swembed-ssl.js';
  } else {
    $embed_url = 'http://media.supporterwall.com/assets/swembed.js';
  }

  return '<div class="supporterwall" id="sw-' . $key . '"></div><script src="' . $embed_url . '" type="text/javascript"></script>';
}
add_shortcode('supporterwall', 'embed_supporterwall');
?>
