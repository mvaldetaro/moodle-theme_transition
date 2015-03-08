<?php
/**
 * Moodle's Transition theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package    theme_transition
 * @copyright  2015 Magno Valdetaro, magnovaldetaro.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2014111000;
$plugin->requires  = 2014110400;
$plugin->component = 'theme_transition';
$plugin->dependencies = array(
    'theme_bootstrapbase'  => 2014110400,
);
