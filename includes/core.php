<?php

// Register settings
function Mssgme_register_settings()
{
  register_setting( 'Mssgme_settings_group', 'Mssgme_settings' );
}
add_action( 'admin_init', 'Mssgme_register_settings' );

// Delete options on uninstall
function Mssgme_uninstall()
{
  delete_option( 'Mssgme_settings' );
}
register_uninstall_hook( __FILE__, 'Mssgme_uninstall' );


?>
