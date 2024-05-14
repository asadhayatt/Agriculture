@extends('Frontend.layouts.main')
@section('main-container')

<style>
    .product-card {
  width: 380px;
  position: relative;
  box-shadow: 0 2px 7px #dfdfdf;
  margin: 50px auto;
  background: #fafafa;
}

.badge {
  position: absolute;
  left: 0;
  top: 20px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 700;
  background: red;
  color: #fff;
  padding: 3px 10px;
}

.product-tumb {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 300px;
  padding: 50px;
  background: #f0f0f0;
}

.product-tumb img {
  max-width: 100%;
  max-height: 100%;
}

.product-details {
  padding: 30px;
}

.product-catagory {
  display: block;
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  color: #ccc;
  margin-bottom: 18px;
}

.product-details h4 a {
  font-weight: 500;
  display: block;
  margin-bottom: 18px;
  text-transform: uppercase;
  color: #363636;
  text-decoration: none;
  transition: 0.3s;
}

.product-details h4 a:hover {
  color: #fbb72c;
}

.product-details p {
  font-size: 15px;
  line-height: 22px;
  margin-bottom: 18px;
  color: #999;
}

.product-bottom-details {
  overflow: hidden;
  border-top: 1px solid #eee;
  padding-top: 20px;
}

.product-bottom-details div {
  float: left;
  width: 50%;
}

.product-price {
  font-size: 18px;
  color: #fbb72c;
  font-weight: 600;
}

.product-price small {
  font-size: 80%;
  font-weight: 400;
  text-decoration: line-through;
  display: inline-block;
  margin-right: 5px;
}

.product-links {
  text-align: right;
}

.product-links a {
  display: inline-block;
  margin-left: 5px;
  color: #e1e1e1;
  transition: 0.3s;
  font-size: 17px;
}

.product-links a:hover {
  color: #fbb72c;
}

</style>


<section id="off">
 <div class="container">
  <div class="row off1">
   <div class="col-md-6">
     <div class="off1l">
	    <h5 class="col_1">THE BEST COMPANY</h5>
		<h2>WE OFFER BEST AGRICULTURE SERVICES</h2>
		<span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
		<p class="mt-3"><i style="margin-right:5px;" class="fa fa-check col_1"></i> Every employee wears a photo ID badge.</p>
		<p><i style="margin-right:5px;" class="fa fa-check col_1"></i> Mobiles are custom wrapped for easy identification.</p>
		<p><i style="margin-right:5px;" class="fa fa-check col_1"></i> We are a fully insured nationally ranked brand.</p>
		<p><i style="margin-right:5px;" class="fa fa-check col_1"></i> All work is backed by our exclusive “Streak-Free Guarantee”.</p>
		<p><i style="margin-right:5px;" class="fa fa-check col_1"></i> We offer multiple services to maintain your home.</p>
		<h5 class="mb-0 mt-4"><a class="button_1" href="#">Read More  </a></h5>
	 </div>
   </div>
   <div class="col-md-6">
    <div class="off1r">
	  <div class="grid clearfix">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="{{url('frontend/img/35.jpg')}}" class="w-100" alt="img35"></a>
		  </figure>
	  </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="connect">
 <div class="container">
  <div class="connect_1 row">
    <div class="col-md-10">
	 <div class="connect_1l clearfix">
	  <p class="text-white mb-0">We are a landscaping company specialize in residential and commercial landscaping started in 1999 in New York and in 2008 in Los Angeles.</p>
	 </div>
	</div>
	<div class="col-md-2">
	 <div class="connect_1r clearfix">
	   <h5 class="mb-0"><a class="button_1" href="{{url('/new-service')}}">Post Adds</a></h5>
	 </div>
	</div>
   </div>
   <div class="connect_2 row">
     @foreach ($vehicles as $item)
        <div class="product-card">
            <div class="badge">Available</div>
            <div class="product-tumb">
                <img src="{{url('Frontend/img/7.jpg')}}" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">{{ $item->type }}</span>
                <h4><a href="">{{ $item->vehiclename }}</a></h4>
                <p>How much carry : {{ $item->weight }}kg</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price">Rs.{{ $item->price }}</div>
                    <div class="btn_style text-end">
                        <a href="{{url('/details', $item->id)}}"><button class="btn btn-warning">Book Now</button></a>
                    </div>
                </div>
            </div>
        </div>
     @endforeach

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
			<a href="#"><img src="{{url('frontend/img/15.jpg')}}" class="w-100" alt="img25"></a>
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
			<div class="progress" style="background-color: rgb(91, 140, 81); height: 13px; overflow: hidden; border-radius: 7px; width: 64%;">
			</div>
		</div>
		<h6 class="mt-4">Organic <span class="col_2 float-end">82%</span></h6>
		<div class="progress-bar" style="background-color:#f5f0e9;overflow:hidden;border-radius:7px;margin-top:20px;">
			<div class="progress" style="background-color: rgb(91, 140, 81); height: 13px; overflow: hidden; border-radius: 7px; width: 82%;">
			</div>
		</div>
		</div>
	   </div>
	 </div>
  </div>
</section>


@endsection
