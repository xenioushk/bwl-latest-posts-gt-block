<?php

/**
 * Plugin Name:     BWL Latest Posts Gutenberg Block
 * Description:       A Gutenberg block that has been designed to display the most recent WordPress posts. Arrange posts by date and title, and filter them according to the categories. It also displays or hides the post's featured image.
 * Requires at least: 6.0
 * Requires PHP:      7.0
 * Version:           	1.0.0
 * Author:            Mahbub Alam Khan
 * License:           GPL-2.0-or-later
 * License URI:      https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     bwllpgtb
 *
 * @package           bwllpgtb
 */

// security check.
defined('ABSPATH') or die("Unauthorized access");

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
	require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define("BLPGTB_DIR", __DIR__);

use Xenioushk\Bwllpgtb\Base\Activate;
use Xenioushk\Bwllpgtb\Base\Deactivate;


function bwllpgtbActivePlugin()
{
	Activate::activate();
}

register_activation_hook(__FILE__, 'bwllpgtbActivePlugin');

function bwllpgtbDeactivePlugin()
{
	Deactivate::deactivate();
}
register_activation_hook(__FILE__, 'bwllpgtbDeactivePlugin');

if (class_exists('Xenioushk\\Bwllpgtb\\Init')) {

	Xenioushk\Bwllpgtb\Init::registerServices();
}
