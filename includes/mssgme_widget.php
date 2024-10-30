<?php

// Create a option page for settings
add_action('admin_menu', 'add_mssgme_option_page');

// Hook in the options page functionå
function add_mssgme_option_page()
{
  add_options_page('MSSG.ME Widget', 'MSSG.ME Widget', 'activate_plugins', basename(__FILE__), 'mssgme_options_page');
}

?>
