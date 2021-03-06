<?php

/**
 *  @module         TinyMCE-Cloud
 *  @version        see info.php of this module
 *  @authors        erpe, Dietrich Roland Pehlke (Aldus)
 *  @copyright      2012-2017 erpe, Dietrich Roland Pehlke (Aldus)
 *  @license        GNU General Public License
 *  @license terms  see info.php of this module
 *  @platform       see info.php of this module
 *
 *  Please note: TINYMCE is distibuted under the <a href="http://tinymce.moxiecode.com/license.php">(LGPL) License</a> 
 *
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {	
	include(LEPTON_PATH.'/framework/class.secure.php'); 
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php

$module_directory     = 'tinymce_cloud';
$module_name          = 'TinyMCE-Cloud';
$module_function      = 'WYSIWYG';
$module_version       = '1.0.4';
$module_platform      = '3.x';
$module_author        = 'erpe, Aldus';
$module_home          = 'http://lepton-cms.org';
$module_guid          = '0ad7e8dd-2f6b-4525-b4bf-db326b0f5ae8';
$module_license       = 'GNU General Public License, TINYMCE is LGPL';
$module_license_terms  = '-';
$module_description   = '<a href="http://www.tinymce.com/" target="_blank">Current TinyMCE </a>allows you to edit the content<br />of a page and see media image folder. This release needs a Tinymce API-Key!';

?>