@extends('frontend.layouts.app')

@section('styles')
@endsection

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Satellite TV</h2>
                <p>Satellite television is a service that delivers television programming to viewers by relaying it from a
                    communications satellite orbiting the Earth directly to the viewer's location. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">                 
            <div class="container" data-aos="fade-up">                 

                <div class="row">             
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('frontend/assets/img/satellite.jpg') }}" class="img-fluid w-100" alt="">
                    </div>                
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Satellite television is a service that delivers television programming to viewers by relaying it
                            from a communications satellite orbiting the Earth directly to the viewer's location.[1] The
                            signals are received via an outdoor parabolic antenna commonly referred to as a satellite dish
                            and a low-noise block downconverter.

                            A satellite receiver then decodes the desired television program for viewing on a television
                            set. Receivers can be external set-top boxes, or a built-in television tuner. Satellite
                            television provides a wide range of channels and services. It is usually the only television
                            available in many remote geographic areas without terrestrial television or cable television
                            service.

                            Modern systems signals are relayed from a communications satellite on the X band (8–12 GHz) or
                            Ku band (12–18 GHz) frequencies requiring only a small dish less than a meter in diameter.[2]
                            The first satellite TV systems were an obsolete type now known as television receive-only. These
                            systems received weaker analog signals transmitted in the C-band (4–8 GHz) from FSS type
                            satellites, requiring the use of large 2–3-meter dishes. Consequently, these systems were
                            nicknamed "big dish" systems, and were more expensive and less popular.
                        </p>

                    </div>          
                </div>

            </div>
        </section><!-- End About Section -->                        

    </main><!-- End #main -->
@endsection

@section('scripts')
@endsection
