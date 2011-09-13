<?php
function lagomorph_process_css($css, $theme) {
global $CFG;
global $OUTPUT;
/************************************************************************/
/* 	Set default values for setting variables                            */
/************************************************************************/

/*Set the defaults here in case of an error reading the text file - although these should be picked up from the default text file anyway*/
$bgcolour1= '#5B2702';
$bgcolour2= '#da832c';
$bgcolour3= '#D7B49B';
$offwhite= '#f9f7eb';
$offblack= '#0d0d00';
$pgimage= $CFG->wwwroot.'/theme/lagomorph/pix/logo/logo.png';

/************************************************************************/
/* 	Taking setting variables from text file                             */
/************************************************************************/
// This section is commented out as the performance hit in reading the text file is too great. 
// I have left it in place rather than deleting it completely solely for reference in trying to develop an alternative

// If there is a setting text file read it and set values
//    if (!empty($theme->settings->settingurl)) {
//        $settingurl = $theme->settings->settingurl;   

        /*read the text file*/
//        $filename = $settingurl;
//        $fd = fopen ($filename, "r");
//        $contents = fread ($fd,10000);
//        fclose ($fd);

        /*split the text file read back into separate lines*/
//        $delimiter = ';';
//        $splitcontents = explode($delimiter, $contents);

        /*read each line and break it into setting name [0] and setting value [1]*/
//        foreach ( $splitcontents as $setting ){
//            $setting2=trim($setting);
//            $delimiter2 = '|';
//            $set = explode($delimiter2, $setting2);

            /*check setting name and set value for that setting if present*/
//            if($set[0]=='bgcolour1') {$bgcolour1=$set[1];}
//            if($set[0]=='bgcolour2') {$bgcolour2=$set[1];}
//            if($set[0]=='bgcolour3') {$bgcolour3=$set[1];}
//            if($set[0]=='offwhite') {$offwhite=$set[1];}
//            if($set[0]=='offblack') {$offblack=$set[1];}
//            if($set[0]=='pgimage') {$pgimage=$set[1];}
//        }
//    }
    
/*********************************************************/
/*         MAIN BIT                                      */
/*********************************************************/

//any settings page adjustments go here

// Set background colour 1
    if (!empty($theme->settings->bgcolour1)) {$bgcolour1 = $theme->settings->bgcolour1;} 
    $css = lagomorph_set_bgcolour1($css, $bgcolour1);
// Set background colour 2
    if (!empty($theme->settings->bgcolour2)) {$bgcolour2 = $theme->settings->bgcolour2;} 
    $css = lagomorph_set_bgcolour2($css, $bgcolour2);
// Set background colour 3
    if (!empty($theme->settings->bgcolour3)) {$bgcolour3 = $theme->settings->bgcolour3;} 
    $css = lagomorph_set_bgcolour3($css, $bgcolour3);
// Set Off-White colour
    if (!empty($theme->settings->offwhite)) {$offwhite = $theme->settings->offwhite;}
    $css = lagomorph_set_offwhite($css, $offwhite);
// Set Off-Black colour
    if (!empty($theme->settings->offblack)) {$offblack = $theme->settings->offblack;}
    $css = lagomorph_set_offblack($css, $offblack);
// Set the background image for the page
    if (!empty($theme->settings->pgimage)) {$pgimage = $theme->settings->pgimage;}
    $css = lagomorph_set_pgimage($css, $pgimage);
    
// Send back adjusted css
return $css;
};
/****************************************************************************************************/
//Functions to set replacement values in the css

function lagomorph_set_bgcolour1($css, $bgcolour1) {
    $tag = '[[setting:bgcolour1]]';
    $replacement = $bgcolour1;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function lagomorph_set_bgcolour2($css, $bgcolour2) {
    $tag = '[[setting:bgcolour2]]';
    $replacement = $bgcolour2;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function lagomorph_set_bgcolour3($css, $bgcolour3) {
    $tag = '[[setting:bgcolour3]]';
    $replacement = $bgcolour3;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function lagomorph_set_offwhite($css, $offwhite) {
    $tag = '[[setting:offwhite]]';
    $replacement = $offwhite;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function lagomorph_set_offblack($css, $offblack) {
    $tag = '[[setting:offblack]]';
    $replacement = $offblack;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
function lagomorph_set_pgimage($css, $pgimage) {
	$tag = '[[setting:pgimage]]';
	$replacement = $pgimage;
	$css = str_replace($tag, $replacement, $css);
	return $css;
}
?>
