<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_2.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <title>Fee Schedule</title>
</head>

<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <ul class="nav_list">
                <li class="nav_item"><a href="#" class="nav_link">BTC/USD: <span>35950.2</span> </a></li>
                <li class="nav_item"><a href="#" class="nav_link">ETH/USD: <span>2648.43</span> </a></li>
                <li class="nav_item"><a href="#" class="nav_link">BCH/USD: <span>654.44</span> </a></li>
                <li class="nav_item"><a href="#" class="nav_link">XRP/USD: <span>0.92915</span> </a></li>
                <li class="nav_item"><a href="#" class="nav_link">BTC/EUR: <span>29423.3</span> </a></li>
                <li class="nav_item"><a href="#" class="nav_link">ETH/EUR: <span>2205.50</span> </a></li>
                <li class="nav_item"><a href="#" class="nav_link">XEP/EUR: <span>0.76384</span> </a></li>
                <li class="nav_item"><a href="#" class="nav_link">UNI/USD: <span>25.6736</span> </a></li>
                <li class="nav_item"><a href="#" class="nav_link">UNI/USDT: <span>25.66772</span> </a></li>
                <li class="nav_item"><a href="#" class="nav_link">UNI/ETH: <span>0.009633</span> </a></li>
            </ul>
        </nav>
    </header>

    <nav class="navvi2 bd-gridd2">
        <div class="logoimgg">
            <a href="index.php">
                <img src="./images/erect.jpg" class="imglogo">
            </a>
            <ul class="navvi2_list">
                <li class="navvi2_item"><a href="buysell" class="navvi2_link"> BUY/SELL </a></li>
                <li class="navvi2_item"><a href="#" class="navvi2_link"> MARKET DATA </a></li>
                <li class="navvi2_item"><a href="#" class="navvi2_link"> MARGIN TRADE </a></li>
                <li class="navvi2_item"><a href="#" class="navvi2_link"> AFFLIATE </a></li>
                <li class="navvi2_item"><a href="#" class="navvi2_link"> STAKING </a></li>
            </ul>
        </div>
        <div class="buttcount">
            <a href="loginpage.php"> <button type="submit" class="buttsign">SIGN IN</button></a>
            <a href="registerpage.php"><button type="submit" class="buttreg">REGISTER</button> </a>
        </div>
    </nav>

    <section class="sec1">
        <!-- <h1 class="limcoms">Limits and Commissions</h1> <br><br> -->
        <div class="roww">
            <div class="widthty">
                <div id="myBtnnContainer" class="BtnContainer">
                    <!-- <button class="btn" onclick="filterSelection('all')"> Show all</button> -->
                    <button class="btnn active" onclick="filterSelection('Transaction Fees')">Transaction Fees</button>
                    <button class="btnn" onclick="filterSelection('Deposit/Withdrawal Fees1')">Deposit/Withdrawal
                        Fees</button>
                    <button class="btnn" onclick="filterSelection('Deposit/Withdrawal Fees2')">Deposit/Withdrawal
                        Fees</button>
                </div>

                <div class="columnnP Transaction Fees">
                    <div class="contenttP">
                        <div class="transch1p">
                            <h1>
                                Maker-Taker Fee Schedule.
                            </h1>
                            <p>Transaction fee is based on your 30-day trade <br> volume for all pairs, which is
                                recalculated at 00:00 <br> (GMT) each day and includes current day`s trades.</p>
                        </div>

                        <table class="tabular">
                            <tr class="tr1">
                                <th>Trade Volume 30d, BTC</th>
                                <th>Taker</th>
                                <th>Maker</th>
                            </tr>

                            <tr class="tr2">
                                <td class="colord">≤ 5</td>
                                <td class="colord">0.25%</td>
                                <td class="colord">>0.16%</td>
                            </tr>

                            <tr class="tr2">
                                <td class="colord">≤ 30</td>
                                <td class="colord">0.23%</td>
                                <td class="colord">>0.15%</td>
                            </tr>

                            <tr class="tr2">
                                <td class="colord">≤ 50</td>
                                <td class="colord">0.21%</td>
                                <td class="colord">>0.13%</td>
                            </tr>

                            <tr class="tr2">
                                <td class="colord">≤ 100</td>
                                <td class="colord">0.20%</td>
                                <td class="colord">>0.12%</td>
                            </tr>

                            <tr class="tr2">
                                <td class="colord">≤ 200</td>
                                <td class="colord">0.18%</td>
                                <td class="colord">>0.10%</td>
                            </tr>

                            <tr class="tr2">
                                <td class="colord">≤ 1000</td>
                                <td class="colord">0.15%</td>
                                <td class="colord">>0.08%</td>
                            </tr>

                            <tr class="tr2">
                                <td class="colord">≤ 3000</td>
                                <td class="colord">0.13%</td>
                                <td class="colord">>0.04%</td>
                            </tr>

                            <tr class="tr2">
                                <td class="colord">≤ 6000</td>
                                <td class="colord">0.11%</td>
                                <td class="colord">>0.00%</td>
                            </tr>

                            <tr class="tr2">
                                <td class="colord">≤ 6000</td>
                                <td class="colord">0.10%</td>
                                <td class="colord">>0.00%</td>
                            </tr>
                        </table>

                    </div>
                </div>

                <div class="columnnP Deposit/Withdrawal Fees1">
                    <div class="contenttP">
                        <table class="tabular2">
                            <tr class="deptr1">
                                <th>Currency</th>
                                <th>Payment method</th>
                                <th>Deposit</th>
                                <th>Withdrawal</th>
                            </tr>
                            <!-- ==========FOR ROW 1===========  -->
                            <tr class="deptr2">
                                <td class="tdd1"> <i class="fas fa-dollar-sign"></i>
                                    <p>USD</p>
                                </td>
                                <td class="depcolord1">
                                    <p>VISA</p>
                                    <p>MASTERCARD</p>
                                    <p>epay</p>
                                    <p>advcash</p>
                                    <p>skrill</p>
                                    <p>Bamk transfer</p>
                                    <p>ACH</p>
                                </td>
                                <td class="depcolord1">
                                    2.99%<br>
                                    2.99%<br>
                                    $0<br>
                                    $0<br>
                                    3.99%<br>
                                    $0<br>
                                    $0<br>
                                </td>
                                <td class="depcolord3">
                                    <div class="depflex">
                                        <div class="depgrid">
                                            <p>Service charge:</p>
                                            <span>up to 3% + $1.20</span>
                                        </div>
                                        <div class="depgrid">
                                            <p>Commission:</p>
                                            <span>up to $3.80</span>
                                        </div>
                                    </div><br>

                                    <div class="depflex2">
                                        <div class="depgrid">
                                            <p>Service charge:</p>
                                            <span>up to 1.8% + $1.20</span>
                                        </div>
                                        <div class="depgrid">
                                            <p>Commission:</p>
                                            <span>up to $1.2% + $3.80</span>
                                        </div><br>
                                    </div><br>
                                    <P class="marg"> 1%</P><br>
                                    <p class="marg2">$0</p><br>
                                    <p class="marg3">1%</p><br>
                                    <p class="marg4">0.3%+$25.00</p><br>
                                    <p class="marg5">$0</p>
                                </td>
                            </tr>

                            <!-- =============FOR ROW 2================= -->
                            <tr class="deptr2">
                                <td class="tdd1"><i class="fas fa-euro-sign"></i>
                                    <p>EUR</p>
                                </td>
                                <td class="depcolord1">
                                    <p>VISA</p>
                                    <p>MASTERCARD</p>
                                    <p>epay</p>
                                    <p>advcash</p>
                                    <p>skrill</p>
                                    <p>Bamk transfer</p>
                                    <p>SEPA</p>
                                </td>
                                <td class="depcolord1">
                                    2.99%<br>
                                    2.99%<br>
                                    <i class="fas fa-euro-sign"></i>0<br>
                                    <i class="fas fa-euro-sign"></i>0<br>
                                    3.99%<br>
                                    <i class="fas fa-euro-sign"></i>0<br>
                                    <i class="fas fa-euro-sign"></i>0<br>
                                </td>
                                <td class="depcolord3">
                                    <div class="depflex">
                                        <div class="depgrid">
                                            <p><i class="fas fa-euro-sign"></i>0</p>
                                        </div>
                                        <div class="depgrid">
                                            <p>Service charge:</p>
                                            <span>up to 3% + <i class="fas fa-euro-sign"></i>1.50</span>
                                        </div>
                                        <div class="depgrid">
                                            <p>Commission:</p>
                                            <span>up to <i class="fas fa-euro-sign"></i>3.50</span>
                                        </div>
                                    </div><br>

                                    <div class="depflex2">
                                        <div class="depgrid">
                                            <p>Service charge:</p>
                                            <span>up to 1.8% + <i class="fas fa-euro-sign"></i>1.50</span>
                                        </div>
                                        <div class="depgrid">
                                            <p>Commission:</p>
                                            <span>up to $1.2% + <i class="fas fa-euro-sign"></i>3.50</span>
                                        </div><br>
                                    </div><br>
                                    <P class="marg"> <i class="fas fa-euro-sign"></i>0</P><br>
                                    <p class="marg2">1%</p><br>
                                    <p class="marg3">1%</p><br>
                                    <p class="marg4">0.3%+<i class="fas fa-euro-sign"></i>25.00</p><br>
                                    <p class="marg5"><i class="fas fa-euro-sign"></i>0</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- ===================DEPOSIT/WITHDRAWAL2======================= -->
                <div class="columnnP Deposit/Withdrawal Fees2">
                    <div class="contenttP">
                        <table class="tabular2">
                            <tr class="deptr1">
                                <th>Currency</th>
                                <th>Payment method</th>
                                <th>Deposit</th>
                                <th>Withdrawal</th>
                            </tr>
                            <!-- =============FOR ROW 3================= -->
                            <tr class="deptr2">
                                <td class="tdd1"><i class="fas fa-pound-sign"></i>
                                    <p>GBP</p>
                                </td>
                                <td class="depcolord1">
                                    <p>VISA</p>
                                    <p>MASTERCARD</p>
                                    <p>Skrill</p>
                                    <p>Bank transfer</p>
                                    <p>Faster Payments</p>
                                </td>
                                <td class="depcolord1">
                                    2.99%<br>
                                    2.99%<br>
                                    3.99%<br>
                                    <i class="fas fa-pound-sign"></i>0<br>
                                    <i class="fas fa-pound-sign"></i>0<br>
                                </td>
                                <td class="depcolord3">
                                    <div class="depflex">
                                        <div class="depgrid">
                                            <p>Service charge:</p>
                                            <span>up to 3% + <i class="fas fa-pound-sign"></i>2.10</span>
                                        </div>
                                        <div class="depgrid">
                                            <p>Commission:</p>
                                            <span>up to <i class="fas fa-pound-sign"></i>2.90</span>
                                        </div>
                                    </div><br>

                                    <div class="depflex2">
                                        <div class="depgrid">
                                            <p>Service charge:</p>
                                            <span>up to 1.8% + <i class="fas fa-pound-sign"></i>2.10</span>
                                        </div>
                                        <div class="depgrid">
                                            <p>Commission:</p>
                                            <span>up to $1.2% + <i class="fas fa-euro-sign"></i>2.90</span>
                                        </div><br>
                                    </div><br>
                                    <p class="marg2">1%</p><br>
                                    <p class="marg4">0.3%+<i class="fas fa-pound-sign"></i>25.00</p><br>
                                    <p class="marg5"><i class="fas fa-pound-sign"></i>0</p>
                                </td>
                            </tr>

                            <!-- =============FOR ROW 4================= -->
                            <tr class="deptr2">
                                <td class="tdd1"><i class="fas fa-ruble-sign"></i>
                                    <p>GBP</p>
                                </td>
                                <td class="depcolord1">
                                    <p>VISA</p>
                                    <p>MASTERCARD</p>
                                    <p>Bank transfer</p>
                                    <p>QIWI</p>
                                </td>
                                <td class="depcolord1">
                                    2.99%<br>
                                    2.99%<br>
                                    0.5%<br>
                                    n/a<br>
                                </td>
                                <td class="depcolord3">
                                    <div class="depflex">
                                        <div class="depgrid">
                                            <p>Service charge:</p>
                                            <span>0.5% + <i class="fas fa-ruble-sign"></i>20.00</span>
                                        </div>
                                        <div class="depgrid">
                                            <p>Commission:</p>
                                            <span>2.5% + <i class="fas fa-ruble-sign"></i>30.00</span>
                                        </div>
                                    </div><br>

                                    <div class="depflex2">
                                        <div class="depgrid">
                                            <p>Service charge:</p>
                                            <span>0.5% + <i class="fas fa-ruble-sign"></i>20.00</span>
                                        </div>
                                        <div class="depgrid">
                                            <p>Commission:</p>
                                            <span>2.5% + <i class="fas fa-ruble-sign"></i>30.00</span>
                                        </div><br>
                                    </div><br>
                                    <p class="marg2">n/a</p><br>
                                    <p class="marg5"><i class="fas fa-ruble-sign"></i>2.49%</p>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <!-- --------------- F O O T E R ----------------------  -->
    <?php
    require("./footerf.php");
    ?>