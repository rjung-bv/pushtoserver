<!DOCTYPE html>
<html class="no-js" lang="en" >
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="BoardVantage board portals and leadership collaboration apps are used by half of the Fortune 500. Accessible on iPad, iPhone and browser." />
    <meta name="keywords" content="Board Portal on the iPad, Board Communications, Board of Directors, Board Portal Softare, board portals, board software, BoardVantage, Online Board Portal" />
    <meta name="robots" content="index, follow" />
    
    <meta property='og:locale' content='en_US'/>
	<meta property='og:title' content='Board Portal and Leadership Collaboration - by BoardVantage'/>
	<meta property='og:description' content='BoardVantage board portals and leadership collaboration apps are used by half of the Fortune 500. Accessible on iPad, iPhone and browser.'/>
	<meta property='og:site_name' content='Boardvantage'/>
	<meta property='og:type' content='article'/>
    
	<meta name="apple-itunes-app" content="app-id=390545373">
    
   <?php  
     $uri = $_SERVER['REQUEST_URI']; 
     $uri2 = explode('/', $uri);              //resource/webinar.php
     $uri3 = explode('.', $uri2[2]);         //webinar.php
     $uri4 = ucfirst($uri3[0]);             //Webinar
     
     $title=$uri4;
		switch ($title)
		{
		case "Director":
		  $title2 = "Director - Board Portal for the Paperless Boardroom";
		  break;
		case "Meetx":
		  $title2 = "MeetX - Secure Collaboration for Senior Leadership";
		  break;
		case "Sharex":
		  $title2 = "ShareX - Secure File Sharing for the Mobile Enterprise";
		  break;
		default:
		  $title2 = "Confidential Web Collaboration - BoardVantage";
		}
   ?>

     <title><?php echo $title2; ?></title>

          <!--<link rel="icon" type="image/svg+xml" href="../img/BV_Favicon.svg">-->
     <link rel="shortcut icon" type="image/x-icon" href="../img/BV_Favicon.ico" />

    <!-- Bootstrap -->
    <link href="../stylesheets/styles.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:900,700,600,400,300' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target="#secondary-nav-collapse">

  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="index-top-nav">
        <div class="container">
          <div class="row hidden-xs">
            <div class="header-top col-sm-7 col-md-5 pull-right nopadding">
              <div class="col-sm-6">
                <ul class="inline-list">
                  <li><a href="https://ec.boardvantage.com" target="new">client login</a></li>
                  <li>|</li>
                  <li><a href="../about/contact.php">contact</a></li>
                </ul>
              </div>
              <div class="col-sm-6 pull-right">
                <form class="navbar-form" role="search">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                      <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                            <span>
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14" viewBox="0 0 32 32" id="search-icon">
                              <g>
                              </g>
                                <path d="M31.008 27.231l-7.58-6.447c-0.784-0.705-1.622-1.029-2.299-0.998 1.789-2.096 2.87-4.815 2.87-7.787 0-6.627-5.373-12-12-12-6.627 0-12 5.373-12 12 0 6.627 5.373 12 12 12 2.972 0 5.691-1.081 7.787-2.87-0.031 0.677 0.293 1.515 0.998 2.299l6.447 7.58c1.104 1.226 2.907 1.33 4.007 0.23s0.997-2.903-0.23-4.007zM12 20c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z" fill="#ccc" />
                              </svg>

                            </span>
                            <!--<span class="glyphicon glyphicon-search"></span>-->
                          </button>
                      </div>
                  </div>
                </form>
              </div>
            </div><!-- / header-top -->
          </div>
        <div class="row">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle left" data-toggle="collapse" data-target="#header-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php">
              <img class="img-responsive"  src="../img/boardvantage-logo.png" alt="BoardVantage">
            </a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="header-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" id="top-nav">
              <li class="dropdown">
              <a href="" class="dropdown-toggle" data-hover="dropdown">products</a>
              <ul class="dropdown-menu" id="products-dropdown">
                 <li>
                    <a href="../products/director.php"><img class="img-responsive" src="../img/menu-thumbs/product-director-thumb.png" alt="Director" /><span class="sentenceCase">Director</span></a>
                    <p class="sentenceCase">Boards of Directors</p>
                  </li>
                  <li>
                    <a href="../products/meetx.php"><img class="img-responsive" src="../img/menu-thumbs/product-meetx-thumb.png" alt="MeetX" /><span class="sentenceCase">MeetX</span></a>
                    <p class="sentenceCase">Senior Leadership</p>
                  </li>
                  <li>
                    <a href="../products/sharex.php"><img class="img-responsive" src="../img/menu-thumbs/product-sharex-thumb.png" alt="ShareX" /><span class="sentenceCase">ShareX</span></a>
                    <p class="sentenceCase">Dispersed Teams</p>
                  </li>
                </ul>
              </li>
              <li><a href="../platform.php">platform</a></li>
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-hover="dropdown">resources</a>
                <ul class="dropdown-menu">
                  <li><a href="../resources/videos.php">videos</a></li>
                  <li><a href="resources/white-papers.php">white papers</a></li>
                  <li><a href="../resources/events.php">events</a></li>
                  <li><a href="../resources/webinars.php">webinars</a></li>
                  <li><a href="../resources/press-news.php">press &amp; News</a></li>
                  <li><a href="http://blog.boardvantage.com/" target="new">blog</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-hover="dropdown">about us</a>
                <ul class="dropdown-menu">
                  <li><a href="../about/company.php">company</a></li>
                  <li><a href="../about/leadership.php">leadership</a></li>
                  <li><a href="../about/customers.php">customers</a></li>
                  <li><a href="../about/careers.php">careers</a></li>
                  <li><a href="../about/contact.php">contact</a></li>
                </ul>          
              </li>
              <li><a href="../products/director-demo.php">request demo</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /row -->
      </div>
    </nav>
  </header>
  <!-- WRAPPER CLOSED IN FOOTER -->
  <div class="wrapper">

		

