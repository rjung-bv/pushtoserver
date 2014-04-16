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
.clearfix { display: inline-block; margin-left: 275px; margin-bottom: 65px; margin-top: -50px;}  /* this moves the controls left or right */
* html .clearfix { height: 1%; } /* Hides from IE-mac \*/
.clearfix { display: block; }

</style>


<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 


<script src="slideshow-pr.js"></script>


<script type="text/javascript">

		/**
		*	Bootstrap the javascript
		*/  
		//$.noconflict();
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
-->

         
         <div class="main-content col-sm-10">  
            		<div class="page-cover">
            		
	            <!-- 	<div class="rss-container" style="margin-left: -25px; margin-top:25px;">
	            	
							<div id="slideshow" class="rs-slideshow">
								<div class="slide-container">
									<img src="../img/resource-slideshow/100313-pr-image01.png" style="margin-left: 60px"  title="Sample surveys - Board self assessment and executive evaluation set" />
									<span class="slide-caption">Sample surveys - Board self assessment and executive evaluation set</span>
								</div>
								
								<ol class="slides">  <!-- to add a link to any of the below just insert the following code in the <a href data-link-to="http://www....com" --
									<li>
										<a href="../img/resource-slideshow/100313-pr-image01.png" title="Sample surveys - Board self assessment and executive evaluation set"></a>
									</li>
									<li>
										<a href="../img/resource-slideshow/100313-pr-image02.png" title="A survey question in Likert scale"></a> 
									</li>
									<li>
										<a href="../img/resource-slideshow/100313-pr-image03.png" title="Completed survey with progress bar and reference document"></a>
									</li>
								</ol>
							</div>
							
							
							
							<!--<ul class="controls clearfix">
								<li><a href="#" class="rs-play-pause" data-control-for="slideshow">Click to Pause</a></li>
								<li><a href="#" class="rs-prev" data-control-for="slideshow">Previous Slide</a></li>
								<li><a href="#" class="rs-next" data-control-for="slideshow">Next Slide</a></li>
							</ul>--
							
						</div><!-- end rss container -->




				  	
				  	<h3 class="topper">BoardVantage announces MeetX upgrade with built-in survey feature</h3>
					  <hr style="margin-top:15px; margin-bottom:25px;">
				  	        <p><strong>Menlo Park, CA (October 07, 2013) </strong> &mdash; BoardVantage (<a href="http://www.boardvantage.com">www.boardvantage.com</a>), trusted by half of the Fortune 500 for its board portals and leadership team applications, is pleased to announce a survey capability in its MeetX product for online and offline use. </p>

							<p>With the new feature, companies and boards can easily administer self assessments and peer-evaluations.  MeetX provides simple and intuitive interface for Directors and leadership team members to step through lengthy surveys.</p>
							
							<p>"Our customer base includes some of the largest and most sophisticated companies in the world, and they like to gain key insights and feedback as they design their processes and operations better," says BoardVantage CEO Joe Ruck. "Our MeetX product team has come up with an integrated survey feature that aims to make surveys seamless to create, engaging to fill out, and informative to analyze."</p>
							
							<p>Surveys in MeetX support the ability to add detailed instructions, descriptions and attachments to the questions. Survey questions support a variety of response formats, including yes/no, multiple choice, open answers and Likert Scale. Responses can be set to be private or anonymous, and respondents can be given the option to add comments. Respondents can easily access and complete surveys, and can save in-progress surveys, in MeetX apps on iPad and iPhone.</p>
							
							<p>A free demo of MeetX and its survey feature can be easily accessed by placing a request at <a href="http://www.boardvantage.com">www.boardvantage.com</a> website or by emailing <a href="mailto:sales@boardvantage.com">sales@boardvantage.com</a>. BoardVantage is also an exhibitor at Gartner Symposium/ITxpo October 6-10th at Orlando, FL, and will be showcasing the latest version of MeetX.</p>
							
							<p>To learn more about MeetX, <a href="../products/meetx.php">click here</a>.</p>
							
							<h4 style="margin-top:40px;">About BoardVantage</h4>
							<p>BoardVantage addresses the secure mobility and document collaboration needs of boards and leadership teams. Currently in use by half of the Fortune 500, BoardVantage sets the bar for a rich mobile experience and delivers security that meets or exceeds the standards of enterprise IT departments, including those of global financial institutions.</p>
							
							<p><i>Note: all trademarks, trade names or service marks used or mentioned herein belong to their respective owners.</i></p>
							
							
							<hr>
							<h4 style="margin-bottom:20px; margin-top:40px;">This press release has been featured on</h4>
							
								<p style="margin-bottom: 8px;"><a href="http://www.marketwatch.com/story/boardvantage-announces-meetx-upgrade-with-built-in-survey-feature-2013-10-07" target="_blank">MarketWatch by The Wall Street Journal</a></p>
								<p style="margin-bottom: 8px;"><a href="http://finance.yahoo.com/news/boardvantage-announces-meetx-upgrade-built-170000068.html" target="_blank">Yahoo! Finance</a></p>
								<p style="margin-bottom: 8px;"><a href="http://www.reuters.com/article/2013/10/07/ca-boardvantage-idUSnBw075407a+100+BSW20131007" target="_blank">Reuters</a></p>
							
							
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
              
          </div><!-- / .page-content -->
        </div><!-- / container -->


<style>    

.page-cover {margin-top: 50px; margin-bottom:100px; background-color:#ffffff; padding:20px 30px; border: 1px solid #e2e2e2; border-radius:0px;}   

.page-cover hr{color:#e2e2e2; background-color:#e2e2e2; height:1px; width:100%; border:none; margin-top:20px; margin-bottom: 20px;}

.page-cover div{margin-left:25px;}

.page-cover p{margin-bottom:20px;}

</style>


<!-- ########## EDIT ABOVE PER PAGE ########## -->
<?php include '../sections/customer-logos-pages.php'; ?>
<?php include '../sections/sales-banner-pages.php'; ?>
<?php include '../sections/footer-pages.php'; ?>


<!-- Include all compiled plugins (below), or include individual files as needed --
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-hover-dropdown.js"></script>
-->  

  
  </body>
</html>
        