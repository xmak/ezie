<?php
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: Ep Image Editor extension for eZ Publish
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

class eZIEImageFilterGBlr extends eZIEImageAction {
    static function filterGBlr($src_file, $dst_file, $value = 0) {

        $phpthumb = new phpthumb();
        $phpthumb->setSourceFilename($src_file);

        $phpthumb->setParameter('fltr', 'gblr|' + $value);

        if ($phpthumb->GenerateThumbnail()) {
            if ($phpthumb->RenderToFile($dst_file)) {
                return true;
            } else {
                eZDebug::writeDebug("", "phpthumb debug : " . $phpthumb->debugmessages);
                return false;
            }
        } else {
            eZDebug::writeDebug("", "phpthumb debug : " . $phpthumb->debugmessages);
            return false;
        }
    }
}

?>