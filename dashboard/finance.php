<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance</title>
    <link rel="shortcut icon" href="./img/erect-1-bg.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleforfinance.css">
    <link rel="stylesheet" href="https://cdn.cryptofonts.com/1.3.1/cryptofont.css">
</head>

<body>
    <?php
    require "./dashnav.php";
    ?>

    <div class="container">
        <div class=" col-md-12">
            <div class="card card-primary card-outline card-outline-tabs">
                <!-- click tabs for tabpills  -->
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Balance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-transactions" role="tab" aria-controls="custom-tabs-four-transactions" aria-selected="false">Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-payments" role="tab" aria-controls="custom-tabs-four-payment" aria-selected="false">Payments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-archived-orders" role="tab" aria-controls="custom-tabs-four-archived-orders" aria-selected="false">Archived Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-margin-trading" role="tab" aria-controls="custom-tabs-four-margin-trading" aria-selected="false">Margin trading</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-limitandcommissions" role="tab" aria-controls="custom-tabs-four-limitandcommissions" aria-selected="false">Limit and Commissions</a>
                        </li>
                    </ul>
                </div>
                <!-- /.  -->

                <!-- display tabs for Tabpills  -->
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <!-- Balance  -->
                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <p class="rere"> Redeem ErectOne voucher code here</p>
                            <!-- the coupou and details side  -->
                            <div class="coupou-con">
                                <span>
                                    Enter your ErectOne unique voucher code into the field.
                                </span>
                                <br />
                                <span>
                                    The funds will be automatically added to the respective part of your balance without any fees.
                                </span>
                                <!-- coupou code input side  -->
                                <form action="#" method="post">
                                    <div class="coupou-box">
                                        <div class="cb1">
                                            <img src="./img/certificate.png" alt="certify" />
                                        </div>
                                        <div class="cb2">
                                            <input id="coupoucode" class="form-control form-control-lg" type="text" placeholder="paste your voucher code here...">
                                        </div>
                                        <div class="cb3">
                                            <button type="submit" class="btn btn-block btn-primary"> Redeem </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- /.  -->
                            </div> <!-- /.  -->
                            <br />
                            <!-- Fiat Balance  -->
                            <div style="overflow-x: auto;">
                                <p class="rere">Fiat Balance</p>
                                <table>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Balance</th>
                                        <th>In orders</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <!-- usd balance -->
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>USD:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td>Jill</td>
                                        <td>Smith</td>
                                        <td>70</td>
                                        <td>570</td>
                                        <td>560</td>
                                    </tr> -->
                                </table>
                            </div>
                            <br />
                            <!-- crypto balance  -->
                            <div style="overflow-x: auto;">
                                <p class="rere">Crypto Balance</p>
                                <table>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Balance</th>
                                        <th>In orders</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <!-- BTC balance -->
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-btc"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>BTC:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- BCH balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-bch"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>BCH:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- ETH balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-eth"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>ETH:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- LTC balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-ltc"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>LTC:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- DOGE balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-doge"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>DOGE:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- XLM balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-xlm"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>XLM:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- GUSD balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-gusd"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>GUSD:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- ADA balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-ada"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>ADA:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- USDC balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-usdc"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>USDC:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- BAT balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-bat"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>BAT:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- XTZ balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-xtz"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>XTZ:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- MATIC balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-matic"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>MATIC:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- LINK balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-link"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>LINK:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- ZRX balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-zrx"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>ZRX:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- UNI balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-uni"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>UNI:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- WBTC balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-wbtc"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>WBTC:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block">Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block ">Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- GHS balance -->
                                    <tr>
                                        <td>
                                            <div class="coinrow">
                                                <div class="coin1">
                                                    <i class="cf cf-ghs"></i>
                                                </div>
                                                <div class="coin2">
                                                    <em>GHS:</em>
                                                </div>
                                            </div>
                                        </td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>0.000000</td>
                                        <td>
                                            <div class="btnrow">
                                                <!-- deposit btn is being disabled  -->
                                                <div class="deposit">
                                                    <button type="button" class="btn btn-block" disabled>Deposit</button>
                                                </div>
                                                <!-- /.  -->
                                                <!-- withdraw btn is being disabled  -->
                                                <div class="withdraw">
                                                    <button type="button" class="btn btn-block" disabled>Withdrawal</button>
                                                </div>
                                                <!-- /. -->
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur. -->
                        </div>
                        <!-- /.  -->

                        <!-- Transaction side  -->
                        <div class="tab-pane fade" id="custom-tabs-four-transactions" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <nav class="navbar navbar-expand navbar-white navbar-light">
                                                <!-- Left navbar links -->
                                                <ul class="navbar-nav">
                                                    <li class="nav-item d-sm-inline-block btn btn-xs">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded2">
                                                                        <option>All cryptocurrencies</option>
                                                                        <option>USD <i class="fas fa-dollar-sign"></i></option>
                                                                        <option>GHS </option>
                                                                        <option>BTC <i class="cf cf-btc"></i></option>
                                                                        <option>BCH <i class="cf cf-bch"></i></option>
                                                                        <option>BTG <i class="cf cf-btg"></i></option>
                                                                        <option>ETH <i class="cf cf-eth"></i></option>
                                                                        <option>LTC <i class="cf cf-ltc"></i></option>
                                                                        <option>NMC <i class="cf cf-nmc"></i></option>
                                                                        <option>DOGE <i class="cf cf-doge"></i></option>
                                                                        <option>IXC <i class="cf cf-ixc"></i></option>
                                                                        <option>DRK <i class="cf cf-drk"></i></option>
                                                                        <option>FTC <i class="cf cf-ftc"></i></option>
                                                                        <option>AUR <i class="cf cf-aur"></i></option>
                                                                        <option>DGB <i class="cf cf-dgb"></i></option>
                                                                        <option>USDE <i class="cf cf-usde"></i></option>
                                                                        <option>POT <i class="cf cf-pot"></i></option>
                                                                        <option>ANC <i class="cf cf-anc"></i></option>
                                                                        <option>MEC <i class="cf cf-mec"></i></option>
                                                                        <option>WDC <i class="cf cf-wdc"></i></option>
                                                                        <option>DVC <i class="cf cf-dvc"></i></option>
                                                                        <option>XLM <i class="cf cf-xlm"></i></option>
                                                                        <option>BSV <i class="cf cf-bsv"></i></option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item d-sm-inline-block btn btn-xs">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded2">
                                                                        <option>All transaction types</option>
                                                                        <option>Deposit</option>
                                                                        <option>Withdrawal</option>
                                                                        <option>Trade</option>
                                                                        <option>Margin Trade</option>
                                                                        <option>Refferral</option>
                                                                        <option>Mining</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item d-sm-inline-block btn btn-xs">
                                                        <div class="margin">
                                                            <!-- Date and time range -->
                                                            <div class="form-group">

                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control float-right" id="reservationtime">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <!-- Right navbar links -->
                                                <ul class="navbar-nav ml-auto">
                                                    <!-- Navbar Search -->
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-widget="navbar-search" data-target="#navbar-search2" href="#" role="button">
                                                            <i class="fas fa-search"></i>
                                                        </a>
                                                        <div class="navbar-search-block" id="navbar-search2">
                                                            <form class="form-inline">
                                                                <div class="input-group input-group-sm">
                                                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-navbar" type="submit">
                                                                            <i class="fas fa-search"></i>
                                                                        </button>
                                                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                                                            <i class="fas fa-times"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </nav>
                                            <!-- table  -->
                                            <div style="overflow-x: auto;">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">Tx #ID</th>
                                                            <th><i class="far fa-clock"></i> Date</th>
                                                            <th>Amount</th>
                                                            <th>Balance</th>
                                                            <th>Type</th>
                                                            <th>Fee (%) </th>
                                                            <th style="width: 40px">Comment</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>152</td>
                                                            <td>11/13/2021 11:59 PM</td>
                                                            <td>
                                                                <span class="badge bg-lightblue">$60,050</span>
                                                            </td>
                                                            <td>$350,212</td>
                                                            <td>BTC</td>
                                                            <td>0.0324</td>
                                                            <td>successfull transaction</td>
                                                        </tr>
                                                        <tr>
                                                            <td>153</td>
                                                            <td>11/14/2021 01:59 PM</td>
                                                            <td>
                                                                <span class="badge bg-lightblue">$7,119</span>

                                                            </td>
                                                            <td>$342,212</td>
                                                            <td>ETH</td>
                                                            <td>0.0314</td>
                                                            <td>successfull transaction</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="card-footer clearfix">
                                                    <div class="float-left pagination m-1 pagination-sm">
                                                        <button type="button" class="btn btn-block bg-gradient-success btn-xs">Download CSV</button>

                                                    </div>
                                                    <ul class="pagination pagination-sm m-0 float-right">
                                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                        <!-- /.  -->

                        <!-- Payment side  -->
                        <div class="tab-pane fade" id="custom-tabs-four-payments" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- 1 -->
                                            <nav class="navbar navbar-expand navbar-white navbar-light">
                                                <!-- Left navbar links -->
                                                <ul class="navbar-nav">

                                                    <!-- Date and time range -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <button type="button" class="btn btn-default float-right btn-xs" id="daterange-btn">
                                                                        <i class="far fa-calendar-alt"></i> Date range picker
                                                                        <i class="fas fa-caret-down"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- All directions  -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded2">
                                                                        <option>All directions</option>
                                                                        <option>Deposit</option>
                                                                        <option>Withdrawal</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- All currencies -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded2">
                                                                        <option>All cryptocurrencies</option>
                                                                        <option>USD <i class="fas fa-dollar-sign"></i></option>
                                                                        <option>GHS </option>
                                                                        <option>BTC <i class="cf cf-btc"></i></option>
                                                                        <option>BCH <i class="cf cf-bch"></i></option>
                                                                        <option>BTG <i class="cf cf-btg"></i></option>
                                                                        <option>ETH <i class="cf cf-eth"></i></option>
                                                                        <option>LTC <i class="cf cf-ltc"></i></option>
                                                                        <option>NMC <i class="cf cf-nmc"></i></option>
                                                                        <option>DOGE <i class="cf cf-doge"></i></option>
                                                                        <option>IXC <i class="cf cf-ixc"></i></option>
                                                                        <option>DRK <i class="cf cf-drk"></i></option>
                                                                        <option>FTC <i class="cf cf-ftc"></i></option>
                                                                        <option>AUR <i class="cf cf-aur"></i></option>
                                                                        <option>DGB <i class="cf cf-dgb"></i></option>
                                                                        <option>USDE <i class="cf cf-usde"></i></option>
                                                                        <option>POT <i class="cf cf-pot"></i></option>
                                                                        <option>ANC <i class="cf cf-anc"></i></option>
                                                                        <option>MEC <i class="cf cf-mec"></i></option>
                                                                        <option>WDC <i class="cf cf-wdc"></i></option>
                                                                        <option>DVC <i class="cf cf-dvc"></i></option>
                                                                        <option>XLM <i class="cf cf-xlm"></i></option>
                                                                        <option>BSV <i class="cf cf-bsv"></i></option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- All Payment Instruments  -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded2">
                                                                        <option>All payment instruments</option>
                                                                        <option>Card</option>
                                                                        <option>ACH transfers</option>
                                                                        <option>wallet withdrawal</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- All Statuses  -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded2">
                                                                        <option value="allstatses">All Statuses</option>
                                                                        <option value="paymentverification">Payment verification</option>
                                                                        <option>Unable to process</option>
                                                                        <option>Rejected</option>
                                                                        <option>On Balance</option>
                                                                        <option>Pending</option>
                                                                        <option>Rebooked</option>
                                                                        <option>Mismatched</option>
                                                                        <option value="processing">processing</option>
                                                                        <option value="sent">Sent</option>
                                                                        <option value="returned">Returned</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>

                                                <!-- Right navbar links -->
                                                <!-- /.  -->
                                            </nav>
                                            <!-- 2  -->
                                            <!-- table  -->
                                            <div style="overflow-x: auto;">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px"><i class="far fa-clock"></i> Date created</th>
                                                            <th>Date updated</th>
                                                            <th>Transaction #ID</th>
                                                            <th>Direction</th>
                                                            <th>Currency</th>
                                                            <th>Amount</th>
                                                            <th>Payment instrument</th>
                                                            <th>Status</th>
                                                            <th style="width: 40px">Details</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>11/13/2021 11:59 PM </td>
                                                            <td>11/13/2021 12:09 PM</td>
                                                            <td>152</td>
                                                            <td>Deposit</td>
                                                            <td>USD</td>
                                                            <td>
                                                                <span class="badge bg-lightblue">$40,150</span>
                                                            </td>
                                                            <td>ACH transfer</td>
                                                            <td> Processing </td>
                                                            <td>We are still processing this payment request. Please wait...</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11/16/2021 01:59 PM</td>
                                                            <td>11/19/2021 12:59 AM</td>
                                                            <td>1565</td>
                                                            <td>Deposit</td>
                                                            <td>USD</td>
                                                            <td>
                                                                <span class="badge bg-lightblue">$60,050</span>
                                                            </td>
                                                            <td>ACH transfer</td>
                                                            <td> Unable to process </td>
                                                            <td>We are unable to process this payment request. Please check account balance or card balance and payment limits.</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer clearfix">
                                                <div class="float-left pagination m-1 pagination-sm">
                                                    <button type="button" class="btn btn-block bg-gradient-success btn-xs">Download CSV</button>

                                                </div>
                                                <ul class="pagination pagination-sm m-0 float-right">
                                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- /.  -->

                        <!-- ARCHIVED Orders  -->
                        <div class="tab-pane fade" id="custom-tabs-four-archived-orders" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <nav class="navbar navbar-expand navbar-white navbar-light">
                                                <!-- Left navbar links -->
                                                <ul class="navbar-nav">
                                                    <!-- All pairs  -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded3">
                                                                        <option>All pairs</option>
                                                                        <option> BTC/USD </option>
                                                                        <option>ETH/USD </option>
                                                                        <option>BCH/USD </option>
                                                                        <option>LTC/USD </option>
                                                                        <option>XLM/USD </option>
                                                                        <option>ADA/USD </option>
                                                                        <option> BAT/USD </option>
                                                                        <option> XTZ/USD </option>
                                                                        <option> ETH/BTC </option>
                                                                        <option>BCH/USD </option>
                                                                        <option>LTC/BTC</option>
                                                                        <option>GUSD/USD </option>
                                                                        <option value="maticusd">MATIC/USD</option>
                                                                        <option value="linkusd">LINK/USD</option>
                                                                        <option value="zrxusd">ZRX/USD</option>
                                                                        <option>USDC/USD </option>
                                                                        <option>UNI/USD </option>
                                                                        <option>WBTC/BTC </option>
                                                                        <option>WBTC/BTC </option>
                                                                        <option>DOGE/USD </option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- date and time  -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <!-- Date and time range -->
                                                            <div class="form-group">

                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control float-right" id="reservationtime2">
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- All statuses  -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded2">
                                                                        <option>All statuses</option>
                                                                        <option>Executed</option>
                                                                        <option>Fully Executed</option>
                                                                        <option>Partially executed</option>
                                                                        <option>Not executed</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <!-- Right navbar links -->
                                                <ul class="navbar-nav ml-auto">
                                                    <!-- Navbar Search -->
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-widget="navbar-search" data-target="#navbar-search2" href="#" role="button">
                                                            <i class="fas fa-search"></i>
                                                        </a>
                                                        <div class="navbar-search-block" id="navbar-search2">
                                                            <form class="form-inline">
                                                                <div class="input-group input-group-sm">
                                                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-navbar" type="submit">
                                                                            <i class="fas fa-search"></i>
                                                                        </button>
                                                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                                                            <i class="fas fa-times"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </nav>

                                            <!-- table  -->
                                            <div style="overflow-x: auto;">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">Tx #ID</th>
                                                            <th>Pair</th>
                                                            <th>Type</th>
                                                            <th>Amount</th>
                                                            <th>Price</th>
                                                            <th>Filled</th>
                                                            <th>Avg. Execution price</th>
                                                            <th>Fee (%) </th>
                                                            <th>Balance change</th>
                                                            <th>Status</th>
                                                            <th style="width: 40px"><i class="far fa-clock"></i> Close Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>152</td>
                                                            <td>BTC/USD</td>
                                                            <td>Deposit</td>
                                                            <td>
                                                                <span class="badge bg-lightblue">$60,050</span>
                                                            </td>
                                                            <td>$61,812</td>
                                                            <td></td>
                                                            <td>$51,390</td>
                                                            <td>0.0324</td>
                                                            <td>$105,212</td>
                                                            <td>successful</td>
                                                            <td>11/13/2021 11:59 PM</td>
                                                        </tr>

                                                        <tr>
                                                            <td>1513</td>
                                                            <td>ETH/USD</td>
                                                            <td>withdrawal</td>
                                                            <td>
                                                                <span class="badge bg-lightblue">$50,150</span>
                                                            </td>
                                                            <td>$31,812</td>
                                                            <td></td>
                                                            <td>$51,390</td>
                                                            <td>0.02354</td>
                                                            <td>$63,212</td>
                                                            <td>successful</td>
                                                            <td>10/13/2021 11:59 PM</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="card-footer clearfix">
                                                <div class="float-left pagination m-1 pagination-sm">
                                                    <button type="button" class="btn btn-block bg-gradient-success btn-xs">Download CSV</button>
                                                </div>
                                                <ul class="pagination pagination-sm m-0 float-right">
                                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- /.  -->

                        <!-- MARGIN-Trading  -->
                        <div class="tab-pane fade" id="custom-tabs-four-margin-trading" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <nav class="navbar navbar-expand navbar-white navbar-light">
                                                <!-- Left navbar links -->
                                                <ul class="navbar-nav">
                                                    <!-- All pairs  -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded3">
                                                                        <option>All pairs</option>
                                                                        <option> BTC/USD </option>
                                                                        <option>ETH/USD </option>
                                                                        <option>BCH/USD </option>
                                                                        <option>LTC/USD </option>
                                                                        <option>XLM/USD </option>
                                                                        <option>ADA/USD </option>
                                                                        <option> BAT/USD </option>
                                                                        <option> XTZ/USD </option>
                                                                        <option> ETH/BTC </option>
                                                                        <option>BCH/USD </option>
                                                                        <option>LTC/BTC</option>
                                                                        <option>GUSD/USD </option>
                                                                        <option>USDC/USD </option>
                                                                        <option value="maticusd">MATIC/USD</option>
                                                                        <option value="linkusd">LINK/USD</option>
                                                                        <option value="zrxusd">ZRX/USD</option>
                                                                        <option>UNI/USD </option>
                                                                        <option>WBTC/BTC </option>
                                                                        <option>WBTC/BTC </option>
                                                                        <option>DOGE/USD </option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- All Position Types  -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <div class="btn-group">
                                                                <div class="form-group">
                                                                    <select class="custom-select rounded-2" id="exampleSelectRounded2">
                                                                        <option>All position types</option>
                                                                        <option>All</option>
                                                                        <option>Long</option>
                                                                        <option>Short</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- date and time  -->
                                                    <li class="nav-item d-sm-inline-block">
                                                        <div class="margin">
                                                            <!-- Date and time range -->
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <button type="button" class="btn btn-default float-right btn-xs" id="daterange-btn2">
                                                                        <i class="far fa-calendar-alt"></i> Date range picker
                                                                        <i class="fas fa-caret-down"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- /.  -->
                                                        </div>
                                                    </li>
                                                </ul>

                                                <!-- right-side  -->
                                                <!-- /.  -->
                                            </nav>

                                            <!-- table  -->
                                            <div style="overflow-x: auto;">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">Position #</th>
                                                            <th><i class="far fa-clock"></i> Open date</th>
                                                            <th><i class="far fa-clock"></i> Close date</th>
                                                            <th>Type</th>
                                                            <th>Leverage</th>
                                                            <th>Amount</th>
                                                            <th>Margin</th>
                                                            <th>Open price</th>
                                                            <th>Close price</th>
                                                            <th>Stop loss</th>
                                                            <th>Fee (%) </th>
                                                            <th style="width: 40px">P/L</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <!-- <td>152</td>
                                                            <td>BTC/USD</td>
                                                            <td>Deposit</td>
                                                            <td>
                                                                <span class="badge bg-lightblue">$60,050</span>
                                                            </td>
                                                            <td>$61,812</td>
                                                            <td></td>
                                                            <td>$51,390</td>
                                                            <td>0.0324</td>
                                                            <td>$105,212</td>
                                                            <td>successful</td>
                                                            <td>11/13/2021 11:59 PM</td> -->
                                                        </tr>

                                                        <tr>
                                                            <!-- <td>1513</td>
                                                            <td>ETH/USD</td>
                                                            <td>withdrawal</td>
                                                            <td>
                                                                <span class="badge bg-lightblue">$50,150</span>
                                                            </td>
                                                            <td>$31,812</td>
                                                            <td></td>
                                                            <td>$51,390</td>
                                                            <td>0.02354</td>
                                                            <td>$63,212</td>
                                                            <td>successful</td>
                                                            <td>10/13/2021 11:59 PM</td> -->
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="card-footer clearfix">
                                                <div class="float-left pagination m-1 pagination-sm">
                                                    <button type="button" class="btn btn-block bg-gradient-success btn-xs">Download CSV</button>
                                                </div>
                                                <ul class="pagination pagination-sm m-0 float-right">
                                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-limitandcommissions" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">

                            <div class="container">
                                <!-- small card -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>53<sup style="font-size: 20px">%</sup></h3>...

                                        <p>Limits and Commissions</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-luggage-cart"></i>
                                    </div>
                                    <a href="../limitscomm.php" class="small-box-footer">
                                        More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>

    <?php
    require "./dashfooter.php";
    ?>
    <!-- Page specific script -->
    <!-- InputMask -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="./plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="./plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="./plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
        $(function() {
            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            });
            $('#reservationtime2').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            });
            $('#reservationtime3').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            });
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )
            //date range as a button 2
            $('#daterange-btn2').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            );

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

        });
    </script>
</body>

</html>