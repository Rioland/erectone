<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/external.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cardslide.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <script src="/js/jquery-3.5.1.js"> </script>
    <title> Limits and Commissions </title>
</head>

<body>
    <?php
        require"./navbar.php";
    ?>
    <br/>

    <section class="sec1">
        <h1 class="middilefy">Total account limits</h1> <br><br>
        <div class="secpart1">
            <table>
                <!---- Table 1 ---->
                <tr class="tr1">
                    <th>Limits*</th>
                    <th>Daily Deposit</th>
                    <th>Daily withdrawal</th>
                    <th></th>
                </tr>

                <tr class="tr2">
                    <td>
                        <h4 class="minwidth4">Identity</h4>
                        <p class="minwidthp">Level up your daily limits: <br> deposits — up to $3,000.00,<br>
                            withdrawals — up to $10,000.00.</p>
                    </td>
                    <td class="colord">$3000.00</td>
                    <td class="colord">$10,000.00</td>
                    <td>
                        <button type="submit" class="tr2buttt">Increase Limit</button>
                    </td>
                </tr>

                <!---- Table 2 for Address ---->
                <tr class="tr2">
                    <td>
                        <h4 class="minwidth4">Address</h4>
                        <p class="minwidthp">Unlock bank transfers and<br>get advanced daily limits:<br>deposits — up to
                            $10,000.00 and <br>withdrawals — up to $10,000.00.</p>
                    </td>
                    <td class="colord">$10,000.00</td>
                    <td class="colord">$10,000.00</td>
                    <td>
                        <button type="submit" class="tr2buttt">Increase Limit</button>
                    </td>
                </tr>

                <!---- Table 2 for Enhanced ---->
                <tr class="tr2">
                    <td>
                        <h4 class="minwidth4">Enhanced</h4>
                        <p class="minwidthp">Benefit from unlimited deposits <br> and withdrawals into your account <br>
                            with high
                            turnover. Get<br>priority support.</p>
                    </td>
                    <td class="colord">Unlimited</td>
                    <td class="colord">Unlimited</td>
                    <td>
                        <button type="submit" class="tr2buttt">Increase Limit</button>
                    </td>
                </tr>

                <!---- Table 2 for COOPORATE ---->
                <tr class="tr2">
                    <td>
                        <h4 class="minwidth4">corporate</h4>
                        <p class="minwidthp">Use a corporate account <br> your enterprise and enjoy custom <br>
                            conditions.</p>
                    </td>
                    <td class="colord">Unlimited</td>
                    <td class="colord">Unlimited</td>
                    <td>
                        <button type="submit" class="tr2buttt">Increase Limit</button>
                    </td>
                </tr>
            </table>

        </div><br>

        <!-- Table Column for Identity for both min-width & max-width -->
        <div class="secpart">
            <div class="box">
                <h1>Identity</h1>
                <p>Level up your daily limits: deposits — up to $3,000.00, withdrawals — up to $10,000.00.</p><br>
                <div class="twostraight">
                    <h4>Daily Deposit</h4>
                    <p>$3,000.00</p>
                </div>
                <div class="twostraight2">
                    <h4>Daily withdrawal</h4>
                    <p>$10,000.00</p>
                </div>
                <div class="boxbuttend">
                    <button type="submit" class="boxbutt">Increase Limit</button>
                </div>
            </div>
        </div>


        </table>
        </div> <br>

        <!-- Table Column for Address for both min-width & max-width -->
        <div class="secpart">
            <div class="box">
                <h1>Address</h1>
                <p>Unlock bank transfers and get advanced daily limits: deposits — up to $10,000.00, withdrawals — up to
                    $10,000.00.</p><br>
                <div class="twostraight">
                    <h4>Daily Deposit</h4>
                    <p>$10,000.00</p>
                </div>
                <div class="twostraight2">
                    <h4>Daily withdrawal</h4>
                    <p>$10,000.00</p>
                </div>
                <div class="boxbuttend">
                    <button type="submit" class="boxbutt">Increase Limit</button>
                </div>
            </div>
        </div><br>

        <!-- Table Column for ENHANCED for both min-width & max-width -->


        <div class="secpart">
            <div class="box">
                <h1>Enhanced</h1>
                <p>Benefit from unlimited deposits and withdrawals your account with high turnover. Get priority
                    support.</p><br>
                <div class="twostraight">
                    <h4>Daily Deposit</h4>
                    <p>Unlimited</p>
                </div>
                <div class="twostraight2">
                    <h4>Daily withdrawal</h4>
                    <p>Unlimited</p>
                </div>
                <div class="boxbuttend">
                    <button type="submit" class="boxbutt">Increase Limit</button>
                </div>
            </div>
        </div><br>

        <!-- Table Column for COOPORATE for both min-width & max-width -->

        <div class="secpart">
            <div class="box">
                <h1>Coporate</h1>
                <p>Unlock bank transfers and get advanced daily limits: deposits — up to $10,000.00, withdrawals — up to
                    $10,000.00.</p><br>
                <div class="twostraight">
                    <h4>Daily Deposit</h4>
                    <p>Unlimited</p>
                </div>
                <div class="twostraight2">
                    <h4>Daily withdrawal</h4>
                    <p>Unlimited</p>
                </div>
                <div class="boxbuttend">
                    <button type="submit" class="boxbutt">Increase Limit</button>
                </div>
            </div>
        </div><br>


        <p class="minwidthp">* For EU residents, the limits apply in EUR</p>
    </section>

    <!-- ==================== section 2 ========================== -->
    <section class="sec2"><br><br>
        <h1 class="limcoms">Limits and Commissions</h1> <br><br>
        <div class="roww">
            <div class="widthty">
                <div id="myBtnnContainer" class="BtnContainer">
                    <!-- <button class="btn" onclick="filterSelection('all')"> Show all</button> -->
                    <button class="btnn active" onclick="filterSelection('Payment Methods')">Payment Methods</button>
                    <button class="btnn" onclick="filterSelection('Cryptocurrencies1')">Cryptocurrencies</button>
                    <button class="btnn" onclick="filterSelection('Cryptocurrencies2')">Cryptocurrencies</button>
                    <button class="btnn" onclick="filterSelection('Cryptocurrencies3')">Cryptocurrencies</button>
                </div>

                <div class="columnnP Payment Methods">
                    <div class="contenttP">
                        <!-- ==Column one for VISA=== -->
                        <div class="visacolmn">
                            <table>
                                <tr class="tr1">
                                    <th>Payment<br>Methods</th>
                                    <th>Daily Deposit<br>(Min-Max)</th>
                                    <th>Daily withdrawal<br>(Min-Max)</th>
                                    <th>Deposit<br>commissions</th>
                                    <th>withdrawal<br>commissions</th>
                                    <th></th>
                                </tr>

                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="./images/visaimage.png">
                                        <p>VISA</p>
                                    </td>
                                    <td class="colord">$20.00 — Unlimited</td>
                                    <td class="colord">$20.00 — $50,000.00</td>
                                    <td class="colord">2.99%<br>1.49%4</td>
                                    <td class="colord">
                                        Service charge: up to 2.5% + $1.20<br>
                                        Commission: up to $3.80
                                    </td>
                                </tr>

                                <!-- ======COLUMN FOR MASTERCARD======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="./images/mastercard.png">
                                        <p>MASTERCARD</p>
                                    </td>
                                    <td class="colord">$20.00 — Unlimited</td>
                                    <td class="colord">$20.00 — $50,000.00</td>
                                    <td class="colord">2.99%<br>1.49%4</td>
                                    <td class="colord">
                                        Service charge: up to 1.8% + $1.20<br>
                                        Commission: up to 1.2% + $3.80
                                    </td>
                                </tr>

                                <!-- ======COLUMN FOR SWIFT======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="./images/swiftimage.png">
                                        <p>S.W.I.F.T.</p>
                                    </td>
                                    <td class="colord">
                                        $300.00 — Unlimited<br>
                                        $300.00 — Unlimited<br>
                                        £300.00 — Unlimited<br>
                                        ₽500,000.00 — Unlimited
                                    </td>
                                    <td class="colord">
                                        $300.00 — Unlimited<br>
                                        €300.00 — Unlimited<br>
                                        £300.00 — Unlimited<br>
                                        Not available
                                    </td>
                                    <td class="colord">
                                        No fee<br>
                                        No fee<br>
                                        No fee<br>
                                        0.5%

                                    </td>
                                    <td class="colord">
                                        0.3% + $25<br>
                                        0.3% + €25<br>
                                        0.3% + £25<br>
                                        Not available
                                    </td>
                                </tr>

                                <!-- ======COLUMN FOR ACH======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="./images/ACHimage.png">
                                        <p>ACH</p>
                                    </td>
                                    <td class="colord">Not Available</td>
                                    <td class="colord">$20.00 — $100,000.00</td>
                                    <td class="colord">Not Available</td>
                                    <td class="colord"> 0% </td>
                                </tr>

                                <!-- ======COLUMN FOR DOMESTIC WIRE TRANSFER======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <p>Domestic Wire Transfer</p>
                                    </td>
                                    <td class="colord">$20.00 — $100,000.00</td>
                                    <td class="colord">Not Available</td>
                                    <td class="colord">0%</td>
                                    <td class="colord"> Not available </td>
                                </tr>

                                <!-- ======COLUMN FOR FASTER PAYMENTS======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="./images/fasterpaymentsimage.jpg">
                                        <p>Faster Payments</p>
                                    </td>
                                    <td class="colord">£20.00 — £250,000.00</td>
                                    <td class="colord">£20.00 — £250,000.00</td>
                                    <td class="colord">No fee</td>
                                    <td class="colord"> No fee </td>
                                </tr>

                                <!-- ======COLUMN FOR SEPA======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="images/sepa-payments.svg">
                                        <p>Sepa</p>
                                    </td>
                                    <td class="colord">€20.00 — Unlimited</td>
                                    <td class="colord">€20.00 — Unlimited</td>
                                    <td class="colord">No fee</td>
                                    <td class="colord"> No fee </td>
                                </tr>

                                <!-- ======COLUMN FOR QIWI ======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="./images/QIWIimage.png">
                                        <p>QIWI</p>
                                    </td>
                                    <td class="colord">10,000.00₽ — 150,000.00₽</td>
                                    <td class="colord">1,200.00₽ — 150,000.00₽</td>
                                    <td class="colord">0.99%</td>
                                    <td class="colord"> 3.9% </td>
                                </tr>

                                <!-- ======COLUMN FOR SKRILL ======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="./images/skrill.jpg">
                                        <p>Skrill</p>
                                    </td>
                                    <td class="colord">
                                        $35.00 — $10,000.00<br>
                                        €35.00 — €10,000.00<br>
                                        £35.00 — £10,000.0
                                    </td>
                                    <td class="colord">
                                        $35.00 — $10,000.00<br>
                                        €35.00 — €10,000.00<br>
                                        £35.00 — £10,000.00
                                    </td>
                                    <td class="colord"> 3.99% </td>
                                    <td class="colord"> 1% </td>
                                </tr>

                                <!-- ======COLUMN FOR EPAY ======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="./images/EPAY.jpg">
                                        <p>Epay</p>
                                    </td>
                                    <td class="colord">$20.00 — $10,000.00</td>
                                    <td class="colord">$20.00 — $10,000.00</td>
                                    <td class="colord">0%</td>
                                    <td class="colord"> 1% </td>
                                </tr>

                                <!-- ======COLUMN FOR ADVCASH ======= -->
                                <tr class="tr2">
                                    <td class="tr2td">
                                        <img src="./images/advcash.png">
                                        <p>Advcash</p>
                                    </td>
                                    <td class="colord">
                                        $20 — $49,999.00<br>
                                        €20 — €49,999.00
                                    </td>
                                    <td class="colord">
                                        $20 — $49,999.00<br>
                                        €20 — €49,999.00<br>
                                    </td>
                                    <td class="colord"> 0% </td>
                                    <td class="colord"> 0% </td>
                                </tr>
                            </table>
                        </div>

                        <!-- ==Boxxi one for VISA=== -->
                        <div class="secpartsec2">
                            <div class="boxxi">
                                <div class="imggtextflex">
                                    <img src="./images/visaimage.png">
                                    <p>VISA</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit(Min-Max)</h4>
                                    <p>$20.00 -- Unlimited</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal(Min-Max)</h4>
                                    <p>$20.00 — $50,000.00</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>2.99% <br>1.49%</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p>Service charge: up to 2.5% <br>+ $1.20
                                        Commission: up to $3.80</p>
                                </div>
                            </div>
                        </div> <br>

                        <!-- ==Boxxi one for MASTERCARD=== -->
                        <div class="secpartsec2">
                            <div class="boxxi">
                                <div class="imggtextflex">
                                    <img src="./images/mastercard.png">
                                    <p>MASTERCARD</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>$20.00 -- Unlimited</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>$20.00 — $50,000.00</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>2.99% <br>1.49%</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p>Service charge: up to 2.5% <br>+ $1.20
                                        Commission: up to $3.80</p>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==Boxxi one for swift=== -->
                        <div class="secpartsec2">
                            <div class="boxxiswift">
                                <div class="imggtextflex">
                                    <img src="./images/swiftimage.png">
                                    <p>S.W.I.F.T.</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>
                                        $300.00 — Unlimited<br>
                                        $300.00 — Unlimited<br>
                                        £300.00 — Unlimited<br>
                                        ₽500,000.00 — Unlimited
                                    </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>
                                        $300.00 — Unlimited<br>
                                        €300.00 — Unlimited<br>
                                        £300.00 — Unlimited<br>
                                        Not available
                                    </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>
                                        No fee<br>
                                        No fee<br>
                                        No fee<br>
                                        0.5%
                                    </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p>
                                        0.3% + $25<br>
                                        0.3% + €25<br>
                                        0.3% + £25<br>
                                        Not available
                                    </p>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==Boxxi one for ACH=== -->
                        <div class="secpartsec2">
                            <div class="boxxi">
                                <div class="imggtextflex">
                                    <img src="./images/ACHimage.png">
                                    <p>ACH</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>Not available</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>$20.00 — $100,000.00</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>Not available</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p>0%</p>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==Boxxi one for ACH=== -->
                        <div class="secpartsec2">
                            <div class="boxxi">
                                <div class="imggtextflex">
                                    <p>Domestic Wire Transfer</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>$20.00 — $100,000.00</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>Not available</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>0%</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p>Not available</p>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==Boxxi one for FASTERPAYMENTS=== -->
                        <div class="secpartsec2">
                            <div class="boxxi">
                                <div class="imggtextflex">
                                    <img src="./images/fasterpaymentsimage.jpg">
                                    <p>Faster Payments</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>£20.00 — £250,000.00</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>£20.00 — £250,000.00</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>No fee</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p>No fee</p>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==Boxxi one for SEPA=== -->
                        <div class="secpartsec2">
                            <div class="boxxi">
                                <div class="imggtextflex">
                                    <img src="./images/sepa-payments.svg">
                                    <p>Sepa</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>€20.00 — Unlimited</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>€20.00 — Unlimited</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>No fee</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p>No fee</p>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==Boxxi one for QIWI=== -->
                        <div class="secpartsec2">
                            <div class="boxxi">
                                <div class="imggtextflex">
                                    <img src="./images/QIWIimage.png">
                                    <p>QIWI</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>10,000.00₽ — 150,000.00₽</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>1,200.00₽ — 150,000.00₽</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>0.99%</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p>3.9%</p>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==Boxxi one for skrill=== -->
                        <div class="secpartsec2">
                            <div class="boxxiskrill">
                                <div class="imggtextflex">
                                    <img src="./images/skrill.jpg">
                                    <p>Skrill</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>
                                        $35.00 — $10,000.00<br>
                                        €35.00 — €10,000.00<br>
                                        £35.00 — £10,000.0<br>
                                    </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>
                                        £35.00 — £10,000.0<br>
                                        £35.00 — £10,000.0<br>
                                        £35.00 — £10,000.0<br>
                                    </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>3.99%</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p> 1% </p>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==Boxxi one for EPAY=== -->
                        <div class="secpartsec2">
                            <div class="boxxi">
                                <div class="imggtextflex">
                                    <img src="./images/EPAY.jpg">
                                    <p>Epay</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>$20.00 — $10,000.00</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>$20.00 — $10,000.00</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>0%</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p>1%</p>
                                </div>
                            </div>
                        </div><br>

                        <!-- ==Boxxi one for Advcash=== -->
                        <div class="secpartsec2">
                            <div class="boxxiAdvcash">
                                <div class="imggtextflex">
                                    <img src="./images/advcash.png">
                                    <p>Advcash</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Daily Deposit (Min-Max)</h4>
                                    <p>
                                        $20 — $49,999.00<br>
                                        €20 — €49,999.00<br>
                                    </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Daily withdrawal (Min-Max)</h4>
                                    <p>
                                        $20 — $49,999.00<br>
                                        €20 — €49,999.00<br>
                                    </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Deposit commissions</h4>
                                    <p>0%</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawalcommissions</h4>
                                    <p> 0% </p>
                                </div>
                            </div>
                        </div><br> <br>

                        <!-- ======= TOP CRYPTOCURRENCY ========                                   HI HI HI            -->

                        <div class="secpartsec2">
                            <h2 class="paycrypt">TOP CRYPTOCURRENCY</h2>
                        </div>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/bitcoin-btc.png">
                                    <p>Bitcoin (BTC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> 0.001 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 0.002 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.0005</p>
                                </div>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/Ethereum (ETH).png">
                                    <p>Ethereum (ETH)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> 0.001 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 0.02 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.01</p>
                                </div>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/Tether (USDT).png">
                                    <p>Tether (USDT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> 5 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 30 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>40</p>
                                </div>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/Cardano (ADA).png">
                                    <p>Cardano (ADA)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> 1 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 5 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>2</p>
                                </div>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/Ripple (XRP).jpg">
                                    <p>Ripple (XRP)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> Unlimited </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 0.3 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.25</p>
                                </div>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/Polkadot (DOT).png">
                                    <p>Polkadot (DOT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> 1 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 1 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.1</p>
                                </div>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/Uniswap (UNI).png">
                                    <p>Uniswap (UNI)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> 0.02 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 1.5 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/Bitcoin Cash (BCH).png">
                                    <p>Bitcoin Cash (BCH)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> 0.001 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 0.01 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.005</p>
                                </div>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/ChainLink (LINK).png">
                                    <p>ChainLink (LINK)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> 0.4 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 1 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.8</p>
                                </div>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="cryptoadcash">
                                <div class="cryptimggtxtflex">
                                    <img src="./images/ChainLink (LINK).png">
                                    <p>Litecoin (LTC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p> 0.001 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p> 0.002 </p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.001</p>
                                </div>
                            </div>
                        </div><br>

                    </div>
                </div>

                <div class="columnnP Cryptocurrencies1">
                    <div class="contenttP">

                        <div class="visacolmn">
                            <table>
                                <tr class="tr1">
                                    <th>Currency</th>
                                    <th>Minimum<br>deposit</th>
                                    <th>Minimum<br>withdrawal</th>
                                    <th>withdrawal<br>fee(floating)</th>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/ox imge.png">
                                        <p>0x (ZRX)</p>
                                    </td>
                                    <td class="colord">5</td>
                                    <td class="colord">20</td>
                                    <td class="colord">15</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/1INCH image.png">
                                        <p>1inch (1INCH)</p>
                                    </td>
                                    <td class="colord">2</td>
                                    <td class="colord">10</td>
                                    <td class="colord">8</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/aave image.jpg">
                                        <p>Aave (AAVE)</p>
                                    </td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">0.2</td>
                                    <td class="colord">0.08</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Akropolis image.png">
                                        <p>Akropolis (AKRO)</p>
                                    </td>
                                    <td class="colord">300</td>
                                    <td class="colord">1000</td>
                                    <td class="colord">800</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Alpha Finance Lab (ALPHA)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">2</td>
                                    <td class="colord">0.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/aragon-ant image.png">
                                        <p>Aragon (ANT)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">6</td>
                                    <td class="colord">5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/aughur image.png">
                                        <p>Augur (REPV2)</p>
                                    </td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">1</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/AurusGOLD_(AWG).png">
                                        <p>Aurus (AWG)</p>
                                    </td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">1</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>AurusDeFi (AWX)</p>
                                    </td>
                                    <td class="colord">2</td>
                                    <td class="colord">16</td>
                                    <td class="colord">15</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>AurusPlatinum (AWP)</p>
                                    </td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">0.5</td>
                                    <td class="colord">0.2</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>AurusSILVER (AWS)</p>
                                    </td>
                                    <td class="colord">4</td>
                                    <td class="colord">15</td>
                                    <td class="colord">10</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/balancer-bal-logo.png">
                                        <p>Balancer (BAL)</p>
                                    </td>
                                    <td class="colord">0.6</td>
                                    <td class="colord">1</td>
                                    <td class="colord">0.6</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/bancor-bnt-logo.png">
                                        <p>Bancor (BNT)</p>
                                    </td>
                                    <td class="colord">5</td>
                                    <td class="colord">8</td>
                                    <td class="colord">7</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/band-protocol-band-logo.png">
                                        <p>Band Protocol (BAND)</p>
                                    </td>
                                    <td class="colord">0.5</td>
                                    <td class="colord">3</td>
                                    <td class="colord">2.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Basic-Attention-Token.png">
                                        <p>Basic Attention Token (BAT)</p>
                                    </td>
                                    <td class="colord">10</td>
                                    <td class="colord">35</td>
                                    <td class="colord">30</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Bella Protocol (BEL)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">2</td>
                                    <td class="colord">0.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Binance Coin (BNB)</p>
                                    </td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">0.02</td>
                                    <td class="colord">0.005</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/binance-usd-busd-logo.png">
                                        <p>Binance USD (BUSD)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">4</td>
                                    <td class="colord">40</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/bitcoin-btc.png">
                                        <p>Bitcoin (BTC)</p>
                                    </td>
                                    <td class="colord">0.0001</td>
                                    <td class="colord">0.0002</td>
                                    <td class="colord">0.0005</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Bitcoin Cash (BCH).png">
                                        <p>Bitcoin Cash (BCH)</p>
                                    </td>
                                    <td class="colord">0.0001</td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">0.0005</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Bitcoin Gold (BTG).png">
                                        <p>Bitcoin Gold (BTG)</p>
                                    </td>
                                    <td class="colord">0.0001</td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">0.001</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/BitTorrent (BTT).png">
                                        <p>BitTorrent (BTT)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">200</td>
                                    <td class="colord">150</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Cardano (ADA).png">
                                        <p>Cardano (ADA)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">5</td>
                                    <td class="colord">2</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/ChainLink (LINK).png">
                                        <p>ChainLink (LINK)</p>
                                    </td>
                                    <td class="colord">0.4</td>
                                    <td class="colord">1</td>
                                    <td class="colord">0.8</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Tether (USDT).png">
                                        <p>Tezos (XTZ)</p>
                                    </td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">2</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Tron (TRX).png">
                                        <p>Tron (TRX)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">60</td>
                                    <td class="colord">50</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/TrueUSD (TUSD).png">
                                        <p>TrueUSD (TUSD)</p>
                                    </td>
                                    <td class="colord">5</td>
                                    <td class="colord">30</td>
                                    <td class="colord">20</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Trust Wallet Token (TWT)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">3</td>
                                    <td class="colord">2</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="images/UMA (UMA).png">
                                        <p>UMA (UMA)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">2</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>ZilSwap (ZWAP)</p>
                                    </td>
                                    <td class="colord">0.001</td>
                                    <td class="colord">0.03</td>
                                    <td class="colord">0.02</td>
                                </tr>
                            </table>
                        </div>

                        <!-- ========================================================        WHERE I STOOPED -->
                        <!-- ==CRYPTOCURRENCY one for BUTTON CRYPTOCURRENCY1=== -->
                        <div class="secpartsec2">
                            <div class="boxxicurrency">
                                <div class="iconimgflex">
                                    <i class="fas fa-search">Currency</i>
                                </div><br>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/ox imge.png">
                                    <p>0x (ZRX)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>20</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>15</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/1INCH image.png">
                                    <p>1inch (1INCH)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>10</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>8</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/aave image.jpg">
                                    <p>Aave (AAVE)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.08</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Akropolis image.png">
                                    <p>Akropolis (AKRO)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>300</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>1000</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>800</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Alpha Finance Lab (ALPHA)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/aragon-ant image.png">
                                    <p>Aragon (ANT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>6</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/aughur image.png">
                                    <p>Augur (REPV2)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/AurusGOLD_(AWG).png">
                                    <p>Aurus (AWG)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>AurusDeFi (AWX)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>16</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>15</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>AurusPlatinum (AWP)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.2</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>AurusSILVER (AWS)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>4</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>15</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>10</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/balancer-bal-logo.png">
                                    <p>Balancer (BAL)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.6</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.6</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/bancor-bnt-logo.png">
                                    <p>Bancor (BNT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>8/p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>7</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/band-protocol-band-logo.png">
                                    <p>Band Protocol (BAND)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>3</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>2.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Basic-Attention-Token.png">
                                    <p>Basic Attention Token (BAT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>10</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>35</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>30</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Bella Protocol (BEL)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Binance Coin (BNB)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.01</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.02</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.005</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/binance-usd-busd-logo.png">
                                    <p>Binance USD (BUSD)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>4</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>40</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Bitcoin Gold (BTG).png">
                                    <p>Bitcoin Gold (BTG)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.001</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.01</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.001</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/BitTorrent (BTT).png">
                                    <p>BitTorrent (BTT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>200</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>150</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Tezos (XTZ).png">
                                    <p>Tezos (XTZ)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.01</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p> 1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Tron (TRX).png">
                                    <p>Tron (TRX)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>60</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>50</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/TrueUSD (TUSD).png">
                                    <p>TrueUSD (TUSD)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>30</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>20</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Trust Wallet Token (TWT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>2</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/UMA (UMA).png">
                                    <p>UMA (UMA)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>ZilSwap (ZWAP))</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.0001</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.03</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.02</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/ZCash (ZEC).png">
                                    <p>ZCash (ZEC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.0001</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.0001</p>
                                </div>
                            </div>
                        </div> <br>

                    </div>
                </div>

                <div class="columnnP Cryptocurrencies2">
                    <div class="contenttP">
                        <div class="visacolmn">
                            <table>
                                <tr class="tr1">
                                    <th>Currency</th>
                                    <th>Minimum<br>deposit</th>
                                    <th>Minimum<br>withdrawal</th>
                                    <th>withdrawal<br>fee(floating)</th>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Civic (CVC)</p>
                                    </td>
                                    <td class="colord">80</td>
                                    <td class="colord">100</td>
                                    <td class="colord">7.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Compound (COMP).png">
                                        <p>Compound (COMP)</p>
                                    </td>
                                    <td class="colord">0.02</td>
                                    <td class="colord">0.06</td>
                                    <td class="colord">0.05</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Cosmos (ATOM).png">
                                        <p>Cosmos (ATOM)</p>
                                    </td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">2</td>
                                    <td class="colord">0.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/COTI (COTI).jpg">
                                        <p>COTI (COTI)</p>
                                    </td>
                                    <td class="colord">10</td>
                                    <td class="colord">150</td>
                                    <td class="colord">100</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Cream Finance (CREAM).png">
                                        <p>Cream Finance (CREAM)</p>
                                    </td>
                                    <td class="colord">0.05</td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">0.3</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Curve DAO Token (CRV).png">
                                        <p>Curve DAO Token (CRV)</p>
                                    </td>
                                    <td class="colord">4</td>
                                    <td class="colord">15</td>
                                    <td class="colord">10</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Dai (DAI).png">
                                        <p>Dai (DAI)</p>
                                    </td>
                                    <td class="colord">3</td>
                                    <td class="colord">30</td>
                                    <td class="colord">40</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Dash (DASH).png">
                                        <p>Dash (DASH)</p>
                                    </td>
                                    <td class="colord">0.0001</td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">0.01</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Decentraland (MANA)</p>
                                    </td>
                                    <td class="colord">67</td>
                                    <td class="colord">133</td>
                                    <td class="colord">30</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/DFI.Money (YFII).png">
                                        <p>DFI.Money (YFII)</p>
                                    </td>
                                    <td class="colord">0.001</td>
                                    <td class="colord">0.015</td>
                                    <td class="colord">0.01</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>district0x (DNT)</p>
                                    </td>
                                    <td class="colord">81</td>
                                    <td class="colord">161</td>
                                    <td class="colord">80</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Ethereum (ETH).png">
                                        <p>Ethereum (ETH)</p>
                                    </td>
                                    <td class="colord">0.001</td>
                                    <td class="colord">0.02</td>
                                    <td class="colord">0.01</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Free TON (TON)</p>
                                    </td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">2</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/FunFair (FUN).png">
                                        <p>FunFair (FUN)</p>
                                    </td>
                                    <td class="colord">450</td>
                                    <td class="colord">1000</td>
                                    <td class="colord">1000</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Gemini Dollar (GUSD).png">
                                        <p>Gemini Dollar (GUSD)</p>
                                    </td>
                                    <td class="colord">5</td>
                                    <td class="colord">10</td>
                                    <td class="colord">40</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Hapi (HAPI)</p>
                                    </td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">0.2</td>
                                    <td class="colord">0.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Holo (HOT).png">
                                        <p>Holo (HOT)</p>
                                    </td>
                                    <td class="colord">2100</td>
                                    <td class="colord">5000</td>
                                    <td class="colord">3500</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Injective Protocol (INJ)</p>
                                    </td>
                                    <td class="colord">1.5</td>
                                    <td class="colord">3</td>
                                    <td class="colord">2.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Kava.io (KAVA).png">
                                        <p>Kava.io (KAVA)</p>
                                    </td>
                                    <td class="colord">1.6</td>
                                    <td class="colord">3</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Kyber Network (KNC).png">
                                        <p>Kyber Network (KNC)</p>
                                    </td>
                                    <td class="colord">3.5</td>
                                    <td class="colord">15</td>
                                    <td class="colord">15</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Lambda (LAMB).png">
                                        <p>Lambda (LAMB)</p>
                                    </td>
                                    <td class="colord">41</td>
                                    <td class="colord">600</td>
                                    <td class="colord">750</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Litecoin (LTC).png">
                                        <p>Litecoin (LTC)</p>
                                    </td>
                                    <td class="colord">0.001</td>
                                    <td class="colord">0.002</td>
                                    <td class="colord">0.001</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Loopring (LRC)</p>
                                    </td>
                                    <td class="colord">25</td>
                                    <td class="colord">100</td>
                                    <td class="colord">50</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Maker (MKR).png">
                                        <p>Maker (MKR)</p>
                                    </td>
                                    <td class="colord">0.004</td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">0.008</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Uniswap (UNI).png">
                                        <p>Uniswap (UNI)</p>
                                    </td>
                                    <td class="colord">0.02</td>
                                    <td class="colord">1.5</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/USD Coin (USDC).png">
                                        <p>USD Coin (USDC)</p>
                                    </td>
                                    <td class="colord">5</td>
                                    <td class="colord">30</td>
                                    <td class="colord">40</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Utrust (UTK).png">
                                        <p>Utrust (UTK)</p>
                                    </td>
                                    <td class="colord">50</td>
                                    <td class="colord">60</td>
                                    <td class="colord">50</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Venus (XVS)</p>
                                    </td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">0.05
                                    <td>
                                    <td class="colord">0.01</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Wrapped Bitcoin (WBTC).png">
                                        <p>Wrapped Bitcoin (WBTC)</p>
                                    </td>
                                    <td class="colord">0.0005</td>
                                    <td class="colord">0.001
                                    <td>
                                    <td class="colord">0.005</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Zilliqa Gov. token (GZIL).png">
                                        <p>Zilliqa Gov. token (GZIL)</p>
                                    </td>
                                    <td class="colord">0.001</td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">0.04</td>
                                </tr>
                            </table>
                        </div>

                        <!-- ==CRYPTOCURRENCY one for BUTTON CRYPTOCURRENCY2=== -->
                        <div class="secpartsec2">
                            <div class="boxxicurrency">
                                <div class="iconimgflex">
                                    <i class="fas fa-search">Currency</i>
                                </div><br>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Civic (CVC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>80</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>100</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>7.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Compound (COMP).png">
                                    <p>Compound (COMP)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.02</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.06</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.05</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Cosmos (ATOM).png">
                                    <p>Cosmos (ATOM)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.01</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/COTI (COTI).jpg">
                                    <p>COTI (COTI)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>10</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>150/p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>100</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Cream Finance (CREAM).png">
                                    <p>Cream Finance (CREAM)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.05</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.3</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Curve DAO Token (CRV).png">
                                    <p>Curve DAO Token (CRV)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>4</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>15</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>10</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Dai (DAI).png">
                                    <p>Dai (DAI)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>3</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>30</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>40</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Dash (DASH).png">
                                    <p>Dash (DASH)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.0001</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.01</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Decentraland (MANA)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>67</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>133</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>30</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/DFI.Money (YFII).png">
                                    <p>DFI.Money (YFII)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.001</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.015</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.01</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>district0x (DNT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>81</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>161</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>80</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Free TON (TON)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.01</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/FunFair (FUN).png">
                                    <p>FunFair (FUN)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>450</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>1000</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1000</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Gemini Dollar (GUSD).png">
                                    <p>Gemini Dollar (GUSD)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>10</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>40</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Hapi (HAPI)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Holo (HOT).png">
                                    <p>Holo (HOT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>2100</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>5000</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>3500</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Injective Protocol (INJ)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1.5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>3</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>2.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Kava.io (KAVA).png">
                                    <p>Kava.io (KAVA)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1.6</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>3</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Kyber Network (KNC).png">
                                    <p>Kyber Network (KNC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>3.5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>15</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>15</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Lambda (LAMB).png">
                                    <p>Lambda (LAMB)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>4.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>600</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>750</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Loopring (LRC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>25</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>100</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>50</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Maker (MKR).png">
                                    <p>Maker (MKR)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.004</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.01</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.008</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/USD Coin (USDC).png">
                                    <p>USD Coin (USDC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>30</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>40</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Utrust (UTK).png">
                                    <p>Utrust (UTK)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>50</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>60</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>50</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Utrust (UTK).png">
                                    <p>Venus (XVS)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.01</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.05</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.01</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Wrapped Bitcoin (WBTC).png">
                                    <p>Wrapped Bitcoin (WBTC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.0005</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.001</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.005</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Zilliqa (ZIL).png">
                                    <p>Zilliqa (ZIL)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>15</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>10</p>
                                </div>
                            </div>
                        </div> <br>


                    </div>
                </div>

                <div class="columnnP Cryptocurrencies3">
                    <div class="contenttP">
                        <div class="visacolmn">
                            <table>
                                <tr class="tr1">
                                    <th>Currency</th>
                                    <th>Minimum<br>deposit</th>
                                    <th>Minimum<br>withdrawal</th>
                                    <th>withdrawal<br>fee(floating)</th>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/MATIC Network (MATIC).png">
                                        <p>MATIC Network (MATIC)</p>
                                    </td>
                                    <td class="colord">50</td>
                                    <td class="colord">50</td>
                                    <td class="colord">25</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Meta (MTA).png">
                                        <p>Meta (MTA)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">20</td>
                                    <td class="colord">25</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/MetaHash (MHC).jpg">
                                        <p>MetaHash (MHC)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">50</td>
                                    <td class="colord">25</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/mStable USD (MUSD).png">
                                        <p>mStable USD (MUSD)</p>
                                    </td>
                                    <td class="colord">2</td>
                                    <td class="colord">30</td>
                                    <td class="colord">45</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Neo (NEO).png">
                                        <p>Neo Gas (GAS)</p>
                                    </td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">0.04</td>
                                    <td class="colord">1.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Ocean Protocol (OCEAN).png">
                                        <p>Ocean Protocol (OCEAN)</p>
                                    </td>
                                    <td class="colord">6</td>
                                    <td class="colord">25</td>
                                    <td class="colord">30</td>
                                </tr>
                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/OMG Network (OMG).png">
                                        <p>OMG Network (OMG)</p>
                                    </td>
                                    <td class="colord">4</td>
                                    <td class="colord">4</td>
                                    <td class="colord">5000000000000</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Ontology (ONT).png">
                                        <p>Ontology (ONT)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">5</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Ontology Gas (ONG).png">
                                        <p>Ontology Gas (ONG)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">10</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Pancake Swap (CAKE)</p>
                                    </td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">0.5</td>
                                    <td class="colord">0.1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/PAX Gold (PAXG).png">
                                        <p>PAX Gold (PAXG)</p>
                                    </td>
                                    <td class="colord">0.01</td>
                                    <td class="colord">0.03</td>
                                    <td class="colord">0.02</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Pickle Finance (PICKLE)</p>
                                    </td>
                                    <td class="colord">0.5</td>
                                    <td class="colord">2</td>
                                    <td class="colord">1.6</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Polkadot (DOT).png">
                                        <p>Polkadot (DOT)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">1</td>
                                    <td class="colord">0.1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/QASH (QASH).png">
                                        <p>QASH (QASH)</p>
                                    </td>
                                    <td class="colord">5</td>
                                    <td class="colord">10</td>
                                    <td class="colord">8.25</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Ren (REN).png">
                                        <p>Ren (REN)</p>
                                    </td>
                                    <td class="colord">10</td>
                                    <td class="colord">40</td>
                                    <td class="colord">40</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>renBTC (RENBTC)</p>
                                    </td>
                                    <td class="colord">0.00032</td>
                                    <td class="colord">0.00063</td>
                                    <td class="colord">0.0008</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>rReserve Rights (RSR)</p>
                                    </td>
                                    <td class="colord">360</td>
                                    <td class="colord">500</td>
                                    <td class="colord">600</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Ripple (XRP).jpg">
                                        <p>Ripple (XRP)</p>
                                    </td>
                                    <td class="colord">unlimited</td>
                                    <td class="colord">0.3</td>
                                    <td class="colord">0.25</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Serum (SRM).png">
                                        <p>Serum (SRM)</p>
                                    </td>
                                    <td class="colord">3.25</td>
                                    <td class="colord">5</td>
                                    <td class="colord">4</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Stellar (XLM).png">
                                        <p>Stellar (XLM)</p>
                                    </td>
                                    <td class="colord">unlimited</td>
                                    <td class="colord">0.3</td>
                                    <td class="colord">0.25</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="">
                                        <p>Storj (STORJ)</p>
                                    </td>
                                    <td class="colord">10</td>
                                    <td class="colord">25</td>
                                    <td class="colord">20</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/SushiSwap (SUSHI).jpg">
                                        <p>SushiSwap (SUSHI)</p>
                                    </td>
                                    <td class="colord">2</td>
                                    <td class="colord">3</td>
                                    <td class="colord">2.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Synthetix (SNX).png">
                                        <p>Synthetix (SNX)</p>
                                    </td>
                                    <td class="colord">4</td>
                                    <td class="colord">3</td>
                                    <td class="colord">2.5</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Tael (WABI).jpg">
                                        <p>Tael (WABI)</p>
                                    </td>
                                    <td class="colord">10</td>
                                    <td class="colord">100</td>
                                    <td class="colord">60</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Tether (USDT).png">
                                        <p>Tether (USDT)</p>
                                    </td>
                                    <td class="colord">5</td>
                                    <td class="colord">30</td>
                                    <td class="colord">40</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/yearn.finance (YFI).jpg">
                                        <p>yearn.finance (YFI)</p>
                                    </td>
                                    <td class="colord">0.0005</td>
                                    <td class="colord">0.00075</td>
                                    <td class="colord">0.0005</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/YFValue (YFV).png">
                                        <p>YFValue (YFV)</p>
                                    </td>
                                    <td class="colord">1</td>
                                    <td class="colord">2</td>
                                    <td class="colord">1</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Zap (ZAP).png">
                                        <p>Zap (ZAP)</p>
                                    </td>
                                    <td class="colord">60</td>
                                    <td class="colord">300</td>
                                    <td class="colord">175</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/ZCash (ZEC).png">
                                        <p>ZCash (ZEC)</p>
                                    </td>
                                    <td class="colord">0.0001</td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">0.001</td>
                                </tr>

                                <tr class="tr2crypto">
                                    <td class="tr2tdcrypto">
                                        <img src="./images/Zilliqa (ZIL).png">
                                        <p>Zilliqa (ZIL)</p>
                                    </td>
                                    <td class="colord">0.1</td>
                                    <td class="colord">15</td>
                                    <td class="colord">10</td>
                                </tr>
                            </table>
                        </div>

                        <!-- ==CRYPTOCURRENCY one for BUTTON CRYPTOCURRENCY2=== -->
                        <div class="secpartsec2">
                            <div class="boxxicurrency">
                                <div class="iconimgflex">
                                    <i class="fas fa-search">Currency</i>
                                </div><br>
                            </div>
                        </div><br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Zilliqa Gov. token (GZIL).png">
                                    <p>Zilliqa Gov. token (GZIL)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.005</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.04</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/MATIC Network (MATIC).png">
                                    <p>MATIC Network (MATIC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>50</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>50</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>25</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Meta (MTA).png">
                                    <p>Meta (MTA)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>20</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>25</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/MetaHash (MHC).jpg">
                                    <p>MetaHash (MHC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>50</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>25</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/mStable USD (MUSD).png">
                                    <p>mStable USD (MUSD)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>30</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>45</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Neo Gas (GAS).png">
                                    <p>Neo Gas (GAS)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.01</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.04</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/mStable USD (MUSD).png">
                                    <p>Ocean Protocol (OCEAN)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>6</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>25</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>30</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/OMG Network (OMG).png">
                                    <p>OMG Network (OMG)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>4</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>4</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>5000000000000</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Ontology (ONT).png">
                                    <p>Ontology (ONT)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Ontology Gas (ONG).png">
                                    <p>Ontology Gas (ONG)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>10</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Pancake Swap (CAKE)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Pancake Swap (CAKE)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/PAX Gold (PAXG).png">
                                    <p>PAX Gold (PAXG)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.01</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.03</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.02</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Pickle Finance (PICKLE)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>3</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1.6</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/QASH (QASH).png">
                                    <p>QASH (QASH)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>10</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.25</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Ren (REN).png">
                                    <p>Ren (REN)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>10</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>40</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>40</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>renBTC (RENBTC)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.00032</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.00063</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.0008</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>rReserve Rights (RSR)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>360</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>500</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>600</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Serum (SRM).png">
                                    <p>Serum (SRM)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>3.25</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>5</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>4</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Stellar (XLM).png">
                                    <p>Stellar (XLM)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>Unlimited</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.3</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.25</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="">
                                    <p>Storj (STORJ)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>10</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>25</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>20</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/SushiSwap (SUSHI).jpg">
                                    <p>SushiSwap (SUSHI)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>3</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>2.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Synthetix (SNX).png">
                                    <p>Synthetix (SNX)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>4</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>3</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>2.5</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Tael (WABI).jpg">
                                    <p>Tael (WABI)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>10</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>100</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>60</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/yearn.finance (YFI).jpg">
                                    <p>yearn.finance (YFI)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>0.0005</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>0.00075</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>0.0005</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/YFValue (YFV).png">
                                    <p>YFValue (YFV)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>1</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>2</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>1</p>
                                </div>
                            </div>
                        </div> <br>

                        <div class="secpartsec2">
                            <div class="boxxicrypto">
                                <div class="imggtextflex">
                                    <img src="./images/Zap (ZAP).png">
                                    <p>Zap (ZAP)</p>
                                </div><br>
                                <div class="twostraightti">
                                    <h4>Minimum deposit</h4>
                                    <p>60</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Minimum withdrawal</h4>
                                    <p>300</p>
                                </div>
                                <div class="twostraightti2">
                                    <h4>Withdrawal fee (floating)</h4>
                                    <p>175</p>
                                </div>
                            </div>
                        </div> <br>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================= SECTION 3 ============================================ -->
    <section class="sec3">
        <div class="divulup">
            <ul class="ulup">
                <li>New customers (under 3 months from the identity verification) have a maximum daily limit of $1,000
                    and a maximum monthly limit of $3,000</li>
                <li>Requires Address verification at least.</li>
                <li>Requires Identity verification at least.</li>
                <li>Lowered fees only apply for GBP deposits made with the UK-issued cards.</li>
            </ul>
        </div> <br><br><br>

        <div class="sec3part2">
            <h1>CARD DEPOSITS</h1>
            <p>
                <span class="spanstyli">Countries where card payments aren’t available:</span>

                Afghanistan, Algeria, Bangladesh, Bolivia, Bosnia and Herzegovina, Burundi, Cambodia, Central African
                Republic, China,
                Cuba, Democratic People's Republic of Korea (DPRK), Democratic Republic of the Congo, Ethiopia, Guam,
                Guinea Bissau,
                Guyana, Iran, Iraq, Japan, Lao People's Democratic Republic, Lebanon, Libya, Mali, Morocco, Nepal,
                Pakistan, Puerto
                Rico, Somalia, South Sudan, Sudan, Syria, Trinidad and Tobago, Tunisia, Uganda, United States Virgin
                Islands, Vanuatu,
                Venezuela, Yemen, Zimbabwe.

                Deposit payment processing time - instant. Only 3 daily successful transactions per account are allowed
                for all
                countries except those where card payments are not available. Deposits via payment cards are acceptable
                in any fiat
                currencies. In case your local currency is different from USD, EUR, GBP or RUB, it will be automatically
                converted into
                the selected deposit currency. The exchange rate and any fees associated with the transaction are
                calculated and
                deducted by your card issuer.
            </p>
        </div><br><br>

        <!-- ========CARD WITHDRAWAL TRANSFER========== -->
        <div class="sec3part2">
            <h1>CARD WITHDRAWALS</h1>

            <h2> VISA </h2>

            <p> <span class="spanstyli">Countries where card payments aren’t available:</span>
                : Afghanistan, Algeria, Argentina, Bangladesh, Bolivia, Bosnia and Herzegovina, Burundi, Cambodia,
                Central African
                Republic, China, Colombia, Cuba, Democratic People's Republic of Korea (DPRK), Democratic Republic of
                the Congo,
                Ethiopia, Guam, Guinea Bissau, Guyana, India, Iran, Iraq, Japan, Lao People's Democratic Republic,
                Lebanon, Libya, Mali,
                Morocco, Nepal, Pakistan, Puerto Rico, Somalia, South Sudan, Sudan, North Sudan, Syria, Trinidad and
                Tobago, Tunisia,
                Uganda, United States, United States Virgin Islands, Vanuatu, Venezuela, Yemen, Zimbabwe.</p>

            <p>Maximum withdrawal processing time — up to 48 hour depending on card issuing bank.</p>


            <h2> MASTERCARD </h2>
            <p> <span class="spanstyli">Countries where card payments aren’t available:</span>
                Afghanistan, Algeria, Bangladesh, Bolivia, Bosnia and Herzegovina, Burundi, Cambodia, Central African
                Republic, China,
                Cuba, Democratic People's Republic of Korea (DPRK), Democratic Republic of the Congo, Ethiopia, Guam,
                Guinea Bissau,
                Guyana, India, Iran, Iraq, Japan, Lao People's Democratic Republic, Lebanon, Libya, Mali, Morocco,
                Nepal, Pakistan,
                Puerto Rico, Somalia, Sudan, Syria, Trinidad and Tobago, Tunisia, Uganda, United States, United States
                Virgin Islands,
                Vanuatu, Venezuela, Yemen, Zimbabwe.</p>

            <p>Maximum withdrawal processing time — up to 1 hour depending on card issuing bank except for the US. Only
                10 daily
                successful transactions per each account are allowed for all countries, except for restricted and the
                US.</p>

            <p>Maximum withdrawal processing time — up to 48 hour depending on card issuing bank.</p>


        </div><br>

        <!-- ========BANK TRANSFER========== -->
        <div class="bankdiv">
            <h2> BANK TRANSFER </h2>
            <p> <span class="spanstyli">Countries allowed for ACH payments:</span> United States.</p>

            <p> <span class="spanstyli">Countries allowed for SEPA payments:</span> Andorra, Austria, Belgium,
                Bulgaria, Croatia, Cyprus, Czech Republic, Denmark, Estonia, Finland, France, Germany,
                Greece, Hungary, Iceland, Ireland, Italy, Latvia, Liechtenstein, Lithuania, Luxembourg, Malta, Monaco,
                Netherlands,
                Norway, Poland, Portugal, Romania, San Marino, Slovakia, Slovenia, Spain, Sweden, Switzerland, United
                Kingdom,
                Vatican
                City.</p>

            <p> <span class="spanstyli">Countries allowed for FASTER payments:</span> United Kingdom.</p>

            <p> <span class="spanstyli">Countries and territories where SWIFT payments aren't
                    available:</span>Afghanistan, Bahamas, Bosnia and Herzegovina, Botswana, Burundi, Cambodia, Central
                African Republic, Crimea, Cuba,
                Democratic People's Republic of Korea (DPRK), Democratic Republic of the Congo, Ethiopia, Ghana, Guam,
                Guyana, Guinea
                Bissau, Iran, Iraq, Japan, Kosovo, Lao People's Democratic Republic, Lebanon, Libya, Malawi (EUR/GBP
                only), Mali,
                Myanmar, Nicaragua, Pakistan, Panama, Puerto Rico, Somalia, South Sudan, Sudan, Syria, Trinidad and
                Tobago, Tunisia,
                Uganda, US Virgin Islands, Vanuatu, Venezuela, Yemen, Zimbabwe.</p>

            <p> Transaction processing does not include fees of correspondent banks, which may be involved in the
                deposit process. Note
                that ERECT-ONE does not charge any fees for deposits, made by Bank Transfers. Please make sure to
                contact your bank to find
                out respective fees and conditions.</p>

            <p> <span class="spanstyli">Processing time for fiat currency deposits:</span> Domestic bank transfer (ACH,
                SEPA, FasterPayment) ~ 1 business day to be credited to your ERECT-ONE account (weekends and
                bank holidays excluded). 2. International bank transfer (SWIFT) ~ 1-3 business days to be credited to
                your ERECT-ONE
                account (weekends and bank holidays excluded).</p>

            <p> <span class="spanstyli">Processing time for fiat currency withdrawals:</span>Domestic bank transfer
                (ACH, SEPA, FasterPayment) ~ 1 business day (weekends and bank holidays excluded). 2.
                International bank transfer (SWIFT) ~ 1-3 business days (weekends and bank holidays excluded). Please
                note that this is
                the time indicated for processing payments by ERECT-ONE. There can be delays from your bank side.</p>
        </div><br>

        <!-- ======== WALLET TRANSFER========== -->
        <div class="bankdiv">
            <h2> WALLET TRANSFER </h2>
            <p> <span class="spanstyli">Countries and territories where Skrill payments aren't
                    available:</span>Afghanistan, Angola, Barbados, Benin, Bosnia and Herzegovina, Burkina Faso,
                Burundi, Cape Verde, Central African
                Republic, Comoros, Crimea, Cuba, Democratic People's Republic of Korea (DPRK), Democratic Republic of
                the Congo,
                Djibouti, Eritrea, Ethiopia, Faroe Islands, French Polynesia, Gambia, Greenland, Grenada, Guadeloupe,
                Guam, Guyana,
                Guinea Bissau, Iran, Iraq, Japan, Kyrgyzstan, Lao People's Democratic Republic, Lebanon, Libya, Macao,
                Mali, Martinique,
                Namibia, New Caledonia, Niger, Nigeria, North Korea, Palau, Pakistan, Puerto Rico, Reunion, Somalia,
                Samoa, South Sudan,
                Sudan, Suriname, Syria, Syria, Tajikistan, Togo, Trinidad and Tobago, Tunisia, Turkey, Turkmenistan,
                Uganda, US Virgin
                Islands, Vanuatu, Venezuela, Yemen, Zimbabwe..</p>

            <p> <span class="spanstyli">Countries and territories where Epay payments aren't available:</span>
                Afghanistan, Albania, Algeria, Angola, USA, Bahrain, Belarus, Burkina Faso, Cambodia, Central African
                Republic, Comoros
                Union, Cuba, Cyprus, Democratic Republic of the Congo, Djibouti, East Timor Democratic Republic of
                Korea, Egypt,
                Eritrea, Guinea-Bissau, Haiti, Iran, Iraq, Israel, Jordan, Korea, Morocco, Mozambique, Myanmar,
                Nambanen, Oman,
                Palestine, Qatar, Republic of Ivory Coast, Republic of Macedonia, Republic of Vanuatu, Russia, Rwanda,
                Saudi Netlab,
                Sierra Leone, South Africa, South Sudan, Sudan, Swaziland, Syria, Republic of the Congo, Turkey, United
                Arab Emirates,
                Yemen, Zimbabwe.</p>

            <p> <span class="spanstyli">Countries allowed for FASTER payments:</span> United Kingdom.</p>

            <p> <span class="spanstyli">Countries and territories where SWIFT payments aren't
                    available:</span>Afghanistan,
                Bahamas, Bosnia and Herzegovina, Botswana, Burundi, Cambodia, Central African Republic, Crimea, Cuba,
                Democratic People's Republic of Korea (DPRK), Democratic Republic of the Congo, Ethiopia, Ghana, Guam,
                Guyana,
                Guinea
                Bissau, Iran, Iraq, Japan, Kosovo, Lao People's Democratic Republic, Lebanon, Libya, Malawi (EUR/GBP
                only),
                Mali,
                Myanmar, Nicaragua, Pakistan, Panama, Puerto Rico, Somalia, South Sudan, Sudan, Syria, Trinidad and
                Tobago,
                Tunisia,
                Uganda, US Virgin Islands, Vanuatu, Venezuela, Yemen, Zimbabwe.</p>

            <p> Transaction processing does not include fees of correspondent banks, which may be involved in the
                deposit
                process. Note
                that ERECT-ONE does not charge any fees for deposits, made by Bank Transfers. Please make sure to
                contact your bank
                to find
                out respective fees and conditions.</p>

            <p> <span class="spanstyli">Countries and territories where Advcash payments aren't available:</span>
                Afghanistan, Burundi, Belize, Central African Republic, Chad, Cote D'Ivoire, Cuba, Democratic Republic
                of the Congo,
                Eritrea, Ethiopia, Guinea, Haiti, Iran, Iraq, Liberia, Libya, Myanmar, North Korea, Puerto Rico, Kosovo,
                Somalia, Sudan,
                Syria, Uganda, USA, United States Minot Outlying Islands, Virgin Islands of the US, Yemen, Zimbabwe..
            </p>

            <p> <span class="spanstyli">Countries allowed for QIWI Wallet payments:</span>Belarus, Kazakhstan, Russia,
                Ukraine..</p>
        </div>

    </section>

    <!-- --------------- F O O T E R ----------------------  -->
    <?php
    require("./footerwmain.php");
?>