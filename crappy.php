<?php
/**
 * Plugin Name:     Crappy
 * Plugin URI:      https://github.com/pixolin/crappy
 * Description:     Adds error to test debugging. USE AT OWN RISC. DON'T USE ON PRODUCTIVE SITES!
 * Author:          Bego Mario Garde <pixolin@pixolin.de
 * Author URI:      https://pixolin.de
 * Text Domain:     crappy
 * Domain Path:     /languages
 * Version:         0.1.0
 * License:         GPLv2
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * @package         Crappy
 */

// Copyright (C) 2018  Bego Mario Garde <pixolin@pixolin.de>

// This program is free software; you can redistribute it and/or modify it
// under the terms of the GNU General Public License as published by the Free
// Software Foundation; either version 2 of the License, or (at your option)
// any later version.

// This program is distributed in the hope that it will be useful, but WITHOUT
// ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
// FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
// more details.

// You should have received a copy of the GNU General Public License along
// with this program; if not, write to the Free Software Foundation, Inc.,
// 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define( 'PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_DEBUG', false );
require_once PLUGIN_DIR . 'inc/class-crap.php';

// Choose your issues
$fail = [
	//'js',           // broken JavaScript
	//'wpcontent',    // broken Content Filter
	//'php',          // breaks front end
	// 'backend',       // breaks backend, too
	// 'memory',
];

$plugin = new Crap( $fail );
