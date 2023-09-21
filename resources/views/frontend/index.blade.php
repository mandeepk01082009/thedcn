@extends('frontend.layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            @foreach ($slider as $images)
                <div class="carousel-item active">
                    <img src="{{ asset('storage/' . $images->image) }}" class="w-100" style="height: 650px" alt="...">
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
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h2>Our Comapany</h2>
                        <p class="fst-italic">
                            C&W Networks is a wholly owned subsidiary of Cable & Wireless Communications and a wholesale
                            telecommunications service provider that offers broadband, IP capacity to global, regional and
                            local telecom carriers, TV cable companies, Internet Service Providers and Network Integrators.
                            C&W Networks operates the largest subsea multi-ring fiber-optic network throughout the greater
                            Caribbean, Central American and Andean region along with the most comprehensive fully meshed
                            MPLS network in the region. Connecting over 40 countries, the company’s fully protected ringed
                            submarine fiber optic network spans more than 50,000 km. Cable routes include the Caribbean
                            Optical-ring System (ARCOS-1), Colombia-Florida Express (CFX-1), EC-Link cable system,
                            Fibralink, Maya 1, Eastern Caribbean Fiber Express (ECFS), Taino-Carib, East-West,
                            Cayman-Jamaica Fiber system, Caribbean-Bermuda U.S (CBUS), Americas II, Gemini Bermuda, Pan
                            America (PAN-AM), Antillas 1 and Pacific Caribbean Cable System (PCCS).
                        </p> 
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

            <!-- ======= Why Our School Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 class="text-center mb-4 " style="color: #285430;"><b>Why choose us</b></h3>
        </div>


        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content" style="background-color: #285430;">
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
                    <i class="bx bx-receipt" style="color: #285430;"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p style="font-size:17px;">Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt" style="color: #285430;"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p style="font-size:17px;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images" style="color: #285430;"></i>
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
            <p class="text-center"> <i class="fa fa-align-center" style="font-size:60px; color:#ddaf4d;"></i></p>
            <h5 class="card-title text-center">Basic Plan</h5>
            <p class="card-text text-center">You can subscribe this plan for Rs 200 monthly. In this plan there are 150 channels available.</p>
            <p class="text-center"><a href="#" class="btn btn-link read" style="color: #ddaf4d">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card services-builder">
          <div class="card-body">
            <p class="text-center"> <i class="fa fa-television" style="font-size:60px; color:#ddaf4d;"></i></p>
            <h5 class="card-title text-center">Silver Plan</h5>
            <p class="card-text text-center">You can subscribe this plan for Rs 230 monthly. In this plan there are 180 channels available.</p>
            <p class="text-center"><a href="#" class="btn btn-link read" style="color: #ddaf4d">Read More</a></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card services-builder">
          <div class="card-body">
           <p class="text-center"> <i class=" fa fa-adjust" style="font-size:60px; color: #ddaf4d;"></i></p> 
            <h5 class="card-title text-center">Gold Plan</h5>
            <p class="card-text text-center">You can subscribe this plan for Rs 250 monthly. In this plan there are 200 channels available.</p>
            <p class="text-center"><a href="#" class="btn btn-link read" style="color: #ddaf4d">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
      </div>
    </section>


    <!-- ======= Popular colors packs Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 class="text-center mb-4 " style="color: #000066;"><b>Colors Packs</b></h3>
        </div>

        <div class="row">
          <div class="col-sm-3">   
            <img src="{{ asset('frontend/assets/img/testimonials/color_1.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Colors Value Pack of 25</h5>
            </div>
          </div>
          
          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/color_2.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Colors Value Pack of 42</h5>
            </div>
          </div>
    
          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/color_3.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Colors Value Pack of 32</h5>
            </div>
          </div>

          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/color_4.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Colors Value Pack of 53</h5>
            </div>
          </div>
        </div> <!-- End Classes Item-->

        </div>

      </div>
    </section><!-- End Popular Classes Section -->

        <!-- ======= Popular colors packs Section ======= -->
        <section id="popular-courses" class="courses">  
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h3 class="text-center" style="color: #000066"><b>ZEE Networks</b></h3>
            </div>
    
            <div class="row">
              <div class="col-sm-4">   
                <img src="{{ asset('frontend/assets/img/testimonials/Zee-All-In-1-Pack-Hindi.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center mt-2">ZEE All In 1 Pack Hindi</h5>
                </div>
              </div>
              
              <div class="col-sm-4">   
                 <img src="{{ asset('frontend/assets/img/testimonials/Zee-All-In-1-Pack-Hindi-HD.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center mt-2">ZEE All In 1 Pack Hindi HD</h5>
                </div>
              </div>
        
              <div class="col-sm-4">   
                 <img src="{{ asset('frontend/assets/img/testimonials/Zee-Family-Pack-SD.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center mt-2">ZEE Family Pack SD</h5>
                </div>
              </div>
    
            </div> <!-- End Classes Item-->
    
            </div>
    
          </div>
        </section><!-- End Popular Classes Section -->


            <!-- ======= Popular colors packs Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 class="text-center mb-4 " style="color: #000066"><b>Star Network</b></h3>
        </div>

        <div class="row">
          <div class="col-sm-3">   
            <img src="{{ asset('frontend/assets/img/testimonials/Star-Hindi-Base-Pack.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Star Hindi Base Pack</h5>
            </div>
          </div>
          
          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/Star-Hindi-HD-Premium-Pack.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Star Hindi HD Premium Pack</h5>
            </div>
          </div>
    
          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/Star-Hindi-Premium.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Star Hindi Premium</h5>
            </div>
          </div>

          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/Star-Hindi-Value-Pack.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Star Hindi Value Pack</h5>
            </div>
          </div>
        </div> <!-- End Classes Item-->

        </div>

      </div>
    </section><!-- End Popular Classes Section -->

     <!-- ======= Popular colors packs Section ======= -->
     <section id="popular-courses" class="courses">  
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 class="text-center" style="color: #000066"><b>Sony Network Packs</b></h3>
        </div>

        <div class="row">
          <div class="col-sm-4">   
            <img src="{{ asset('frontend/assets/img/testimonials/Sony-Gold-Pack.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Sony Gold Pack</h5>
            </div>
          </div>
          
          <div class="col-sm-4">   
             <img src="{{ asset('frontend/assets/img/testimonials/Sony-HD-Platinum-Pack.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Sony HD Platinum Pack</h5>
            </div>
          </div>
    
          <div class="col-sm-4">   
             <img src="{{ asset('frontend/assets/img/testimonials/Sony-HD-Premium.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Sony HD Premium</h5>
            </div>
          </div>

        </div> <!-- End Classes Item-->

        <div class="row mt-5">
          <div class="col-sm-3">   
            <img src="{{ asset('frontend/assets/img/testimonials/Sony-Platinum-Pack.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Sony Platinum Pack</h5>
            </div>
          </div>
          
          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/Sony-Silver-Bangali.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Sony Silver Bangali</h5>
            </div>
          </div>
    
          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/Sony-Silver-HD-Pack.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Sony Silver HD Pack</h5>
            </div>
          </div>

          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/Sony-Sixer-HD.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Sony Sixer HD</h5>      
            </div>
          </div>
        </div> <!-- End Classes Item-->

        </div>

      </div>
    </section><!-- End Popular Classes Section -->


     <!-- ======= Popular colors packs Section ======= -->
     <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 class="text-center mb-4 " style="color: #000066"><b>Disney Network Packs</b></h3>
        </div>

        <div class="row">
          <div class="col-sm-3">   
            <img src="{{ asset('frontend/assets/img/testimonials/Disney-Universal-Bouquet.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Disney Universal Bouquet</h5>
            </div>
          </div>
          
          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/Disney-Kids-Bouquet.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Disney Kids Bouquet</h5>
            </div>
          </div>
    
          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/Disney-Hindi-Entertainment-Bouqet.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Disney Hindi Entertainment Bouqet</h5>
            </div>
          </div>

          <div class="col-sm-3">   
             <img src="{{ asset('frontend/assets/img/testimonials/Disney-HD-Bouquet.webp') }}" class="card-img-top ug-thumb-image ug-trans-enabled" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center mt-2">Disney HD Bouquet</h5>      
            </div>           
          </div>        
        </div> <!-- End Classes Item-->               

        </div>                      

      </div>
    </section><!-- End Popular Classes Section -->

    


        <!-- ======= Trainers Section ======= -->
        <section id="trainers" class="trainers">

         
            <div class="container" data-aos="fade-up">
              <h1 class="text-center" style="color: #000066; ">Our Team</h1>
              <p class="text-center fw-bold" style="color: #000066;">Under our team leadership, C&W Networks has evolved
                into the primary bandwidth backbone in the Pan-Caribbean region</p>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ asset('frontend/assets/img/trainers/trainer-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>CARMINE SORRENTINO</h4>
                                <span>Vice President, Chief Commercial & Operating Officer</span>
                                <p>
                                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                                  rerum temporibus
                              </p>
                                <div class="social">
                                  <a href=""><i class="bi bi-twitter"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ asset('frontend/assets/img/trainers/trainer-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>Sarah Jhinson</h4>
                                <span>Marketing</span>
                                <p>
                                    Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                                    rerum temporibus
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ asset('frontend/assets/img/trainers/trainer-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>William Anderson</h4>
                                <span>Content</span>
                                <p>
                                    Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                                    toro des clara
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ asset('frontend/assets/img/trainers/trainer-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>William Anderson</h4>
                                <span>Content</span>
                                <p>
                                    Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                                    toro des clara
                                </p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Trainers Section -->

    </main><!-- End #main -->
@endsection

@section('scripts')
@endsection
