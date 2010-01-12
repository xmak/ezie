<?php
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: eZ Image Editor extension for eZ Publish
// SOFTWARE RELEASE: 0.1 (preview only)
// COPYRIGHT NOTICE: Copyright (C) 2009 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##

$Module = array( 'name' => 'ezie' );

$ViewList = array();

$ViewList['prepare'] = array('script' => 'prepare.php',
                             'params' => array( 'node_id',
                                                'version'),
);

// FILTERS
$ViewList['filter_bw'] = array('script' => 'filter_bw.php');
$ViewList['filter_sepia'] = array('script' => 'filter_sepia.php');
$ViewList['filter_blur'] = array('script' => 'filter_blur.php');
$ViewList['filter_contrast'] = array('script' => 'filter_contrast.php');
$ViewList['filter_brightness'] = array('script' => 'filter_brightness.php');

// TOOLS
$ViewList['tool_flip_hor'] = array('script' => 'tool_flip_hor.php');
$ViewList['tool_flip_ver'] = array('script' => 'tool_flip_ver.php');
$ViewList['tool_rotation'] = array('script' => 'tool_rotation.php');
$ViewList['tool_levels'] = array('script' => 'tool_levels.php');
$ViewList['tool_saturation'] = array('script' => 'tool_saturation.php');
$ViewList['tool_pixelate'] = array('script' => 'tool_pixelate.php');
$ViewList['tool_crop'] = array('script' => 'tool_crop.php');
$ViewList['tool_watermark'] = array('script' => 'tool_watermark.php');

// MENU
$ViewList['no_save_and_quit'] = array('script' => 'no_save_and_quit.php');
$ViewList['save_and_quit'] = array('script' => 'save_and_quit.php');

$FunctionList = array();
?>
