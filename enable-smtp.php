<?php
/*
Plugin Name:  Enable SMTP
Plugin URI:   https://8bitstudio.ch
Description:  Saves field group and field settings as .json files in /app/json folder
Version:      1.0.0
Author:       Mathieu Zwygart
Author URI:   https://zwygart.net
License:      MIT License
*/

use function Env\env;

function my_phpmailer_example( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = env('WP_SMTP_HOST');
    $phpmailer->Username = env('WP_SMTP_USERNAME');
    $phpmailer->Password = env('WP_SMTP_PASSWORD');
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = env('WP_SMTP_PORT');
}
add_action( 'phpmailer_init', 'my_phpmailer_example' );