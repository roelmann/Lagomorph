<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * lagomorph theme general page layout
 *
 * @package    theme_lagomorph uses a layout based on Daniel Wahl's Zebra theme
 * @copyright  2011 Richard Oelmann
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));
$hastopleft = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('top-left', $OUTPUT));
$hastopright = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('top-right', $OUTPUT));
$hasbottomleft = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('bottom-left', $OUTPUT));
$hasbottomright = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('bottom-right', $OUTPUT));
$haslogininfo = (empty($PAGE->layout_options['nologininfo']));
$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));
$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));
$bodyclasses = array();
if ($showsidepre && !$showsidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($showsidepost && !$showsidepre) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost && !$showsidepre) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}
if (!empty($PAGE->theme->settings->menuchoice)) {
    $menuchoice = $PAGE->theme->settings->menuchoice;
} else {
    $menuchoice = 'Select';
}

    $headeralt = $PAGE->heading;
    $branding = 0;
    $zoomenabled = 'no';

echo $OUTPUT->doctype(); ?>

<html <?php echo $OUTPUT->htmlattributes(); ?>>

<head>
    <title><?php echo $PAGE->title; ?></title>
    <!-- Mobile viewport optimization -->
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="480"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--iOS web app -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <!-- Mobile IE: activate ClearType -->
    <meta http-equiv="cleartype" content="on"/>
    <!-- Default Favicons: png and ico -->
    <link rel="shortcut icon" type="image/png" href="<?php echo $OUTPUT->pix_url('favicon/favicon', 'theme'); ?>" />
    <link rel="icon" href="<?php echo $OUTPUT->pix_url('favicon/favicon', 'theme'); ?>" />
    <!-- For iPhone 4 with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo $OUTPUT->pix_url('favicon/h/apple-touch-icon-precomposed', 'theme'); ?>"/>
    <!-- For first-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo $OUTPUT->pix_url('favicon/m/apple-touch-icon-precomposed', 'theme'); ?>"/>
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo $OUTPUT->pix_url('favicon/l/apple-touch-icon-precomposed', 'theme'); ?>"/>
    <!-- For nokia devices: -->
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon/l/apple-touch-icon-precomposed', 'theme'); ?>"/>
    

<?php echo $OUTPUT->standard_head_html(); ?>


</head>


<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
    <?php echo $OUTPUT->standard_top_of_body_html(); ?>
    <div id="page">
        <div id="page-inner-wrapper">
        
               <?php 
if ($menuchoice!='Select') {
if ($hascustommenu) { ?>
         <div id="custommenu"><?php echo $custommenu; ?></div>
<?php } } ?>
        
        
            <div id="page-header-wrapper">
                <div id="page-header" class="clearfix">
                    <h1 class="headermain"><?php echo $PAGE->heading; ?></h1>
                    <div id="profileblock">
                        <?php include ('profileblock.php');?>  
                    </div>
                </div>
                <div id="page-border-wrapper">
<?php /*if ($menuchoice!='Custom') {*/
include ('menu2.php'); /*}*/?>

                    <div id="page-content-wrapper">
                        <div id="page-content">
                            <div id="region-main-box">
                                <div id="region-post-box">
                                    <div id="region-main-wrap">
                                        <div id="region-main">
                                            <div class="region-content">
                                            	<div id="top_block" class="clearfix">
                                           	      <?php if ($hastopleft) { ?>
                                                    <div id="topleft_block" class="block-action"><?php echo $OUTPUT->blocks_for_region('top-left') ?></div>
                                                  <?php } ?>
                                                  <?php if ($hastopright) { ?>
                                                    <div id="topright_block" class="block-action"><?php echo $OUTPUT->blocks_for_region('top-right') ?></div>
                                                  <?php } ?>
	                                            </div>
                                                <?php echo core_renderer::MAIN_CONTENT_TOKEN; ?>
                                                <div id="bottom_block" class="clearfix">
                                            	  <?php if ($hasbottomleft) { ?>
                                                    <div id="bottomleft_block" class="block-action"><?php echo $OUTPUT->blocks_for_region('bottom-left') ?></div>
                                                  <?php } ?>
                                                  <?php if ($hasbottomright) { ?>
                                                    <div id="bottomright_block" class="block-action"><?php echo $OUTPUT->blocks_for_region('bottom-right') ?></div>
                                                  <?php } ?>
	                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($hassidepre) { ?>
                                        <div id="region-pre" class="block-region">
                                            <div class="region-content">
                                                <?php echo $OUTPUT->blocks_for_region('side-pre'); ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ($hassidepost) { ?>
                                        <div id="region-post" class="block-region">
                                            <div class="region-content">
                                                <?php echo $OUTPUT->blocks_for_region('side-post'); ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($hasfooter) { ?>
                <div id="page-footer-wrapper">
                    <div id="page-footer">
                        <p class="helplink">
                            <?php echo page_doc_link(get_string('moodledocslink')); ?>
                        </p>
                        <?php
                        echo $OUTPUT->login_info();
                        echo "<br />";
                        echo $OUTPUT->standard_footer_html();
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php echo $OUTPUT->standard_end_of_body_html(); ?>
</body>
</html>
