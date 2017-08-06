
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Arapey" rel="stylesheet">
    <title>Blog Template for Bootstrap</title>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>
    <nav class="navbar navbar-default custom-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php bloginfo( 'url' );?>"><img class="custom_logo" src="<?php echo THEME_IMG_PATH; ?>/logo-no-background_small.png" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php wp_list_pages( '&title_li=' ); ?>
          </ul>
          <div class="search-container">
            <ul class="social-media">
              <li><a class="fa fa-instagram fa-lg" href="#"></a></li>
              <li><a class="fa fa-facebook fa-lg" href="#"></a></li>
              <li><a class="fa fa-twitter fa-lg" href="#"></a></li>
              <li><?php search_with_image_submit(); ?></li>
            </ul>
          </div>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
    <!--<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="<?php bloginfo( 'url' );?>">Home</a>
          <?php wp_list_pages( '&title_li=' ); ?>
        </nav>
      </div>
    </div>-->
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="<?php echo THEME_IMG_PATH; ?>/la.jpg" alt="Los Angeles">
          </div>

          <div class="item">
            <img src="<?php echo THEME_IMG_PATH; ?>/chicago.jpg" alt="Chicago">
          </div>

          <div class="item">
            <img src="<?php echo THEME_IMG_PATH; ?>/ny.jpg" alt="New York">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container">
