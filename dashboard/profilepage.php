<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="shortcut icon" href="./img/erect-1-bg.png" type="image/x-icon">
    <!-- my style  -->
    <!-- 
        Read documentation here 
             https://select2.org/getting-started/basic-usage
     - -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- /. end of select2  -->
    <!-- /.-  -->
</head>

<body>
    <!-- Always use dashfooter at the end of everyscript with this dashnav  -->
    <?php
    require "./dashnav.php";
    ?>
    <!-- =/.==== ===  -->
    <div class="container">
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Profile</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">User Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">

                                <!-- Profile Image -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <!-- img -->
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="./img/avatar6.png" alt="User profile picture">
                                        </div>

                                        <h3 class="profile-username text-center">Nina Mcintire</h3>
                                        <!-- if verified use this  -->
                                        <p class="text-muted text-center"><i class="fas fa-user-check"></i> verified</p>
                                        <!-- ================================  -->
                                        <!-- If NOT verified use this below  -->
                                        <p class="text-muted text-center"><i class="fas fa-ban"></i> UNverified</p>
                                        <!-- You should use one at a time  -->
                                        <!-- ./ ============= =============  -->
                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Followers</b> <a class="float-right">1,322</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Following</b> <a class="float-right">543</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Referrals</b> <a class="float-right">13,287</a>
                                            </li>
                                        </ul>
                                        <!-- ==== follow button ====  -->
                                        <a href="#" class="btn btn-primary btn-block"><b>view</b></a>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <!-- About Me Box -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">About Me</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- Username  -->
                                        <strong><i class="fas fa-user-tag"></i> Username</strong>

                                        <p class="text-muted">
                                            My username should display here..
                                        </p>
                                        <hr>
                                        <!-- ==== ./ ===  -->
                                        <!-- --- Email Address ----  -->
                                        <strong><i class="fas fa-at"></i> Email</strong>
                                        <p class="text-muted">myemailaddress@email.com</p>
                                        <hr>
                                        <!-- ====================  -->
                                        <!-- address  -->
                                        <strong><i class="far fa-address-book"></i> Address</strong>
                                        <p class="text-muted">
                                            5842 La Mirada Ave.
                                            Los Angeles, CA 90038.
                                        </p>
                                        <hr>
                                        <!-- . /address  -->
                                        <!-- State and COuntry  -->
                                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                                        <p class="text-muted">Malibu, California</p>
                                        <hr>
                                        <!-- . /=== ==== -->
                                        <!-- Referral link  -->
                                        <strong><i class="fas fa-link"></i> Referral Link</strong>
                                        <p class="text-muted"> make the link copy-able</p>
                                        <hr>
                                        <!--  /. === ==== -->

                                        <!-- <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                        <p class="text-muted">
                                            <span class="tag tag-danger">UI Design</span>
                                            <span class="tag tag-success">Coding</span>
                                            <span class="tag tag-info">Javascript</span>
                                            <span class="tag tag-warning">PHP</span>
                                            <span class="tag tag-primary">Node.js</span>
                                        </p>

                                        <hr> -->
                                        <!-- Bio also known as self description/summary   -->
                                        <strong><i class="far fa-file-alt mr-1"></i> Bio</strong>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                                        <!--  /. === ==== -->
                                        <!-- Tel Number -->
                                        <strong><i class="fas fa-phone-square-alt"></i> Tel. &#8470;</strong>
                                        <p class="text-muted"> +1 (233) 676 0232</p>
                                        <hr>
                                        <!--  /. === ==== -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->

                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="activity">
                                                <!-- Post -->
                                                <div class="post">
                                                    <div class="user-block">
                                                        <img class="img-circle img-bordered-sm" src="./img/avatar 4.jpg" alt="user image">
                                                        <span class="username">
                                                            <a href="#">Jonathan Burke Jr.</a>
                                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                        </span>
                                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <p>
                                                        Lorem ipsum represents a long-held tradition for designers,
                                                        typographers and the like. Some people hate it and argue for
                                                        its demise, but others ignore the hate as they create awesome
                                                        tools to help create filler text for everyone from bacon lovers
                                                        to Charlie Sheen fans.
                                                    </p>

                                                    <p>
                                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                                        <span class="float-right">
                                                            <a href="#" class="link-black text-sm">
                                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                                            </a>
                                                        </span>
                                                    </p>

                                                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                                </div>
                                                <!-- /.post -->

                                                <!-- Post -->
                                                <div class="post clearfix">
                                                    <div class="user-block">
                                                        <img class="img-circle img-bordered-sm" src="./img/photo-14947.jpg" alt="User Image">
                                                        <span class="username">
                                                            <a href="#">Sarah Ross</a>
                                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                        </span>
                                                        <span class="description">Sent you a message - 3 days ago</span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <p>
                                                        Lorem ipsum represents a long-held tradition for designers,
                                                        typographers and the like. Some people hate it and argue for
                                                        its demise, but others ignore the hate as they create awesome
                                                        tools to help create filler text for everyone from bacon lovers
                                                        to Charlie Sheen fans.
                                                    </p>

                                                    <form class="form-horizontal">
                                                        <div class="input-group input-group-sm mb-0">
                                                            <input class="form-control form-control-sm" placeholder="Response">
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-danger">Send</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.post -->

                                                <!-- Post -->
                                                <div class="post">
                                                    <div class="user-block">
                                                        <img class="img-circle img-bordered-sm" src="./img/avta.jpg" alt="User Image">
                                                        <span class="username">
                                                            <a href="#">Adam Jones</a>
                                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                        </span>
                                                        <span class="description">Posted 5 photos - 5 days ago</span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <div class="row mb-3">
                                                        <div class="col-sm-6">
                                                            <img class="img-fluid" src="./img/avatar6.png" alt="Photo">
                                                        </div>
                                                        <!-- /.col -->
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <img class="img-fluid mb-3" src="./img/photo-14947.jpg" alt="Photo">
                                                                    <img class="img-fluid" src="./img/photo3.jpg" alt="Photo">
                                                                </div>
                                                                <!-- /.col -->
                                                                <div class="col-sm-6">
                                                                    <img class="img-fluid mb-3" src="./img/photo4.jpg" alt="Photo">
                                                                    <img class="img-fluid" src="./img/photo1.png" alt="Photo">
                                                                </div>
                                                                <!-- /.col -->
                                                            </div>
                                                            <!-- /.row -->
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.row -->

                                                    <p>
                                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                                        <span class="float-right">
                                                            <a href="#" class="link-black text-sm">
                                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                                            </a>
                                                        </span>
                                                    </p>
                                                    <form class="form-horizontal">
                                                        <div class="input-group input-group-sm mb-0">
                                                            <input class="form-control form-control-sm" placeholder="Type a comment">
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-info">comment</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.post -->

                                                <div class="post">
                                                    <div class="col-lg-12">

                                                        <div class="card">
                                                            <div class="card-header border-0">
                                                                <h3 class="card-title">Online Store Overview</h3>
                                                                <div class="card-tools">
                                                                    <a href="#" class="btn btn-sm btn-tool">
                                                                        <i class="fas fa-download"></i>
                                                                    </a>
                                                                    <a href="#" class="btn btn-sm btn-tool">
                                                                        <i class="fas fa-bars"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                                                    <p class="text-success text-xl">
                                                                        <i class="ion ion-ios-refresh-empty"></i>
                                                                    </p>
                                                                    <p class="d-flex flex-column text-right">
                                                                        <span class="font-weight-bold">
                                                                            <i class="ion ion-android-arrow-up text-success"></i> 12%
                                                                        </span>
                                                                        <span class="text-muted">CONVERSION RATE</span>
                                                                    </p>
                                                                </div>
                                                                <!-- /.d-flex -->
                                                                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                                                    <p class="text-warning text-xl">
                                                                        <i class="ion ion-ios-cart-outline"></i>
                                                                    </p>
                                                                    <p class="d-flex flex-column text-right">
                                                                        <span class="font-weight-bold">
                                                                            <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                                                                        </span>
                                                                        <span class="text-muted">SALES RATE</span>
                                                                    </p>
                                                                </div>
                                                                <!-- /.d-flex -->
                                                                <div class="d-flex justify-content-between align-items-center mb-0">
                                                                    <p class="text-danger text-xl">
                                                                        <i class="ion ion-ios-people-outline"></i>
                                                                    </p>
                                                                    <p class="d-flex flex-column text-right">
                                                                        <span class="font-weight-bold">
                                                                            <i class="ion ion-android-arrow-down text-danger"></i> 1%
                                                                        </span>
                                                                        <span class="text-muted">REFERRALS RATE</span>
                                                                    </p>
                                                                </div>
                                                                <!-- /.d-flex -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.col-md-6 -->
                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="timeline">
                                                <!-- The timeline -->
                                                <div class="timeline timeline-inverse">
                                                    <!-- timeline time label -->
                                                    <div class="time-label">
                                                        <span class="bg-danger">
                                                            10 Feb. 2014
                                                        </span>
                                                    </div>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <div>
                                                        <i class="fas fa-envelope bg-primary"></i>

                                                        <div class="timeline-item">
                                                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                                            <div class="timeline-body">
                                                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                                quora plaxo ideeli hulu weebly balihoo...
                                                            </div>
                                                            <div class="timeline-footer">
                                                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <!-- timeline item -->
                                                    <div>
                                                        <i class="fas fa-user bg-info"></i>

                                                        <div class="timeline-item">
                                                            <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                            <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <!-- timeline item -->
                                                    <div>
                                                        <i class="fas fa-comments bg-warning"></i>

                                                        <div class="timeline-item">
                                                            <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                                            <div class="timeline-body">
                                                                Take me to your leader!
                                                                Switzerland is small and neutral!
                                                                We are more like Germany, ambitious and misunderstood!
                                                            </div>
                                                            <div class="timeline-footer">
                                                                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <!-- timeline time label -->
                                                    <div class="time-label">
                                                        <span class="bg-success">
                                                            3 Jan. 2014
                                                        </span>
                                                    </div>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <div>
                                                        <i class="fas fa-camera bg-purple"></i>

                                                        <div class="timeline-item">
                                                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                                            <div class="timeline-body">
                                                                <img src="https://placehold.it/150x100" alt="...">
                                                                <img src="https://placehold.it/150x100" alt="...">
                                                                <img src="https://placehold.it/150x100" alt="...">
                                                                <img src="https://placehold.it/150x100" alt="...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END timeline item -->
                                                    <div>
                                                        <i class="far fa-clock bg-gray"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <!-- this is form for settings edit  -->
                                            <div class="tab-pane" id="settings">
                                                <form class="form-horizontal">
                                                    <!-- last name  -->
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputName" placeholder="surname">
                                                        </div>
                                                    </div>
                                                    <!-- first name  -->
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputName" placeholder="first name">
                                                        </div>
                                                    </div>
                                                    <!-- address  -->
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputName" placeholder="home address">
                                                        </div>
                                                    </div>
                                                    <!-- username :note that it can only be changed once after that the input will be disabled -->
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Email Address  -->
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                </div>
                                                                <input type="email" class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Telephone Number   -->
                                                    <div class="form-group row">
                                                        <label for="inputName2" class="col-sm-2 col-form-label">Tel. &#8470;</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputExperience" class="col-sm-2 col-form-label">Bio</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" id="inputExperience" placeholder="Write a brief description of yourself"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Update Profile Photo</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">Upload</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <button type="submit" class="btn btn-danger">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->

                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->

            </div>
            <!-- /.content-wrapper -->
        </div>
    </div>

    <!-- Always use dashnav at top of everyscript with this dashfooter  -->
    <?php
    require "./dashfooter.php";
    ?>

    <!-- /. -->
    <!-- for stepper  -->
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper@1.7.0/dist/js/bs-stepper.min.js"></script>
    <!-- ---- For inputs -----  -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/inputmask/jquery.inputmask.min.js"></script>
    <!------- /. ----->
    <!-- Select2 -->
    <script src="./plugins/select2/js/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="./plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="./plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="./plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="./plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- dropzonejs -->
    <script src="./plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js"></script>
    <!-- ====================  -->
    <!-- bs-custom-file-input -->
    <script src="./plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <!-- Bootstrap4 Duallistbox -->
    <script src="https://cdnout.com/bootstrap4-duallistbox"></script>
    <!-- /.  -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="./dist/js/pages/dashboard3.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <!-- for cb custom input  -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

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
            })
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

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // Visit "https://www.dropzonejs.com" @dropzone.js documentation  for more examples and
        // information about the plugin.
        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
    <!-- jQuery UI 1.11.4 -->
    <script src="./plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- ============================  -->
    <!-- for cb custom input  -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

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
            })
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

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // Visit "https://www.dropzonejs.com" @dropzone.js documentation  for more examples and
        // information about the plugin.
        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone("#uploadbody", { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
    <!-- -----------------------------------  -->
    <!-- --------  -->
</body>

</html>