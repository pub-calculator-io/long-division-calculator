<?php
/*
Plugin Name: Long Division Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/long-division-calculator/
Description: Easily solve math problems with our step-by-step Long Division Calculator. Find quotients, remainders, decimals, and mixed numbers instantly. Try it free!
Version: 1.0.0
Author: www.calculator.io / Long Division Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_long_division_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Long Division Calculator by www.calculator.io";

function calcio_long_division_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Long Division Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_long_division_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_long_division_calculator', 'calcio_long_division_calculator_shortcode' );