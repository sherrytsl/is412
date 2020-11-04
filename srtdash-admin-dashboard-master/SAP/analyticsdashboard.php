<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        th, td {
            padding: 10px;
        }
        /* button{
            height: 75px;
            width: 100px;
        } */
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="#"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="#">Analytics Dashboard</a></li>
                                    <li><a href="floorlayout.php">Floor Layout Plan</a></li>
                                    <li><a href="manpowerplanning.php">Manpower Planning</a></li>
                                    </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Comments On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Analytics Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Analytics Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- MAIN CONTENT GOES HERE -->

                <div class="row">
                    <!-- Pie Chart -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div id="highpiechart4" data-highcharts-chart="0" style="overflow: hidden;"><div id="highcharts-9bja5ux-0" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 452px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none;"><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="452" height="400" viewBox="0 0 452 400"><desc>Created with Highcharts 8.2.2</desc><defs><clipPath id="highcharts-9bja5ux-4-"><rect x="0" y="0" width="432" height="332" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="452" height="400" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="10" y="53" width="432" height="332"></rect><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="10" y="53" width="432" height="332"></rect><g class="highcharts-series-group" data-z-index="3"><g class="highcharts-series highcharts-series-0 highcharts-pie-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(10,53) scale(1 1)" style="cursor:pointer;"><path fill="rgb(15,72,127)" d="M 215.96822698022356 10.000003235656408 A 156 156 0 1 1 61.22871776719185 185.54098759050942 L 62.220841371248326 185.4157248495446 A 155 155 0 1 0 215.96843065342725 11.000003214915012 Z" class="highcharts-halo highcharts-color-0" data-z-index="-1" fill-opacity="0.25" visibility="hidden"></path><path fill="rgb(15,72,127)" d="M 215.96822698022356 10.000003235656408 A 156 156 0 1 1 61.22871776719185 185.54098759050942 L 216 166 A 0 0 0 1 0 216 166 Z" transform="translate(0,0)" stroke="#ffffff" stroke-width="1" opacity="1" stroke-linejoin="round" class="highcharts-point highcharts-color-0"></path><path fill="rgb(52,109,164)" d="M 61.20925416849283 185.38620656357884 A 156 156 0 0 1 102.86190867044395 58.59528739247503 L 216 166 A 0 0 0 0 0 216 166 Z" transform="translate(0,0)" stroke="#ffffff" stroke-width="1" opacity="1" stroke-linejoin="round" class="highcharts-point highcharts-color-1"></path><path fill="rgb(88,145,200)" d="M 102.96936993419163 58.48220302235366 A 156 156 0 0 1 215.78331912966084 10.000150482763502 L 216 166 A 0 0 0 0 0 216 166 Z" transform="translate(0,0)" stroke="#ffffff" stroke-width="1" opacity="1" stroke-linejoin="round" class="highcharts-point highcharts-color-2"></path></g><g class="highcharts-markers highcharts-series-0 highcharts-pie-series" data-z-index="0.1" opacity="1" transform="translate(10,53) scale(1 1)"></g></g><text x="226" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24"><tspan>Dollar market Values, 2018</tspan></text><text x="226" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="52"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="color:#666666;fill:#666666;" y="397"></text><g class="highcharts-data-labels highcharts-series-0 highcharts-pie-series highcharts-tracker" data-z-index="6" opacity="1" transform="translate(10,53) scale(1 1)" style="cursor:pointer;"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0" data-z-index="1" transform="translate(272,226)" opacity="1"><text x="5" data-z-index="1" y="16" style="color:#FFFFFF;cursor:pointer;font-size:11px;font-weight:bold;fill:#FFFFFF;"><tspan style="font-weight:bold">USD</tspan><tspan x="5" dy="14">73.0 %</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-1" data-z-index="1" transform="translate(91,123)" opacity="1"><text x="5" data-z-index="1" y="16" style="color:#FFFFFF;cursor:pointer;font-size:11px;font-weight:bold;fill:#FFFFFF;"><tspan style="font-weight:bold">BTC</tspan><tspan x="5" dy="14">14.1 %</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-2" data-z-index="1" transform="translate(150,59)" opacity="1"><text x="5" data-z-index="1" y="16" style="color:#FFFFFF;cursor:pointer;font-size:11px;font-weight:bold;fill:#FFFFFF;"><tspan style="font-weight:bold">TCN</tspan><tspan x="5" dy="14">12.9 %</tspan></text></g></g><g class="highcharts-legend" data-z-index="7"><rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="8" height="8" visibility="hidden"></rect><g data-z-index="1"><g></g></g></g><text x="442" class="highcharts-credits" text-anchor="end" data-z-index="8" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="395">Highcharts.com</text><g class="highcharts-label highcharts-tooltip highcharts-color-0" style="white-space:nowrap;pointer-events:none;" data-z-index="8" transform="translate(303,-9999)" opacity="0" visibility="hidden"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 90.5 0.5 C 93.5 0.5 93.5 0.5 93.5 3.5 L 93.5 44.5 C 93.5 47.5 93.5 47.5 90.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 90.5 0.5 C 93.5 0.5 93.5 0.5 93.5 3.5 L 93.5 44.5 C 93.5 47.5 93.5 47.5 90.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 90.5 0.5 C 93.5 0.5 93.5 0.5 93.5 3.5 L 93.5 44.5 C 93.5 47.5 93.5 47.5 90.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 90.5 0.5 C 93.5 0.5 93.5 0.5 93.5 3.5 L 93.5 44.5 C 93.5 47.5 93.5 47.5 90.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="rgb(15,72,127)" stroke-width="1"></path><text x="8" data-z-index="1" y="20" style="color:#333333;cursor:default;font-size:12px;fill:#333333;"><tspan style="font-size: 10px">USD</tspan><tspan x="8" dy="15">Share: </tspan><tspan style="font-weight:bold" dx="0">73.0%</tspan></text></g></svg></div></div>
                        </div>
                    </div>
                    
                    <!-- Bar Chart -->
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="ambarchart4" style="overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 421px; height: 400px; padding: 0px; touch-action: none; cursor: default;"><svg version="1.1" style="position: absolute; width: 421px; height: 400px; top: -0.21875px; left: -0.40625px;"><desc>JavaScript chart by amCharts 3.21.15</desc><g><path cs="100,100" d="M0.5,0.5 L420.5,0.5 L420.5,399.5 L0.5,399.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path><path cs="100,100" d="M0.5,0.5 L291.5,0.5 L291.5,308.5 L0.5,308.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" transform="translate(59,20)"></path></g><g><g transform="translate(59,20)"><g><path cs="100,100" d="M12.5,0.5 L12.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,308)"></path><path cs="100,100" d="M0.5,308.5 L0.5,308.5 L0.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M85.5,0.5 L85.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,308)"></path><path cs="100,100" d="M73.5,308.5 L73.5,308.5 L73.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M158.5,0.5 L158.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,308)"></path><path cs="100,100" d="M146.5,308.5 L146.5,308.5 L146.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M230.5,0.5 L230.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,308)"></path><path cs="100,100" d="M218.5,308.5 L218.5,308.5 L218.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M291.5,308.5 L291.5,308.5 L291.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g></g><g transform="translate(59,20)" visibility="visible"><g><path cs="100,100" d="M0.5,308.5 L0.5,308.5 L291.5,308.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,264.5 L0.5,264.5 L291.5,264.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,220.5 L0.5,220.5 L291.5,220.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,176.5 L0.5,176.5 L291.5,176.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,132.5 L0.5,132.5 L291.5,132.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,88.5 L0.5,88.5 L291.5,88.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,44.5 L0.5,44.5 L291.5,44.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L291.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g></g></g><g transform="translate(59,20)" clip-path="url(#AmChartsEl-32)"><g visibility="hidden"></g></g><g></g><g></g><g></g><g><g transform="translate(59,20)"><g><g transform="translate(2,308)" aria-label=" USA 3,025"><path cs="100,100" d="M0.5,0.5 L0.5,-265.5 L19.5,-265.5 L19.5,0.5 L0.5,0.5 Z" fill="#8918FE" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(26,308)" aria-label=" China 1,882"><path cs="100,100" d="M0.5,0.5 L0.5,-165.5 L19.5,-165.5 L19.5,0.5 L0.5,0.5 Z" fill="#7474F0" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(51,308)" aria-label=" Japan 1,809"><path cs="100,100" d="M0.5,0.5 L0.5,-158.5 L19.5,-158.5 L19.5,0.5 L0.5,0.5 Z" fill="#C5C5FD" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(75,308)" aria-label=" Germany 1,322"><path cs="100,100" d="M0.5,0.5 L0.5,-115.5 L19.5,-115.5 L19.5,0.5 L0.5,0.5 Z" fill="#952FFE" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(99,308)" aria-label=" UK 1,122"><path cs="100,100" d="M0.5,0.5 L0.5,-98.5 L19.5,-98.5 L19.5,0.5 L0.5,0.5 Z" fill="#7474F0" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(123,308)" aria-label=" France 1,114"><path cs="100,100" d="M0.5,0.5 L0.5,-97.5 L19.5,-97.5 L19.5,0.5 L0.5,0.5 Z" fill="#CBCBFD" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(148,308)" aria-label=" India 984"><path cs="100,100" d="M0.5,0.5 L0.5,-86.5 L19.5,-86.5 L19.5,0.5 L0.5,0.5 Z" fill="#FD9C21" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(172,308)" aria-label=" Spain 711"><path cs="100,100" d="M0.5,0.5 L0.5,-62.5 L19.5,-62.5 L19.5,0.5 L0.5,0.5 Z" fill="#0D8ECF" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(196,308)" aria-label=" Netherlands 665"><path cs="100,100" d="M0.5,0.5 L0.5,-58.5 L19.5,-58.5 L19.5,0.5 L0.5,0.5 Z" fill="#0D52D1" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(220,308)" aria-label=" Russia 580"><path cs="100,100" d="M0.5,0.5 L0.5,-50.5 L19.5,-50.5 L19.5,0.5 L0.5,0.5 Z" fill="#2A0CD0" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(245,308)" aria-label=" South Korea 443"><path cs="100,100" d="M0.5,0.5 L0.5,-38.5 L19.5,-38.5 L19.5,0.5 L0.5,0.5 Z" fill="#8A0CCF" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g><g transform="translate(269,308)" aria-label=" Canada 441"><path cs="100,100" d="M0.5,0.5 L0.5,-38.5 L19.5,-38.5 L19.5,0.5 L0.5,0.5 Z" fill="#9F43FE" stroke="#67b7dc" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.2"></path></g></g></g></g><g></g><g><path cs="100,100" d="M0.5,308.5 L291.5,308.5 L291.5,308.5" fill="none" stroke-width="1" stroke-opacity="0.2" stroke="#000000" transform="translate(59,20)"></path><g><path cs="100,100" d="M0.5,0.5 L291.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(59,328)"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,308.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(59,20)" visibility="visible"></path></g></g><g><g transform="translate(59,20)" clip-path="url(#AmChartsEl-33)" style="pointer-events: none;"><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,308.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" visibility="hidden" transform="translate(279,0)"></path><path cs="100,100" d="M0.5,0.5 L291.5,0.5 L291.5,0.5" fill="none" stroke-width="1" stroke="#000000" visibility="hidden" transform="translate(0,301)"></path></g><clipPath id="AmChartsEl-33"><rect x="0" y="0" width="291" height="308" rx="0" ry="0" stroke-width="0"></rect></clipPath></g><g></g><g><g transform="translate(59,20)"></g></g><g><g></g></g><g><g transform="translate(59,20)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(3.822019592786086,324.3029804072139) rotate(-45)"><tspan y="6" x="0">USA</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(67.1103498949271,334.0146501050729) rotate(-45)"><tspan y="6" x="0">Germany</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(148.19235943302021,325.9326405669798) rotate(-45)"><tspan y="6" x="0">India</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(217.54070900357067,328.58429099642933) rotate(-45)"><tspan y="6" x="0">Russia</tspan></text></g><g transform="translate(59,20)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,307)"><tspan y="6" x="0">0</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,263)"><tspan y="6" x="0">500</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,219)"><tspan y="6" x="0">1,000</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,175)"><tspan y="6" x="0">1,500</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,131)"><tspan y="6" x="0">2,000</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,87)"><tspan y="6" x="0">2,500</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,43)"><tspan y="6" x="0">3,000</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)"><tspan y="6" x="0">3,500</tspan></text></g></g><g></g><g transform="translate(59,20)"></g><g></g><g></g><clipPath id="AmChartsEl-32"><rect x="-1" y="-1" width="293" height="310" rx="0" ry="0" stroke-width="0"></rect></clipPath></svg><a href="http://www.amcharts.com" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 64px; top: 25px;">JS chart by amCharts</a></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>







            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
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