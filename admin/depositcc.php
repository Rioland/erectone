<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy with cc</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto+Slab:300|Roboto|Allura);

        body {
            background: #EEE;
        }

        body,
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
            padding: 5px;
        }
        
        /*========== My oga css =========== */
            /* The flip box container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
    .flip-box {
        background-color: transparent;
        width: 300px;
        height: 200px;
        border: 1px solid #f1f1f1;
        perspective: 1000px;
        /* Remove this if you don't want the 3D effect */
    }

    /* This container is needed to position the front and back side */
    .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    /* Do an horizontal flip when you move the mouse over the flip box container */
    /* .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);
    } */

    /* Position the front and back side */
    .flip-box-front,
    .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        /* Safari */
        backface-visibility: hidden;
    }

    /* Style the front side */
    .flip-box-front {
        background-color: #bbb;
        color: black;
    }

    /* Style the back side */
    .flip-box-back {
        background-color: dodgerblue;
        color: white;
        transform: rotateY(180deg);
    }
    
    </style>
</head>
<!-- ============ END OF HEAD ============ -->

<body>

    <div class="checkout">
        <h1>Checkout</h1>
        <p>You are about to buy:</p>
        <p><img class="item" title="Image of Cover" src="./dist/img/erect-1-bg.png" />My Neighbour Totoro for £22.99</p>
        <p>You don't have a card saved with us, so you'll need to add one now</p>
        <!-- ============== The Card ==========   -->
        <div class="card">
        <!-- ======== Front Card ========= -->
            <div class="front side">
                <span class="company">
                    CARD
                </span>
                PAYMENT CARD
                <input type="text" placeholder="Card number" class="cc-num" />
                <div>
                    Expires:
                    <input type="text" placeholder="MM/YY" class="cc-exp" />
                </div>
            </div>
            <!-- =========== Back Card =========  -->
            <div class="back side">
                <div class="stripe"></div>
                <div class="signature">
                    <span class="right">
                        CVC: <input type="text" placeholder="000" class="cc-cvc" maxlength="4" />
                    </span>
                    <span class="sig">
                        our lovely customer
                    </span>
                </div>
            </div>
        </div>

        <!-- ==== flip button =====  -->
        <div class="button flip">
          <button type="button" id="ch">Flip over </button> 
        </div>
        <p>Now, where do we send charges to? Billing address... </p>
        <div class="addr">
            <input type="text" placeholder="Address Line 1" />
            <input type="text" placeholder="Address Line 2" />
            <input type="text" placeholder="Town" />
            <input type="text" placeholder="Postcode" />
            <input type="text" placeholder="Country" />
        </div>
        <div class="button">
            Continue
        </div>
        <br/>
    
    </div>

    <!-- ======== END OF HTML =======  -->

    <script>
        $('input.cc-num').payment('formatCardNumber').on("keyup change", function() {
            var type = $.payment.cardType($(this).val());
            if (type == "visa") {
                $(".company").html("VISA");
                $(".card").attr("data-type", "visa");
            } else if (type == "mastercard") {
                $(".company").html("<div></div><div></div>");
                $(".card").attr("data-type", "mastercard");
            } else {
                $(".card").attr("data-type", "unknown");
                $(".company").html("CARD");
            }
        });
        $('input.cc-exp').payment('formatCardExpiry');
        $('input.cc-cvc').payment('formatCardCVC');
        $(".button.flip").click(function() {
            $(".card").toggleClass("flip");
        });
    </script>
    <script>
    $(document).ready(function() {
        let isfront = true;
        $("#ch").click(function() {
            // alert("hi")
            if (isfront === true) {
                $(".card").css("transform", "rotateY(180deg)");
                isfront=! isfront;
            }else if(isfront === false){
                isfront=! isfront;
                $(".card").css("transform","rotateY(360deg)");
            }
            console.log(isfront);

        });
    });
    </script>
</body>

</html>