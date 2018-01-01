<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reach Bottle</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $assets_dir;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $assets_dir;?>css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo $assets_dir;?>css/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $assets_dir;?>css/custom_styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo $assets_dir;?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $assets_dir;?>js/popper.min.js"></script>

    <script type="text/javascript" src="<?php echo $assets_dir;?>js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="<?php /*echo $assets_dir;*/?>js/bootstrap.bundle.min.js"></script>-->

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $site_url;?>">ReachBottle</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $site_url;?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $site_url;?>about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $site_url;?>cart">My Cart</a>
                </li>
            </ul>
        </div>
    </div>
</nav>