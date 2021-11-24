<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <style>
        .cen {
            text-align: center;
        }

        .paa {
            padding: 6px;
        }
    </style>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/erect-1-bg.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- ============= END OF HEADER ================  -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- table head  -->
                            <div class="card-header">
                                <h3 class="card-title">ADMIN Table</h3>
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
                            <!-- /. end of table head  -->
                            <!-- ./card-header -->
                            <div class="card-body">
                                <div style="overflow-x: auto;">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>serial no#</th>
                                                <th>Username</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Address</th>
                                                <th>Card-Type</th>
                                                <th>E-mail</th>
                                                <th>Phone number</th>
                                                <th>Password</th>
                                                <th>SSN</th>
                                                <th class="cen">Dollar Wallet ($)</th>
                                                <th class="cen">Euro Wallet (&euro;)</th>
                                                <th class="cen">BTC Wallet (&#8383;) </th>
                                                <th class="cen">ETH Wallet (<i class="fab fa-ethereum"></i>)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td>183</td>
                                                <td>John Doe</td>
                                                <td>11-7-2014</td>
                                                <td>Verified</td>
                                                <td>Bahicken flank fatback doner.</td>
                                                <td> master card</td>
                                                <td>Approved@admin.com</td>
                                                <td>+1 (784) 474 6873</td>
                                                <td>thisismypassword</td>
                                                <td>344-37-4743</td>
                                                <!-- Dollar wallet  -->
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">$56,768.08</button>
                                                        <input type="number" class="paa" name="" id="" placeholder="input amount" />
                                                        <button type="button" class="btn btn-info">Update!</button>
                                                    </div>
                                                </td>
                                                <!-- Euro wallet  -->
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">&euro;5,768.08 </button>
                                                        <input type="number" class="paa" name="" id="" placeholder="input amount" />
                                                        <button type="button" class="btn btn-info">Update!</button>
                                                    </div>
                                                </td>
                                                <!-- BTC wallet  -->
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">&#8383;56,768.08</button>
                                                        <input type="number" class="paa" name="" id="" placeholder="input amount" />
                                                        <button type="button" class="btn btn-info">Update!</button>
                                                    </div>
                                                </td>
                                                <!-- Ethereum wallet  -->
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">&diams;8,768.18 </button>
                                                        <input type="number" class="paa" name="" id="" placeholder="input amount" />
                                                        <button type="button" class="btn btn-info">Update!</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="expandable-body">
                                                <td colspan="14">

                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Admin Message</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <!-- for news box/alert  -->
                                                                <div class="col-3">
                                                                    <label class="col-form-label paa"> News Message</label>
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" placeholder="write something..." class="form-control">
                                                                        <span class="input-group-append">
                                                                            <button type="button" class="btn btn-info btn-flat">Post!</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.  -->
                                                                <!-- For Promo Box  -->
                                                                <div class="col-4">
                                                                    <label class="col-form-label paa"> Promo Message</label>
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" placeholder="write something..." class="form-control">
                                                                        <span class="input-group-append">
                                                                            <button type="button" class="btn btn-info btn-flat">Post!</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.  -->
                                                                <!-- For Update Box  -->
                                                                <div class="col-5">
                                                                    <label class="col-form-label paa"> Updates/Account Info Message</label>
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" placeholder="write something..." class="form-control">
                                                                        <span class="input-group-append">
                                                                            <button type="button" class="btn btn-info btn-flat">Post!</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.  -->
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.  -->
                                                    <!-- <p>
                                                    NA HERE the card details go dey oooo!!!!!!
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </p> -->
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>219</td>
                                                <td>Alexander Pierce</td>
                                                <td>11-7-2014</td>
                                                <td>Pending</td>
                                                <td>Bahicken flank fatback doner.</td>
                                                <td> master card</td>
                                                <td>Approved@admin.com</td>
                                                <td>+1 (784) 474 6873</td>
                                                <td>thisismypassword</td>
                                                <td>344-37-4743</td>
                                                <!-- Dollar wallet  -->
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">$56,768.08</button>
                                                        <input type="number" class="paa" name="" id="" placeholder="input amount" />
                                                        <button type="button" class="btn btn-info">Update!</button>
                                                    </div>
                                                </td>
                                                <!-- Euro wallet  -->
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">&euro;5,768.08 </button>
                                                        <input type="number" class="paa" name="" id="" placeholder="input amount" />
                                                        <button type="button" class="btn btn-info">Update!</button>
                                                    </div>
                                                </td>
                                                <!-- BTC wallet  -->
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">&#8383;56,768.08</button>
                                                        <input type="number" class="paa" name="" id="" placeholder="input amount" />
                                                        <button type="button" class="btn btn-info">Update!</button>
                                                    </div>
                                                </td>
                                                <!-- Ethereum wallet  -->
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">&diams;8,768.18 </button>
                                                        <input type="number" class="paa" name="" id="" placeholder="input amount" />
                                                        <button type="button" class="btn btn-info">Update!</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="expandable-body">
                                                <td colspan="14">

                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Admin Message</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <!-- for news box/alert  -->
                                                                <div class="col-3">
                                                                    <label class="col-form-label paa"> News Message</label>
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" placeholder="write something..." class="form-control">
                                                                        <span class="input-group-append">
                                                                            <button type="button" class="btn btn-info btn-flat">Post!</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.  -->
                                                                <!-- For Promo Box  -->
                                                                <div class="col-4">
                                                                    <label class="col-form-label paa"> Promo Message</label>
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" placeholder="write something..." class="form-control">
                                                                        <span class="input-group-append">
                                                                            <button type="button" class="btn btn-info btn-flat">Post!</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.  -->
                                                                <!-- For Update Box  -->
                                                                <div class="col-5">
                                                                    <label class="col-form-label paa"> Updates/Account Info Message</label>
                                                                    <div class="input-group input-group-sm">
                                                                        <input type="text" placeholder="write something..." class="form-control">
                                                                        <span class="input-group-append">
                                                                            <button type="button" class="btn btn-info btn-flat">Post!</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <!-- /.  -->
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="true">
                                                <td>657</td>
                                                <td>Alexander Pierce</td>
                                                <td>11-7-2014</td>
                                                <td>Approved</td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                <td> master card</td>
                                                <td>Approved@admin.com</td>
                                                <td>+1 (784) 474 6873</td>
                                            </tr>
                                            <tr class="expandable-body">
                                                <td colspan="8">
                                                    <p>
                                                        NA HERE the card details go dey oooo!!!!!!

                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td>175</td>
                                                <td>Mike Doe</td>
                                                <td>11-7-2014</td>
                                                <td>Denied</td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                <td> master card</td>
                                                <td>Approved@admin.com</td>
                                                <td>+1 (784) 474 6873</td>
                                            </tr>
                                            <tr class="expandable-body">
                                                <td colspan="14">
                                                    <p>
                                                        NA HERE the card details go dey oooo!!!!!!

                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                    </p>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <!-- -------------  -->
                            <!-- Pagination is here  -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">

                                        <ul class="pagination pagination-sm m-0 float-right">
                                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- /. end of pagination  -->

                        </div>
                        <!-- /.card --><br /><br /><br />
                    </div>

                </div>
            </div>
        </section>

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2015-2023 <a href="index.php">erect one</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>