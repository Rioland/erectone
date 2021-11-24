<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link rel="shortcut icon" href="./img/erect-1-bg.png" type="image/x-icon">
</head>

<body>

    <?php
    require "./dash2nav.php";
    ?>

    <div class="wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Sales</h3>
                                    <a href="javascript:void(0);">View Report</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">$18,230.00</span>
                                        <span>Sales Over Time</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <span class="text-success">
                                            <i class="fas fa-arrow-up"></i> 33.1%
                                        </span>
                                        <span class="text-muted">Since last month</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                    <canvas id="sales-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> This year
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-gray"></i> Last year
                                    </span>
                                </div>
                            </div>
                        </div>
                        <br />

                        <div class="card card-secondary card-outline">
                            <div class="card-header border-0">
                                <h3 class="card-title">Products</h3>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <!-- table headers   -->
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Amt BTC ( <i class="fab fa-btc"></i> )</th>
                                            <th>Fees (%)</th>
                                            <th>Sales</th>
                                            <th>Total (USD)</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- date and time side  -->
                                            <td>
                                                <a href="#" class="text-muted">
                                                    12:35 PM
                                                    Tuesday, 21 September 2021
                                                </a>
                                            </td>
                                            <!-- crypto-type  -->
                                            <td>
                                                <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                Some Product
                                            </td>
                                            <!-- capital amount  -->
                                            <td>$13 USD</td>
                                            <!-- BTC amt  -->
                                            <td>0.00056998</td>
                                            <!-- Percentage growth  -->
                                            <td> 1.78 % </td>
                                            <!-- sales growth  -->
                                            <td>
                                                <small class="text-success mr-1">
                                                    <i class="fas fa-arrow-up"></i>
                                                    12%
                                                </small>
                                                12,000 Sold
                                            </td>
                                            <!-- total profit in dollar -->
                                            <td> $ 160 </td>
                                            <!-- more info -->
                                            <td>
                                                <a href="#" class="text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- date and time  -->
                                            <td>
                                                <a href="#" class="text-muted">
                                                    12:35 PM
                                                    Tuesday, 21 September 2021
                                                </a>
                                            </td>
                                            <!-- crypto-currency type  -->
                                            <td>
                                                <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                Another Product
                                            </td>
                                            <!-- Capital Amt  -->
                                            <td>€ 29 EURO</td>
                                            <!-- btc amt  -->
                                            <td>0.00012341</td>
                                            <!-- Fees  -->
                                            <td>0.96 %</td>
                                            <!-- Sales growth  -->
                                            <td>
                                                <small class="text-warning mr-1">
                                                    <i class="fas fa-arrow-down"></i>
                                                    0.5%
                                                </small>
                                                123,234 Sold
                                            </td>
                                            <!-- Total profit  -->
                                            <td> $ 240</td>
                                            <!-- more info  -->
                                            <td>
                                                <a href="#" class="text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- date and time  -->
                                            <td>
                                                <a href="#" class="text-muted">
                                                    12:35 PM
                                                    Tuesday, 23 September 2021
                                                </a>
                                            </td>
                                            <!-- crytocurrency type  -->
                                            <td>
                                                <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                Amazing Product
                                            </td>
                                            <!-- Capital Price  -->
                                            <td>$1,230 USD</td>
                                            <!-- btc amt  -->
                                            <td>0.287789320 </td>
                                            <!-- Fees  -->
                                            <td>3.12 %</td>
                                            <!-- market sales  -->
                                            <td>
                                                <small class="text-danger mr-1">
                                                    <i class="fas fa-arrow-down"></i>
                                                    3%
                                                </small>
                                                198 Sold
                                            </td>
                                            <!-- total profit  -->
                                            <td> $ 37,390 </td>
                                            <!-- more info  -->
                                            <td>
                                                <a href="#" class="text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- date and time  -->
                                            <td>
                                                <a href="#" class="text-muted">
                                                    12:35 PM
                                                    Tuesday, 26 September 2021
                                                </a>
                                            </td>
                                            <!-- crypto-currency type  -->
                                            <td>
                                                <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                Perfect Item
                                                <span class="badge bg-danger">NEW</span>
                                            </td>
                                            <!-- btc amt  -->
                                            <td>0.003212002</td>
                                            <!-- Capital Amt  -->
                                            <td>$199 USD</td>
                                            <!-- Fees  -->
                                            <td> 1.1 %</td>
                                            <!-- market sale  -->
                                            <td>
                                                <small class="text-success mr-1">
                                                    <i class="fas fa-arrow-up"></i>
                                                    63%
                                                </small>
                                                87 Sold
                                            </td>
                                            <!-- Total Profit  -->
                                            <td>$ 600</td>
                                            <!-- more info -->
                                            <td>
                                                <a href="#" class="text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <!-- card footer  -->
                            <div class="card-footer">
                                <nav aria-label="Contacts Page Navigation">
                                    <ul class="pagination justify-content-center m-0">
                                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require "./dashfooter.php";
    ?>
</body>

</html>