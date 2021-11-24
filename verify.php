<?php
require "app/vendor/autoload.php";
require 'app/Apis/database/DataBase.php';
if (!DataBase::is_login()) {

    header('location:login');
}
 

$mode=$_SESSION['VMODE'];

?>

<html>
    <head>
        <title>
            
            <?php
            if($mode=="v"){
                echo("Verifiy");
            }else if($mode=="rs"){
               
            }
            ?>
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!--$_SESSION['VMODE']-->
 <style>
        .card {
    width: 400px;
    padding: 10px;
    border-radius: 20px;
    background: #fff;
    border: none;
    height: 400px;
    position: relative
}

.container {
    height: 100vh
}

body {
    background: #eee
}

.mobile-text {
    color: #989696b8;
    font-size: 15px
}

.form-control {
    margin-right: 12px;
    width:50px;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ff8880;
    outline: 0;
    /*width:50px;*/
    box-shadow: none
}

.cursor {
    cursor: pointer
}
    </style>
    </head>
    
    <body>
        
        <div class="d-flex justify-content-center align-items-center container">
    <div class="card py-5 px-3">
        <h5 class="m-0">
            <?php
            if($mode=="v"){
                echo("verification code");
            }else if($mode=="rs"){
               
            }
            ?>
          
        
        </h5>
          <?php
          $email=DataBase::getEmail();
            if($mode=="v"){
                echo('<span class="mobile-text">Enter the code we just send on your Email Address. <b class="text-danger">'. $email.'</b>');
            }else if($mode=="rs"){
               
            }
            ?>
        <!--updateverify-->
        </span>
        <form action="updateverify" method="POST">
            
        
        <div class="d-flex flex-row mt-5">
        <input type="text" required name="v1" class="form-control" autofocus="">
        <input type="text" required name="v2" class="form-control">
        <input type="text" required name="v3" class="form-control">
        <input type="text" required name="v4" class="form-control">
        <input type="text" required  name="v5" class="form-control">
        <input type="text" required  name="v6" class="form-control">
        <input type="hidden" value="updateverify"  name="action" class="form-control">
        
        </div>
        <br>
        <button type="submit" class="btn btn-success">Verify</button>
        <div class="text-center mt-5"><span class="d-block mobile-text">Don't receive the code?</span><span class="font-weight-bold text-danger cursor">Resend</span></div>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
         $(document).ready(function () {
    //   alert("hi");
            });
    </script>
    </body>
</html>