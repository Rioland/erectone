<?php 
require "app/Apis/database/DataBase.php";
if (!DataBase::is_login()) {

    header('location:login');
}
function TestBlockHTML($price)
{
    
    ob_start();?>
<html>

<body>
    <strong>Transfer: </strong><label><?php
    $pr=DataBase::USDtoBTC($price);
echo $pr . " :BITCOIN";
    ?></label>
    <br><br>
    <strong>TO: </strong><label><?php

    $respons = DataBase:: generateAddress();
    echo $respons;
    DataBase::createInvoice($pr,$respons );

    echo("<br>");
   
      echo("<br>");
    ?> Address</label>

    <br>

    <img src="<?php echo DataBase::generateQR($respons); ?>" alt="">
    <br>
    <p> You Have:( <label style="font-weight: bold;" id="demo"></label> ) : To make payment</p>
    <br>
    <label id="mess">


        <?php  
         $status= DataBase::getStatus();
        if ($status == 0) {
    $status = "<span style='color: orangered' id='status'>PENDING</span>";
    $info = "<p>You payment has been received. Invoice will be marked paid on two blockchain confirmations.</p>";
} else if ($status == 1) {
    $status = "<span style='color: orangered' id='status'>PENDING</span>";
    $info = "<p>You payment has been received. Invoice will be marked paid on two blockchain confirmations.</p>";
} else if ($status == 2) {
    $status = "<span style='color: green' id='status'>PAID</span>";
} else if ($status == -1) {
    $status = "<span style='color: red' id='status'>UNPAID</span>";
} else if ($status == -2) {
    $status = "<span style='color: red' id='status'>Too little paid, please pay the rest.</span>";
} else {
    $status = "<span style='color: red' id='status'>Error, expired</span>";
}

        
        echo $status;
        ?>
    </label>
    <br>
    <button id="verify" type="button">Confirm</button>
    <script src="js/jq.js"></script>
    <script>
    // Set the date we're counting down to
    $(document).ready(function() {
        const url = 'app/Apis/api.php'
        $("#verify").click(function() {
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    action: "comfirmbtc",
                },
                // dataType: "dataType",
                success: function(response) {
                    console.log(response);
                    if (response == 1) {
                        $("#mess").html(
                            "<span style='color: orangered' id='status'>PENDING</span> <br> <p>You payment has been received. Invoice will be marked paid on two blockchain confirmations.</p>"
                        );
                    } else if (response == -1) {
                        $("#mess").html(
                            "<span style='color: red' id='status'>UNPAID</span> "
                        );
                    } else if (response == 0) {
                        $("#mess").html(
                            "<span style='color: orangered' id='status'>PENDING</span> <br> <p>You payment has been received. Invoice will be marked paid on two blockchain confirmations.</p>"
                        );

                    } else if (response == 2) {
                        $("#mess").html(
                            "<span style='color: orangered' id='status'>PAID</span>"
                        );
                        window.location.replace="buysell";
                    } else if (response == -2) {
                        $("#mess").html(
                            "<span style='color: red' id='status'>Too little paid, please pay the rest.</span>"
                        );
                    } else {
                        $("#mess").html(
                            "<span style='color: red' id='status'>Error, expired</span>"
                        );
                    }
                }
            });
        })
    });
    var countDownDate = new Date(new Date().getTime() + 11 * 60000);

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Expired"
            window.location.href = "check";
        }
    }, 1000);
    </script>
</body>

</html>
<?php
return ob_get_clean();
}?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_REQUEST['price'];
    if (!empty($price)) {

        echo TestBlockHTML($price);

    } else {
        echo "<h1>invalid amount</h1>";
    }

}
?>