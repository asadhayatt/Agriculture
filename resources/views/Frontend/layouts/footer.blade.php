<section id="footer">
  <div class="container-fluid" >
     <div class="row footer_1">
	   <div class="col-md-4">
	    <div class="footer_1i">
		 <h4 class="text-white">ABOUT</h4>
		 <hr style="width:60px; background-color: #eddd5e; height:3px;">
		 <p class="col_3">Agriconnect is a digital platform revolutionizing the agricultural industry by seamlessly connecting farmers with vehicle owners and service providers.</p>
		 
		</div>
	   </div>
	   <div class="col-md-4">
	    <div class="footer_1i1">
		 <h4 class="text-white">EXPLORE</h4>
		 <hr style="width:60px; background-color: #eddd5e; height:3px;">
		 <h6 class="mb-3"><a class="text-light" href="#">About</a></h6>
		 <h6 class="mb-3"><a class="text-light" href="#">Services</a></h6>
		 <h6><a class="text-light" href="#">Contact</a></h6>
		</div>
	   </div>
	   
	   <div class="col-md-4">
	  <div class="footer_1i3 clearfix">
	   <h4 class="text-white big">CONTACT</h4>
		 <hr style="width:60px; background-color: #eddd5e; height:3px;">
	     <p class="col_3 mt-3">We are many variations of passages available but the majority have suffered alteration in some form by injected humour.</p>
		<ul>
	  <li class="col_2 mb-2"><a class="text-light" href="#"><i style="margin-right:5px;" class="fa fa-map-marker col_4"></i> COMSATS UNIVERSITY Islamabad Sahiwal Campus</a> </li>
	  <li class="col_2 mb-2"><a class="text-light" href="#"><i style="margin-right:5px;" class="fa fa-phone col_4"></i> +123 123 456</a> </li>
	  <li class="col_2 mb-2"><a class="text-light" href="#"><i style="margin-right:5px;" class="fa fa-envelope col_4"></i> info@gmail.com</a></li>
	 </ul>
	    <ul class="social-network social-circle mb-0">
					<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
					<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
	  </div>
	 </div>
	 </div>
  </div>
</section>

<section id="footer_bm">
 <div class="container">
  <div class="footer_2 row">
   <div class="col-md-8">
    <div class="footer_2l">
	  <p class="mb-0 col_3">© 2013 Your Website AGRICONNECT. All Rights Reserved | Design by <a class="col_4" href=""</a></p>
	</div>
   </div>
   <div class="col-md-4">
    <div class="footer_2r float-end">
	  <ul class="mb-0">
	  <li class="d-inline-block"><a class="text-light" href="#">Support</a></li>
      <li style="margin-left:10px; margin-right:10px;" class="d-inline-block"><a class="text-light" href="#">Terms Of Services </a></li>
	  <li class="d-inline-block"><a class="text-light" href="#">Privacy Policy</a></li>
	 </ul>
	</div>
   </div>
  </div>
 </div>
</section>

<script type="text/javascript">
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>

</body>

</html>