
<!--footer-->
<div class="footer w3layouts">
    <div class="container">
        <div class="footer-row w3layouts-agile">
            <div class="col-md-4 footer-grids w3l-agileits">
                <h6><a href="index.html">SCSIT</a></h6>
                <p class="footer-one-w3ls">Dr. Doroteo "DODO" Salazar</p>
                <div class="top-header-agile-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-2 footer-grids w3l-agileits">
                <h3>Footer Menu</h3>
                <ul class="b-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grids w3l-agileits">
                <h3>Contact Info</h3>
                <p>Madridejos, Cebu City</p>
                <p>+63999999999</p>
                <p>Philippines</p>
                <p><a href="mailto:info@example.com">scsit@gmail.com</a></p>
            </div>
           
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//footer-->	
<!-- copy-right -->
			     <div class="copyright-wthree">
    <p>&copy; 2017 SCSIT . All Rights Reserved | Proudly <a href=""> BSIT Team </a></p>
</div>
<!-- //copy-right -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->



<!--search-bar-->
		  <script src="js/main.js"></script>	
<!--//search-bar-->
 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>