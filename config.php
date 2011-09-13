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
 * zebra theme config page
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'lagomorph';

$THEME->parents = array('base');

$THEME->parents_exclude_sheets  = array(
    'base'=>array('pagelayout') //We don't want these because we have our own
);

$THEME->sheets = array(
    'pagelayout',       //Derived from Rebase
    'lagomorph_styles',
    '3colblockheaders',
);

$THEME->layouts = array(
    'base' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'standard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'course' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'coursecategory' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'incourse' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('side-pre', 'side-post', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'admin' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'mydashboard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'mypublic' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    ),
    'login' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('langmenu'=>true,'nofooter'=>true, 'noblocks'=>true, 'nonavbar'=>true),
    ),
    'popup' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'noblocks'=>true, 'nonavbar'=>true),
    ),
    'frametop' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'noblocks'=>true),
    ),
    'maintenance' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    ),
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    ),
    'print' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>false, 'noblocks'=>true),
    ),
    'redirect' => array(
        'file' => 'embedded.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true),
    ),
    'report' => array(
        'file' => 'general.php', //Enables overflow for reports
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true),
    )
);

$THEME->enable_dock = false;

$THEME->csspostprocess = 'lagomorph_process_css';
$THEME->javascripts = array('jquery.min');
$THEME->javascripts_footer = array('footers');
