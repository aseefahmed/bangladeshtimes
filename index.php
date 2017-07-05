<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>বাংলাদেশ টাইমস</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/dycalender.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">



</head>

<body ng-app="myApp" ng-controller="HomeController">

    <!-- off canvas menu -->
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-menu">
        <span class="menu-close"><i class="fa fa-close"></i></span>
		
        <ul>
            <li ng-repeat="menu in menus"><a ng-if="menu.is_menu == 1" href="#!	category/{{ menu.label }}">{{ menu.category_name }}</a></li>
        </ul>
    </div>

    <!-- header top area -->
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xs-3 text-left">
                    <div class="menu-toggle-btn">
                        <a href="" class="menu-trigger">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-9 text-right">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Marquee text area  -->
    <div class="marquee-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="marquee-wrap">
                        <div class="marquee-heading text-center">
                            <h3>সদ্যপ্রাপ্ত:</h3>
                        </div>
                        <div class="marquee-text marquee">
                            <p><a href="#">{{ breaking_news[0].title }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div ng-view>
		
	</div>
    <!-- footer area -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <div class="footer-menu">
                        <ul>
                            <li ng-repeat="menu in menus"><a ng-if="$index<6" href="{{ menu.label }}">{{ menu.category_name }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="footer-menu">
                        <ul>
                            <li ng-repeat="menu in menus"><a ng-if="$index>5 && $index<12" href="{{ menu.label }}">{{ menu.category_name }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="footer-menu">
                        <ul>
                            <li ng-repeat="menu in menus"><a ng-if="$index>12 && $index<19" href="{{ menu.label }}">{{ menu.category_name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
    
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/controllers/main_controllers.js"></script>
</body>

</html>
