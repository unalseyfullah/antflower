<?php

define("WP_INSTALLING",true);
define("DONOTCACHEDB", true);
define("DONOTCACHEOBJECT", true);
define('DISABLE_WP_CRON', 'true');

include_once 'wp-load.php';


//clear memcached/cache in w3tc
if ( function_exists('w3tc_dbcache_flush') ) {
    w3tc_dbcache_flush();
}

if ( function_exists('w3tc_dbcache_flush') ) {
    w3tc_objectcache_flush();
}



$token =   get_option('a2_auth_token',null);
$expires = get_option('a2_auth_token_expires',0);
delete_option('a2_auth_token');
delete_option('a2_auth_token_expires');

$users = get_users("role=administrator&orderby=ID");
$user = array_shift($users);

if($token != null && ( $token == $_POST['token'] )){
    if($expires > time()){
        wp_set_auth_cookie($user->ID);
        unlink(__FILE__);
        wp_redirect(admin_url());
    }
    else{
        unlink(__FILE__);
        wp_die("Not Authorized. This login token has expired.");
    }
}
else{
    unlink(__FILE__);
    wp_die("Not Authorized. This token is not valid. {$_POST['token']}");
}