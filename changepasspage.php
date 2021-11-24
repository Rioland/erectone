<?php

// require "app/Apis/database/Database.php";

// if (!isset($_GET['token']) or empty($_GET['token'])) {
//     header("location:login");
// } else {
//     $token = $_GET['token'];
//     $now = date("Y-m-d H:m:s");
//     $val = DataBase::get_time($token);
//     if (empty($val) or strtotime($val) < strtotime($now)) {
//         $_SESSION['message'] = "<script>alert('Token access expired');</script>";
//         header("location:login");

//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>
    <script>
    window.mmDataLayer = window.mmDataLayer || [];

    function mmData(o) {
        mmDataLayer.push(o);
    }
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="js/jq.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <!-- ---- style and font Links ---- -->
    <link rel="stylesheet" href="./css/regpagestyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="./jquery-3.5.1.min.js"></script>
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

</head>

<body>
    <div class="wrapper">
        <div class="maincontainer">
            <div class="slidecontainer">
                <img src="images/safe.png" alt="reset my password" width="100%" height="100%">
            </div>

            <div class="formcontainer">
                <br />
              
                <div class="formbody">

                    <!-- ---- form container ----  -->
                    <div class="form-main-wrapper">
                        <!-- ----- the mini display head ----  -->
                        <div class="min-display w3-container">
                            <label class="w3-left">
                                <img src="images/logo.png" alt="logo" width="auto" height="80px">
                            </label>
                            <label class="w3-right">
                                <a class="back" href="login">
                                    <h3 class="back"><i class="fa fa-angle-double-left back1"></i>&nbsp; Sign In</h3>
                                </a>
                            </label>
                        </div>
                        <!-- ----- the max display head ----  -->
                        <div class="max-display">
                            <a class="back" href="login">
                                <h3 class="back"><i class="fa fa-angle-double-left back1"></i>&nbsp; Sign In</h3>
                            </a>
                        </div>
                        <!-- --- the Topic -- -- -->
                        <h1 class="topic">CHANGE PASSWORD </h1>
                        <!-- ---- sub topic ---  -->
                        <h2 class="sub-topic">
                            To change your password, enter the new password and comfirm password you use to sign in to
                            ERECTONE account
                        </h2>

                        <br /> <br />
                        <!--updatepassword-->
                        <!-- --- Form container -- ---  -->
                        <div class="formwrapper">
                            <form id="formreset" action="updatepassword" method="post">
                                <!--dont toch this-->
                                   <input type="hidden" id="message"  value="
                                <?php 
                                
                                 if(isset($_SESSION['message']) and !empty($_SESSION['message'])){
                                    echo $_SESSION['message'];
                                    $_SESSION['message']="";
                                }
                                ?>
                                ">
                                       
                                <input type="hidden" name="action" value="newpassword">
                                <!--and here-->
                                <!--cmc code-->
                         
                                
                                
                                <div class="group">
                                    <input class="input" name="token" type="password" required id="cmc">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="w3-padding-large label">Code</label>
                                </div>
                                <!-- ----- ----- new password  --- ----  -->
                                <div class="group">
                                    <input class="input" type="password"name="password" required id="newpassword">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="w3-padding-large label">new password</label>
                                </div>
                                <!-- ----- ----- Email Address --- ----  -->
                                <div class="group">
                                    <input class="input" type="password" name="cnewpassword" required id="cnewpassword">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="w3-padding-large label">comfirm password</label>
                                </div>

                                <!-- --- submit button ----  -->
                                <p class="btncon"><button id="getnepass"
                                        class="w3-button w3-teal w3-round-large w3-hover-light-blue submitbtn"
                                        type="submit">
                                        <label class="getnepass" id="getnepass"> Submit </label>
                                        <img style="display: none;" id="loadinggr" src="images/loading.webp"
                                            width="30px" height="30px" />


                                    </button>
                                </p>
                                <br />
                            </form>


                            <br />

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <br />

 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

 <script>
       $(document).ready(function(e){
            let mess= $("#message").val().trim();
           if(mess!=""){
                alert(mess); 
           }
           $("#formreset").submit(function(e){
               
              let pass= $("#newpassword").val().trim();
              let cpass= $("#cnewpassword").val().trim();
              if(pass==cpass){
                //   return true;
              }else{
                  e.preventDefault();
                  alert("Password not match");
              }
               
           });
       });
 </script>
    
</body>

</html>