@extends('Frontend.layouts.main')
@section('main-container')
<style>
.card-container {
			width: 80%;
      margin:40px auto;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
		
		.image {
			width: 40%;
			margin: 20px;
		}
		
		.data {
			width: 50%;
			margin: 20px;
		}


</style>
<div class=" card-container">
		<img src="{{url('Frontend/img/img 3.jpg')}}" class="image" alt="Product Image">
		<div class="data">
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
    @endsection
