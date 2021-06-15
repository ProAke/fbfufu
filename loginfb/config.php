<?php
session_start();
require_once('Facebook/autoload.php');

$FBObject = new \Facebook\Facebook([
    'app_id' => '473774859815441',
    'app_secret' => 'fd3793ea3bea0d5fae07e6c5360a70cf',
    'default_graph_version' => 'v2.10'
]);

$handler = $FBObject->getRedirectLoginHelper();
