@extends('Frontend.layouts.main')
@section('main-container')

  <div class="row contact_2 mt-5">
    <div class="col-md-6">
	 <div class="contact_2l">
        <form action="{{ url('/store-contact-us') }}" method="POST">
            @csrf
                    <h5 class="col_4">CONTACT WITH US</h5>
                    <h3 class="text-white">WRITE US A MESSAGE</h3>
                    <span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
                    <div class="row quote_2 mt-3">
                    <div class="col-md-12">
                    <div class="quote_2l">
                    <input name="name" placeholder="Name" class="form-control" type="text">
                    </div>
                    </div>
                    <div class="col-md-12 mt-3">
                    <div class="quote_2l">
                    <input name="email" placeholder="Email Address" class="form-control" type="email">
                    </div>
                    </div>
                    </div>
                    <div class="row quote_2 mt-4">
                    <div class="col-md-12">
                    <div class="quote_2l">
                    <input name="phone" placeholder="Phone Number" class="form-control" type="number">
                    </div>
                    </div>
                    </div>
                    <div class="row quote_2 mt-4">
                    <div class="col-md-12">
                    <div class="quote_2l">
                    <textarea name="message" style="height:200px;" placeholder="Write a Message" class="form-control"></textarea>
                    </div>
                    </div>
                    </div>
                    <div class="row quote_2 mt-3">
                    <div class="col-md-12">
                    <div class="quote_2l">
                    <h5 class="d-inline-block mt-3 mb-0"><button type="submit" class="button_1" href="#"> Send Message </button></h5>
                    </div>
                    </div>
                    </div>
    </form>
	 </div>
	</div>
	<div class="col-md-6">
	 <div class="contact_2r text-center">
       <img style="border-radius:5px;" src="{{url('frontend/img/25.jpg')}}" alt="abc">
	   <h5 class="col_1 mt-4">GET IN TOUCH WITH US</h5>
		<h3>HAVE QUESTION?</h3>
		<span style="font-size:40px;"><i class="fa fa-leaf col_4"></i></span>
		<p>There are many variations of passages available but the majority have suffered alteration in some form by inject humour or donec vel erat sollicitudin, dapibus dui at, porttitor sem.</p>
	 </div>
	</div>

  </div>
  <div class="row contact_3 mt-5">
    <div class="col-md-12">
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788" height="450" style="border:0; width:100%;" allowfullscreen=""></iframe>
	</div>
   </div>
 </div>
</section>
@endsection
