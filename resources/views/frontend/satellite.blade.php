@extends('frontend.layouts.app')

@section('styles')
@endsection

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Cable TV</h2>
                <p>Cable TV uses a network of cables to deliver television signals to households. The cable operator
                    collects signals from various sources, such as broadcast stations, satellite feeds, and other sources,
                    and then sends them through a network of cables to the user's TV set. </p>
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
                            Cable TV uses a network of cables to deliver television signals to households. The cable
                            operator collects signals from various sources, such as broadcast stations, satellite feeds, and
                            other sources, and then sends them through a network of cables to the user's TV set. The user
                            needs a cable box and a television set to receive cable TV services.

                            The cable box is connected to the cable line, and the television is connected to the cable box.
                            The user can then select the channels they want to watch and pay for a package that includes a
                            specific set of channels. Cable TV services are offered by a lot of companies like: Hathway
                            Cable TV, GTPL Cable TV and Den Cable TV.

                            Here is a comparison table summarizing the differences between DTH and cable TV.
                        </p>    

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->
@endsection

@section('scripts')
@endsection
