@extends('frontend.layouts.app')

@section('styles')
@endsection

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Broadband</h2>
                <p>Enjoy the freedom of endless possibilities with Hathway Broadband. Download any songs you like, play your
                    favourite games, attach large files or folders, upload your trendy photos & videos; its simple & easy
                    with lightening fast speed. </p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('frontend/assets/img/broadband.jpg') }}" class="img-fluid w-100" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">           
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">         
                            Hathway Broadband provides the best broadband plans for your home. Every city has a range of
                            wifi plans depending on your personal internet needs. In Hyderabad, we offer broadband wifi
                            plans with speeds ranging from 40 Mbps to 150 Mbps, and monthly data ranging from 1000 GB to
                            unlimited data. With such high speeds internet and amounts of data, you will be free to engage
                            in any activity you want without worrying about your data running out and you having to top up
                            your plan. You will not have to worry about your video calls freezing in between or your game
                            lagging. Whether you are using the internet to stream OTT platforms and music, gaming, or
                            uploading and downloading large files for work, an unlimited data plan is ideal for you.

                            Hyderabad has the best broadband internet connection for your work from home needs as well.
                            Whether you need to attend online conferences, watch webinars, or upload and download large
                            files, we have the best broadband plans for you.      

                            With Hathway Broadband, you get high speed broadband connection that are very easy to manage,
                            and with the Hathway Broadband website or app you can pay your bills online, renew your
                            connection, and upgrade your internet broadband connection as needed. If there's any problem
                            with your connection, you can also contact customer service.                  
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

    </main>
@endsection

@section('scripts')
@endsection
