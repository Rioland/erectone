<?php
include 'app/Apis/database/DataBase.php';
if (DataBase::is_login()) {

    header('location:buysell');
}
// UPDATE `apis` SET `redirect`='https://erect1.org/app/google' WHERE `name`='google'

require 'app/vendor/autoload.php';

$clientID = DataBase::getApi("public", "apis", "google") ?? "818881695167-96f0chbv1pctnltdcf2n8kunrkctqei3.apps.googleusercontent.com";
$clientSecret = DataBase::getApi("private", "apis", "google") ?? "rdquOpaJHjbW3Qkbs-6tM97G";
$redirectUri = DataBase::getApiredirect("google") ?? "https://erect1.org/app/googleapi.php";

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// require "./loginhead.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>

    <link rel="stylesheet" href="./css/style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <!-- ---- style and font Links ---- -->
    <link rel="stylesheet" href="./css/regpagestyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script src="https://kit.fontawesome.com/e20b2f8784.js" crossorigin="anonymous"></script>
    <!-- <title>Homepage</title> -->

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Autoplay CSS Slideshow Demo</title> -->
    <!-- <meta name="description" content="Lets have a look demo of autoplay slideshow which build with purely CSS. There is no javasript require to handle its sliding functions." /> -->
    <!-- <meta name="author" content="Codeconvey" /> -->
    <!--Only for demo purpose - no need to add.-->
    <!-- <link rel="stylesheet" type="text/css" href="./css/slidedemo.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="./css/slidememe.css" /> -->

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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <!--dont toch-->
</head>

<body>
    <div class="wrapper">
        <div class="maincontainer">
            <div class="slidecontainer">
                <div class="w3-display-container">
                    <img src="./images/loginpic.png" class="loginpic" alt="loginPhoto" width="100%" height="100%">
                    <div class="w3-display-middle w3-large">
                        <h1 class="lgcentrapic">Crypto exchange you can trust</h1>
                    </div>
                </div>
            </div>

            <div class="formcontainer">
                <br />
                <div class="formbody">

                    <!-- ---- form container ----  -->
                    <div class="form-main-wrapper">
                        <!-- ----- the mini display head ----  -->
                        <div class="min-display w3-container">
                            <label class="w3-left">
                                <img src="./images/logo.png" alt="logo" width="auto" height="80px">
                            </label>
                            <label class="w3-right">
                                <a class="back" href="home">
                                    <h3 class="back"><i class="fa fa-angle-double-left back1"></i>&nbsp; Back to main
                                    </h3>
                                </a>
                            </label>
                        </div>
                        <!-- ----- the max display head ----  -->
                        <div class="max-display">
                            <a class="back" href="home">
                                <h3 class="back" id="bac"><i class="fa fa-angle-double-left back1"></i>&nbsp; Back to main</h3>
                            </a>
                        </div>
                        <!-- --- the Topic -- -- -->
                        <h1 class="topic"> Sign-In to your account </h1>
                        <!-- ---- sub topic ---  -->
                        <p>
                            Securely buy crypto and start trading on a trusted exchange
                        </p>

                        <br /> <br />
                        <!-- --- Form container -- ---  -->
                        <div class="formwrapper">
                            <form id="login">
                                <!-- ----- ----- Email Address --- ----  -->
                                <input type="hidden" name="action" value="login">
                                <input type="hidden" id="message" name="message" value="
                                <?php

                                if (isset($_SESSION['message']) and !empty($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                    $_SESSION['message'] = "";
                                }
                                ?>
                                ">
                                <div class="group">
                                    <input class="input" type="email" required name="email" id="email" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="w3-padding-large label">Email Address</label>
                                </div>
                                <!--- --- Password selection ----- ------  -->
                                <div class="group">
                                    <input class="input" type="password" name="password" id="password" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="w3-padding-large label">Password</label>
                                </div>
                                <a href="forgetpassword">
                                    <p class="txt"> Forgot your password? </p>
                                </a>
                                <!-- --- submit button ----  -->
                                
                                <p class="btncon"><button id="logbtn" class="w3-button w3-teal w3-round-large w3-hover-light-blue submitbtn" type="submit">
                                        <label id="logbtn" class="logbtn">Sign
                                            In </label>
                                       
                                            <img style="display: none;" id="loading" src="loading/512x512.gif" width="30px" height="30px" />
                                    </button>
                                </p>
                                </p>
                                <br />
                            </form>

                            <div class="loginoption">
                                <div class="left-line"></div>
                                <div class="alter-sign-in">
                                    <h2 style="text-align:center;">or sign in with</h2>
                                </div>
                                <div class="right-line"></div>
                            </div>

                            <div class="loginoptionbar">
                                <div class="w3-padding">
                                    <a href="#" class="fa fa-facebook"></a>
                                </div>

                                <div class="w3-padding">
                                    <a href="<?php echo $client->createAuthUrl(); ?>" class="fa fa-google"></a>
                                </div>
                            </div>
                            <br />
                            <p class="bftxt">We'll never post anything without your permission...</p>
                            <br />
                            <p class="lgtxt"> Don't have an account? <b><a href="signup"> Create account </a></b></p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <br />


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <!-- <script src="myjavacode.js"></script> -->

    <script>
        $(document).ready(function() {
            let mess = $("#message").val().trim();
            if (mess != "") {
                alert(mess);
            }

            $("#login").submit(function(e) {
                e.preventDefault();
                // let form = new FormData();
                let data=$(this).serialize();
                $(".logbtn").hide();
                $("#loading").show();
                $.ajax({
                    type: "post",
                    url: "auth",
                    data: {
                        data:data,
                        action:"login",
                    
                    },
                    dataType: "text",
                    success: function(response) {
                        if (response == true) {
                          window.location.href="client";
                        } else {
                            alert(response);
                            $(".logbtn").show();
                            $("#loading").hide();
                        }
                    }
                });
            });

        });
    </script>
</body>

</html>