<?php

use DataBase;
use Facebook\FacebookRequest;
use Facebook\Helpers\FacebookRedirectLoginHelper;
session_start();

require 'vendor/autoload.php';
require "Apis/database/Config/Config.php";

require "./Apis/database/DataBase.php";

$db = new DataBase($myconn);
$url = getApi("redirect", "apis", "facebook");
$secrit=getApi("private", "apis", "facebook");
$appid=getApi("public", "apis", "facebook");
$fb = new \Facebook\Facebook([
    'app_id' => $appid, //Replace {your-app-id} with your app ID
    'app_secret' => $secrit, //Replace {your-app-secret} with your app secret
    'graph_api_version' => 'v5.0',
]);