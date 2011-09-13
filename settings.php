<?php
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

//This is the descriptor for the following header settings
$name = 'theme_lagomorph/headerinfo';
$heading = get_string('headerinfo', 'theme_lagomorph');
$information = get_string('headerinfodesc', 'theme_lagomorph');
$setting = new admin_setting_heading($name, $heading, $information);
$settings->add($setting);

//Set the path to the settings text file
$name = 'theme_lagomorph/settingurl';
$title = get_string('settingurl','theme_lagomorph');
$description = get_string('settingurldesc', 'theme_lagomorph');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Set the path to the menu text file
$name = 'theme_lagomorph/menuurl';
$title = get_string('menuurl','theme_lagomorph');
$description = get_string('menuurldesc', 'theme_lagomorph');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Enable choice to activate custommenu as well
$name = 'theme_lagomorph/menuchoice';
$title=get_string('menuchoice','theme_lagomorph');
$description = get_string('menuchoicedesc', 'theme_lagomorph');
    $default = 'Select';
    $choices = array('Custom'=>'CustomMenu only', 'Select'=>'SelectMenu only', 'Combined'=>'SelectMenu+CustomMenu' );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

//Info for colour choices
$name = 'theme_lagomorph/imageinfo';
$title=get_string('imageinfo','theme_lagomorph');
$description = get_string('imageinfodesc', 'theme_lagomorph');
$setting = new admin_setting_heading($name, $title, $description);
$settings->add($setting);

// Page Image
$name = 'theme_lagomorph/pgimage';
$title=get_string('pgimage_title','theme_lagomorph');
$description = get_string('pgimage', 'theme_lagomorph');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

//Info for colour choices
$name = 'theme_lagomorph/colourchoiceinfo';
$title=get_string('colourchoiceinfo','theme_lagomorph');
$description = get_string('colourchoicedesc', 'theme_lagomorph');
$setting = new admin_setting_heading($name, $title, $description);
$settings->add($setting);

//Colour 1 - by default dark background colour
$name = 'theme_lagomorph/bgcolour1';
$title=get_string('bgcolour1','theme_lagomorph');
$description = get_string('bgcolour1desc', 'theme_lagomorph');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$settings->add($setting);
//Colour 2 - by default mid background colour
$name = 'theme_lagomorph/bgcolour2';
$title=get_string('bgcolour2','theme_lagomorph');
$description = get_string('bgcolour2desc', 'theme_lagomorph');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$settings->add($setting);
//Colour 3 - by default light background colour
$name = 'theme_lagomorph/bgcolour3';
$title=get_string('bgcolour3','theme_lagomorph');
$description = get_string('bgcolour3desc', 'theme_lagomorph');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$settings->add($setting);
//Off Black
$name = 'theme_lagomorph/offblack';
$title=get_string('offblackcolour','theme_lagomorph');
$description = get_string('offblackdesc', 'theme_lagomorph');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$settings->add($setting);
//Off White
$name = 'theme_lagomorph/offwhite';
$title=get_string('offwhitecolour','theme_lagomorph');
$description = get_string('offwhitedesc', 'theme_lagomorph');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$settings->add($setting);
}

?>
