<?php


      $abError = false;
       include_once ABSPATH.'wp-admin/includes/plugin.php';

          if (!is_plugin_active('admin-builder/admin-builder.php')) {
              function sample_admin_notice__success()
              {
                  $pluginInstalled = false;
                  if (!function_exists('get_plugins')) {
                      require_once ABSPATH.'wp-admin/includes/plugin.php';
                  }
                  $allPlugins = get_plugins();
                  foreach ($allPlugins as $key => $value) {
                      if ($key === 'admin-builder/admin_builder.php') {
                          $pluginInstalled = true;
                      }
                      # code...
                  }
                  if ($pluginInstalled) {
                      //check if plugin is activated:
                              if (!is_plugin_active('admin-builder/admin_builder.php')) {
                                  $abError = true;
                                  $url = admin_url();

                                  echo '<div class="notice notice-error is-dismissible">';
                                  echo '<h3>Admin Builder Plugin is not ACTIVE!</h3>';
                                  echo '<p>';
                                  echo 'To get the full functionality , activate Admin Builder from the <a href="'.$url.'/plugins.php">plugins directory</a>.';
                                  echo '</p>';
                                  echo '</div>';
            //plugin is activated
                              } else {
                                  $theJson = '{"menus":[{"label":"Posts","type":"post","name":"posts","unique":true,"children":[{"label":"Metabox1","name":"metabox1","context":"normal","priority":"default","fields":[{"name":"textbox1","type":"textbox","label":"TextBox1","description":"Default TextBox Description text","$$hashKey":"object:550"}],"$$hashKey":"object:477"}],"$$hashKey":"object:17"},{"label":"Pages","type":"page","name":"pages","unique":true,"children":[{"label":"Metabox1","name":"metabox1","context":"normal","priority":"high","fields":[{"name":"textbox1","type":"textbox","label":"TextBox1","description":"Default TextBox Description text","$$hashKey":"object:602"}],"$$hashKey":"object:529"}],"$$hashKey":"object:18"},{"label":"Admin Page1","type":"cPage","name":"cPage1","unique":false,"children":[{"label":"Tab1","name":"tab1","context":"normal","priority":"default","fields":[{"name":"textbox1","type":"textbox","label":"TextBox1","description":"Default TextBox Description text","$$hashKey":"object:335"},{"name":"textarea1","type":"textarea","label":"TextArea1","description":"Default TextArea Description text","$$hashKey":"object:446"},{"name":"select1","type":"select","label":"Select1","description":"Default Select Description text","selectType":"custom","oArr":[],"$$hashKey":"object:537"},{"name":"radio1","type":"radio","label":"Radio Buttons1","description":"Default Radio Buttons Description text","oArr":[],"radioType":"custom","orientation":"h","$$hashKey":"object:628"}],"$$hashKey":"object:75"}],"capability":"manage_options","handler":"ab_menu_handler1","pageTitle":"Test CPage","$$hashKey":"object:72","pageDescription":"HEre\'s some description. What you need to do here is listen. and listen good!"}]}';
                                  $lfp = new loadFromPlugin();
                                  $lfp->load($theJson);
                              }
                  } else {
                      $abError = true;
                      echo '<div class="notice notice-error is-dismissible">';
                      echo '<h3>Admin Builder Plugin is not installed!</h3>';
                      echo '<p>';
                      echo 'To get the full functionality , install Admin Builder.';
                      echo '</p>';
                      echo '<p>';
                      $plugin_name = 'admin-builder';
                      $install_link = '<a href="'.esc_url(network_admin_url('plugin-install.php?tab=plugin-information&amp;plugin='.$plugin_name.'&amp;TB_iframe=true&amp;width=600&amp;height=550')).'" class="thickbox" title="More info about '.$plugin_name.'">Install '.$plugin_name.'</a>';

                      echo $install_link;
                      echo '</p>';
                      echo '</div>';
                  }
              }
              add_action('admin_notices', 'sample_admin_notice__success');
          }
      if (!$abError) {
          if (!$abError) {
              if (class_exists(loadFromPlugin)) {
                  $theJson = '{"menus":[{"label":"Posts","type":"post","name":"posts","unique":true,"children":[],"$$hashKey":"object:4"},{"label":"Pages","type":"page","name":"pages","unique":true,"children":[],"$$hashKey":"object:5"},{"label":"Signature One","type":"cPage","name":"signature_one","unique":false,"children":[{"label":"General","name":"tab1","context":"normal","priority":"default","fields":[{"name":"textbox1","type":"textbox","label":"Signature Text","description":"The default signature Text","$$hashKey":"object:503"},{"name":"select1","type":"select","label":"Font Size","description":"Select a font size for the signature from the available list of options above","selectType":"custom","oArr":[{"label":"Small (14 px)","value":"14","$$hashKey":"object:705"},{"label":"Medium (18px)","value":"18","$$hashKey":"object:716"},{"label":"Large (22 px)","value":"22","$$hashKey":"object:725"},{"label":"Huge (32 px)","value":"32","$$hashKey":"object:734"},{"label":"Giant (46 px)","value":"46","$$hashKey":"object:845"}],"$$hashKey":"object:614"}],"$$hashKey":"object:35"},{"label":"Defaults","name":"tab2","context":"normal","priority":"default","fields":[{"name":"checkbox1","type":"checkbox","label":"Default for Posts","description":"All across the site posts will be affected (the signature will be added.","extraText":"Check if you want to affect posts by Default","$$hashKey":"object:447"},{"name":"checkbox2","type":"checkbox","label":"Default for Pages","description":"All across the site pages will be affected (the signature will be added.","extraText":"Check if you want to affect pages by Default","$$hashKey":"object:538"}],"$$hashKey":"object:424"}],"capability":"manage_options","handler":"soHandler","pageTitle":"Global Settings","$$hashKey":"object:29","pageDescription":"The settings that apply to all posts and pages , as defaults. You are able to customize everything"}]}';
                  $lfp = new loadFromPlugin();
                  $lfp->load($theJson);
              }
          }
      }
