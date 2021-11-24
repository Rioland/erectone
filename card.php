<?php
require 'app/Apis/database/DataBase.php';

if (!DataBase::is_login()) {

    header('location:login');
}
$qry = "SELECT * FROM `cards` WHERE `id`=:id";
$stm =DataBase::getConn()->prepare($qry);
$id = $_SESSION["userid"];
$stm->execute(array(":id" => $id));
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title> Buy || Sell </title>
    <link rel="stylesheet" href="./css/firststyle.css">
    <link rel="stylesheet" href="./css/buysell.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_2.css">
    <link rel="stylesheet" href="./css/external.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <script src="./js/jquery-3.5.1.js"> </script> -->
    <!-- ------------------------- new --------------------  -->
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./images/logo.png">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- --- ---- MY STYLESHEETS -- -----  -->
    <link rel="stylesheet" href="./css/cardslide.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script src="https://kit.fontawesome.com/e20b2f8784.js" crossorigin="anonymous"></script>
    <script async="async" src="https://static.mobilemonkey.com/js/mm_d8ad3f03-2416-4b1e-ba73-25a730d24877-57224585.js">
    </script>
    <script async="async" src="https://static.mobilemonkey.com/js/mm_d8ad3f03-2416-4b1e-ba73-25a730d24877-57224585.js">
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
    </script>

    <style>
    
       input {
            font-family: "Roboto";
            font-size: 1em;
        }

        h1,
        .credit {
            font-family: "Roboto Slab";
        }

        .credit {
            text-align: center;
            font-size: 0.7em;
            padding: 10px;
        }

        .item {
            width: 60px;
            vertical-align: middle;
            margin-right: 15px;
        }

        .card .company {
            box-sizing: border-box;
            float: right;
        }

        .card {
            position: relative;
            perspective: 600px;
        }

        .card,
        .card .side {
            width: 350px;
            height: 200px;
        }

        .card .side {
            border-radius: 5px 5px;
            transition: all 0.4s linear;
            background: #333;
            color: #FFF;
            box-sizing: border-box;
            transform-style: preserve-3d;
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
        }

        .card .front {
            padding: 10px;
            transform: rotateX(0deg) rotateY(0deg);
        }

        .card.flip .front {
            transform: rotateY(180deg);
        }

        .card .cc-num {
            width: 100%;
            padding-top: 100px;
        }

        .card input {
            outline: none;
            border: 0px solid;
            background: none;
            color: #FFF;
        }

        .card[data-type="visa"] input::-webkit-input-placeholder,
        .card[data-type="mastercard"] input::-webkit-input-placeholder {
            color: #DDD;
        }

        .card[data-type="visa"] input::-moz-placeholder,
        .card[data-type="mastercard"] input::-moz-placeholder {
            color: #DDD;
        }

        .card[data-type="visa"] input:-ms-placeholder,
        .card[data-type="mastercard"] input:-ms-placeholder {
            color: #DDD;
        }

        .card[data-type="visa"] .company {
            color: rgba(255, 255, 255, 0.9);
            font-style: italic;
            text-shadow: 0px 0px 3px rgba(17, 123, 173, 0.9);
        }

        .card[data-type="visa"] .side {
            background: #1db1cf;
        }

        .card[data-type="mastercard"] .side {
            background: #4d86ce;
        }

        .card[data-type="mastercard"] .company div {
            float: left;
            width: 15px;
            height: 15px;
            border-radius: 10px;
            background: rgba(239, 209, 57, 0.8);
        }

        .card[data-type="mastercard"] .company div:first-child {
            background: rgba(223, 40, 40, 0.8);
            margin-right: -5px;
        }

        .signature {
            background: #DDD;
            color: #000;
            padding: 10px;
        }

        .right {
            float: right;
        }

        .sig {
            font-family: "Allura";
        }

        .signature input.cc-cvc {
            color: #000;
            width: 40px;
        }

        .stripe {
            margin: 20px 0;
            height: 40px;
            background: #000;
        }

        .card .back {
            padding-top: 15px;
            transform: rotateY(-180deg);
        }

        .card.flip .back {
            transform: rotateX(0deg) rotateY(0deg);
        }

        .button {
            background: #0099CC;
            padding: 4px;
            color: #FFF;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 5px 5px;
        }

        .button:hover {
            background: #33B5E5;
        }

        .checkout {
            margin: 0 auto;
            width: 350px;
        }

        .addr input {
            width: 100%;
            outline: none;
            border: 0px solid;
            padding: 5px;}
    /*================END OF EX CODE ============ */
    
    a {
        text-decoration: none;
        color: black;
    }



    .atmcard {
        width: 430px;
        height: 250px;
        background-color: white;
        margin-top: 24px;
        margin-bottom: 24px;
        margin-left: 24px;
        border-radius: 20px;
        padding: 22px;
    }

    .contain {
        display: flex;
        justify-content: center;
    }

    .atmlogo {
        /* display: flex;
        justify-content: right; */
        width: 100px;
        float: right;
        text-align: right;

    }

    .input {
        border: 0.4px solid black;
        height: 35px;
        padding-left: 10px;
        padding-right: 10px;
    }

    .card-number {
        border: none;
        height: 30px;
        width: 200px;
        background-color: transparent;
        border: none;
    }

    .ccv {
        border: none;
        height: 30px;
        width: 50px;
        margin-left: 100px;
        background-color: transparent;
    }

    .ccv:focus {
        outline: none;
    }

    .expinput {
        border: 0.4px solid black;
        height: 35px;
        width: 100px;
        padding-left: 10px;
        padding-right: 10px;
        /* margin-top: 22px; */
    }

    .expinput input {
        height: 30px;
        width: 70px;
        border: none;
        font-size: 50;
        background-color: transparent;
        /* margin: 5px; */
    }

    .expinput input:focus {
        outline: none;
        border: none;

    }

    .input input:focus {
        outline: none;
        border: none;
    }

    .card-input {
        margin-top: 70px;
    }

    .allcards {
        padding: 24px;
    }

    body {
        background-color: wheat;
    }
    .addcent{
        max-width:600px;
        height:auto;
        margin:auto;
        padding:8px;
    }
    
    .zzz{
        z-index:-1;
    }
    </style>

