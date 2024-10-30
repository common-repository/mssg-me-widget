<?php

// Output the options page
function mssgme_options_page()
{
  // Get options
  $options = get_option('Mssgme_settings');

  // Check to see if MSSG.ME Widget is enabled
  $mssgme_activated = false;
  if ( esc_attr( $options['mssgme_enabled'] ) == "on" ) {
    $mssgme_activated = true;
    wp_cache_flush();
  }

?>
        <div class="wrap">
        <form name="Mssgme-form" action="options.php" method="post" enctype="multipart/form-data">
          <?php settings_fields( 'Mssgme_settings_group' ); ?>

            <h1>MSSG.ME Widget</h1>
            <h3>Basic Options</h3>
            
            <?php do_settings_sections( 'Mssgme_settings_group' ); ?>

            <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th width="30%" valign="top" style="padding-top: 10px;">
                        <label for="mssgme_enabled">MSSG.ME Widget is:</label>
                    </th>
                    <td>
                      <?php
                          echo "<select name=\"Mssgme_settings[mssgme_enabled]\"  id=\"mssgme_enabled\">\n";

                          echo "<option value=\"on\"";
                          if ( $mssgme_activated ) { echo " selected='selected'"; }
                          echo ">Enabled</option>\n";

                          echo "<option value=\"off\"";
                          if ( ! $mssgme_activated ) { echo" selected='selected'"; }
                          echo ">Disabled</option>\n";
                          echo "</select>\n";
                        ?>
                    </td>
                </tr>
            </table>
                <table class="form-table" cellspacing="2" cellpadding="5" width="100%">
                <tr>
                    <th valign="top" style="padding-top: 10px;">
                        <label for="Mssgme_widget_code">MSSG.ME embed code :</label>
                    </th>
                    <td>
                      <textarea rows="5" cols="100" placeholder="<script src=&#34;https://mssg.me/widget/.." name="Mssgme_settings[mssgme_widget_code]"><?php echo esc_attr( $options['mssgme_widget_code'] ); ?></textarea>
                        <p style="margin: 5px 10px;">Enter your MSSG.ME Widget embed code.<br>You can find your <a href="https://app.mssg.me/p/widget" target="_blank" title="Open MSSG.ME Settings">MSSG.ME embed code here</a>.</p>
                    </td>
                </tr>
                </table>
            <p class="submit">
                <?php echo submit_button('Save Changes'); ?>
            </p>
        </div>
        </form>

<?php
}
?>
