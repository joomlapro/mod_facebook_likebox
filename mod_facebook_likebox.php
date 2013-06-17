<?php
/**
 * @package     Facebook_Likebox
 * @subpackage  mod_facebook_likebox
 *
 * @copyright   Copyright (C) 2013 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Initialise variables.
$url             = htmlspecialchars($params->get('url'));
$width           = htmlspecialchars($params->get('width'));
$height          = htmlspecialchars($params->get('height'));
$show_faces      = (int) $params->get('show_faces');
$color_scheme    = (string) $params->get('color_scheme');
$stream          = (int) $params->get('stream');
$show_border     = (int) $params->get('show_border');
$header          = (int) $params->get('header');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// Render the module.
require JModuleHelper::getLayoutPath('mod_facebook_likebox', $params->get('layout', 'default'));
