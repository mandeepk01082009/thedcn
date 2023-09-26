@extends('frontend.layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            @foreach ($slider as $images)
                <div class="carousel-item active">
                    <img src="{{ asset('storage/' . $images->image) }}" class="w-100" style="height: 550px" alt="...">
                </div>    
            @endforeach           
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>                       
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                  @foreach ($about as $aboutus)
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('storage/' . $aboutus->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h2>{{ $aboutus->heading }}</h2>
                        <p class="fst-italic">
                          {{ $aboutus->content }}
                        </p> 
                    </div>
                    @endforeach
                </div>   

            </div>
        </section><!-- End About Section -->

            <!-- ======= Why Our School Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 class="text-center mb-4 " style="color: #000066;"><b>Why choose us</b></h3>
        </div>


        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content" style="background-color: #000066;">
              <h3>Why Choose DEN Cable?</h3>
              <p style="font-size:17px;">
                We at DEN are determined to give you an unforgettable Digital TV experience. You can now enjoy more than 500 channels across genres  with amazing picture quality and seamless connectivity. Pay less and enjoy entertainment like never before!
              </p>
              <!-- <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div> -->
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt" style="color: #000066;"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p style="font-size:17px;">Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt" style="color: #000066;"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p style="font-size:17px;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images" style="color: #000066;"></i>
                    <h4>Labore consequatur</h4>
                    <p style="font-size:17px;">Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Our School Section -->
   
    <section id="trainers" class="trainers">  
      <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-sm-4 mb-3">
        <div class="card services-builder">
          <div class="card-body">
            <p class="text-center"> <i class="fa fa-align-center" style="font-size:60px; color:#000066;"></i></p>
            <h5 class="card-title text-center">Basic Plan</h5>
            <p class="card-text text-center">You can subscribe this plan for Rs 200 monthly. In this plan there are 150 channels available.</p>
            <p class="text-center"><a href="#" class="btn btn-link read" style="color: #000066">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card services-builder">
          <div class="card-body">
            <p class="text-center"> <i class="fa fa-television" style="font-size:60px; color:#000066;"></i></p>
            <h5 class="card-title text-center">Silver Plan</h5>
            <p class="card-text text-center">You can subscribe this plan for Rs 230 monthly. In this plan there are 180 channels available.</p>
            <p class="text-center"><a href="#" class="btn btn-link read" style="color: #000066">Read More</a></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card services-builder">       
          <div class="card-body">
           <p class="text-center"> <i class=" fa fa-adjust" style="font-size:60px; color: #000066;"></i></p> 
            <h5 class="card-title text-center">Gold Plan</h5>
            <p class="card-text text-center">You can subscribe this plan for Rs 250 monthly. In this plan there are 200 channels available.</p>
            <p class="text-center"><a href="#" class="btn btn-link read" style="color: #000066">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
      </div>
    </section>


    <!-- ======= Our packs Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 class="text-center mb-4 " style="color: #000066;"><b>Our Packs</b></h3>   
        </div>

        <div class="row">
          @foreach ($packs as $pack)
          <div class="col-sm-6 p-2">   
            <img src="{{ asset('storage/' . $pack->image) }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              {{-- <h3><a href="/packdetails/{{ $item->id }}">{{ $item->name }}</a></h3></div> --}}
              <h5 class="card-title text-center mt-2" style="color: #000066;"><a href="/packdetails/{{ $pack->id }}">{{ $pack->name }}</a></h5>  
            </div>
          </div>
          @endforeach
          
        </div>

      </div>
    </section><!-- End Plan Section -->


@section('scripts')
@endsection
