<?php
require "app/vendor/autoload.php";
require 'app/Apis/database/DataBase.php';
if (!DataBase::is_login()) {

    header('location:login');
}

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

$client = new CoinGeckoClient();
if (isset($_SESSION['currency']) and !empty($_SESSION['currency'])) {
    $currency = $_SESSION['currency'];

} else {
    $currency = 'usd';
    $_SESSION['currency']=$currency;

}

// $data = $client->derivatives()->getExchanges();
// $data = $client->simple()->getPrice('0x,bitcoin', 'usd,rub');
// $data = $client->coins()->getList();
$data = $result = $client->coins()->getMarkets($currency);
$response = $client->getLastResponse();
$headers = $response->getHeaders();

$btc_usd_current_price = $data['0']['current_price'];
$btc_usd_price_change_24h = $data['0']['price_change_24h'];
$btc_usd_total_volume = $data['0']['total_volume'];
$btc_usd_current_price = $data['0']['current_price'];

// print_r ($data['0']);
if(!isset($_SESSION['crypoid']) or empty($_SESSION['crypoid'])){
    $_SESSION['crypoid']=0;
}

// return $btc_usd;

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--============= STYLES ============= -->
    <link rel="stylesheet" href="./css/external.css">
    <link rel="stylesheet" href="./css/buysell.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_2.css">
    <link rel="stylesheet" href="./css/external.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="./css/cardslide.css">
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/firststyle.css">
    <script src="https://kit.fontawesome.com/e20b2f8784.js" crossorigin="anonymous"></script>
    <!--============= END 0F MY STYLE ============== -->
    <!--====================== MY JAVA CDN ================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <!--========================= END OF MY CDN ==================== -->
    <script src="js/jq.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title> Trades </title>
    
    <style>
    .zzz{
        z-index:-1;
    }
    
    a {
       text-decoration:none;
       color:black;
    }
    .tabcontent {
  animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

/* Go from zero to full opacity */
@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
    
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
        .al3 {
            text-align: center;
            justify-content: center;
    }

    .buying {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .buy {
        margin: 10px;
    }

    .sell {
        margin: 10px;
    }

    .mg2 {
        margin: 20px;
    }

    .hover:hover {
        background-color: blue;
        color: white;
        border: 2px solid transparent;
    }

    .maket {
        display: flex;
        justify-content: center;
    }

    .maket .view {
        min-width: 200px;
        width:auto;
        height: 60px;
        border-radius: 5px;
        box-shadow: 2px 2px 5px black;
        background-color: whitesmoke;
        margin-left: 24px;
        text-align: center;
    }

        .maket .view :hover {
            box-shadow: 2px 2px 5px gray;
        }

        .sect {
            display: grid;
            grid-template-columns: 25% 70%;
            height: auto;
        }
    </style>
    <script>
        window.mmDataLayer = window.mmDataLayer || [];

        function mmData(o) {
            mmDataLayer.push(o);
        }
    </script>
     <!--dont toch-->
    <script src="https://www.momentcrm.com/embed"></script>
    <script>
    MomentCRM('init', {
        'teamId': 'erect1',
        'doChat': true,
        'doTracking': true,
    });
    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
     <!--dont toch-->
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="./index.php"><img src="images/logo.png" alt="logo" class="logo"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ml-4">
                    <a class="nav-link active" style="color: white;" aria-current="page" href="buysell">BUY/SELL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" aria-current="page" href="trade">TRADE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" aria-current="page" href="./dashboard/finance.php">FINANCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" aria-current="page" href="card">CARDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" aria-current="page" href="./dashboard/affiliation.php">AFFILIATE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" aria-current="page" href="#">MARGIN TRADING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white;" aria-current="page" href="#">STAKING</a>
                </li>

                </ul>
                <form class="d-flex">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            $id=$_SESSION['userid'];
                            $q="select * from users where id=:id";
                            $stm=DataBase::getConn()->prepare($q);
                            $stm->bindparam(":id",$id);
                            $stm->execute();
                            if($stm->rowCount()>0){
                                $res=$stm->fetch();
                                echo $res->name??$res->email;
                                // echo "oh";
                            }else{
                                echo "NA";
                            }
                            ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item active" href="admin/login">Admin</a></li>
                            <li><a class="dropdown-item" href="#">Account</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout">logout</a></li>
                        </ul>
                    </div>
                    &nbsp;
                    <!--<button type="button" class="btn btn-outline-dark" style="color: white;">Support</button>-->


                    <!-- <button type="button" class="btn btn-outline-dark" style="color: white;">up12345678</button> -->
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
        </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"style="width:100px; margin-right:10px; ">
                        <span style="content: "\0024";">&#36;</span>
 <?php echo (DataBase::getdollaBalance()); ?>
                    </li>
                    <li class="nav-item" style="width:100px; margin-right:10px;">
                        E <?php echo (DataBase::geteroBalance()); ?>
                    </li>
                    <li class="nav-item" style="width:100px; margin-right:10px;" >
                      <img src="https://cryptologos.cc/logos/bitcoin-btc-logo.svg?v=013" height="20px" width="20px"> <?php echo (DataBase::getbtcBalance()); ?>
                    </li>
                    <li class="nav-item" style="width:100px; margin-right:10px;">
                        <img src="https://cryptologos.cc/logos/ethereum-eth-logo.svg?v=013" height="20px" width="20px"><?php echo (DataBase::getethBalance("eth")); ?>
                    </li>


                </ul>
                <!--<form class="d-flex">-->
                <!--    <a href="check">-->
                <!--        <button type="button" class="btn btn-primary">Deposit</button>-->
                <!--    </a>-->
                <!--    &nbsp;-->
                <!--    <button type="button" class="btn btn-primary">Widthraw</button>-->
                <!--</form>-->
            </div>
        </div>
    </nav>
 <?php
        $val=DataBase::isVetify();
        if(empty($val) or $val==false){
          
          ?>
          
          <div class="alert alert-success zzz" role="alert">
    <center>
        Your email has not been verified click<button type="button" class="btn btn-link v" id="v">verify now</button>to verify your email address.
    </center>
   
</div>
          
          <?php
          
        }
        
        ?>


    <div class="alert alert-light al3" role="alert">

        <div class="maket" style="overflow-x: scroll; width:auto;">
        <?php
        // $_SESSION['crypoid']
            $cid=$_SESSION['crypoid'];
            // echo $id;
            for ($i = 0; $i < 6; $i++) {
                if($i==2){
                   continue; 
                }
                        $_SESSION['image']=$data[$cid]['image'];
                         $_SESSION['symbol'] =strtoupper($data[$cid]['symbol']);
                        $_SESSION['curr'] =strtoupper($currency);
                        $_SESSION['lp']=$data[$cid]['current_price'];
                        $_SESSION['dc']=$data[$cid]['price_change_24h'];
                        $_SESSION['vl']=$data[$cid]['current_price'];
                
                ?>
            <button class="view" id="<?php echo $i ?>">
             <img src="<?php echo $data[$i]['image']; ?>" height="25px" width="25px">
                <strong><?php echo strtoupper($data[$i]['symbol']); ?> /<?php echo strtoupper($currency); ?></strong><br>
                <b>$
                    <?php echo $data[$i]['current_price']; ?>
                </b>

            </button>
            <?php
            }
            ?>
           
        </div>

    </div>
    <div class="alert alert-light" role="alert">
        <form class="row g-3">
            <div class="col-auto">
                <label for="search" class="visually-show mt-2">Market</label>
            </div>
            <!-- <label for="staticSearch" class="sm-2 col-form-label">Market</label> -->
            <div class="col-auto">

                <input type="text" class="form-control" id="search" placeholder="search...">

            </div>
            <div class="col-auto">
                <h3> <label style="padding:10px;" ><img src="<?php echo $_SESSION['image']; ?>" height="30px" width="30px"> </label>   <?php echo $_SESSION['symbol'] ?>/<?php echo $_SESSION['curr'] ?></h3>
            </div>
            &nbsp;

            &nbsp;
            <div class="col-auto">
                <label for="">Last price: <?php echo $_SESSION['lp'] ?></label>
            </div>
            &nbsp;
            &nbsp;

            <div class="col-auto">
                <label for="">Daily change: <?php echo $_SESSION['dc'] ?></label>
            </div>
            &nbsp;
            &nbsp;

            <div class="col-auto">
                <label for="">Today's open:<?php echo $btc_usd_current_price; ?></label>
            </div>
            &nbsp;
            &nbsp;

            <div class="col-auto">
                <label for="">24h volume: <?php echo $_SESSION['vl']; ?> </label>

            </div>
                     <input type="hidden" id="message" name="message" value="
                                                    <?php 
                                                    
                                                     if(isset($_SESSION['message']) and !empty($_SESSION['message'])){
                                                        echo $_SESSION['message'];
                                                        $_SESSION['message']="";
                                                    }
                                                    ?>
                                                    ">

        </form>
    </div>
<!--butttt-->
<div class="ms-5 me-5">

<div class="card mb-3" style="width: auto; border:none;">
  <div class="row g-0">
    <div class="col-md-3">
     
     <div style="display:flex;">
                <button id="usd" class="btn btn-info ms-1" type="button">USD</button>
                <button id="eur" class="btn btn-warning ms-1" type="button">EUR</button>
                <button id="aud" type="button" class="btn btn-primary ms-1">AUD</button>
                <button id="gbp" type="button" class="btn btn-secondary ms-1">GBP</button>
    </div>
    
    </div>
    
    <div class="col-md-9">
      <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>
      </div>
    </div>
  </div>
</div>


<!--nooioi-->




<div class="alert alert-light " role="alert">



<div class="card mb-3" style="width: auto; border:none;">
  <div class="row g-0">
  
  
    <div class="col-md-3" style="overflow-y: scroll; height:700px; me-1">
    
       
       <?php
require "coinchat/coinleft.php";
?>
    </div>
    <div class="col-md-9 ps-3">
     <?php
require "coinchat/coinchat.php";
?>


<!-- Tab links -->
<div class="tab me-2">
 <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Coin Live </button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Converter</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Chat</button>
</div>

<!-- Tab content -->
<div id="London" class="tabcontent">
  
    <div class="d-flex justify-content-start">
        
        <div class="me-1" style="width: 400px; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;"><div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=859&pref_coin_id=1505" width="400" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Riotech</div></div>
  <div class="me-1" style="width: 400px; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;"><div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=145&pref_coin_id=1505" width="400" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Riotech</div></div>     
    
    <div style="width: 250px; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;"><div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=280&pref_coin_id=1505" width="250" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Riotech</div></div>
    </div>
    
</div>

<div id="Paris" class="tabcontent">
  <div style="width: 400px; height:335px; background-color: #232937; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;margin: 0;width: 400px;padding:1px;padding: 0px; margin: 0px;"><div style="height:315px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=converter&theme=dark" width="400" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Riotech</div></div>
    
  
</div>

<div id="Tokyo" class="tabcontent">
 <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1506&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Riotech</div></div>
</div>


  
      
    </div>
   
  
  </div>
  
  
</div>

    </div>
<!--footer her-->
<?php

// require "footer.php";
require "footerwmain.php";

?>

<!--============ END OF FOOTER =============== -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

<script src="js/crypto.js">

</script>
<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
    $(document).ready(function () {
        
               let mess= $("#message").val().trim();
           if(mess!=""){
                alert(mess); 
           }
           
        var url = "app/Apis/api.php";
        
         $(".v").click(function (param) {
                   $.ajax({
                            type: "POST",
                            url: url,
                            data: {
                                action:"sendverify"
                            },
                            // dataType: "dataType",
                            success: function (response) {
                                
                               if(response==true){
                                  window.location.replace("verify")
                               }else{
                                   alert(response);
                               }
                            }
                        });
                  
                  });
        $(".view").click(function (param) {
        let id=$(this).attr("id");
        <!--console.log(id);-->
      
         $.ajax({
                type: "post",
                url: url,
                data: {
                    action: "crypto",
                    crypid: id
                },

                success: function (response) {
                    window.location.reload();
                }
            });
        
      
           
        })
        
        $("#usd").click(function (param) {
            $.ajax({
                type: "post",
                url: url,
                data: {
                    action: "currency",
                    currency: "usd"
                },

                success: function (response) {
                    window.location.reload();
                }
            });
        })
        $("#aud").click(function (param) {
            $.ajax({
                type: "post",
                url: url,
                data: {
                    action: "currency",
                    currency: "aud"
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        })
        $("#gbp").click(function (param) {
            $.ajax({
                type: "post",
                url: url,
                data: {
                    action: "currency",
                    currency: "gbp"
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        })
        $("#eur").click(function (param) {
            $.ajax({
                type: "post",
                url: url,
                data: {
                    action: "currency",
                    currency: "eur"
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        })
    });
    
    
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>

</body>

</html>