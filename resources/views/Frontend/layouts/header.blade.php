
<body>
<section id="top">
 <div class="container">
  <div class="row top_1">
   <div class="col-md-5">
    <div class="top_1l">
	 <ul class="mb-0">
	  <li style="margin-right:15px;" class="d-inline-block"><a  href="#"><i style="margin-right:5px;" class="fa fa-phone col_1"></i> +91 123 4565 789</a></li>
	  <li class="d-inline-block"><a href="#"><i style="margin-right:5px;" class="fa fa-envelope col_1"></i> info@gmail.com</a></li>
	 </ul>
	</div>
   </div>
   <div class="col-md-3">
    <div class="top_1m text-center">
	  <h3 class="mb-0" style="line-height:0.6em;"><img src="{{url('Frontend/img/logo.png')}}" style="margin-bottom:10px;width:248px;height:81px;object-fit:cover" class="d-inline-block" alt="logo image"></h3>
	</div>
   </div>
   <div class="col-md-4">
    <div class="top_1r float-end">
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

<section id="header">
<nav class="navbar navbar-expand-md  navbar-center navbar-light" id="navbar_sticky">
  <div class="container">
  <a class="navbar-brand col_1" href="{{url('/')}}">
    <img src="{{url('Frontend/img/logo.png')}}" style="margin-top:10px;margin-bottom:10px;width:228px;height:61px;object-fit:cover" class="d-inline-block" alt="logo image">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}"><span class="nav_sample">Home</span></a>
        </li>

		<li class="nav-item">
          <a class="nav-link"  href="{{url('/about')}}"><span class="nav_sample">About Us</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="{{url('/services')}}"><span class="nav_sample">Services</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="{{url('/contact')}}"><span class="nav_sample">Contact Us</span></a>
        </li>

		<li class="nav-link"><a data-bs-target="#exampleModal2" data-bs-toggle="modal" href="#"><i class="fa fa-search"></i></a>  </li>
		<div class="modal fade" id="exampleModal2" tabindex="-1"  style="display: none; top: 20px;" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body p-0">
				<div class="search_1">
				   <div class="input-group">
				<input type="text" class="form-control" placeholder="Type Your Search">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="button">
						<i class="fa fa-search"></i></button>
				</span>
		</div>
	            </div>
			  </div>
			</div>
		  </div>
		</div>


      </ul>

    </div>
  </div>
</nav>
</section>
