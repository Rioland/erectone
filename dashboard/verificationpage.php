<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Verification page</title>
    <link rel="shortcut icon" href="./img/erect-1-bg.png" type="image/x-icon">
</head>

<body>
    <?php
    require "./dash3nav.php";
    ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container">
                <!-- header tab  -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="lead">
                                    Verify your identity
                                </h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="./securitysettings.php">Security settings</a></li>
                                    <li class="breadcrumb-item active">Verification</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.  -->

                <!-- main content  -->
                <div class="card card-info card-outline">
                    <!-- sub-header tab  -->
                    <div class="card-header text-center lead">
                        <i class="fas fa-edit"></i>
                        <label>
                            Complete the verification stages below.
                        </label>
                    </div>
                    <!-- /.  -->

                    <!-- card-body  -->
                    <div class="card-body">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <!-- Stage ONE  -->
                            <div class="col-lg-3 col-6">
                                <!-- small box1 -->
                                <div class="small-box bg-lightblue">
                                    <div class="inner">
                                        <h3>Stage 1</h3>

                                        <p>Government issued I.D</p>
                                    </div>
                                    <div class="icon">
                                        <i class="far fa-address-card"></i>
                                    </div>
                                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#exampleModal">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Stage 1 &nbsp;<small class="text-muted">Upload any of the following document(s).</small></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body card-body">
                                                <p class="lead">
                                                    <cite>NOTE:</cite> Goto <a href="./securitysettings.php">security settings</a> to upload all files then tick all corresponding uploaded document(s) here then save.
                                                </p>
                                                <hr />
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li>
                                                        <!-- drag handle -->
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <!-- checkbox -->
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                                            <label for="todoCheck1"></label>
                                                        </div>
                                                        <!-- todo text -->
                                                        <span class="text">Passport (information page)</span>
                                                        <!-- Emphasis label -->
                                                        <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                                                        <!-- General tools such as edit or delete-->
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                                            <label for="todoCheck2"></label>
                                                        </div>
                                                        <span class="text">Driver's License (front and back)</span>
                                                        <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                                            <label for="todoCheck3"></label>
                                                        </div>
                                                        <span class="text">Federal/State issued I.D card (front & back)</span>
                                                        <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <!-- <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                                            <label for="todoCheck4"></label>
                                                        </div>
                                                        <span class="text">Let theme shine like a star</span>
                                                        <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                                            <label for="todoCheck5"></label>
                                                        </div>
                                                        <span class="text">Check your messages and notifications</span>
                                                        <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                                            <label for="todoCheck6"></label>
                                                        </div>
                                                        <span class="text">Let theme shine like a star</span>
                                                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li> -->
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Confirm/Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <!-- Stage TWO -->
                            <div class="col-lg-3 col-6">
                                <!-- small box2 -->
                                <div class="small-box bg-lightblue">
                                    <div class="inner">
                                        <!-- <h3>Stage<sup style="font-size: 20px">2</sup></h3> -->
                                        <h3>Stage 2</h3>

                                        <p>Proof of Address</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#exampleModal2">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>

                                <!-- Modal 2 -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal2Label">Stage 2 &nbsp;<small class="text-muted">Upload the following document(s).</small></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body card-body">
                                                <p class="lead">
                                                    <cite>NOTE:</cite> Goto <a href="./securitysettings.php">security settings</a> to upload all files then tick all corresponding uploaded document(s) here then save.
                                                </p>
                                                <hr />
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li>
                                                        <!-- drag handle -->
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <!-- checkbox -->
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                                            <label for="todoCheck4"></label>
                                                        </div>
                                                        <!-- todo text -->
                                                        <span class="text">Bank Statement (showing name, address & bank info.) </span>
                                                        <!-- Emphasis label -->
                                                        <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                                                        <!-- General tools such as edit or delete-->
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo5" id="todoCheck5" checked>
                                                            <label for="todoCheck5"></label>
                                                        </div>
                                                        <span class="text">Utility Bill (such as electricity,water,gas,internet,waste management bill or etc. NB: mailing address must match residential address we have on file).</span>
                                                        <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Confirm/Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <!-- Stage THREE  -->
                            <div class="col-lg-3 col-6">
                                <!-- small box3 -->
                                <div class="small-box bg-lightblue">
                                    <div class="inner">
                                        <h3>Stage 3</h3>

                                        <p>Income Verification</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-hand-holding-usd"></i>
                                    </div>
                                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#exampleModal3">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>

                                <!-- Modal 3-->
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal3Label">Stage 3 &nbsp;<small class="text-muted">Upload the following document(s).</small></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body card-body">
                                                <p class="lead">
                                                    <cite>NOTE:</cite> Goto <a href="./securitysettings.php">security settings</a> to upload all files then tick all corresponding uploaded document(s) here then save.
                                                </p>
                                                <hr />
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo3" id="todoCheck7">
                                                            <label for="todoCheck7"></label>
                                                        </div>
                                                        <span class="text">Any Form 1099</span>
                                                        <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo6" id="todoCheck8">
                                                            <label for="todoCheck8"></label>
                                                        </div>
                                                        <span class="text">Any Form 1040</span>
                                                        <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo7" id="todoCheck9">
                                                            <label for="todoCheck9"></label>
                                                        </div>
                                                        <span class="text">Any W-9 form</span>
                                                        <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="" id="todoCheck10">
                                                            <label for="todoCheck10"></label>
                                                        </div>
                                                        <span class="text">Any W-2 form</span>
                                                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Confirm/Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                            <!-- Stage FOUR  -->
                            <div class="col-lg-3 col-6">
                                <!-- small box4 -->
                                <div class="small-box bg-lightblue">
                                    <div class="inner">
                                        <h3>Stage 4</h3>

                                        <p>Enchanced identity Verification</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-id-card-alt"></i>
                                    </div>
                                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#exampleModal4">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>

                                <!-- Modal 4 -->
                                <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModal4Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal4Label">Stage 4 &nbsp;<small class="text-muted">Upload the following document(s).</small></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body card-body">
                                                <p class="lead">
                                                    <cite>NOTE:</cite> Goto <a href="./securitysettings.php">security settings</a> to upload all files then tick all corresponding uploaded document(s) here then save.
                                                </p>
                                                <hr />
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo13" id="todoCheck15" checked>
                                                            <label for="todoCheck15"></label>
                                                        </div>
                                                        <span class="text">SSN card (front & back photo).</span>
                                                        <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo14" id="todoCheck16">
                                                            <label for="todoCheck16"></label>
                                                        </div>
                                                        <span class="text">A video clip confirmation. </span>
                                                        <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo15" id="todoCheck17">
                                                            <label for="todoCheck17"></label>
                                                        </div>
                                                        <span class="text">A selfie photo of you holding your I.D card and a written note of today's. </span>
                                                        <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <!-- <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="todo16" id="todoCheck18">
                                                            <label for="todoCheck18"></label>
                                                        </div>
                                                        <span class="text">Check your messages and notifications</span>
                                                        <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="handle">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </span>
                                                        <div class="icheck-primary d-inline ml-2">
                                                            <input type="checkbox" value="" name="" id="todoCheck19">
                                                            <label for="todoCheck19"></label>
                                                        </div>
                                                        <span class="text">Let theme shine like a star</span>
                                                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                                                        <div class="tools">
                                                            <i class="fas fa-edit"></i>
                                                            <i class="fas fa-trash-o"></i>
                                                        </div>
                                                    </li> -->
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Confirm/Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    </div>
                    <!-- /.  -->
                </div>
                <!-- /. content -->
            </div>
        </div>
    </div>
    <?php
    require "./dashfooter.php";
    ?>
    <!-- /. end body> -->
    <!-- this is for modal/pop-up  -->
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