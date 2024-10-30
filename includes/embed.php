<?php

// Add the MSSG.ME Javascript
add_action('wp_head', 'add_mssgme');


// The guts of the MSSG.ME script
function add_mssgme()
{
  // Ignore admin, feed, robots or trackbacks
  if ( is_feed() || is_robots() || is_trackback() )
  {
    return;
  }

  $options = get_option('Mssgme_settings');

  // If options is empty then exit
  if( empty( $options ) )
  {
    return;
  }

  // Check to see if MSSG.ME Widget is enabled
  if ( esc_attr( $options['mssgme_enabled'] ) == "on" )
  {
    $mssgme_tag = $options['mssgme_widget_code'];
    
    // Insert tracker code
    if ( '' != $mssgme_tag )
    {
      echo "<!-- Start MSSG.ME Widget -->\n";
      echo $mssgme_tag;
      echo"<!-- End MSSG.ME Widget -->\n";

    }
  }
}
?>