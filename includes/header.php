<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Scholar Vision an education Category Bootstrap Responsive website Template | Blog :: w3layouts</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholar Vision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Font-awesome-CSS --> <link href="css/font-awesome.css" rel="stylesheet"> 
<!-- Index-Page-CSS --><link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Index-Page-CSS --><link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
<!-- Index-Page-CSS --><link href="css/developer.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--web-fonts-->
<!-- Headings-font --><link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<!-- Body-font --><link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  
</head>
<body>
<!-- banner -->
<?php 
    $array = explode("/",$_SERVER['PHP_SELF']);
    $page = end($array);
?>    
    
<?php if($page!='index.php'){ ?>
    <div class="banner inner-banner-w3-agileits" id="home">
        <div class="banner-overlay-agileinfo">
        <div class="top-header-agile">
            <h1><a class="col-md-4 navbar-brand" href="index.html">Scholar Vision<span>Education for everyone</span></a></h1>
            <div class="col-md-4 top-header-agile-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 top-header-agile-left">
                    <ul class="num-w3ls">
                        <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                        <li>+0 097 338 004</li>
                    </ul>
                    <div class="w3ls_search">
                                                        <div class="cd-main-header">
                                                            <ul class="cd-header-buttons">
                                                                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                                                            </ul> <!-- cd-header-buttons -->
                                                        </div>
                                                        <div id="cd-search" class="cd-search">
                                                            <form action="#" method="post">
                                                                <input name="Search" type="search" placeholder="Search...">
                                                            </form>
                                                        </div>
                                                    </div>
                        </div>

                <div class="clearfix"></div>
            </div>

            <div class="container">
                <?php include("nav.php") ?>
                    <h2 class="inner-tittle-w3layouts"><?= $pageTitle ?></h2>
            </div>
        </div>
    </div>
<?php } ?>