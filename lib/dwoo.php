<?php
/*
 * This file is part of Trevorchan.
 *
 * Trevorchan is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Trevorchan is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License along with
 * Trevorchan; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * +------------------------------------------------------------------------------+
 * Smarty engine initialization and configuration
 * +------------------------------------------------------------------------------+
 */
//require_once KU_ROOTDIR . 'lib/smarty/Smarty.class.php';
 
// Include the main Dwoo class and the Smarty Adapter class
include 'lib/dwoo/Dwoo.compiled.php'; 
//include 'lib/dwoo/Dwoo/Smarty/Adapter.php';
 
//$smarty = new Dwoo_Smarty_Adapter();
$dwoo = new Dwoo();
$dwoo_data = new Dwoo_Data();


?>