<?php
/*
Plugin Name: Long Division Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/long-division-calculator/
Description: Long division calculator performs long division with remainders. Demonstrates solution with steps, and answer as quotient and remainder and as mixed number.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_long_division_calculator
*/

if (!function_exists('add_shortcode')) return "No direct call for Long Division Calculator by Calculator.iO";

function display_ci_long_division_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/long-division-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Long Division Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_long_division_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_long_division_calculator', 'display_ci_long_division_calculator' );