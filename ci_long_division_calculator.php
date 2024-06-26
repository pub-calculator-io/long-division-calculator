<?php
/*
Plugin Name: CI Long division calculator
Plugin URI: https://www.calculator.io/long-division-calculator/
Description: Long division calculator performs long division with remainders. Demonstrates solution with steps, and answer as quotient and remainder and as mixed number.
Version: 1.0.0
Author: Long Division Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_long_division_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Long Division Calculator by www.calculator.io";

function display_calcio_ci_long_division_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Long Division Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_long_division_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_long_division_calculator', 'display_calcio_ci_long_division_calculator' );