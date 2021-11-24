<?php
// session_start();
require 'app/Apis/database/DataBase.php';
if (DataBase::is_login()) {

    header('location:buysell');
}

$_SESSION["root"]=__DIR__;
require "navbar.php";
require "section2.php";
require "slidecards.php";
require "section3.php";
require "display.php"; 
require "section4.php";
require "section5.php";
require "footerwmain.php";
?>