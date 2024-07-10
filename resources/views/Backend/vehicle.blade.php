@extends('Frontend.layouts.main')


@section('main-container')

<div class="row contact_2 mt-5">
    <div class="col-md-12">
	 <div class="contact_2l">
         <h5 class="col_4">Post A New Add</h5>
		<h3 class="text-white">Detail of Adds</h3>
		<span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
		<div class="row quote_2 mt-3">
		<div class="col-md-6">
		<div class="quote_2l">
        <form action="{{ url('/new-service') }}" method="POST" enctype="multipart/form-data">
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
            <div class="col-md-6">
            <div class="quote_2l">
                <input type="file" placeholder="Upload a file" name="image"  required>
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
</div>



@endsection
