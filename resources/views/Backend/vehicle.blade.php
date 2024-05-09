@extends('Frontend.layouts.main')


@section('main-container')

<div class="row contact_2 mt-5">
    <div class="col-md-6">
	 <div class="contact_2l">
         <h5 class="col_4">CONTACT WITH US</h5>
		<h3 class="text-white">WRITE US A MESSAGE</h3>
		<span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
		<div class="row quote_2 mt-3">
		<div class="col-md-6">
		<div class="quote_2l">
        <form action="{{ url('/new-service') }}" method="POST">
            @csrf
            <input placeholder="Vehicle Name" class="form-control" type="text" name="vehiclename">
            </div>
            </div>
            <div class="col-md-6">
            <div class="quote_2l">
            <input placeholder="Vehicle Price" class="form-control" type="number" name="price">
            </div>
            </div>
            </div>
            <div class="row quote_2 mt-4">
            <div class="col-md-6">
            <div class="quote_2l">
            <input placeholder="Vehicle Type" class="form-control" type="text" name="type">
            </div>
            </div>
            <div class="col-md-6">
            <div class="quote_2l">
            <input placeholder="Vehicle Weight (How much carry)" class="form-control" type="number"  name="weight">
            </div>
            </div>
            </div>
            <div class="row quote_2 mt-4">
            <div class="col-md-12">
            <div class="quote_2l">
                <input type="file" placeholder="Upload a file" name="image">
            </div>
            </div>
            </div>
            <div class="row quote_2 mt-3">
            <div class="col-md-12">
            <div class="quote_2l">
            <button class="btn btn-warning d-inline-block mt-3 mb-0" type="submit">Submit Ad</button>
            </div>
        </form>
		</div>
		</div>
	 </div>
	</div>
	<div class="col-md-6">
	 <div class="contact_2r text-center">
       <img style="border-radius:5px;" src="{{url('frontend/img/25.jpg')}}" alt="abc">
	   <h5 class="col_1 mt-4">GET IN TOUCH WITH US</h5>
		<h3>HAVE QUESTION?</h3>
		<span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
		<p>There are many variations of passages available but the majority have suffered alteration in some form by inject humour or donec vel erat sollicitudin, dapibus dui at, porttitor sem.</p>
		 <h5><a class="button_1" href="#">Learn More</a></h5>
	 </div>
	</div>

  </div>



@endsection
