@extends('frontend.master')

@section('maincontent')
    @section('meta')
        <!-- HTML Meta Tags -->
        <title>Professional Painting Service» Bangladesh's No.1 Painting Company || Deyal</title>
        <meta name="description"
              content="Top Rated Painting Service with a hassle-free experience. 755+ Projects planned and executed across Bangladesh, Best Wall Painters, with Super Fast Painting Service">

        <!-- Google / Search Engine Tags -->
        <meta itemprop="name" content="Professional Painting Service» Bangladesh's No.1 Painting Company || Deyal">
        <meta itemprop="description"
              content="Top Rated Painting Service with a hassle-free experience. 755+ Projects planned and executed across Bangladesh, Best Wall Painters, with Super Fast Painting Service">
        <meta itemprop="image" content="{{env('PROD_URL')}}/public/logo.jpg">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{env('PROD_URL')}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Professional Painting Service» Bangladesh's No.1 Painting Company || Deyal">
        <meta property="og:description"
              content="Top Rated Painting Service with a hassle-free experience. 755+ Projects planned and executed across Bangladesh, Best Wall Painters, with Super Fast Painting Service">
        <meta property="og:image" content="{{env('PROD_URL')}}/public/logo.jpg">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Professional Painting Service» Bangladesh's No.1 Painting Company || Deyal">
        <meta name="twitter:description"
              content="Top Rated Painting Service with a hassle-free experience. 755+ Projects planned and executed across Bangladesh, Best Wall Painters, with Super Fast Painting Service">
        <meta name="twitter:image" content="{{env('PROD_URL')}}/public/logo.jpg">

        <!-- Meta Tags -->
    @endsection

    <section id="intro">
        <div class="intro-container" id="contactcar">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    @forelse($sliders as $slider)
                        <div class="carousel-item active" id="slider-p">
                            <div class="carousel-background"><img src="{{asset($slider->slider_image)}}" alt=""></div>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-md-8" id="sliderh1pd">
                                        <h1 id="sliderh1">Services We Offer</h1>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card" style="background: #1E4651;border-radius: 20px;color: white;">
                                            <div class="card-body">
                                                <h4 id="sliderh4">Book A Free Site Visit </h4>
                                                <form action="" name="form">
                                                    <div class="form-group">
                                                        <input type="text" name="name" id="name" placeholder="Name"
                                                               class="form-control mb-2" style="border-radius: 30px;">
                                                        <input type="text" name="phone" id="phone" placeholder="Phone"
                                                               class="form-control mb-2" style="border-radius: 30px;">
                                                        <input type="text" name="email" id="email" placeholder="Email"
                                                               class="form-control mb-2" style="border-radius: 30px;">
                                                        <select name="country" id="country" class="form-control mb-2"
                                                                style="border-radius: 30px;">
                                                            <option value="Dhaka">Dhaka</option>
                                                            <option value="Chottogram">Chottogram</option>
                                                        </select>
                                                        <div class="check mb-2">
                                                            <input type="checkbox" name="agree" id="agree" class="mb-2">
                                                            Yes, I would like to receive important updates and
                                                            notifications on WhatsApp
                                                        </div>
                                                        <a href="#featured-services" class="btn-get-started scrollto"
                                                           style="background:#FF7D44;color: white;font-weight: bold;  border: 2px solid #FF7D44; padding: 2px 6px;">Book
                                                            an Appointment</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>

            </div>
        </div>
    </section>
    <!-- #intro -->

    <main id="main">
        <img src="{{ asset('public/scrs.png') }}" alt="" id="scrcimg">
        <section id="services"
                 style="position: relative;z-index: 9999;background-image:url('public/bgsrc.png');    background-size: cover;background-repeat: no-repeat;">
            <div class="container pb-lg-4 mb-lg-4">
                <div class="row mt-4 pt-lg-4 pb-4 mb-4">
                    @foreach($solutions as $solution)
                        <div class="col-lg-4 col-12 mb-4">
                            <img src="{{ asset($solution->bg_img) }}" alt="" style="width: 100%">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
{{--        <img src="{{ asset('public/scrs.png') }}" alt="" id="scrcimg" style="z-index: 99999;">--}}


        <section id="services"
                 style="z-index: 9999;position: relative;background-image:url('public/bgsrc.png');    background-size: cover;background-repeat: no-repeat;">
            <div class="container">

                <div class="row mt-4 pt-lg-4 mb-4 pb-4">
                    <div class="col-lg-6">
                        <img src="{{ asset($solutionLeftImg->desc_image) }}" alt="" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="pt-3"
                            style="font-weight:bold;color:#1E4651;">{{$solutionLeftImg->solution_title}}</h2>
                        <p>{{$solutionLeftImg->desc_text}}</p>
                    </div>
                </div>
            </div>
        </section>
        <img src="{{ asset('public/scrs.png') }}" alt="" id="scrcimg" style="z-index: 9999;">
        <section id="services"
                 style="z-index: 99999;position: relative;background-image:url('public/bgsrc.png');    background-size: cover;background-repeat: no-repeat;">
            <div class="container">

                <div class="row mt-4 pt-lg-6 mb-4 pb-4">
                    <div class="col-lg-6">
                        <h2 class="pt-3" style="font-weight:bold;color:#1E4651;">{{$solutionRightImg->solution_title}}</h2>
                        <p>{{$solutionRightImg->desc_text}}</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset($solutionRightImg->desc_image) }}" alt="" width="100%">
                    </div>
                </div>
            </div>
        </section>
        
        @if($banner)
            <section id="servicess" class="pt-0 d-none d-lg-block" style="background: white;margin-bottom:60px">
                <div class="container">
                    <div class="row pb-4 mb-4 pt-4 mt-4">
                        <div class="col-12">
                            <div class="imgb"
                                 style="background-image: url({{asset($banner->banner_image)}});    background-size: cover;border-radius: 15px; ">
                                <div class="row">
                                    <div class="col-lg-12 col-12" style="    padding: 75px;">
                                        <h2 style="color: white;font-weight: bold;padding-bottom: 12px;">{{$banner->banner_title}}</h2>
                                        <a href="" class="btn btn-primary"
                                           style="background:#FF7D44;color:white;border-radius:30px;padding:15px 52px 15px 52px">Just
                                            Make a Call to Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @endif

        <section id="services" style="background:none;background-repeat: no-repeat;background-size: cover;background-image: url('{{asset($faq_consult_img->consult_bg_image)}}');">
            <div class="container pb-4 mb-4">

                <div class="row mt-4 pt-lg-4 pb-4 mb-4">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="{{asset($faq_consult_img->consult_side_image)}}" alt="" style="width:100%">
                    </div>

                    <div class="col-lg-6">
                        <div class="card" style="background: none;border:none">
                            <div class="card-body">
                                <h4 style="font-size: 27px;font-weight: 600;">{{$faq_consult_img->consult_title}}</h4>

                                <form action="{{route('administrator.appointments.store')}}" name="form" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <input type="text" name="name" id="name" placeholder="Name" class="form-control mb-2 mr-4" style="border-radius: 30px;" required>
                                            <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control mb-2" style="border-radius: 30px;" required>
                                        </div>
                                        <input type="text" name="email" id="email" placeholder="Email" class="form-control mb-2" style="border-radius: 30px;">
                                        <div class="d-flex">
                                            <select name="service" id="country" class="form-control mb-2 mr-4" style="border-radius: 30px;" required>
                                                <option disabled selected>Service</option>
                                                @forelse ($solutions as $solution)
                                                    <option value="{{ $solution->solution_title }}">{{ $solution->solution_title }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            <select name="location" id="country" class="form-control mb-2" style="border-radius: 30px;">
                                                <option value="Location">Location</option>
                                            </select>
                                        </div>
                                        <div class="check mb-2">
                                            <input type="checkbox" name="notification" id="agree" class="mb-2" > Yes, I would like to receive important updates and notifications on WhatsApp
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-get-started scrollto" style="border-radius: 45px;background:#FF7D44;color: white;font-weight: bold;  border: 2px solid #FF7D44;padding: 6px 12px;">Book an Appointment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-block d-lg-none">
                        <img src="{{asset('public/paintman.png')}}" alt="" style="width:100%">
                    </div>
                </div>

            </div>
        </section>

    </main>

@endsection
