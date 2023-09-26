@extends('frontend.layouts.app')

@section('styles')
@endsection

@section('content')

<section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">
      
      @foreach ($pack as $packdetails)
      <div class="section-title mt-5">
        <h3 class="text-center mb-4 " style="color: #000066;"><b>{{ $packdetails->name }}</b></h3>
      </div>
      @endforeach  

      <div class="row">
        @foreach ($packdetail as $packdetails)
        <div class="col-sm-6 p-2">   
          <img src="{{ asset('storage/' . $packdetails->image) }}" class="img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center mt-2" style="color: #000066;">{{ $packdetails->name }}</h5>  
          </div>
        </div>
        @endforeach
        
      </div>

    </div>
  </section><!-- End Popular Classes Section -->

@endsection

@section('scripts')
@endsection