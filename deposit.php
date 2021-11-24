<?php

include_once "./app/Apis/database/DataBase.php";


if (DataBase::is_login() == false) {
    header("location:login");

}

//Match secret for security
if(isset($_GET['txid']) and isset($_GET['value']) and isset($_GET['status']) and isset($_GET['addr'])and isset($_GET['secret'])){
    $secret = 'Mabcdas122olkdd';
    $value = $_GET['value'];

$txid = $_GET['txid'];

$status = $_GET['status'];
$addr = $_GET['addr'];
@$serct = $_GET['secret'];

    if ($serct == $secret and !empty($serct) and !empty($txid) and !empty($value) and !empty($value)) {
        DataBase::btc_tras_update1($status, $value, $txid, $addr);
        DataBase::updateInvoiceStatus($status, $addr);
        header("location:buysell");
    }
}
$uuid = @$_GET['uuid'];

$status = @$_GET['status'];
$addr = @$_GET['addr'];

if (!empty($uuid) and !empty($status) and !empty($addr)) {

    $apikey = DataBase::getApi("private", "apis", "block") ?: "2KgicsP3iWhaWBNjtgSmNRK7zMWYT4yeHvDQUKfINqU";

    $respons = DataBase::get_coin_Payment_detail($apikey, $uuid);
    $respons = json_decode($respons, true);
    DataBase::btc_tras_update($respons);
    header("location:buysell");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erect1 || Deposit</title>
    <script src="js/jq.js"></script>
     <link rel="shortcut icon" href="./images/logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    .build {
        display: flex;
        width: 100%;
        height: 100%;

    }

    .build .left {
        width: 60%;
        height: 700px;
        background-color: whitesmoke;
        position: relative;
        background-position: left;
        background-attachment: fixed;
    }

    .build .right {
        width: 40%;
        height: 100%;
        background-color: blueviolet;
        position: relative;
        background-position: right;
        background-attachment: fixed;
        height: 700px;
    }

    .clip {
        background-color: white;
        width: 400px;
        height: auto;
        margin: 20px;
        padding: 16px;
        display: flex;
    }

    .s1 {
        width: 80px;
        height: 50px;
        background-color: blueviolet;
        padding: 10px;


    }

    .s2 {
        /* margin-left: 15px; */
        width: 300px;
        height: 50px;
        border: 0.5px solid blueviolet;
        /* padding-left: 10px;
            padding-right: 10px; */
        padding: 9px;

    }

    .pay {
        width: 200px;
        height: 50px;

        text-align: center;
        display: flex;
        justify-content: center;
        margin-left: 100px;
        padding-top: 15px;

        background-color: white;
        border-radius: 10px;
        color: blueviolet;
    }

    .pay:hover {
        border: 0.5px solid white;
        background-color: transparent;
        color: white;
    }
    </style>
</head>

<body>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><label id="tt"></label></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="modal-body" class="modal-body">

                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>
    <div class="build">
        <div class="left">
            <br>
            <!--        <form action="app/strip/create-checkout-session.php" method="POST">-->
            <!--            <input type="hidden" required id="currency" value="1000" name="amount">-->
            <!--            <input type="hidden" required id="action" value="hshshjdj" name="txt">-->
            <!--            <button type="submit">Checkout</button>-->
            <!--        </form>-->
        </div>
        <div class="right">
            <form method="post">
                <input type="hidden" required id="currency" value="1" name="currency">
                <input type="hidden" required id="action" value="" name="action">
                <div class="clip">
                    <div class="s1">

                        <select id="crr" style="
                        border:none;
                        outline:none;
                        background-color: blueviolet;
                          margin-top: 5px;
                           font-size: large;


                        ">
                            <option value="1">USD</option>
                            <option value="2">BTC</option>
                            <option value="3">ETH</option>
                            <option value="4">EURO</option>
                        </select>

                    </div>
                    <div class="s2">
                        <input style="
                        border:none;
                        outline:none;
                         text-align: right;
                        width: 250px;
                         height: 35px;
                          font-size: large;

                        " type="tel" name="amt" required id="amt">
                    </div>
                    <div class="s1">

                    </div>

                </div>

                <button id="mainpay" type="button" class="pay">

                    <img style="display: none;" id="loading" src="images/loading.webp" width="30px" height="30px" />
                    <label id="paybtn"> PAY</label>
                </button>

            </form>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://www.blockonomics.co/js/pay_button.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
    $(document).ready(function() {
        let url = "app/Apis/api.php";
        let myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
            keyboard: true
        })

        function payWithPaystack(amt) {

            let key = "<?php
                echo DataBase::getApiPublic("paystack");
                ?>";
            let gmail = "<?php
            echo DataBase::getValue("email", "users")
            ?>";
            let handler = PaystackPop.setup({
                key: key.trim() ??
                    "pk_test_99d69caec3f4f9bcf55f1f96a7c89a5653e2d80c", // Replace with your public key
                email: gmail.trim(),
                amount: amt * 100,
                currency: "USD",
                ref: '' + Math.floor(Math.random() * 1000000000 +
                    1
                ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function() {
                    alert('Window closed.')
                },
                callback: function(response) {
                    let url = "app/Apis/api.php";
                    // console.log(response)
                    if (response['message'] === "Approved" || response['status'] === "success") {
                        $.ajax({
                            url: url,
                            method: 'post',
                            data: {
                                action: "paystack",
                                response: response,
                                amt: amt
                            },
                            success: function(httpresponse) {
                                console.log(httpresponse)
                                alert(httpresponse);

                                // the transaction status is in response.data.status
                            },
                        });
                    } else {
                        alert(response['message']);
                    }

                },
            });
            handler.openIframe();
        }
// payment
        $("#mainpay").click(function() {
            let amt = $("#amt").val(),
                currency = $("#currency").val();
            switch (currency) {
                case "1":
                    if (amt.trim().length > 0 && currency.trim().length > 0) {
                        payWithPaystack(amt.trim());
                    } else {
                        alert("Amount and Payment Type is Required")

                    }
                    break;
                case "2":
                    if (amt.trim().length > 0 && currency.trim().length > 0) {
                        $("#loading").css("display", "block")
                        $("#paybtn").css("display", "none")
                        $.ajax({
                            type: "POST",
                            url: "text.php",
                            dataType: 'html',
                            data: {
                                price: amt.trim()
                            },
                            success: function(response) {
                                console.log(response);
                                $("#loading").css("display", "none")
                                $("#paybtn").css("display", "block")
                                $("#modal-body").html(response);
                                $("#tt").html("Erect1 Bitcoin Payment")
                                myModal.show();

                            }
                        });


                    } else {
                        alert("Amount and Payment Type is Required");

                    }
                    break
            }

        });
        $("#crr").change(function(e) {
            // e.preventDefault();
            let curr = $(this).val();

            $("#currency").val("" + curr);

        });

    });
    </script>
</body>

</html>