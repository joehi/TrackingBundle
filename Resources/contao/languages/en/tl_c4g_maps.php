<?php
/*
 * This file is part of con4gis,
 * the gis-kit for Contao CMS.
 *
 * @package    con4gis
 * @version    6
 * @author     con4gis contributors (see "authors.txt")
 * @license    LGPL-3.0-or-later
 * @copyright  Küstenschmiede GmbH Software & Design
 * @link       https://www.con4gis.org
 */

$GLOBALS['TL_LANG']['tl_c4g_maps']['tDontShowIfEmpty'] = array('Hide if empty', 'Hide this layer in the Starboard if does not contain any data.');
$GLOBALS['TL_LANG']['tl_c4g_maps']['memberVisibility'] = array('Shown data', 'Defines which trackingdata should be shown on this layer.');
$GLOBALS['TL_LANG']['tl_c4g_maps']['specialMembers'] = array('Chosen members', 'Members whose trackingdata should be shown on this layer.');
$GLOBALS['TL_LANG']['tl_c4g_maps']['specialGroups'] = array('Chosen groups', 'Groups whose member-trackingdata should be shown on this layer.');
$GLOBALS['TL_LANG']['tl_c4g_maps']['useDatabaseStatus'] = array('Override member-defined visibility', 'Overrides the member-defined visibility of their trackingdata. (Not recommended!)');
$GLOBALS['TL_LANG']['tl_c4g_maps']['databaseStatus'] = array('Override with following value', 'The value that should be used instead of the member-defined value.');


$GLOBALS['TL_LANG']['tl_c4g_maps']['references']['tPois'] = 'Tracking – POIs';
$GLOBALS['TL_LANG']['tl_c4g_maps']['references']['tTracks'] = 'Tracking – Tracks';
$GLOBALS['TL_LANG']['tl_c4g_maps']['references']['tLive'] = 'Tracking – Live-View';
$GLOBALS['TL_LANG']['tl_c4g_maps']['references']['tBoxes'] = 'Tracking – Telematic';

$GLOBALS['TL_LANG']['tl_c4g_maps']['references']['memberVisibility'] = array
(
  'own' => 'Own data',
  'ownGroups' => 'Data of members of own groups',
  'specialGroups' => 'Members of chosen groups',
  'specialMember' => 'Chosen members',
  'all' => 'Every member'
);

$GLOBALS['TL_LANG']['tl_c4g_maps']['references']['databaseStatus'] = array
(
  'privat' => 'Private',
  'membergroups' => 'Special membergroups',
  'owngroups' => 'Members of own groups',
  'public' => 'Everyone'
);