<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>iRail Summer of Code Bootstrap (from Twitter)</title>
        
        <!-- Le fonts -->
        <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css" />
        
        <!-- Le styles -->
        <link href="<?php echo $this->getBaseURL("css/bootstrap.css"); ?>" rel="stylesheet" />
        <link href="<?php echo $this->getBaseURL("css/bootstrap-responsive.css"); ?>" rel="stylesheet" />
        <style type="text/css">
            body {
            padding-top: 60px;
            padding-bottom: 40px;
            }
            .sidebar-nav {
            padding: 9px 0;
            }
        </style>
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
      <div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
              <div class="container-fluid">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </a>
                  
                  <a class="brand" href="#">Stations.io</a>
<!--                  <div class="btn-group pull-right">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="icon-user"></i> Username
                      <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="#">Profile</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Sign Out</a></li>
                      </ul>
     </div>-->
                  
                  <div class="nav-collapse">
                      <ul class="nav">
                          <li><a href="http://stations.io">Home</a></li>
                          <li><a href="http://stations.io/helpout">Help us to get data!</a></li>
                          <li><a href="http://stations.io/usecases">Use our data</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>

      <div class="container">
