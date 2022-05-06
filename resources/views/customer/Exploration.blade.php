<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Exploration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div>
                    <h2 style="color: #ffff">Desktops</h2>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-dashboard"></i><span>Exploration</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-list-ol"></i><span>My
                                        WorkSpaces</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-settings"></i><span>settings</span></a>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">

            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="owner-dashboard.html">Exploration</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                {{ auth()->guard(session('guardName'))->user()->first_name }}
                                 <i class="fa fa-angle-down"></i>
                            </h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Settings</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit">
                                        logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stttaaarrrttt hhheeerrreee -->
            <div class="main-content-inner">
                <div class="card-area">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image">
                                <div class="card-body">
                                    <h5 class="title">WorkSpace Name Here</h5>
                                    <p class="card-text"> Short Deiscription . .  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dicta.</p>
                                    </p>
                                    <p class="card-text">Location : Gaza-palestine-alremal str</p>
                                    <a href="#" class="btn btn-primary">Get More....</a>
                                    <a href="#" class="btn btn-primary">Rent</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image">
                                <div class="card-body">
                                    <h5 class="title">WorkSpace Name Here</h5>
                                    <p class="card-text"> Short Deiscription . .  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dicta.</p>
                                    </p>
                                    <p class="card-text">Location : Gaza-palestine-alremal str</p>
                                    <a href="#" class="btn btn-primary">Get More....</a>
                                    <a href="#" class="btn btn-primary">Rent</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image">
                                <div class="card-body">
                                    <h5 class="title">WorkSpace Name Here</h5>
                                    <p class="card-text"> Short Deiscription . .  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dicta.</p>
                                    </p>
                                    <p class="card-text">Location : Gaza-palestine-alremal str</p>
                                    <a href="#" class="btn btn-primary">Get More....</a>
                                    <a href="#" class="btn btn-primary">Rent</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image">
                                <div class="card-body">
                                    <h5 class="title">WorkSpace Name Here</h5>
                                    <p class="card-text"> Short Deiscription . .  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dicta.</p>
                                    </p>
                                    <p class="card-text">Location : Gaza-palestine-alremal str</p>
                                    <a href="#" class="btn btn-primary">Get More....</a>
                                    <a href="#" class="btn btn-primary">Rent</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image">
                                <div class="card-body">
                                    <h5 class="title">WorkSpace Name Here</h5>
                                    <p class="card-text"> Short Deiscription . .  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dicta.</p>
                                    </p>
                                    <p class="card-text">Location : Gaza-palestine-alremal str</p>
                                    <a href="#" class="btn btn-primary">Get More....</a>
                                    <a href="#" class="btn btn-primary">Rent</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image">
                                <div class="card-body">
                                    <h5 class="title">WorkSpace Name Here</h5>
                                    <p class="card-text"> Short Deiscription . .  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dicta.</p>
                                    </p>
                                    <p class="card-text">Location : Gaza-palestine-alremal str</p>
                                    <a href="#" class="btn btn-primary">Get More....</a>
                                    <a href="#" class="btn btn-primary">Rent</a>

                                </div>
                            </div>
                        </div>
                    </div>



        </div>
    </div>



    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>© Copyright 2022. All right reserved. Template by <a href="#">Desktops Team</a>.</p>
        </div>
    </footer>
    <!-- footer area end-->
    </div>

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>