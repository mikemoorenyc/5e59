<?php


// DIRECTORY REPLACER

function dirReplacer($string) {
  global $siteDir;
  $time = time();
  $newString = str_replace('***REPLACEWITHTHEMEDIRECTORY***', $siteDir, $string);
  $newString = str_replace('***TIMESTAMP***', $time ,$newString);
  echo $newString;
}
//CONTENT CLEANER
function content_cleaner($content) {

    // Remove inline styling
    $content = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $content);

    // Remove font tag
    $content = preg_replace('/<font[^>]+>/', '', $content);

    // Remove empty tags
    $post_cleaners = array('<p></p>' => '', '<p> </p>' => '', '<p>&nbsp;</p>' => '', '<span></span>' => '', '<span> </span>' => '', '<span>&nbsp;</span>' => '', '<span>' => '', '</span>' => '', '<font>' => '', '</font>' => '');
    $content = strtr($content, $post_cleaners);

    return $content;
}
// add_filter('the_content', 'content_cleaner',20);
?>
