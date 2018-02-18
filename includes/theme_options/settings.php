<?php
  function add_theme_menu_item()
  {
    add_menu_page("Dohko Theme Options", "Dohko Theme Options", "manage_options", "dohko-theme-options", "dohko_settings_page", null, 99);
    add_submenu_page("dohko-theme-options", "Dohko Settings", "Dohko Settings", "manage_options", "dohko-theme-options");
    add_submenu_page("dohko-theme-options", "Header Theme Options", "Header Options", "manage_options", "dohko-header-options", "dohko_header_options_page");
    add_submenu_page("dohko-theme-options", "Social Profile Options", "Social Profile", "manage_options", "dohko-social-profile", "dohko_social_profile_page");
    add_submenu_page("dohko-theme-options", "Contact Options", "Contact Options", "manage_options", "dohko-contact-options", "dohko_contact_options_page");
    add_submenu_page("dohko-theme-options", "About Us Options", "About Us Options", "manage_options", "dohko-about-us-options", "dohko_about_us_options_page");

  
    add_action( 'admin_init', 'dohko_register_settings' );
  }

  add_action("admin_menu", "add_theme_menu_item");

  function dohko_register_settings() {
    //register our settings
    register_setting( 'dohko-settings-social', 'dohko_facebook' );
    register_setting( 'dohko-settings-social', 'dohko_youtube' );
    register_setting( 'dohko-settings-social', 'dohko_instagram' );
    register_setting( 'dohko-settings-social', 'dohko_googleplus' );
    register_setting( 'dohko-settings-social', 'dohko_twitter' );
    register_setting( 'dohko-settings-social', 'dohko_rss' );
    register_setting( 'dohko-settings-header', 'dohko_logo' );
    register_setting( 'dohko-settings-footer', 'dohko_analytics' );
    register_setting( 'dohko-settings-contact', 'dohko_address_line_1' );
    register_setting( 'dohko-settings-contact', 'dohko_address_line_2' );
    register_setting( 'dohko-settings-contact', 'dohko_address_line_3' );
    register_setting( 'dohko-settings-contact', 'dohko_telephone' );
    register_setting( 'dohko-settings-contact', 'dohko_mobile' );
    register_setting( 'dohko-settings-contact', 'dohko_whatsapp' );
    register_setting( 'dohko-settings-contact', 'dohko_email' );
    register_setting( 'dohko-settings-contact', 'dohko_working_hours_1' );
    register_setting( 'dohko-settings-contact', 'dohko_working_days_1' );
    register_setting( 'dohko-settings-contact', 'dohko_working_hours_2' );
    register_setting( 'dohko-settings-contact', 'dohko_working_days_2' );
    register_setting( 'dohko-settings-contact', 'dohko_working_hours_3' );
    register_setting( 'dohko-settings-contact', 'dohko_working_days_3' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p1' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p2' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p3' );
    register_setting( 'dohko-settings-about-us', 'dohko_about_p4' );
    register_setting( 'dohko-settings-about-us', 'dohko_mission' );
    register_setting( 'dohko-settings-about-us', 'dohko_vision' );
    
    
  }

  function dohko_header_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Header Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-header' ); ?>
        <div valign="top">
          <div scope="row">Logo:</th>
            <input type="file" name="dohko_logo" value="<?php print get_option('dohko_logo'); ?>" /><br/>
            *Upload using the Media Uploader and paste the URL here.
          </div>
        </div>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
  <?php }

  function dohko_social_profile_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Theme Settings</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-social' ); ?>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Facebook Link:</th>
            <td>
              <input type="text" name="dohko_facebook" value="<?php print get_option('dohko_facebook'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Youtube Link:</th>
            <td>
              <input type="text" name="dohko_youtube" value="<?php print get_option('dohko_youtube'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Instagram Link:</th>
            <td>
              <input type="text" name="dohko_instagram" value="<?php print get_option('dohko_instagram'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Google+ Link:</th>
            <td>
              <input type="text" name="dohko_googleplus" value="<?php print get_option('dohko_googleplus'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Twitter Link:</th>
            <td>
              <input type="text" name="dohko_twitter" value="<?php print get_option('dohko_twitter'); ?>" />
            </td>
          </tr>
        </table>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
  <?php }

  function dohko_settings_page() {
  } 
  function dohko_footer_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Footer Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-footer' ); ?>
        <table class="form-table">
          <tr>
            <th scope="row">Google Analytics Code:</th>
            <td>
              <textarea name="dohko_analytics"><?php print get_option('dohko_analytics'); ?></textarea>
            </td>
          </tr> 
        </table>
         <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    <div>
  <?php }
  function dohko_about_us_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko About Us Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-about-us' ); ?>
        <table class="form-table">
           <tr>
            <th scope="row">About Us Paragraph Nro 1:</th>
            <td>
              <textarea name="dohko_about_p1" style="width:100%; height:100px;"><?php print get_option('dohko_about_p1'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">About Us Paragraph Nro 2:</th>
            <td>
              <textarea name="dohko_about_p2" style="width:100%; height:100px;"><?php print get_option('dohko_about_p2'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">About Us Paragraph Nro 3:</th>
            <td>
              <textarea name="dohko_about_p3" style="width:100%; height:100px;"><?php print get_option('dohko_about_p3'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">About Us Paragraph Nro 4:</th>
            <td>
              <textarea name="dohko_about_p4" style="width:100%; height:100px;"><?php print get_option('dohko_about_p4'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Mission:</th>
            <td>
              <textarea name="dohko_mission" style="width:100%; height:100px;"><?php print get_option('dohko_mission'); ?></textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Vision:</th>
            <td>
              <textarea name="dohko_vision" style="width:100%; height:100px;"><?php print get_option('dohko_vision'); ?></textarea>
            </td>
          </tr>
        </table>
         <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    <div>
  <?php }
  function dohko_contact_options_page(){
  ?>
    <div class="wrap">
      <h2>Dohko Contact Options</h2>
      <form method="post" action="options.php">
        <?php settings_fields( 'dohko-settings-contact' ); ?>
        <table class="form-table">
          <tr valign="top">
            <th scope="row">Address Line 1:</th>
            <td>
              <input type="text" name="dohko_address_line_1" value="<?php print get_option('dohko_address_line_1'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Address Line 2:</th>
            <td>
              <input type="text" name="dohko_address_line_2" value="<?php print get_option('dohko_address_line_2'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Address Line 3:</th>
            <td>
              <input type="text" name="dohko_address_line_3" value="<?php print get_option('dohko_address_line_3'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Telephone:</th>
            <td>
              <input type="text" name="dohko_telephone" value="<?php print get_option('dohko_telephone'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Mobile:</th>
            <td>
              <input type="text" name="dohko_mobile" value="<?php print get_option('dohko_mobile'); ?>" />
            </td>
          </tr>
          <tr valign="top">
            <th scope="row">Whatsapp:</th>
            <td>
              <input type="text" name="dohko_whatsapp" value="<?php print get_option('dohko_whatsapp'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Days 1:</th>
            <td>
              <input type="text" name="dohko_working_days_1" value="<?php print get_option('dohko_working_days_1'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Hours 1:</th>
            <td>
              <input type="text" name="dohko_working_hours_1" value="<?php print get_option('dohko_working_hours_1'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Days 2:</th>
            <td>
              <input type="text" name="dohko_working_days_2" value="<?php print get_option('dohko_working_days_2'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Hours 2:</th>
            <td>
              <input type="text" name="dohko_working_hours_2" value="<?php print get_option('dohko_working_hours_2'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Days 3:</th>
            <td>
              <input type="text" name="dohko_working_days_3" value="<?php print get_option('dohko_working_days_3'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">Working Hours 3:</th>
            <td>
              <input type="text" name="dohko_working_hours_3" value="<?php print get_option('dohko_working_hours_3'); ?>" />
            </td>
          </tr>
          <tr>
            <th scope="row">e-mail:</th>
            <td>
              <input type="text" name="dohko_email" value="<?php print get_option('dohko_email'); ?>" />
            </td>
          </tr> 
        </table>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
      </form>
    </div>
<?php }
?>