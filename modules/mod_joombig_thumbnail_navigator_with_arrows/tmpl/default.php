<?php
/**
* @title		joombig thumbnail navigator with arrows module
* @website		http://www.joombig.com
* @copyright	Copyright (C) 2013 joombig.com. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<script>
jQuery.noConflict();
</script>
<?php
if ($enable_jQuery == 1) {?>
	<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_thumbnail_navigator_with_arrows/assets/js/jquery-1.9.1.min.js"></script>
<?php }?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_thumbnail_navigator_with_arrows/assets/js/jssor.core.js"></script>
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_thumbnail_navigator_with_arrows/assets/js/jssor.utils.js"></script>
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_thumbnail_navigator_with_arrows/assets/js/jssor.slider.js"></script>
<script>
		var  call_width_module, call_auto_play, call_play_speed,call_display_pieces,call_ParkingPosition;
		call_width_module = <?php echo $width_module;?>;
		call_auto_play = <?php echo $auto_play;?>;
		call_play_speed = <?php echo $play_speed;?>;
		call_display_pieces = <?php echo $display_pieces;?>;
		call_ParkingPosition = <?php echo $ParkingPosition;?>;
</script>
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_thumbnail_navigator_with_arrows/assets/js/navigationarrows.js"></script>
<link rel="stylesheet" href="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_thumbnail_navigator_with_arrows/assets/css/navigationarrorows.css" />
<?php if($boder_thumb == 1){?>
	<style>
		.jssort05 .f
		{
			clip: rect(8px 63px 63px 8px);
		}
	</style>
<?php }?>
<div id="thumbnail_navigation_arrow_main" value="1" style="margin-left:<?php echo $left_module;?>px;">
<div id="jb11_slider1_container" style="position: relative; width: <?php echo $width_module;?>px; height: <?php echo $height_module;?>px;background:<?php echo $backgrond_color;?>;margin:0 auto;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;" >
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;" >
            </div>
            <div style="position: absolute; display: block; background: url(img1/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: <?php echo $width_module;?>px; height: <?php echo ($height_module-110);?>px;
            overflow: hidden;">
			<?php 
	$count1=1;
	foreach($lists as $item) { ?>
            <div>
                <img u="image" src="<?php echo $item->image ?>" />
                <img u="thumb" src="<?php echo $item->image ?>" />
            </div>
	<?php	
	$count1++;}
?>			
        </div>
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort05" style="position: absolute; width: <?php echo ($width_module-100);?>px; height: 80px; left:50px; bottom: 20px;">
            <!-- Thumbnail Item Skin Begin -->

            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: <?php echo $width_thumb;?>px; HEIGHT: <?php echo $height_thumb;?>px; TOP: 0; LEFT: 0;">
                    <div class="o" style="position:absolute;top:1px;left:1px;width:<?php echo $width_thumb;?>px;height:<?php echo $height_thumb;?>px;overflow:hidden;">
                        <div class="i"></div>
                        <ThumbnailTemplate class="f" style="width:<?php echo $width_thumb;?>px;height:<?php echo $height_thumb;?>px;border: none;position:absolute; TOP: 0; LEFT: 0;"></ThumbnailTemplate>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
            
            <!-- Direction Navigator Skin Begin -->

            <!-- Arrow Left -->
            <span u="arrowleft" class="jssord06l" style="width: 45px; height: 45px;left: -40px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssord06r" style="width: 45px; height: 45px;right: -40px">
            </span>
            <!-- Direction Navigator Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->
</div>
</div>
