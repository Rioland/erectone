<?php
include 'app/Apis/database/DataBase.php';
if (DataBase::is_login()==false) {

    header('location:buysell');
}
$USER=$_SESSION["USER"];
$connection=DataBase::getConn();
$dollar=DataBase::getdollaBalance();
$eth=DataBase::getethBalance();
$euro=DataBase::geteroBalance();
$btc=DataBase::getbtcBalance();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title> Buy || Sell </title>
    <link rel="stylesheet" href="./css/firststyle.css">
    <link rel="stylesheet" href="./css/buysell.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_2.css">
    <link rel="stylesheet" href="./css/external.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.css">
    <!-- <script src="./js/jquery-3.5.1.js"> </script> -->
    <!-- ------------------------- new --------------------  -->
    <!-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
    <link rel="shortcut icon" href="./images/logo.png">
    <!-- 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <!-- /.  -->
    <!-- --- ---- MY STYLESHEETS -- -----  -->
    <link rel="stylesheet" href="./css/cardslide.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://www.w3schools.com/lib/w3.js"></script> -->
    <script src="https://kit.fontawesome.com/e20b2f8784.js" crossorigin="anonymous"></script>
    <style>
        .buy,
        .sell {
            min-width: 12rem;
        }

        .buy,
        .sell {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-around;
            align-items: center;
        }

        .btxt,
        .stxt {
            padding: 1rem;
            font-weight: bold;
        }

        .cards-container>div {
            margin-bottom: 2em;
        }
    </style>
</head>
<?php
require "./dash3nav.php";
?>

<!-- ----- --- - The Body - ---- -----  -->
<?php
if(isset($_SESSION['router']) and !empty($_SESSION['router'])){
    require $_SESSION['router'];
}else{
    require "./pages/buy_sell.php";
}
?>
<!-- /. end of body  -->

<!-- ----- --- - footer - ---- -----  -->
<?php
require "./footerwmain.php";
require "./dashfooter.php";
?>