<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security settings</title>
    <link rel="shortcut icon" href="./img/erect-1-bg.png" type="image/x-icon">
</head>

<body>
    <!-- navbar  -->
    <?php
    require "./dashnav.php";
    ?>
    <!-- end of navbar  -->

    <!-- main content  -->
    <div class="container">
        <div class="wrapper">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-cogs"></i> &nbsp;
                        <h4>Security <small>settings</small></h4>
                    </h3>
                </div>
                <div class="card-body">
                    <!-- <i class="fas fa-cogs"></i>
                    <h4>Left Sided<small>(nav-tabs-right)</small></h4> -->
                    <div class="row">
                        <div class="col-5 col-sm-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                <!-- withdrawal address  -->
                                <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Withdrawal address</a>
                                <!-- verify phone number  -->
                                <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Verify Tel. &#8470;</a>
                                <!-- change password  -->
                                <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Change password</a>
                                <!-- upload document -->
                                <a class="nav-link" id="vert-tabs-upload-tab" data-toggle="pill" href="#vert-tabs-upload" role="tab" aria-controls="vert-tabs-upload" aria-selected="false">Upload document(s)</a>
                                <!-- delete account  -->
                                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Delete account</a>
                            </div>
                        </div>
                        <div class="col-7 col-sm-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                                <!-- withdrawal addre. container  -->
                                <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

                                    <div class="card">
                                        <div class="card-body register-card-body">
                                            <p class="login-box-msg">Add your bitcoin address <i class="fas fa-arrow-circle-down"></i></p>

                                            <form action="#" method="post">
                                                <!-- New wallet address  -->
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="wallet address">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-map-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- display current wallet address here  -->
                                                <div class="input-group mb-3">
                                                    <input type="email" class="form-control" placeholder="current wallet address" disabled>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-search-location"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- enter password for confirmation  -->
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-lock"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- confirm password  -->
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" placeholder="Retype password">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-lock"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="icheck-primary">
                                                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                                            <label for="agreeTerms">
                                                                I agree to the <a href="#">terms & conditions.</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-4">
                                                        <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- verify Telephone number container  -->
                                <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                                <!-- change password container  -->
                                <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                                    <div class="text-center">
                                        <div class="login-box">

                                            <div class="card">
                                                <div class="card-body login-card-body">
                                                    <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

                                                    <form action="login.html" method="post">
                                                        <div class="input-group mb-3">
                                                            <input type="password" class="form-control" placeholder="Password">
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                    <span class="fas fa-lock"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <input type="password" class="form-control" placeholder="Confirm Password">
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                    <span class="fas fa-lock"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary btn-block">Change password</button>
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                    </form>

                                                    <!-- <p class="mt-3 mb-1">
                                                        <a href="login.html">Login</a>
                                                    </p> -->
                                                </div>
                                                <!-- /.login-card-body -->
                                            </div>
                                        </div>
                                        <!-- /.login-box -->
                                    </div>
                                    <!-- end of change password  -->
                                </div>
                                <!-- upload document container  -->
                                <div class="tab-pane fade" id="vert-tabs-upload" role="tabpanel" aria-labelledby="vert-tabs-upload-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-default">
                                                <div class="card-header">
                                                    <h3 class="card-title"> File Upload for</em> verification.</small></h3>
                                                </div>
                                                <div class="card-body" id="uploadbody">
                                                    <div id="actions" class="row">
                                                        <div class="col-lg-6">
                                                            <div class="btn-group w-100">
                                                                <span class="btn btn-success col fileinput-button">
                                                                    <i class="fas fa-plus"></i>
                                                                    <span>Add files</span>
                                                                </span>
                                                                <button type="submit" class="btn btn-primary col start">
                                                                    <i class="fas fa-upload"></i>
                                                                    <span>Start upload</span>
                                                                </button>
                                                                <button type="reset" class="btn btn-warning col cancel">
                                                                    <i class="fas fa-times-circle"></i>
                                                                    <span>Cancel upload</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 d-flex align-items-center">
                                                            <div class="fileupload-process w-100">
                                                                <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table table-striped files" id="previews">
                                                        <div id="template" class="row mt-2">
                                                            <div class="col-auto">
                                                                <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                                            </div>
                                                            <div class="col d-flex align-items-center">
                                                                <p class="mb-0">
                                                                    <span class="lead" data-dz-name></span>
                                                                    (<span data-dz-size></span>)
                                                                </p>
                                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                                            </div>
                                                            <div class="col-4 d-flex align-items-center">
                                                                <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <div class="btn-group">
                                                                    <button class="btn btn-primary start">
                                                                        <i class="fas fa-upload"></i>
                                                                        <span>Start</span>
                                                                    </button>
                                                                    <button data-dz-remove class="btn btn-warning cancel">
                                                                        <i class="fas fa-times-circle"></i>
                                                                        <span>Cancel</span>
                                                                    </button>
                                                                    <button data-dz-remove class="btn btn-danger delete">
                                                                        <i class="fas fa-trash"></i>
                                                                        <span>Delete</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                    Please make sure document(s) are very clear and file size should not exceed 8MB.
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                </div>
                                <!-- delete account container  -->
                                <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">

                                    <div class="card card-danger">
                                        <div class="card-header">
                                            <h3 class="card-title">Turn off the button to delete your account </h3>
                                        </div>
                                        <div class="card-body">
                                            <!-- <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch> -->
                                            <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <h4 class="mt-4">Right Sided </h4>
                    <div class="row">
                        <div class="col-7 col-sm-9">
                            <div class="tab-content" id="vert-tabs-right-tabContent">
                                <div class="tab-pane fade show active" id="vert-tabs-right-home" role="tabpanel" aria-labelledby="vert-tabs-right-home-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-right-profile" role="tabpanel" aria-labelledby="vert-tabs-right-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-right-messages" role="tabpanel" aria-labelledby="vert-tabs-right-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-right-settings" role="tabpanel" aria-labelledby="vert-tabs-right-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-sm-3">
                            <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-right-home-tab" data-toggle="pill" href="#vert-tabs-right-home" role="tab" aria-controls="vert-tabs-right-home" aria-selected="true">Home</a>
                                <a class="nav-link" id="vert-tabs-right-profile-tab" data-toggle="pill" href="#vert-tabs-right-profile" role="tab" aria-controls="vert-tabs-right-profile" aria-selected="false">Profile</a>
                                <a class="nav-link" id="vert-tabs-right-messages-tab" data-toggle="pill" href="#vert-tabs-right-messages" role="tab" aria-controls="vert-tabs-right-messages" aria-selected="false">Messages</a>
                                <a class="nav-link" id="vert-tabs-right-settings-tab" data-toggle="pill" href="#vert-tabs-right-settings" role="tab" aria-controls="vert-tabs-right-settings" aria-selected="false">Settings</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- /.card -->
            </div>

        </div>

    </div>
    <!-- END OF main-content  -->

    <!-- footer/s  -->
    <?php
    require "./dashfooter.php";
    ?>
    <!-- end of footer/s  -->
    <!-- /. -->
    <!-- SCRIPTS FOR THIS PAGE  -->
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
</body>

</html>