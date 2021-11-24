<?php

include_once "./Apis/database/DataBase.php";
include_once "./Apis/database/Config/Config.php";

$uuid = $_GET['uuid'];

$status = $_GET['status'];
$addr = $_GET['addr'];

if (empty($uuid) and empty($status) || empty($addr)) {
    echo "<h1>Error in transaction</h1> $uuid $status $addr";
    exit();
}
if (DataBase::is_login() == false) {
   header("location:../buysell");

}

$apikey=DataBase::getApi("private","apis","block")?:"2KgicsP3iWhaWBNjtgSmNRK7zMWYT4yeHvDQUKfINqU";

$respons = DataBase::get_coin_Payment_detail($apikey, $uuid);
$respons = json_decode($respons, true);
DataBase::btc_tras_update($respons);
header("location:../buysell");