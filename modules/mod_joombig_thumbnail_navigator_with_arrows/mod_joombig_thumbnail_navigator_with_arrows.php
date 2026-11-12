<?php
/**
* @title		joombig thumbnail navigator with arrows module
* @website		http://www.joombig.com
* @copyright	Copyright (C) 2013 joombig.com. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
// Path assignments
$mosConfig_absolute_path = JPATH_SITE;
$mosConfig_live_site = JURI :: base();
if(substr($mosConfig_live_site, -1)=="/") { $mosConfig_live_site = substr($mosConfig_live_site, 0, -1); }

// Include helper.php
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
require_once (dirname(__FILE__).DS.'helper.php');
$lists 					= modJoombigthumbnailnaviwitharrowsHelper::getList($params);
$uri 					= JURI::getInstance();
$uniqid					= $module->id;
$enable_jQuery			= $params->get('enable_jQuery', 1);
$width_module			= $params->get('width_module', "900");
$height_module 			= $params->get('height_module', "500");
$left_module 			= $params->get('left_module', "0");

$width_thumb			= $params->get('width_thumb', "72");
$height_thumb 			= $params->get('height_thumb', "72");

$auto_play 				= $params->get('auto_play', 1);
$play_speed 			= $params->get('play_speed', "4000");

$count_items = 0;
foreach($lists as $item) {
	$count_items+=1;
}	
$display_pieces = (int)(($width_module-100)/($width_thumb+11));
if($display_pieces > $count_items){
	$display_pieces = $count_items;
}
$ParkingPosition1 = (int)($display_pieces/2);
$ParkingPosition = $ParkingPosition1 * ($width_thumb+11);

$backgrond_color 		= $params->get('backgrond_color', "#ffffff");
$boder_thumb			= $params->get('boder_thumb', 1);

$items					= count($lists);
$images					= 16;
$document 				= JFactory::getDocument();
require(JModuleHelper::getLayoutPath('mod_joombig_thumbnail_navigator_with_arrows'));
?>
