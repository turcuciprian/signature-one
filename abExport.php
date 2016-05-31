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
              if (class_exists('loadFromPlugin')) {
                  $theJson = '{"menus":[{"label":"Posts","type":"post","name":"posts","unique":true,"children":[{"label":"Signature One Settings","name":"metabox1","context":"normal","priority":"default","fields":[{"name":"textbox1","type":"textbox","label":"Signature Text","description":"Enter the text you want as a signature to Show for this specific Post. (Default Global Options will be applied if this is left empty)","$$hashKey":"object:744"},{"name":"select1","type":"select","label":"Size","description":"The size of the signature text","selectType":"custom","oArr":[{"label":"Global Default","value":"0","$$hashKey":"object:5201"},{"label":"Small (14 px)","value":"14","$$hashKey":"object:5212"},{"label":"Medium (18px)","value":"18","$$hashKey":"object:6064"},{"label":"Large (22 px)","value":"22","$$hashKey":"object:6073"},{"label":"Huge (32 px)","value":"32","$$hashKey":"object:6082"},{"label":"Giant (46 px)","value":"46","$$hashKey":"object:532"}],"$$hashKey":"object:5110"},{"name":"select2","type":"select","label":"Signature Position","description":"The signature will display on the bottom of each post. What side, you decide.","selectType":"custom","oArr":[{"label":"Globally Default","value":"0","$$hashKey":"object:1010"},{"label":"Center","value":"center","$$hashKey":"object:1021"},{"label":"Left","value":"left","$$hashKey":"object:1030"},{"label":"Right","value":"right","$$hashKey":"object:491"}],"$$hashKey":"object:919"},{"name":"upload1","type":"upload","label":"Signature Image","description":"Use an Image as your signature ( WARNING! Uploading an image will not use the text signature. Remove image to use text signature)","tSizes":[],"$$hashKey":"object:1589"}],"$$hashKey":"object:668"}],"$$hashKey":"object:4"},{"label":"Pages","type":"page","name":"pages","unique":true,"children":[],"$$hashKey":"object:5"},{"label":"Signature One","type":"cPage","name":"signature_one","unique":false,"children":[{"label":"Single Page Content","name":"tab1","context":"normal","priority":"default","fields":[{"name":"select1","type":"select","label":"Size","description":"Select asize for the signature from the available list of options above","selectType":"custom","oArr":[{"label":"Small (14 px)","value":"14","$$hashKey":"object:705"},{"label":"Medium (18px)","value":"18","$$hashKey":"object:716"},{"label":"Large (22 px)","value":"22","$$hashKey":"object:725"},{"label":"Huge (32 px)","value":"32","$$hashKey":"object:734"},{"label":"Giant (46 px)","value":"46","$$hashKey":"object:845"}],"$$hashKey":"object:614"},{"name":"textbox1","type":"textbox","label":"Signature Text","description":"The default signature Text","$$hashKey":"object:503"},{"name":"select2","type":"select","label":"Signature Position","description":"The signature will display on the bottom of each post. What side, you decide.","selectType":"custom","oArr":[{"label":"Center (default)","value":"center","$$hashKey":"object:585"},{"label":"Left","value":"left","$$hashKey":"object:596"},{"label":"Right","value":"right","$$hashKey":"object:605"}],"$$hashKey":"object:491"},{"name":"upload1","type":"upload","label":"Signature Image","description":"Use an Image as your signature ( WARNING! Uploading an image will not use the text signature. Remove image to use text signature)","tSizes":[],"$$hashKey":"object:524"}],"$$hashKey":"object:35"}],"capability":"manage_options","handler":"soHandler","pageTitle":"Global Settings","$$hashKey":"object:29","pageDescription":"The settings that apply to all posts and pages , as defaults. You are able to customize everything"}]}';
                  $lfp = new loadFromPlugin();
                  $lfp->load($theJson);
              }
          }
      }
