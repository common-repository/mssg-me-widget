<?php

/*
Plugin Name: MSSG.ME Widget
Plugin URI: http://mssg.me/widget
Description: MSSG.ME Widget for the Website
Version: 1.00
Author: MSSG.ME INC.
Author URI: http://mssg.me/
*/


// Prevent Direct Access
defined('ABSPATH') or die("Restricted access!");

/*
* Define
*/
define('MSSGME_VERSION', '1.00');
define('MSSGME_DIR', plugin_dir_path(__FILE__));
define('MSSGME_URL', plugin_dir_url(__FILE__));
defined('MSSGME_PATH') or define('MSSGME_PATH', untrailingslashit(plugins_url('', __FILE__)));

require_once(MSSGME_DIR . 'includes/core.php');
require_once(MSSGME_DIR . 'includes/mssgme_widget.php');
require_once(MSSGME_DIR . 'includes/admin.php');
require_once(MSSGME_DIR . 'includes/embed.php');

?>