<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit||Withdrawal</title>
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <!-- /.  -->
    <link rel="shortcut icon" href="./img/erect-1-bg.png" type="image/x-icon">
    <style>
        /* The container for checkbox */
        .checkr {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            /* font-size: 22px; */
            color: lightskyblue;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .checkr input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .checkr:hover input~.checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .checkr input:checked~.checkmark {
            background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .checkr input:checked~.checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .checkr .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        /* -- /. --  */

        /* Medium devices (landscape tablets, 800px and down) */
        @media only screen and (max-width: 960px) {
            .noticeme {
                font-size: x-small;
            }
        }

        /* my custom style  */
        .pempem {
            margin-left: 1.7rem;
        }

        .suu {
            color: grey;
            font-size: small;
            text-decoration: underline;
        }

        /* /.  */
        /* Style the stepper form */
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 250px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }

        /* /.  */
        /* for modal  */
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* /.  */
        .su1 {
            color: lightskyblue;
        }

        .suce {
            text-align: center;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <!-- navigation bar  -->
    <?php
    require "./dash3nav.php";
    ?>
    <!-- /.  -->

    <div class="container">
        <div class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="p-2 pt-1">
                        <!-- header topic -->
                        <h4 class="mt-4"> Deposit || Withdraw <small> ( or add <a href="../card.php">DEBIT CARD</a> )</small></h4>
                        <div class="row">
                            <!-- left-side pill-Tab-details/container  -->
                            <div class="col-7 col-sm-9">
                                <div class="tab-content" id="vert-tabs-right-tabContent">
                                    <!-- Cryptocurrency deposit tab container -->
                                    <div class="tab-pane fade show active" id="vert-tabs-right-home" role="tabpanel" aria-labelledby="vert-tabs-right-home-tab">
                                        <!-- select amt and scan qr code for deposit  -->
                                        <div class="row">
                                            <!-- 1  -->
                                            <div class="col-sm-6">
                                                <p>Scan QR code</p>
                                                <p>
                                                <div style="width: 500px" id="reader"></div>
                                                </p>
                                                <p><i class="fa-solid fa-qrcode"></i></p>
                                                <p>or send funds to the address below</p>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control rounded-0" value="396MTn4Z7drQZUvyXEgDTVjpXxxGTcSZ59" readonly>
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-info btn-flat">copy</button>
                                                    </span>
                                                </div>
                                                <!-- <p> Recent Transactions </p> -->


                                            </div>
                                            <!-- 2 -->
                                            <div class="col-sm-6">
                                                <!-- Select inputs for amount  -->
                                                <label>Select preferred currency & amount </label>
                                                <div class="input-group">
                                                    <!-- Select your Currency and Amount -->
                                                    <div class="input-group-prepend">
                                                        <select class="custom-select">
                                                            <option>(ETH)<i class="fab fa-ethereum"></i></option>
                                                            <option>(USDT)<i class="fas fa-dollar-sign"></i></option>
                                                            <option>(BTC)<i class="fab fa-btc"></i></option>
                                                            <option>(EUR)<i class="fas fa-euro-sign"></i></option>
                                                            <!-- <option>option 5</option> -->
                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="enter amount...">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                                <!-- /.  -->
                                                <br />
                                                <hr>
                                                <!-- all charges here  -->
                                                <dl class="row">
                                                    <dt class="col-sm-4">Total Amount:</dt>
                                                    <dd class="col-sm-8"><b>$</b> 0.00000</dd>
                                                    <dt class="col-sm-4">Available:</dt>
                                                    <dd class="col-sm-8"><b>$</b> 0.00000</dd>
                                                    <!-- na here transaction notification and warning go dey  -->
                                                    <dd class="col-sm-8 offset-sm-4">
                                                        <a class="su1">
                                                            No fees(0%)
                                                        </a>
                                                    </dd>
                                                    <!-- /.  -->
                                                    <dt class="col-sm-4">In orders</dt>
                                                    <dd class="col-sm-8"><b>BTC</b> 0.0000000</dd>
                                                    <!-- <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
                                                    <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                        fermentum massa justo
                                                        sit amet risus.
                                                    </dd> -->
                                                </dl>
                                                <!-- /.  -->
                                                <hr>
                                                <button type="button" class="btn btn-default btn-block">confirm payment</button>


                                            </div>
                                        </div>
                                        <!-- 1 recent transaction for deposits  -->
                                        <div class="card-header">
                                            <h3 class="card-title">Recent Deposit Transactions</h3>

                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /. 2 deposit transaction table -->
                                        <div class="card-body table-responsive p-0" style="height: 300px;">
                                            <table class="table table-head-fixed text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Crypto.</th>
                                                        <th>Date</th>
                                                        <th>Amount($)</th>
                                                        <th>Status</th>
                                                        <!-- <th>Notes</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td>BTC</td>
                                                        <td>11-7-2014</td>
                                                        <td>474</td>
                                                        <td><span class="tag tag-success">Approved</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>219</td>
                                                        <td>ETH</td>
                                                        <td>11-7-2014</td>
                                                        <td>89</td>
                                                        <td><span class="tag tag-warning">Pending</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>657</td>
                                                        <td>ETH</td>
                                                        <td>11-7-2014</td>
                                                        <td>561</td>
                                                        <td><span class="tag tag-primary">Approved</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>175</td>
                                                        <td>BTC</td>
                                                        <td>11-7-2014</td>
                                                        <td>869</td>
                                                        <td><span class="tag tag-danger">Denied</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>134</td>
                                                        <td>ETH</td>
                                                        <td>11-7-2014</td>
                                                        <td>14</td>
                                                        <td><span class="tag tag-success">Approved</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>494</td>
                                                        <td>BTC</td>
                                                        <td>11-7-2014</td>
                                                        <td>209</td>
                                                        <td><span class="tag tag-warning">Pending</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>832</td>
                                                        <td>BTC</td>
                                                        <td>11-7-2014</td>
                                                        <td>789</td>
                                                        <td><span class="tag tag-primary">Approved</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>982</td>
                                                        <td>ETH</td>
                                                        <td>11-7-2014</td>
                                                        <td>95</td>
                                                        <td><span class="tag tag-danger">Denied</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.   -->
                                    <!-- Crypto Withdrawal Tab container -->
                                    <div class="tab-pane fade" id="vert-tabs-right-profile" role="tabpanel" aria-labelledby="vert-tabs-right-profile-tab">
                                        <!-- select amt and scan qr code for withdrawal  -->
                                        <div class="row">
                                            <!-- 1  -->
                                            <div class="col-sm-6">
                                                <h5>Withdrawal page</h5>
                                                <p>comfirm your wallet address for withdrawal</p>
                                                <!-- <p>or send funds to the address below</p> -->
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control rounded-0" value="396MTn4Z7drQZUvyXEgDTVjpXxxGTcSZ59">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-info btn-flat">update</button>
                                                    </span>
                                                </div>
                                                <!-- <p> Recent Transactions </p> -->
                                            </div>
                                            <!-- 2 -->
                                            <div class="col-sm-6">
                                                <!-- Select inputs for amount  -->
                                                <label>Select preferred currency & amount </label>
                                                <div class="input-group">
                                                    <!-- Select your Currency and Amount -->
                                                    <div class="input-group-prepend">
                                                        <select class="custom-select">
                                                            <option>(USDT)<i class="fas fa-dollar-sign"></i></option>
                                                            <option>(BTC)<i class="fab fa-btc"></i></option>
                                                            <option>(ETH)<i class="fab fa-ethereum"></i></option>
                                                            <option>(EUR)<i class="fas fa-euro-sign"></i></option>
                                                            <!-- <option>option 5</option> -->
                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="enter amount...">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                                <!-- /.  -->
                                                <br />
                                                <hr />
                                                <dl class="row">
                                                    <dt class="col-sm-4">Recommitment (1.2% + $ 2.50) :</dt>
                                                    <dd class="col-sm-8"><b>-$</b> 0.00000</dd>
                                                    <dt class="col-sm-4 suu">Summary:</dt>
                                                    <dd class="col-sm-8 suu"><b>-$</b> 0.00000</dd>
                                                    <br />
                                                    <hr />
                                                    <dt class="col-sm-4">Total Amount:</dt>
                                                    <dd class="col-sm-8"><b>$</b> 0.00000</dd>
                                                    <dt class="col-sm-4">Available:</dt>
                                                    <dd class="col-sm-8"><b>$</b> 0.00000</dd>
                                                    <!-- na here transaction notification and warning go dey  -->
                                                    <dd class="col-sm-8 offset-sm-4">
                                                        <a class="su1">
                                                            No fees(0%)
                                                        </a>

                                                    </dd>
                                                    <!-- /.  -->
                                                    <dt class="col-sm-4">In orders</dt>
                                                    <dd class="col-sm-8"><b>BTC</b> 0.0000000</dd>
                                                    <!-- <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
                                                    <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                        fermentum massa justo
                                                        sit amet risus.
                                                    </dd> -->
                                                </dl>
                                                <hr>
                                                <button type="button" class="btn btn-default btn-block">withdraw</button>

                                            </div>
                                        </div>
                                        <!-- 1 recent transaction for withdrawal  -->
                                        <div class="card-header">
                                            <h3 class="card-title">Recent Withdrawal Transactions</h3>

                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /. 2 WITHDRAWAL transaction table -->
                                        <div class="card-body table-responsive p-0" style="height: 300px;">
                                            <table class="table table-head-fixed text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Crypto.</th>
                                                        <th>Date</th>
                                                        <th>Amount($)</th>
                                                        <th>Status</th>
                                                        <!-- <th>Notes</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td>BTC</td>
                                                        <td>11-7-2014</td>
                                                        <td>474</td>
                                                        <td><span class="tag tag-success">Approved</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>219</td>
                                                        <td>ETH</td>
                                                        <td>11-7-2014</td>
                                                        <td>89</td>
                                                        <td><span class="tag tag-warning">Pending</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>657</td>
                                                        <td>ETH</td>
                                                        <td>11-7-2014</td>
                                                        <td>561</td>
                                                        <td><span class="tag tag-primary">Approved</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>175</td>
                                                        <td>BTC</td>
                                                        <td>11-7-2014</td>
                                                        <td>869</td>
                                                        <td><span class="tag tag-danger">Denied</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>134</td>
                                                        <td>ETH</td>
                                                        <td>11-7-2014</td>
                                                        <td>14</td>
                                                        <td><span class="tag tag-success">Approved</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>494</td>
                                                        <td>BTC</td>
                                                        <td>11-7-2014</td>
                                                        <td>209</td>
                                                        <td><span class="tag tag-warning">Pending</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>832</td>
                                                        <td>BTC</td>
                                                        <td>11-7-2014</td>
                                                        <td>789</td>
                                                        <td><span class="tag tag-primary">Approved</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>982</td>
                                                        <td>ETH</td>
                                                        <td>11-7-2014</td>
                                                        <td>95</td>
                                                        <td><span class="tag tag-danger">Denied</span></td>
                                                        <!-- <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.  -->
                                    <!-- Transfer to bank Tab Container -->
                                    <div class="tab-pane fade" id="vert-tabs-right-messages" role="tabpanel" aria-labelledby="vert-tabs-right-messages-tab">
                                        <!-- select amt for withdrawal  -->
                                        <div class="row">
                                            <!-- 1  -->
                                            <div class="col-sm-6">
                                                <h5>ACH Transfer or Credit/Debit card</h5>
                                                <p>comfirm your Bank details for withdrawal</p>
                                                <!-- <p>or send funds to the address below</p> -->
                                                <p class="pempem">
                                                    <img src="./img/ach-payments.png" alt="ach" width="100" height="auto" />
                                                    <img src="./img/visa or verve logo.png" alt="card pay" width="100" height="auto" />
                                                </p>


                                                <!-- /.card-header -->
                                                <!-- SAVE THIS INTO THE DATABASE  -->
                                                <!-- form start -->
                                                <form>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label>Account Type</label>
                                                            <select class="form-control" required>
                                                                <option>Savings</option>
                                                                <option>Checkings</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Routing number</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter routing number" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Account number</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter account number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Comfirm account number</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Comfirm account number" required>
                                                        </div>

                                                        <label class="checkr"> I Agree with terms and conditions.
                                                            <input type="checkbox" required>
                                                            <span class="checkmark"></span>
                                                        </label>

                                                        <hr />
                                                        <button type="submit" class="btn btn-info">Save</button>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </form>
                                                <!-- /. -->
                                                <!-- <p> Recent Transactions </p> -->
                                            </div>
                                            <!-- 2 -->
                                            <div class="col-sm-6">
                                                <!-- Select inputs for amount  -->
                                                <label>Select preferred currency & amount </label>
                                                <div class="input-group">
                                                    <!-- Select your Currency and Amount -->
                                                    <div class="input-group-prepend">
                                                        <select class="custom-select">
                                                            <option>(USDT)<i class="fas fa-dollar-sign"></i></option>
                                                            <option>(BTC)<i class="fab fa-btc"></i></option>
                                                            <option>(ETH)<i class="fab fa-ethereum"></i></option>
                                                            <option>(EUR)<i class="fas fa-euro-sign"></i></option>
                                                            <!-- <option>option 5</option> -->
                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="enter amount...">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                                <!-- /.  -->
                                                <br />
                                                <hr />
                                                <dl class="row">
                                                    <dt class="col-sm-4">Service charge (1.8% + $ 1.20) :</dt>
                                                    <dd class="col-sm-8"><b>-$</b> 0.00000</dd>
                                                    <dt class="col-sm-4">Commission (1.2% + $ 3.80) :</dt>
                                                    <dd class="col-sm-8"><b>-$</b> 0.00000</dd>
                                                    <dt class="col-sm-4 suu">Summary:</dt>
                                                    <dd class="col-sm-8 suu"><b>-$</b> 0.00000</dd>
                                                    <br />
                                                    <hr />
                                                    <dt class="col-sm-4">Total Amount:</dt>
                                                    <dd class="col-sm-8"><b>$</b> 0.00000</dd>
                                                    <dt class="col-sm-4">Available:</dt>
                                                    <dd class="col-sm-8"><b>$</b> 0.00000</dd>
                                                    <!-- na here transaction notification and warning go dey  -->
                                                    <dd class="col-sm-8 offset-sm-4">
                                                        <!-- Trigger/Open The Modal -->
                                                        <a id="myBtn" class="su1" data-toggle="modal" data-target="#exampleModalScrollable">
                                                            How are fees calculated?
                                                        </a>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title suce" id="exampleModalScrollableTitle">Card Withdrawal and ACH Transfer Fees Breakdown</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Credit Card and ACH withdrawals are the subject to Commission and Service charge.
                                                                            Service charge is a fee charged by erectone for the providing of security measures of using certain payment instrument.
                                                                            Service charge is calculated based on the formula:
                                                                            Service charge = (User amount * Service Percent fee Tariff) + Service Fixed fee
                                                                        </p>
                                                                        <p>
                                                                            Commission is the fee charged by the respective card/bank payment provider for use of the product and calculated as follows:
                                                                            Commission = (User amount - Service charge) - ((User amount - Service charge) -
                                                                            (Processing Fixed fee) / (1 + Processing Percent fee Tariff)
                                                                            Commission is taken after Service Charge is applied.
                                                                        </p>
                                                                        <p>
                                                                            For example, you wish to withdraw 100 USD to your card or bank.
                                                                            Let's imagine that Service Fixed fee makes 2.2 USD, and Service Percent fee Tariff - 1.5%
                                                                            Then Service charge would be: (100*1.5%) + 2.2= 3.7 USD
                                                                        </p>
                                                                        <p>
                                                                            As for payment provider's fees, let's imagine that Processing Fixed fee is 2.5 USD, Processing Percent fee Tariff - 1.7%, and Service charge calculated before - 3.7 USD.
                                                                            Then Commission would be: (100-3.7) - ((100-3.7) - 2.5) / (1+1.7%) = 4.07 USD
                                                                        </p>
                                                                        <p>
                                                                            So 100 - 3.7 - 4.07 = 92.23 USD would make it to your card or bank.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Read</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </dd>
                                                    <!-- /.  -->
                                                    <dt class="col-sm-4">In orders</dt>
                                                    <dd class="col-sm-8"><b>BTC</b> 0.0000000</dd>
                                                    <!-- <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
                                                    <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                        fermentum massa justo
                                                        sit amet risus.
                                                    </dd> -->
                                                </dl>
                                                <hr>
                                                <button type="button" class="btn btn-default btn-block">withdraw</button>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.  -->
                                    <!-- Deposit with Card tab container  -->
                                    <div class="tab-pane fade" id="vert-tabs-right-settings" role="tabpanel" aria-labelledby="vert-tabs-right-settings-tab">

                                        <form id="regForm" action="">

                                            <h1>Payment details:</h1>

                                            <hr />
                                            <!-- One "tab" for each step in the form: -->
                                            <div class="tab">Name on card:
                                                <p><input placeholder="First name..." oninput="this.className = ''"></p>
                                                <p><input placeholder="Last name..." oninput="this.className = ''"></p>
                                            </div>

                                            <div class="tab">Comfirm amount(usd) and Tel No.:
                                                <p><input placeholder="enter amount in usd" oninput="this.className = ''" maxlength="15"></p>
                                                <p><input placeholder="enter Tel-No. to recieve otp code +1(782)-475-5768" oninput="this.className = ''"></p>
                                            </div>

                                            <div class="tab">Expiry date:
                                                <p><input placeholder="dd" oninput="this.className = ''" maxlength="2"></p>
                                                <p><input placeholder="mm" oninput="this.className = ''" maxlength="2"></p>
                                                <p><input placeholder="yyyy" oninput="this.className = ''" maxlength="4"></p>
                                            </div>

                                            <div class="tab">Enter OTP code:
                                                <p><input placeholder="+1(202)-797-4749" value="+1(202)-797-4749" oninput="this.className = ''" readonly></p>
                                                <p><input placeholder="enter otp code sent to your tel. No" oninput="this.className = ''"></p>
                                            </div>

                                            <div style="overflow:auto;">
                                                <div style="float:right;">
                                                    <button type="button" class="btn btn-info" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                    <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                                </div>
                                            </div>

                                            <!-- Circles which indicates the steps of the form: -->
                                            <div style="text-align:center;margin-top:40px;">
                                                <span class="step"></span>
                                                <span class="step"></span>
                                                <span class="step"></span>
                                                <span class="step"></span>
                                            </div>
                                            <!-- /.  -->
                                        </form>
                                        <hr />
                                        <button type="button" class="btn btn-default btn-block">Comfirm payment</button>

                                    </div>
                                    <!-- /.  -->
                                </div>
                            </div>
                            <!-- right-side pill-Tabs  -->
                            <div class="col-5 col-sm-3">
                                <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="vert-tabs-right-home-tab" data-toggle="pill" href="#vert-tabs-right-home" role="tab" aria-controls="vert-tabs-right-home" aria-selected="true">Deposit</a>
                                    <a class="nav-link" id="vert-tabs-right-profile-tab" data-toggle="pill" href="#vert-tabs-right-profile" role="tab" aria-controls="vert-tabs-right-profile" aria-selected="false">Withdrawal</a>
                                    <a class="nav-link" id="vert-tabs-right-messages-tab" data-toggle="pill" href="#vert-tabs-right-messages" role="tab" aria-controls="vert-tabs-right-messages" aria-selected="false">Transfer To Bank or Card</a>
                                    <a class="nav-link" id="vert-tabs-right-settings-tab" data-toggle="pill" href="#vert-tabs-right-settings" role="tab" aria-controls="vert-tabs-right-settings" aria-selected="false">Deposit with Card</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Footer  -->
    <?php
    require "./dashfooter.php";
    ?>
    <!-- /.  -->
    <!-- For multi-form stepper  -->
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>
    <!-- ------For Qr Code-----  -->
    <!-- me i no get this one ooohhh and it does not seem to work -->
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // Handle on success condition with the decoded text or result.
            console.log(`Scan result: ${decodedText}`, decodedResult);
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
    <!-- You can handle scan failure or video failure using failure callback. Here's an example: -->
    <!-- But me i no get this one ooohhh and it does not seem to work -->
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // Handle on success condition with the decoded text or result.
            console.log(`Scan result: ${decodedText}`, decodedResult);
        }

        function onScanError(errorMessage) {
            // handle on error condition, with error message
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 250
            });
    </script>
    <!-- this is for modal/pop up   -->
    <!-- THIS CODE IS NOT NEEDED FOR BOOTSTRAP 4  -->
    <!-- <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->

</body>

</html>