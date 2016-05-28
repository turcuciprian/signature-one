<?php
/*
  Plugin Name: Signature One
  Plugin URI: http://admin-builder.com
  Description: Create a signature for each post or page. Text or Image. Customize each post or page with it's own signature or create a global one.
  Version: 1.0
  Author: rootabout
  Author URI: http://admin-builder.com
  License: GPLv2 or later
  Text Domain: Signature-one
 */

 require_once 'abExport.php';

 add_filter('the_content', 'so_the_content_callback');
 function so_the_content_callback($content)
 {
     global $abGen;
     if (is_single()) {
         //general values
         $GlobalSignature = $abGen->getField('abOption_cPage_signature_one', 'tab1', 'textbox1');
         $globalPosition = $abGen->getField('abOption_cPage_signature_one', 'tab1', 'select2');
         $globalSize = $abGen->getField('abOption_cPage_signature_one','tab1','select1');

         //post specific values:
         $postSignature = get_post_meta(get_the_ID(), 'abMB_metabox1textbox1', true);
         $postPosition = get_post_meta(get_the_ID(),"abMB_metabox1select2",true);
         $postSize = get_post_meta(get_the_ID(),"abMB_metabox1select1",true);

         $fSignature = $GlobalSignature;
         $fPosition = $globalPosition;
         $fSize = $globalSize;

         if(!empty($postSignature)){
           $fSignature = $postSignature;
         }
         if(!empty($postSize) && $postSize!="0"){
           $fSize = $postSize;
         }
         if(!empty($postPosition) && $postPosition!="0"){
           $fPosition = $postPosition;
         }

         // decisions decisions

         $soSignature = $GlobalSignature;
         $SignatureHTML = '<div class="soContainer" style="display:block;text-align:'.$fPosition.';font-size:'.$fSize.'px;">'.$fSignature.'</div>';
         $content = $content.$SignatureHTML;
     }

     return $content;
 }
