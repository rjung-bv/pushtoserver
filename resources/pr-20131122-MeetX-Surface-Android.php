<?php include '../sections/header-pages.php'; ?>
<!-- ########## EDIT BELOW PER PAGE ########## -->
		  
<div class="row sub-page-wrap">
      <div class="container">
        
<?php include '../sections/resources-sidebar.php'; ?>
            

<!-- ************ PAGE CONTENT HERE ************ --> 



<style>

/**
*	Slideshow -- CSS     ****************************************************************************************************************************************************
*/

.rs-slideshow {
	/* border around slideshow container
	border: 12px solid #444;
	border-radius: 12px;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	-khtml-border-radius: 12px;
	*/
	height: 430px;
	margin: 0px auto;
	overflow: hidden;
	position: relative;
	width: 620px;
}

.rs-slideshow .slide-container {
	background-color: #ffffff;
	position: absolute;
	height: 100%;
	left: 0;
	overflow: hidden;
	top: 0;
	width: 100%;
}

.rs-slideshow .slide-container img {
	position: relative;
}

/*  CAPTION   -   to DELETE caption at the bottom comment out code*/
.rs-slideshow .slide-container .slide-caption {
	background-color: ;
	bottom: 0;
	top: 395px;
	color: #555555;
	font-size: 16px;
	display: block;
	left: 0;
	padding: 6px 12px;
	position: absolute;
	text-align: center;
	right: 0;
	/*
	filter: alpha(opacity=70); /* internet explorer *
	-khtml-opacity: 0.7;      /* khtml, old safari *
	-moz-opacity: 0.7;       /* mozilla, netscape *
	opacity: 0.7;           /* fx, safari, opera */
}



.rs-slideshow .slides {
	display: none;
	margin-left: 0px;
}

.rs-slideshow .slide-container img,
.rs-slideshow .slide-container .slide-caption,
.rs-slideshow .slide-container a {
	filter: inherit;
}


/**
*	These styles make the list of links to slide images visible to users
*	who don't have JavaScript enabled. By adding the 'no-js' class to 
*	the HTML element, and using Modernizr to remove this class for JS
*	users, we can style for both scenarios.
*	http://www.modernizr.com/
*/

.no-js .rs-slideshow {
	height: auto;
}
.no-js .rs-slideshow .slide-container, 
.no-js .rs-slideshow .slide-container img {
	position: relative;
}
.no-js .rs-slideshow .slides {
	display: block;
	margin-left: 0px;
}
.no-js .rs-slideshow .slides li {
	margin-left: 0px;
}



/**
*	The following styles are used in the demos with slideshow controls, 
*	such as play/pause and prev/next buttons.
*/

.rs-controls {
	clear: both;
	left-margin: 100px;  /* margin for controls  */
	width: 620px;
	padding-left: 225px;
}
.rs-play-pause, .rs-prev, .rs-next {
	float: left;
	margin-right: 12px;
}
.rs-controls ul {
	float: left;
	list-style: none;
	margin: 0 6px 0 0;
	padding: 0;
}
.rs-index-list li {
	float: left;
	margin-right: 6px;
}
.rs-controls a {
	background-color: #eee !important;
	border: 1px solid #ddd;
	/*border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-khtml-border-radius: 3px;*/
	color: #444;
	display: block;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	padding: 3px 5px;
	text-decoration: none;
}
.rs-controls a:hover {
	background-color: #ddd !important;
	color: #444 !important;
}
.rs-controls .rs-active {
	background-color: #444 !important;
	border: 1px solid #444;
	color: #eee !important;
}


#callback-messages,
#slide-class-message {
	/*margin: 48px auto;*/
	margin-left: 0px;
	width: 620px;
}
.slide-container.some-custom-class .slide-caption {
	background-color: #ffffff;
	font-size: 3em;
	font-style: italic;
	font-weight: bold;
	text-align: right;
	margin-left: 0px;
	top: 0;
	width: 100%;  /*  28%  */
}



/*	Clearfix	*/
.clearfix:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }
.clearfix { display: inline-block; margin-left: 275px; margin-bottom: 65px; margin-top: 10px;}  /* this moves the controls left or right */
* html .clearfix { height: 1%; } /* Hides from IE-mac \*/
.clearfix { display: block; }

</style>



<script src="slideshow-pr.js"></script>


<script type="text/javascript">
		/**
		*	Bootstrap the javascript
		*/

		$(document).ready(function () {
			
			var opts = {
				controls: {
					playPause: {auto: true},
					previousSlide: {auto: true},
					nextSlide: {auto: true},
					index: {auto: true}
				}
			};
			$('.rs-slideshow').rsfSlideshow(opts);
			
		});   

