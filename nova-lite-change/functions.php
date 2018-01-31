<?php

/**
 *
 * Sueva Theme Functions
 *
 * This is your standard WordPress
 * functions.php file.
 *
 * @author  Alessandro Vellutini
 *
*/

require_once dirname(__FILE__) . '/core/main.php';
function tinymce_font_china($initArray){
   $initArray['font_formats'] = "微软雅黑=微软雅黑;宋体=宋体;黑体=黑体;仿宋=仿宋;楷体=楷体;隶书=隶书;幼圆=幼圆;Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats";
   return $initArray;
}
add_filter('tiny_mce_before_init', 'tinymce_font_china');

?>