</head>



<body>


    <!-- ------ ---- The Main nav Bar ------ ------ ---  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="./index.php">
                <img src="images/logo.png" alt="logo" class="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li id="bs" class="nav-item ml-4">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="#">BUY/SELL</a>
                    </li>
                    <li id="tr" class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="trade">TRADE</a>
                    </li>
                    <li id="fin" class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="./dashboard/finance.php">FINANCE</a>
                    </li>
                    <li id="card" class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="./card.php">CARDS</a>
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
                            <li><a class="dropdown-item" href="./dashboard/securitysettings.php">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout">logout</a></li>
                        </ul>
                    </div>
                    &nbsp;
                    <!--<button type="button" class="btn btn-outline-dark" style="color: white;">Support</button>-->
<input type="hidden" id="message" name="message" value="
                                                    <?php 
                                                    
                                                     if(isset($_SESSION['message']) and !empty($_SESSION['message'])){
                                                        echo $_SESSION['message'];
                                                        $_SESSION['message']="";
                                                    }
                                                    ?>
                                                    ">

                    <!-- <button type="button" class="btn btn-outline-dark" style="color: white;">up12345678</button> -->
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
            </div>
        </div>
    </nav>

<!--alert-->
 <?php
        $val=DataBase::isVetify();
        if(empty($val) or $val==false){
          
          ?>
          
          <div class="alert alert-success zzz" role="alert">
    <center>
        Your email has not been verified, please click<button type="button" class="btn btn-link v" id="v">verify now</button> to verify your email address.
    </center>
   
</div>
          
          <?php
          
        }
        
        ?>
    <!-- ------ The 2nd nav Bar ----- -- -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light zzz">
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
                <!--    <a href="./dashboard/deposit.php">-->
                <!--        <button type="button" class="btn btn-primary">Deposit</button>-->
                <!--    </a>-->
                <!--    &nbsp;-->
                <!--    <a href="./dashboard/deposit.php">-->
                <!--    <button type="button" class="btn btn-primary">Widthraw</button>-->
                <!--    </a>-->
                <!--</form>-->
            </div>
        </div>
    </nav>

    <!-- cadinf -->
    <form action="addcard" method="post">
        <div class="contain">
            <div class="atmcard">
                <div class="atmlogo">
                    <div style="display: flex; justify-content: right; ">
                        <img src="images/mastercard.svg" alt="" height="50px" width="50px">
                        <img src="images/visa.svg" alt="" height="50px" width="50px">
                    </div>
                </div>
                <div class="card-input">
                    <label for="">card number</label><br>
                    <div class="input">
                        <input required type="text" autocomplete="on" class="card-number" name="cnumber" id=""
                            placeholder="xxxx xxxx xxxx xxxx">
                        <input name="chrome-autofill-dummy1" style='display:none' disabled />
                        <input name="chrome-autofill-dummy2" style='display:none' disabled />

                        <input type="text" required autocomplete="on" class="ccv" name="ccv" id="" placeholder="ccv">
                    </div>
                    <!-- <small for="">please enter your payment card</small><br> -->
                    <div class="atmlogo">
                        <br>
                        <label for="">expired date</label><br>
                        <div class="expinput">
                            <input type="text" required name="expdate" id="" autocomplete="on"
                                x-autocompletetype="cc-number" placeholder="MM/YY">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <br/>
        <div class="addcent">
          <p>Now, where do we send charges to? Billing address... </p>
        <div class="addr">
            <input type="text" name="add1" required placeholder="Address Line 1" />
            <input type="text" name="add2" placeholder="Address Line 2" />
            <input type="text"  name="town" required placeholder="Town" />
             <input type="text"  name="ssn" required placeholder="enter SSN" maxlenght="12"/>
             <input type="tel"  name="phone" required id="phone" name="phone" placeholder="Telphone no. 123-456-7890" />
            <input type="text"  name="postcode" required placeholder="Postcode" />
            <input type="text"  name="country" required placeholder="Country" />
            <!--pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
        </div>
        <!--<div class="button" >-->
        <!--    Continue-->
        <!--</div>-->
        </div>
        <br/>
        <center><button type="submit" name="addcardbtn" class="btn btn-primary button">Save Card</button>
        </center>
        <br>
    </form>
    <!-- show cards -->
    <div class="allcards">
        <?php
if ($stm->rowCount() > 0) {
    while ($data = $stm->fetch()) {
        ?>
        <img src="images/mastercard.svg" alt="" height="30px" width="30px">
        <img src="images/visa.svg" alt="" height="30px" width="30px">

        &nbsp;
        &nbsp;
        <strong><label for=""> <?php echo substr($data->card_number,0,4); ?> **** **** ****</label></strong>
        <?php
        echo("<br>");
}
}
?>
    </div>
  <?php
  require "footerwmain.php";
  ?>
<script src="js/jq.js"></script>
<script>
        let mess= $("#message").val().trim();
           if(mess!=""){
                alert(mess); 
           }
</script>
</body>

</html>