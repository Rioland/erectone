<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All posts</title>
    <link rel="shortcut icon" href="./img/erect-1-bg.png" type="image/x-icon">
</head>

<body>
    <!-- navbar  -->
    <?php
    require "./dashnav.php";
    ?>
    <!-- /.  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card card-default card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Tell everyone here.</h5>
                        </div>
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="inputExperience" class="col-sm-2 col-form-label"> My post</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputExperience" placeholder="Post something on your mind"></textarea>
                                </div>
                            </div>
                            <div class="p-1">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Share Photo</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" multiple>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file(s)</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            <a href="#" class="btn btn-primary">Post Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-primary card-outline">

            <!-- Card header  -->
            <div class="card-header">
                <h3 card-title m-0>
                    Showing all post...
                </h3>
            </div>
            <!-- /.  -->

            <div class="card-body pb-0">
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">

                    <!-- Main content -->
                    <div class="content">
                        <div class="container">
                            <!-- row  -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Box Comment -->
                                    <div class="card card-widget">
                                        <div class="card-header">
                                            <div class="user-block">
                                                <img class="img-circle" src="./dist/img/user1-128x128.jpg" alt="User Image">
                                                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                                                <span class="description">Shared publicly - 7:30 PM Today</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" title="Mark as read">
                                                    <i class="far fa-circle"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <img class="img-fluid pad" src="./dist/img/photo2.png" alt="Photo">

                                            <p>I took this photo this morning. What do you guys think?</p>
                                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                                            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                                            <span class="float-right text-muted">127 likes - 3 comments</span>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer card-comments">
                                            <div class="card-comment">
                                                <!-- User image -->
                                                <img class="img-circle img-sm" src="./dist/img/user3-128x128.jpg" alt="User Image">

                                                <div class="comment-text">
                                                    <span class="username">
                                                        Maria Gonzales
                                                        <span class="text-muted float-right">8:03 PM Today</span>
                                                    </span><!-- /.username -->
                                                    It is a long established fact that a reader will be distracted
                                                    by the readable content of a page when looking at its layout.
                                                </div>
                                                <!-- /.comment-text -->
                                            </div>
                                            <!-- /.card-comment -->
                                            <div class="card-comment">
                                                <!-- User image -->
                                                <img class="img-circle img-sm" src="./dist/img/user4-128x128.jpg" alt="User Image">

                                                <div class="comment-text">
                                                    <span class="username">
                                                        Luna Stark
                                                        <span class="text-muted float-right">8:03 PM Today</span>
                                                    </span><!-- /.username -->
                                                    It is a long established fact that a reader will be distracted
                                                    by the readable content of a page when looking at its layout.
                                                </div>
                                                <!-- /.comment-text -->
                                            </div>
                                            <!-- /.card-comment -->
                                        </div>
                                        <!-- /.card-footer -->
                                        <div class="card-footer">
                                            <form action="#" method="post">
                                                <img class="img-fluid img-circle img-sm" src="./dist/img/user4-128x128.jpg" alt="Alt Text">
                                                <!-- .img-push is used to add margin to elements next to floating images -->
                                                <div class="img-push">
                                                    <form class="form-horizontal">
                                                        <div class="input-group input-group-sm mb-0">
                                                            <input class="form-control form-control-sm" placeholder="Type a comment">
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-info">comment</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <!-- Box Comment -->
                                    <div class="card card-widget">
                                        <div class="card-header">
                                            <div class="user-block">
                                                <img class="img-circle" src="./dist/img/user1-128x128.jpg" alt="User Image">
                                                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                                                <span class="description">Shared publicly - 7:30 PM Today</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" title="Mark as read">
                                                    <i class="far fa-circle"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <!-- /.card-tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <!-- post text -->
                                            <p>Far far away, behind the word mountains, far from the
                                                countries Vokalia and Consonantia, there live the blind
                                                texts. Separated they live in Bookmarksgrove right at</p>

                                            <p>the coast of the Semantics, a large language ocean.
                                                A small river named Duden flows by their place and supplies
                                                it with the necessary regelialia. It is a paradisematic
                                                country, in which roasted parts of sentences fly into
                                                your mouth.</p>

                                            <!-- Attachment -->
                                            <div class="attachment-block clearfix">
                                                <img class="attachment-img" src="./dist/img/photo1.png" alt="Attachment Image">

                                                <div class="attachment-pushed">
                                                    <h4 class="attachment-heading"><a href="https://www.lipsum.com/">Lorem ipsum text generator</a>
                                                    </h4>

                                                    <div class="attachment-text">
                                                        Description about the attachment can be placed here.
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                                    </div>
                                                    <!-- /.attachment-text -->
                                                </div>
                                                <!-- /.attachment-pushed -->
                                            </div>
                                            <!-- /.attachment-block -->

                                            <!-- Social sharing buttons -->
                                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                                            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                                            <span class="float-right text-muted">45 likes - 2 comments</span>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer card-comments">
                                            <div class="card-comment">
                                                <!-- User image -->
                                                <img class="img-circle img-sm" src="./dist/img/user3-128x128.jpg" alt="User Image">

                                                <div class="comment-text">
                                                    <span class="username">
                                                        Maria Gonzales
                                                        <span class="text-muted float-right">8:03 PM Today</span>
                                                    </span><!-- /.username -->
                                                    It is a long established fact that a reader will be distracted
                                                    by the readable content of a page when looking at its layout.
                                                </div>
                                                <!-- /.comment-text -->
                                            </div>
                                            <!-- /.card-comment -->
                                            <div class="card-comment">
                                                <!-- User image -->
                                                <img class="img-circle img-sm" src="./dist/img/user5-128x128.jpg" alt="User Image">

                                                <div class="comment-text">
                                                    <span class="username">
                                                        Nora Havisham
                                                        <span class="text-muted float-right">8:03 PM Today</span>
                                                    </span><!-- /.username -->
                                                    The point of using Lorem Ipsum is that it hrs a morer-less
                                                    normal distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like readable English.
                                                </div>
                                                <!-- /.comment-text -->
                                            </div>
                                            <!-- /.card-comment -->
                                        </div>
                                        <!-- /.card-footer -->
                                        <div class="card-footer">
                                            <form action="#" method="post">
                                                <img class="img-fluid img-circle img-sm" src="./dist/img/user4-128x128.jpg" alt="Alt Text">
                                                <!-- .img-push is used to add margin to elements next to floating images -->
                                                <div class="img-push">
                                                    <form class="form-horizontal">
                                                        <div class="input-group input-group-sm mb-0">
                                                            <input class="form-control form-control-sm" placeholder="Type a comment">
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-info">comment</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
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
    </div>
    </div>

    <!-- footer/s  -->
    <?php
    require "./dashfooter.php";
    ?>
    <!-- /.  -->
</body>

</html>