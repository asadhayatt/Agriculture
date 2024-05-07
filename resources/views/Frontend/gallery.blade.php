@extends('Frontend.layouts.main')
@section('main-container')

<section id="center" class="center_o">
 <div class="container">
  <div class="row center_o1 text-center">
   <div class="col-md-12">
     <h1 class="text-white">Gallery</h1>
	 <h5 class="normal col_4 mb-0"><a class="col_3" href="#">Home</a> <span class="col_2">/</span> <a class="col_3" href="#">Pages</a> <span class="col_3">/</span> Gallery  </h5>
   </div>
  </div>
 </div>
</section>

<section id="gallery">
 <div class="container">
  <div class="row gallery_1 mb-4">
     <div class="col-md-4">
	  <div class="gallery_1i">
	   <a href="#"><img src="{{url('frontend/img/29.jpg')}}" data-bs-target="#exampleModal" data-bs-toggle="modal" class="w-100" height="280" alt="abc"></a>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{url('frontend/img/29.jpg')}}" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	 </div>
	 <div class="col-md-4">
	  <div class="gallery_1i">
	   <a href="#"><img src="{{url('frontend/img/30.jpg')}}" data-bs-target="#exampleModal1" data-bs-toggle="modal" class="w-100" height="280" alt="abc"></a>
		<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{url('frontend/img/30.jpg')}}" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	 </div>
	 <div class="col-md-4">
	  <div class="gallery_1i">
	   <a href="#"><img src="{{url('frontend/img/31.jpg')}}" data-bs-target="#exampleModalo" data-bs-toggle="modal" class="w-100" height="280" alt="abc"></a>
		<div class="modal fade" id="exampleModalo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{url('frontend/img/31.jpg')}}" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	 </div>
  </div>
  <div class="row gallery_1">
     <div class="col-md-4">
	  <div class="gallery_1i">
	   <a href="#"><img src="{{url('frontend/img/32.jpg')}}" data-bs-target="#exampleModal3" data-bs-toggle="modal" class="w-100" height="280" alt="abc"></a>
		<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{url('frontend/img/32.jpg')}}" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	 </div>
	 <div class="col-md-4">
	  <div class="gallery_1i">
	   <a href="#"><img src="{{url('frontend/img/33.jpg')}}" data-bs-target="#exampleModal4" data-bs-toggle="modal" class="w-100" height="280" alt="abc"></a>
		<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel4">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{url('frontend/img/33.jpg')}}" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	 </div>
	 <div class="col-md-4">
	  <div class="gallery_1i">
	   <a href="#"><img src="{{url('frontend/img/34.jpg')}}" data-bs-target="#exampleModal5" data-bs-toggle="modal" class="w-100" height="280" alt="abc"></a>
		<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel5">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<img src="{{url('frontend/img/34.jpg')}}" class="w-100" alt="abc">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	 </div>
  </div>
 </div>
</section>
@endsection
