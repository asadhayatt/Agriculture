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
		<p class="mt-3"><i style="margin-right:5px;" class="fa fa-check col_1"></i>Machinery Rental Tractor Services</p>
		<p><i style="margin-right:5px;" class="fa fa-check col_1"></i> Loading Car Operations.</p>
		<p><i style="margin-right:5px;" class="fa fa-check col_1"></i>Agricultural Vehicle Services</p>
		<p><i style="margin-right:5px;" class="fa fa-check col_1"></i>  Farm Equipment Rental.</p>
		<p><i style="margin-right:5px;" class="fa fa-check col_1"></i> We offer multiple services to maintain your Agriculture.</p>
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
	  <p class="text-white mb-0">Share your expertise, showcase your services, and grow your business - post your services on Agriconnect today</p>
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
            <div class="badge">available</div>
            <div class="product-tumb">
                <img src="{{asset($item->image)}}" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">{{ $item->type }}</span>
                <h4><a href="">{{ $item->vehiclename }}</a></h4>
                <p>How much carry : {{ $item->weight }}kg</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price">Rs.{{ $item->price }}</div>
                    <div class="btn_style text-end">
                        <a href="{{url('/details', $item->id)}}"><button class="btn btn-warning">See Details</button></a>
                    </div>
                </div>
            </div>
        </div>
     @endforeach

   </div>
 </div>
</section>




@endsection
