<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mentor Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- =======================================================
  * Template Name: Mentor
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            {{-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ route('front') }}" class="logo me-auto"><img src="{{ asset('frontend/assets/img/logo.jpg') }}"
                    alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-item {{ request()->is('/') ? 'active' : '' }}"            
                            href="{{ route('front') }}">Home</a></li>
                    <li><a class="nav-item {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a></li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle {{ request()->is('satellite') ? 'active' : '' }} &&  {{ request()->is('homeservices') ? 'active' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">

                            <li class="nav-item">
                                <a class="dropdown-item {{ request()->is('satellite') ? 'active' : '' }}"
                                    aria-current="page" href="{{ route('satellite') }}">Cable TV</a>
                            </li>
                            <li><a class="dropdown-item {{ request()->is('homeservices') ? 'active' : '' }}"
                                    href="{{ route('homeservices') }}">Broadband Services</a></li>
                            {{-- <li><hr class="dropdown-divider"></li>         
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                        </ul>
                    </li>
                    <li><a class="nav-item {{ request()->is('support') ? 'active' : '' }}"
                            href="{{ route('support') }}">Support</a></li>

                    </li>

                    <li><a class="nav-item {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            {{-- <a href="courses.html" class="get-started-btn">Get Started</a> --}}

        </div>
    </header><!-- End Header -->
