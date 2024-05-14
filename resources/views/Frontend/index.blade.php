@extends('Frontend.layouts.main')
@section('main-container')

<section id="center" class="center_home">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="" aria-current="true"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('Frontend/img/main.jpg')}}" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
         <h5 class="mb-3 col_4 big">The Best Agriculture Products</h5>
		<h1 class="text-white big">Welcome To AGRIGOAL FARM </h1>
		<p class="col_3 mb-4">  Adipisie cing elit sed eiusmod tempor on labore et dolore. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		<h5 class="mb-0"><a class="button" href="#">Discover More  </a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('Frontend/img/2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="mb-3 col_4 big">The Best Agriculture Products</h5>
		<h1 class="text-white big">We Produce Best Products </h1>
		<p class="col_3 mb-4">  Adipisie cing elit sed eiusmod tempor on labore et dolore. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		<h5 class="mb-0"><a class="button" href="#">Discover More  </a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('Frontend/img/3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
         <h5 class="mb-3 col_4 big">The Best Agriculture Products</h5>
		<h1 class="text-white big">30 years Of Experience </h1>
		<p class="col_3 mb-4">  Adipisie cing elit sed eiusmod tempor on labore et dolore. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		<h5 class="mb-0"><a class="button" href="#">Discover More  </a></h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section id="exep">
  <div class="container">
   <div class="row exep_1">
     <div class="col-md-6">
	  <div class="exep_1lm position-relative">
	    <div class="exep_1lm1">
		 <img src="{{url('Frontend/img/4.jpg')}}" alt="abc">
		</div>
		<div class="exep_1lm2 position-absolute">
		 <img src="{{url('Frontend/img/5.jpg')}}" alt="abc">
		</div>
	  </div>
	 </div>
	 <div class="col-md-6">
	  <div class="exep_1r">
	    <h5 class="col_1">ABOUT AGRICULTURE</h5>
		<h2>WE’RE LEADER IN AGRICULTURE MARKET</h2>
		<span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p>
		<div class="exep_1ri row mt-3">
	    <div class="col-md-2">
		 <div class="exep_1ril">
		  <span style="font-size:40px;" class="col_1"><i class="fa fa-shopping-basket"></i></span>
		 </div>
		</div>
		<div class="col-md-10">
		 <div class="exep_1rir">
		  <h3>Growing Fruits and Vegetables</h3>
		 </div>
		</div>
	   </div>
	    <div class="exep_1ri row mt-3">
	    <div class="col-md-2">
		 <div class="exep_1ril">
		  <span style="font-size:40px;" class="col_1"><i class="fa fa-apple"></i></span>
		 </div>
		</div>
		<div class="col-md-10">
		 <div class="exep_1rir">
		  <h3>Tips for Ripening your Fruits</h3>
		 </div>
		</div>
	   </div>
	   <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.</p>
	   <h5 class="mb-0"><a class="button" href="#">Learn More  </a></h5>
	  </div>
	 </div>
   </div>
  </div>
</section>

<section id="serv">
<div class="container">
   <div class="row serv_1 text-center mb-3">
     <div class="col-md-12">
	   <h5 class="col_1">WHAT WE DO</h5>
	   <h2 class="mb-0">SERVICES WE OFFER</h2>
	   <span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
	 </div>
   </div>
<div class="container">
  <div class="row">
    <div class="col-md-4 p-1 text-center ">
      <div class="service-block box_style" style="border-radius:10px;border: 1px solid #333; box-shadow: 0 0 20px rgba(109,143,100, 1);padding-top:20px">
        <img src="{{asset('Frontend/img/tractor-logo.png')}}" style="width:50px; height:50px" alt="Image">
        <h3>Planting</h3>
        <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>

      </div>
    </div>
    <div class="col-md-4 p-1 text-center ">
      <div class="service-block box_style" style="border-radius:10px;border: 1px solid #333; box-shadow: 0 0 20px rgba(109,143,100, 1);padding-top:20px">
                <img src="{{asset('Frontend/img/tractor-logo.png')}}" style="width:50px; height:50px" alt="Image">

        <h3>Growing</h3>
        <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>

      </div>
    </div>
    <div class="col-md-4 p-1 text-center ">
      <div class="service-block box_style" style="border-radius:10px;border: 1px solid #333; box-shadow: 0 0 20px rgba(109,143,100, 1);padding-top:20px">
                <img src="{{asset('Frontend/img/tractor-logo.png')}}" style="width:50px; height:50px" alt="Image">

        <h3>Harvesting</h3>
        <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
      </div>
    </div>
  </div>
</div>
</section>
<section id="testim">
  <div class="container">
    <div class="row testim_1">
	 <div class="col-md-6">
	  <div class="testim_1l">
	    <h5 class="col_1">TESTIMONAILS</h5>
		<h2>WHAT OUR CUSTOMERS ARE <br> TALKING ABOUT</h2>
		<span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p>
	  </div>
	 </div>
	 <div class="col-md-6">
	  <div class="testim_1r">
	    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="testim_1i row">
	    <div class="col-md-6">
		  <div class="testim_1i1">
		    <span class="col_1">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
			<img style="border-radius:50%; margin-left:20px;" src="{{url('Frontend/img/10.jpg')}}" alt="abc">
			<span style="font-size:60px;" class="d-block col_1 mt-2"><i class="fa fa-quote-left"></i></span>
			<p class="mt-1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<h5>Eget Nulla</h5>
			<h6 class="col_2 mb-0">Farmer</h6>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="testim_1i1">
		    <span class="col_1">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
			<img style="border-radius:50%; margin-left:20px;" src="{{url('Frontend/img/11.jpg')}}" alt="abc">
			<span style="font-size:60px;" class="d-block col_1 mt-2"><i class="fa fa-quote-left"></i></span>
			<p class="mt-1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<h5>Semp Port</h5>
			<h6 class="col_2 mb-0">Farmer</h6>
		  </div>
		</div>
	  </div>
    </div>
    <div class="carousel-item">
        <div class="testim_1i row">
	    <div class="col-md-6">
		  <div class="testim_1i1">
		    <span class="col_1">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
			<img style="border-radius:50%; margin-left:20px;" src="{{url('Frontend/img/10.jpg')}}" alt="abc">
			<span style="font-size:60px;" class="d-block col_1 mt-2"><i class="fa fa-quote-left"></i></span>
			<p class="mt-1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<h5>Eget Nulla</h5>
			<h6 class="col_2 mb-0">Founder &amp; CEO</h6>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="testim_1i1">
		    <span class="col_1">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
			<img style="border-radius:50%; margin-left:20px;" src="{{url('Frontend/img/11.jpg')}}" alt="abc">
			<span style="font-size:60px;" class="d-block col_1 mt-2"><i class="fa fa-quote-left"></i></span>
			<p class="mt-1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<h5>Semp Port</h5>
			<h6 class="col_2 mb-0">Founder &amp; CEO</h6>
		  </div>
		</div>
	  </div>
    </div>
    <div class="carousel-item">
         <div class="testim_1i row">
	    <div class="col-md-6">
		  <div class="testim_1i1">
		    <span class="col_1">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
			<img style="border-radius:50%; margin-left:20px;" src="{{url('Frontend/img/10.jpg')}}" alt="abc">
			<span style="font-size:60px;" class="d-block col_1 mt-2"><i class="fa fa-quote-left"></i></span>
			<p class="mt-1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<h5>Eget Nulla</h5>
			<h6 class="col_2 mb-0">Founder &amp; CEO</h6>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="testim_1i1">
		    <span class="col_1">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
			<img style="border-radius:50%; margin-left:20px;" src="{{url('Frontend/img/11.jpg')}}" alt="abc">
			<span style="font-size:60px;" class="d-block col_1 mt-2"><i class="fa fa-quote-left"></i></span>
			<p class="mt-1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<h5>Semp Port</h5>
			<h6 class="col_2 mb-0">Founder &amp; CEO</h6>
		  </div>
		</div>
	  </div>
    </div>
  </div>

</div>
	  </div>
	 </div>
	</div>
  </div>
</section>

<section id="proj">
  <div class="container">
      <div class="row serv_1 text-center mb-3">
     <div class="col-md-12">
	   <h5 class="col_1">EXPLORE PROJECTS</h5>
	   <h2 class="mb-0">OUR RECENT PROJECTS</h2>
	   <span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
	 </div>
   </div>
      <div class="row proj_1 m-0">
		 <div class="col-md-4">
	      <div class="proj_1i position-relative">
		    <div class="proj_1i1">
			  <div class="grid clearfix">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="{{url('Frontend/img/12.jpg')}}" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
			</div>
			<div class="proj_1i2 position-absolute w-100">
			  <h3 class="text-white">AGRICULTURE FARMING</h3>
			  <p class="text-light">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

			</div>
		  </div>
		 </div>
		 <div class="col-md-4">
	      <div class="proj_1i position-relative">
		    <div class="proj_1i1">
			  <div class="grid clearfix">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="{{url('Frontend/img/13.jpg')}}" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
			</div>
			<div class="proj_1i2 position-absolute w-100">
			  <h3 class="text-white">SYSTEMS REFORMS</h3>
			  <p class="text-light">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

			</div>
		  </div>
		 </div>
		 <div class="col-md-4">
	      <div class="proj_1i position-relative">
		    <div class="proj_1i1">
			  <div class="grid clearfix">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="{{url('Frontend/img/14.jpg')}}" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
			</div>
			<div class="proj_1i2 position-absolute w-100">
			  <h3 class="text-white">ORGANIC SOLUTIONS</h3>
			  <p class="text-light">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

			</div>
		  </div>
		 </div>
   </div>
  </div>
</section>

<section id="benef">
  <div class="container">
    <div class="row benef_1 mb-3">
	 <div class="col-md-4">
	  <div class="benef_1l">
	    <h5 class="col_1">OUR BENEFITS</h5>
		<h3>AGRICULTURE & ECO FARMING</h3>
		<span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
	  </div>
	 </div>
	 <div class="col-md-8">
	  <div class="benef_1l">
	   <p>There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words which don’t look even slightly believable. There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words which don’t look even slightly believable.</p>
	  </div>
	 </div>
	</div>
	<div class="row award_1 justify-content-center">
    <div class="col-md-3">
	  <div class="award_1i text-center">
	    <span style="font-size:50px;" class="col_4"><i class="fa fa-car"></i></span>
		<h1 class="text-white mt-2">700</h1>
		<h5 class="col_3 mb-0">+ Total Vehicles</h5>
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="award_1i text-center">
	    <span style="font-size:50px;" class="col_4"><i class="fa fa-users"></i></span>
		<h1 class="text-white mt-2">200</h1>
		<h5 class="col_3 mb-0">+ Happy Drivers</h5>
	  </div>
	</div>
	<div class="col-md-3">
	  <div class="award_1i text-center">
	    <span style="font-size:50px;" class="col_4"><i class="fa fa-user-plus"></i></span>
		<h1 class="text-white mt-2">600</h1>
		<h5 class="col_3 mb-0">+ Happy Farmers</h5>
	  </div>
	</div>
   </div>
  </div>
</section>

<section id="grow">
  <div class="container">
     <div class="row grow_1">
	   <div class="col-md-5">
	    <div class="grow_1l">
		  <div class="grid clearfix">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="{{url('Frontend/img/15.jpg')}}" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		</div>
	   </div>
	   <div class="col-md-7">
	    <div class="grow_1r">
		  <h5 class="col_1">FRESH PRODUCTS</h5>
		<h2>GROWING PRODUCTS</h2>
		<h4>48 YEARS
OF EXPERIENCE</h4>
		<span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
		<p>Lorem ipsum dolor sit amet nsectetur cing elit. Suspe ndisse suscipit sagittis leo sit met entum estibu dignissim posuere cubilia durae. Leo sit met entum cubilia crae onec.</p>
		<h6>Agriculture <span class="col_2 float-end">64%</span></h6>
		<div class="progress-bar" style="background-color:#f5f0e9;overflow:hidden;border-radius:7px;margin-top:20px;">
			<div class="progress"  style="background-color: rgb(91, 140, 81); height: 13px; overflow: hidden; border-radius: 7px; width: 64%;">
			</div>
		</div>
		<h6 class="mt-4">Organic <span class="col_2 float-end">82%</span></h6>
		<div class="progress-bar" style="background-color:#f5f0e9;overflow:hidden;border-radius:7px;margin-top:20px;">
			<div class="progress"  style="background-color: rgb(91, 140, 81); height: 13px; overflow: hidden; border-radius: 7px; width: 82%;">
			</div>
		</div>
		</div>
	   </div>
	 </div>
  </div>
</section>


<section id="qual">
  <div class="type_m">
    <div class="container">
     <div class="row type_1 text-center">
     <div class="col-md-12">
	  <h2 class="text-white">PROVIDE YOU THE HIGHEST QUALITY PRODUCTS THAT MEETS YOUR EXPECTATION</h2>
	  <p class="text-light mt-3">Adipisie cing elit sed eiusmod tempor on labore et dolore. Ut enim ad minim veniam, quis <br> nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
	  <h5 class="mb-0 mt-4"><a class="button" href="/services">Discover More  </a></h5>
	 </div>
   </div>
  </div>
  </div>
</section>

@endsection
