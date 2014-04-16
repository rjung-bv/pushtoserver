<?php include '../sections/header-pages.php'; ?>
<!-- ########## EDIT BELOW PER PAGE ########## -->
		  
<div class="row sub-page-wrap">
      <div class="container">
          
<?php include '../sections/about-sidebar.php'; ?>
            

<!-- ************ PAGE CONTENT HERE ************ -->            
            <div class="main-content col-sm-10">  
            
              <div class="page-cover">
        
        <div class="sec1-bg1">
              
              
              
        <!-- *****************     Code below relates to popup for ShareX slideshow   ****  include css and jquery files     *******   -->
 		<link rel="stylesheet" href="../stylesheets/colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/jquery.colorbox.js"></script>
		<script>
			var slides = $.noConflict();  //this is used where have 2 jquery functions using doc ready
			slides(document).ready(function(){
				slides(".group4").colorbox({rel:'group4', slideshow:true, slideshowSpeed:6000});
				});
		</script>
					
					
					<br>
                 	<div style="margin-top: 11px;"><a class="group4" href="../img/product-content-slides/sharex-slide1a.jpg" title="">View Product Slideshow</a></div>
               		<div style='display:none'>
					<p><a class="group4"  href="../img/product-content-slides/sharex-slide2a.jpg" title=""></a></p>
					<p><a class="group4"  href="../img/product-content-slides/sharex-slide3a.jpg" title=""></a></p>
					<p><a class="group4"  href="../img/product-content-slides/sharex-slide4a.jpg" title=""></a></p>
					<p><a class="group4"  href="../img/product-content-slides/sharex-slide5a.jpg" title=""></a></p>
					<p><a class="group4"  href="../img/product-content-slides/sharex-slide6a.jpg" title=""></a></p>
					<p><a class="group4"  href="../img/product-content-slides/sharex-slide7a.jpg" title=""></a></p>
					<p><a class="group4"  href="../img/product-content-slides/sharex-slide8a.jpg" title=""></a></p>
					<p><a class="group4"  href="../img/product-content-slides/sharex-slide9a.jpg" title=""></a></p>
					</div>
		<!-- *****************     END ShareX slideshow   ****           *******   -->
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
                
   
      </div>  <!-- end page content col-sm-10 -->

            
       
          </div><!-- / .page-content -->
        </div><!-- / container -->
  

<!-- ########## EDIT ABOVE PER PAGE ########## -->
<?php include '../sections/customer-logos-pages.php'; ?>
<?php include '../sections/sales-banner-pages.php'; ?>
<?php include '../sections/footer-pages.php'; ?>
  
  </body>
</html>
