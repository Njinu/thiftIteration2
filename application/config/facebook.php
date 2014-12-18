<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['facebook']['api_id'] = '359141144257377';
$config['facebook']['app_secret'] = '2b42bae6515b2589b11bec8ee83aae88';
$config['facebook']['scope'] =  'publish_actions';
$config['facebook']['redirect_url'] = 'http://thethriftshop.co.za/index.php';
$config['facebook']['permissions'] = array(
    'email',
    'user_location',
    'user_birthday'
    
);