</script>

          
           <div class="main-content col-sm-10">  
            		<div class="page-cover">
            		
	            <!--  	<div class="rss-container" style="margin-left: -25px; margin-top:25px;">
	            	
							<div id="slideshow" class="rs-slideshow">
								<div class="slide-container">
									<img src="../img/resource-slideshow/pr-112213-image01a.png" style="margin-left: 60px"  title="Intuitive front-end access to MeetX platform" />
									<span class="slide-caption">Intuitive front-end access to MeetX platform</span>
								</div>
								
								<ol class="slides"> 
									<li>
										<a href="../img/resource-slideshow/pr-112213-image01a.png" title="Intuitive front-end access to MeetX platform"></a>
									</li> 
									<li>
										<a href="../img/resource-slideshow/pr-112213-image02a.png" title="MeetX app on Surface provides device-optimized interface"></a> 
									</li>
									<li>
										<a href="../img/resource-slideshow/pr-112213-image03a.png" title="MeetX app on Android, optimized to streamline use"></a>
									</li>
								</ol>
							</div>
							
							
							
							<!--<ul class="controls clearfix">
								<li><a href="#" class="rs-play-pause" data-control-for="slideshow">Click to Pause</a></li>
								<li><a href="#" class="rs-prev" data-control-for="slideshow">Previous Slide</a></li>
								<li><a href="#" class="rs-next" data-control-for="slideshow">Next Slide</a></li>
							</ul>--
							
						</div><!-- end rss container -->


				  
				  	
				  	
				  	
				  	
				  	
				  	<h3 class="topper">BoardVantage MeetX Now Available on Surface and Android</h3>
				  	
				  	<h3 style="font-size: 19px; color: #555555; margin-bottom: 35px; font-weight: normal;">Expanded mobility options for leadership teams</h3>
					  <hr style="margin-top:15px; margin-bottom:25px;">
					  
					  		<p><strong>Menlo Park, CA (November 22, 2013) </strong> &mdash; BoardVantage (<a href="http://www.boardvantage.com">www.boardvantage.com</a>), trusted by large organizations including half of the Fortune 500, today announced availability of MeetX on Android (GOOG:US) and Microsoft (MFST:US) Surface.</p>

							<p>"Today Leadership teams are globally dispersed, and there are often regional preferences for particular mobile devices among executive teams" said Joe Ruck, CEO of BoardVantage.  "Now with the addition of Surface and Android to the MeetX offering, team members can use the device that works best for them."</p>
							
							<p>The new apps are in addition to the iPad and iPhone apps currently available from BoardVantage.  MeetX provides a better way for leadership teams to manage corporate initiatives, drive process, collaborate ad hoc, securely share, review and approve documents, and efficiently conduct team meetings.</p>
							
							<p>For a free demo of MeetX, call +1 877 685 7348 or visit <a href="/">www.boardvantage.com</a>.  To learn more about MeetX, <a href="../products/meetx.php">click here</a>.</p>
							
							<h4>About BoardVantage</h4>
							<p>BoardVantage is transforming leadership communications, enabling paperless meetings and processes for boards and executive teams.  Trusted by large organizations worldwide, including half of the Fortune 500, BoardVantage sets the bar for a rich executive experience and delivers security that meets or exceeds the standards of enterprise IT departments.</p>
							
							<p><i>Note: all trademarks, trade names or service marks used or mentioned herein belong to their respective owners.</i></p>
				  	        
							<p>&nbsp;</p>
							<p>&nbsp;</p>
					
					</div>  <!-- end page-cover -->
					
					
					<!-- bottom section -->
					<div style="background-color:#0f4876; color:#ffffff; margin-top:-100px;">
							<p>&nbsp;</p>
							<div style="margin-left:25px;">
								<h4>BoardVantage Media Contact</h4>
								<p>+1.650.614.6096</p>
								<p><a href="mailto:pr@boardvantage.com" style="color:#ffffff !important;">pr@boardvantage.com</a></p>
							</div>
							<p>&nbsp;</p>
					</div>
					
					<p>&nbsp;</p>
					<p>&nbsp;</p>
							
	   	
<!-- End content -->



<style>    

.page-cover {margin-top: 50px; margin-bottom:100px; background-color:#ffffff; padding:20px 30px; border: 1px solid #e2e2e2; border-radius:0px;}   

.page-cover hr{color:#e2e2e2; background-color:#e2e2e2; height:1px; width:100%; border:none; margin-top:20px; margin-bottom: 20px;}

.page-cover div{margin-left:25px;}

.page-cover p{margin-bottom:20px;}

</style>
            
             
          </div><!-- / .page-content -->
        </div><!-- / container -->
        

<!-- ########## EDIT ABOVE PER PAGE ########## -->
<?php include '../sections/customer-logos-pages.php'; ?>
<?php include '../sections/sales-banner-pages.php'; ?>
<?php include '../sections/footer-pages.php'; ?>
  
  </body>
</html>
        