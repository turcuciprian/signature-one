<?php

$pathToSource = realpath(dirname(__FILE__));
   if (strpos($pathToSource, 'themes') !== false) {
       //theme
   $rootURL = get_template_directory_uri().'/admin-builder-wordpress/';
       $rootDIR = get_template_directory().'/admin-builder-wordpress/';
   } else {
       //plugin
     $rootURL = plugin_dir_url(__FILE__).'admin-builder-wordpress/';
       $rootDIR = plugin_dir_path(__FILE__).'admin-builder-wordpress/';
   }

$exportFile = $rootDIR.'admin_builder.php';

if (is_file($exportFile)) {
    require_once $exportFile;
}
if (class_exists('loadFromPlugin')) {
    $theJson = '{"menus":[{"label":"Posts","type":"post","name":"posts","unique":true,"children":[{"label":"Signature One Settings","name":"metabox1","context":"normal","priority":"default","fields":[{"name":"textbox1","type":"textbox","label":"Signature Text","description":"Enter the text you want as a signature to Show for this specific Post. (Default Global Options will be applied if this is left empty)","$$hashKey":"object:744"},{"name":"select1","type":"select","label":"Size","description":"The size of the signature text","selectType":"custom","oArr":[{"label":"Global Default","value":"0","$$hashKey":"object:5201"},{"label":"Small (14 px)","value":"14","$$hashKey":"object:5212"},{"label":"Medium (18px)","value":"18","$$hashKey":"object:6064"},{"label":"Large (22 px)","value":"22","$$hashKey":"object:6073"},{"label":"Huge (32 px)","value":"32","$$hashKey":"object:6082"},{"label":"Giant (46 px)","value":"46","$$hashKey":"object:532"}],"$$hashKey":"object:5110"},{"name":"select2","type":"select","label":"Signature Position","description":"The signature will display on the bottom of each post. What side, you decide.","selectType":"custom","oArr":[{"label":"Globally Default","value":"0","$$hashKey":"object:1010"},{"label":"Center","value":"center","$$hashKey":"object:1021"},{"label":"Left","value":"left","$$hashKey":"object:1030"},{"label":"Right","value":"right","$$hashKey":"object:491"}],"$$hashKey":"object:919"},{"name":"upload1","type":"upload","label":"Signature Image","description":"Use an Image as your signature ( WARNING! Uploading an image will not use the text signature. Remove image to use text signature)","tSizes":[],"$$hashKey":"object:1589"}],"$$hashKey":"object:668"}],"$$hashKey":"object:4"},{"label":"Pages","type":"page","name":"pages","unique":true,"children":[],"$$hashKey":"object:5"},{"label":"Signature One","type":"cPage","name":"signature_one","unique":false,"children":[{"label":"Single Page Content","name":"tab1","context":"normal","priority":"default","fields":[{"name":"select1","type":"select","label":"Size","description":"Select asize for the signature from the available list of options above","selectType":"custom","oArr":[{"label":"Small (14 px)","value":"14","$$hashKey":"object:705"},{"label":"Medium (18px)","value":"18","$$hashKey":"object:716"},{"label":"Large (22 px)","value":"22","$$hashKey":"object:725"},{"label":"Huge (32 px)","value":"32","$$hashKey":"object:734"},{"label":"Giant (46 px)","value":"46","$$hashKey":"object:845"}],"$$hashKey":"object:614"},{"name":"textbox1","type":"textbox","label":"Signature Text","description":"The default signature Text","$$hashKey":"object:503"},{"name":"select2","type":"select","label":"Signature Position","description":"The signature will display on the bottom of each post. What side, you decide.","selectType":"custom","oArr":[{"label":"Center (default)","value":"center","$$hashKey":"object:585"},{"label":"Left","value":"left","$$hashKey":"object:596"},{"label":"Right","value":"right","$$hashKey":"object:605"}],"$$hashKey":"object:491"},{"name":"upload1","type":"upload","label":"Signature Image","description":"Use an Image as your signature ( WARNING! Uploading an image will not use the text signature. Remove image to use text signature)","tSizes":[],"$$hashKey":"object:524"}],"$$hashKey":"object:35"}],"capability":"manage_options","handler":"soHandler","pageTitle":"Global Settings","$$hashKey":"object:29","pageDescription":"The settings that apply to all posts and pages , as defaults. You are able to customize everything"}]}';
    $lfp = new loadFromPlugin();
    $lfp->load($theJson);
}
