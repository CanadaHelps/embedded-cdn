<?php
/*
Plugin Name: CanadaHelps Embedded Donation Form
Plugin URI:  https://github.com/CanadaHelps/embedded-cdn
Description: Adds a shortcode to support embedded custom donate now pages. [embedcdn page-id="168"]
Version:     1.0.0
Author:      CanadaHelps.org
Author URI:  https://www.canadahelps.org/
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

define('EMBEDDED_CDN_PLUGIN_VERSION', '1.0.0');

function embeded_cdn_plugin_add_shortcode_cb($atts) {
	$html =  "\n";
	$html .= '<!-- embedded cdn plugin v.'.EMBEDDED_CDN_PLUGIN_VERSION.' '.$atts["id"].' https://github.com/CanadaHelps/embedded-cdn -->';
	$html .= "\n";
	$html .= '<script';
	$html .= ' id="ch_cdn_embed"';
	$html .= ' type="text/javascript"';
	$html .= ' data-cfasync="false"';
	$html .= ' data-page-id="' . $atts["id"] . '"';
	$html .= ' src="https://www.canadahelps.org/services/wa/js/apps/donatenow/embed.min.js"';
	$html .= '></script>';
	$html .= "\n";
	return $html;
}
add_shortcode('embedcdn', 'embeded_cdn_plugin_add_shortcode_cb');
