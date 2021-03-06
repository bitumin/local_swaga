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
 * Setting page for local swaga plugin
 *
 * @package    local
 * @subpackage swaga
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    // Add plugin settings page
    $settings = new admin_settingpage('local_swaga', new lang_string('pluginname', 'local_swaga'));
    $ADMIN->add('localplugins', $settings);

    $label = new lang_string('settingenable_label', 'local_swaga');
    $description = new lang_string('settingenable_description', 'local_swaga');
    $default = 0;
    $settings->add(new admin_setting_configcheckbox('local_swaga/enabled', $label, $description, $default));

    $label = new lang_string('settingtext_label', 'local_swaga');
    $description = new lang_string('settingtext_description', 'local_swaga');
    $default = new lang_string('settingtext_default', 'local_swaga');
    $settings->add(new admin_setting_configtext('local_swaga/text', $label, $description, $default, PARAM_TEXT));
}
