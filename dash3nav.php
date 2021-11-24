<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erect1</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="./plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="./plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css"> -->
    <!-- bootstrap4 - dual-listbox  -->
    <link rel="stylesheet" href="https://cdnout.com/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- =============================== -->
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <!-- <link rel="stylesheet" href="./plugins/select2/css/select2.min.css"> -->
    <link rel="stylesheet" href="./plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="./plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="./plugins/dropzone/min/dropzone.min.css">
    <!-- -------------------------  -->
    <!-- =======================  -->
    <style>
        /* START OF MY STYLES  */
        .bb {
            color: black;
        }

        .color-palette {
            height: 35px;
            line-height: 35px;
            text-align: right;
            padding-right: .75rem;
        }

        .color-palette.disabled {
            text-align: center;
            padding-right: 0;
            display: block;
        }

        .color-palette-set {
            margin-bottom: 15px;
        }

        .color-palette span {
            display: none;
            font-size: 12px;
        }

        .color-palette:hover span {
            display: block;
        }

        .color-palette.disabled span {
            display: block;
            text-align: left;
            padding-left: .75rem;
        }

        .color-palette-box h4 {
            position: absolute;
            left: 1.25rem;
            margin-top: .75rem;
            color: rgba(255, 255, 255, 0.8);
            font-size: 12px;
            display: block;
            z-index: 7;
        }

        .dashnav {
            position: fixed;
        }

        /* ./END OF MY STYLE  */
    </style>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed">

    <!-- <body> -->
    <div class="wrapper">
        <!-- Preloader -->
        <?php
        require "./preloader.php";
        ?>
        <!-- ======= End of Preloader =========  -->

        <!-- Navbar -->
        <!-- <div class="dashnav"> -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="./index.php" class="navbar-brand">
                    <img src="./img/erect.jpg" alt="ErectOne logo" class="brand-image img-circle elevation-3" style="opacity: .8; max-width:3rem;">
                    <span class="brand-text font-weight-light">Erect1</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- ---- Left navbar links ---- -->
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li id="bs" class="nav-item">
                            <a href="" class="nav-link">BUY/SELL</a>
                        </li>
                        <li id="tr" class="nav-item">
                            <a href="./trade.php" class="nav-link">TRADE</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Settings</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <!-- <li><a href="#" class="dropdown-item">CARDS </a></li> -->
                                <li><a href="./dashboard/finance.php" class="dropdown-item">FINANCE </a></li>
                                <li><a href="./dashboard/verificationpage.php" class="dropdown-item"> VERIFICATION </a></li>
                                <li class="dropdown-divider"></li>

                                <!-- Level two dropdown-->
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">My Services...</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                        <li><a href="./dashboard/finance.php" class="dropdown-item">AFFILIATES</a></li>
                                </li>

                                <!-- Level three dropdown-->
                                <li class="dropdown-submenu">
                                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">more >> </a>
                                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                        <li><a href="#" class="dropdown-item">LOANS</a></li>
                                        <li><a href="#" class="dropdown-item">INVESTMENT</a></li>
                                    </ul>
                                </li>
                                <!-- End Level three -->

                                <li><a href="#" class="dropdown-item">MARGIN TRADING</a></li>
                                <li><a href="#" class="dropdown-item">STAKES</a></li>
                            </ul>
                        </li>
                        <!-- End Level two -->
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a href="./card.php" class="nav-link">CARDS</a>
                    </li>
                    </ul>

                    <!-- <div class="btn-group">
                        <button type="button" class="btn btn-info">Username@admin.com</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#" style="color: black;">Profile</a>
                            <a class="dropdown-item" href="#" style="color: black;">Account Activities </a>
                            <a class="dropdown-item" href="#" style="color: black;">Transaction Statement</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" style="color: black;">LOG OUT</a>
                        </div>
                    </div> -->

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.END of left navbar links -->

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="./messagepage.php">
                            <i class="fas fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="./img/avatar2.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="./img/avatar 4.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="./img/avatar6.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="./dashboard/messagepage.php" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- /. end of message dropdown -->
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="./notificationcenter.php">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">18</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">18 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-user-cog"></i> 3 security settings
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">4hrs</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 uploaded document
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="./dashboard/notificationcenter.php" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <!-- /. end of notification  -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
                <!-- /. end Right Navbar  -->
            </div>
        </nav>
        <!-- </div> -->
        <!-- /.navbar -->
        <br /><br />

        <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <!-- alert or email notification here -->
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    Info alert preview. This alert is dismissable.
                    Your email has not been verified, please <a href="#" class="card-link">click here</a> to verify your email address.
                </div>
                <!-- ======== ./ =====  -->
                <!-- second header tab  -->
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- WALLETS DEY HERE  -->
                        <div class="navbar-expand ml-auto float-sm-left">
                            <!-- Left navbar links -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> <i class="fas fa-dollar-sign"></i><?php echo $dollar; ?> </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#"><i class="fas fa-euro-sign"></i> <?php echo $euro; ?></a></li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fab fa-btc"></i> <?php echo $btc; ?> </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="#"><i class="fab fa-ethereum"></i> <?php echo $eth; ?> </a> </li>
                            </ul>
                        </div>
                    </div><!-- /.col -->

                    <div class="col-sm-6">
                        <!-- withdraw amd deposit  -->
                        <div class="navbar navbar-expand mr-auto float-sm-right">
                            <ul class="navbar-nav">

                                <li class="nav-item mr-1">
                                    <a href="./dashboard/deposit.php">
                                        <button type="button" class="btn btn-block btn-success">Deposit <i class="fas fa-level-down-alt"></i>
                                        </button>
                                    </a>
                                </li>

                                <li class="nav-item ml-1">
                                    <a href="./dashboard/deposit.php">
                                        <button type="button" class="btn btn-block btn-primary">Withdraw
                                            <i class="fas fa-level-up-alt"></i>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <!-- <div class="content"> -->

        <!-- </div> -->
        <!-- /.content -->
        <!-- </div> -->
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="pad p-3 control-sidebar-content">
                <br /><br />
                <!-- user dropdown-button acccount -->
                <div class="btn-group">
                    <?php
                    $name = explode(" ", $USER->name);

                    ?>
                    <button type="button" class="btn btn-info"><?php echo $name[0]; ?></button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="./dashboard/profilepage.php" style="color: black;"><i class="fas fa-user-circle"></i> &nbsp; My Profile</a>
                        <a class="dropdown-item" href="./dashboard/notificationcenter.php" style="color: black;"><i class="far fa-address-card"></i> Account Activities </a>
                        <a class="dropdown-item" href="./dashboard/securitysettings.php" style="color: black;"><i class="fas fa-user-shield"></i>&nbsp; Security Settings</a>
                        <a class="dropdown-item" href="./dashboard/transactionpage.php" style="color: black;"><i class="fas fa-file-invoice-dollar"></i>&nbsp; Transaction Statement</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./logout.php" style="color: black;"><i class="fas fa-sign-out-alt"></i>&nbsp; LOG OUT</a>
                    </div>
                </div>
                <!-- === / == -->
                <hr class="mb-2">

                <!-- <br /> -->
                <h4>
                    News and Updates
                </h4>
                <h5>
                    Promo! Promo!! Promo!!!
                </h5>
                <!-- RED ALERT  -->
                <?php

                $q = "SELECT * FROM `notification` WHERE `reciverid`=?";
                $pstm = $connection->prepare($q);
                $pstm->bindValue(1, $USER->id);
                $pstm->execute();
                for ( $i=0; $i< $pstm->rowCount();$i++) {
                    $data = $pstm->fetch();
                    
                ?>
                    <?php
                    if ($data->type == "danger") {

                    ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" id="<?php echo $data->id;   ?>" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                            <?php echo $data->broadcast ?>
                        </div>
                    <?php
                    } else if ($data->type == "warning") {

                    ?>

                        <!-- ==========  -->
                        <!-- BLUE ALERT  -->
                        <!-- <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    Info alert preview. This alert is dismissable.
                </div> -->
                        <!-- ============  -->
                        <!-- YELLOW ALERT  -->
                        <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" id="<?php echo $data->id;   ?>" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                            <?php echo $data->broadcast ?>
                        </div>
                    <?php
                    } else if ($data->type == "success") {

                    ?>
                        <!-- ===========  -->
                        <!-- GREEN ALERT  -->
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" id="<?php echo $data->id;   ?>" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Alert!</h5>
                            <?php echo $data->broadcast ?>
                        </div>

                <?php
                    }
                }
                ?>
                <!-- ==========  -->
                <!-- ./ END OF ALERTS  -->
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- =========./ End of Dasboard navigations ======= -->

        <script>
    $(document).ready(function () {


   $("#bs a").click(function (e) { 
       e.preventDefault();
       $.ajax({
           type: "post",
           url: "auth",
           data: {
               router:"./pages/buy_sell.php"
           },
           dataType: "text",
           success: function (response) {
               window.location.reload();
           }
       });
       
   });



        // close tnotification
        $(".close").click(function (e) { 
            e.preventDefault();
            let id=$(this).attr("id");
            $.ajax({
                type: "post",
                url: "auth",
                data: {
                    id:id,
                    action:"detetenotif"
                },
                dataType: "text",
                success: function (response) {
                    console.log(response);
                    // alert(response)
                }
            });
            
        });
    });

        </script>