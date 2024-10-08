@extends('frontend.master')

@section('maincontent')
@section('meta')
     <!-- HTML Meta Tags -->
     <title>Professional Painting Service» Bangladesh's No.1 Painting Company || Deyal</title>
     <meta name="description" content="Top Rated Painting Service with a hassle-free experience. 755+ Projects planned and executed across Bangladesh, Best Wall Painters, with Super Fast Painting Service">

     <!-- Google / Search Engine Tags -->
     <meta itemprop="name" content="Professional Painting Service» Bangladesh's No.1 Painting Company || Deyal">
     <meta itemprop="description" content="Top Rated Painting Service with a hassle-free experience. 755+ Projects planned and executed across Bangladesh, Best Wall Painters, with Super Fast Painting Service">
     <meta itemprop="image" content="{{env('PROD_URL')}}/public/logo.jpg">

     <!-- Facebook Meta Tags -->
     <meta property="og:url" content="{{env('PROD_URL')}}">
     <meta property="og:type" content="website">
     <meta property="og:title" content="Professional Painting Service» Bangladesh's No.1 Painting Company || Deyal">
     <meta property="og:description" content="Top Rated Painting Service with a hassle-free experience. 755+ Projects planned and executed across Bangladesh, Best Wall Painters, with Super Fast Painting Service">
     <meta property="og:image" content="{{env('PROD_URL')}}/public/logo.jpg">

     <!-- Twitter Meta Tags -->
     <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="Professional Painting Service» Bangladesh's No.1 Painting Company || Deyal">
     <meta name="twitter:description" content="Top Rated Painting Service with a hassle-free experience. 755+ Projects planned and executed across Bangladesh, Best Wall Painters, with Super Fast Painting Service">
     <meta name="twitter:image" content="{{env('PROD_URL')}}/public/logo.jpg">
    <!-- Meta Tags -->


@endsection
<style>

    #secondarySliderBtn:hover
    {
        background:#FF7D44 !important;
        color: white !important;
    }
</style>
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                @forelse ($sliders as $slider)
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{asset($slider->slider_image)}}" alt=""></div>
                        <div class="container text-center" id="slider-p">
                            <div class="row">
                                <div class="col-md-8">
                                    <h1 id="sliderh1">{{ $slider->slider_small_title }}</h1>
                                    <p id="sliderhp">{{ $slider->slider_text }}</p>
                                    <div class="d-flex align-items-center w-100" id="sliderbtngrp">
                                        <a href="{{$slider->slider_btn_link}}" class="btn-get-started  scrollto" style="background:#FF7D44;color: white;font-weight: bold;  border: 2px solid #FF7D44;padding: 8px 6px 8px 6px;">{{$slider->slider_btn_name}}</a>
                                        <a href="{{$slider->slider_btn2_link}}" id="secondarySliderBtn" class="btn-get-started scrollto" style="background:none;color: #FF7D44;font-weight: bold;  border: 2px solid #FF7D44;padding: 6px 12px;">{{$slider->slider_btn2_name}}</a>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="card" style="background: #1E4651;border-radius: 20px;color: white;">
                                        <div class="card-body">
                                            <h4 id="sliderh4">Book A Free Site Visit </h4>

                                            <form  name="form" action="{{route('administrator.appointments.store')}}"  method="POST">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control mb-2" style="border-radius: 30px;" required />
                                                    <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control mb-2" style="border-radius: 30px;" />
                                                    <input type="text" name="email" id="email" placeholder="Email" class="form-control mb-2" style="border-radius: 30px;" />
                                                    <select name="location" id="country" class="form-control mb-2" style="border-radius: 30px;" >
                                                        <option value="Dhaka">Dhaka</option>
                                                        <option value="Chottogram">Chottogram</option>
                                                    </select>
                                                    <div class="check mb-2">
                                                        <input type="checkbox" name="notification" id="agree" class="mb-2" /> Yes, I would like to receive important updates and notifications on WhatsApp
                                                    </div>
                                                    <button type="submit"  class="btn btn-get-started scrollto" style="background:#FF7D44;color: white;font-weight: bold;  border: 2px solid #FF7D44; padding: 2px 6px;">Book an Appointment</button>
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
    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp" style="z-index: 999;position: relative;">
                <h3 style="color: #187C94;">All-In-One <br> Painting Solution</h3>
            </header>

            <div class="row mt-4 pt-lg-4">
                @forelse ($solutions as $solution)
                    <div class="col-lg-4 col-md-6 box wow bounceInUp text-left" data-wow-duration="1.4s" style="background-image: url('{{asset($solution->solution_bg_image)}}');background-size: 90%;    background-repeat: no-repeat;background-position-y: 100%;background-position-x: -0%;">
                        <img src="{{asset($solution->solution_image)}}" alt="" id="solimg">
                        <h4 class="title"><a href="">{{ $solution->solution_title }}</a></h4>
                        <p class="description">{{ $solution->solution_text }}</p>
                        <a href="{{$solution->solution_btn_link}}" id="topbook" style="background: none;border:none;padding-left:0px;color:#FF7D44;">{{ $solution->solution_btn_name }}  <i class="fa fa-arrow-right"></i></a>
                    </div>
                @empty

                @endforelse
            </div>

        </div>
    </section>
{{--  About Us  --}}
    <section id="clients" class="wow fadeInUp" style="background-color: #f8fbfb;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <img src="{{ asset($aboutUs->aboutUs_sideImg) }}" style="width:100%">
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-6 col-12">
                    <h2 class="pt-3" id="whoh1">{{$aboutUs->aboutUs_title1}}</h2>
                    <p id="whop1">{{$aboutUs->aboutUs_title2}}</p>
                    <p id="whop2">{{$aboutUs->aboutUs_desc}}</p>

                    <div class="row">
                        <div class="col-lg-6 col-12 mb-2">
                            <div class="card card-body" id="whocard">
                                <div class="d-flex justify-content-between">
                                    <img src="{{ asset($aboutUs->aboutUs_projectCompleted_img) }}" style="width:60px;height:60;margin-top: 6px;background:white;border-radius:50%">
                                    <div class="info">
                                        <h4 id="whocardh4">{{$aboutUs->aboutUs_projectCompleted_count}}</h4>
                                        <p class="m-0">{{$aboutUs->aboutUs_projectCompleted_title}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-2">
                            <div class="card card-body" id="whocard">
                                <div class="d-flex justify-content-between">
                                    <img src="{{ asset($aboutUs->aboutUs_happyClients_img) }}" style="width:60px;height:60;margin-top: 6px;background:white;border-radius:50%">
                                    <div class="info">
                                        <h4 id="whocardh4">{{$aboutUs->aboutUs_happyClients_count}}</h4>
                                        <p class="m-0">{{$aboutUs->aboutUs_happyClients_title}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-2">
                            <div class="card card-body" id="whocard">
                                <div class="d-flex justify-content-between">
                                    <img src="{{ asset($aboutUs->aboutUs_teamMembers_img) }}" style="width:60px;height:60;margin-top: 6px;background:white;border-radius:50%">
                                    <div class="info">
                                        <h4 id="whocardh4">{{$aboutUs->aboutUs_teamMembers_count}}</h4>
                                        <p class="m-0">{{$aboutUs->aboutUs_teamMembers_title}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-2">
                            <div class="card card-body" id="whocard">
                                <div class="d-flex justify-content-between">
                                    <img src="{{ asset($aboutUs->aboutUs_yearsService_img) }}" style="width:60px;height:60;margin-top: 6px;background:white;border-radius:50%">
                                    <div class="info">
                                        <h4 id="whocardh4">{{$aboutUs->aboutUs_yearsService_count}}</h4>
                                        <p class="m-0">{{$aboutUs->aboutUs_yearsService_title}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--  Solutions  --}}
    <section id="services" class="d-none d-lg-block pt-0" style="background: white;margin-bottom:60px">
        <img src="{{ asset('public/we-color-your-dream-bg.png') }}" alt="" style="width: 100%">
        <div class="container" id="content-mar">

            <header class="section-header wow fadeInUp">
                <h4 style="text-align: center;font-size: 30px;font-weight: bold;color: #ffffff;">We Color Your Dream</h4>
            </header>

            <div class="row mt-4 pt-lg-4">
                @forelse ($worksteps as $workstep)
                    <div class="col-6 col-lg-3">
                        <div class="card" style="margin: 10px;border-radius: 20px;    box-shadow: 0px 1px 28px -10px #000;">
                            <div class="card-body" style="text-align: -webkit-center;border-radius: 20px;padding: 30px 30px 30px 30px;">
                                <div id="img-div">
                                    <img src="{{asset($workstep->workstep_image)}}" alt="" style="height: 90px;padding:12px;transform: scaleX(-1);">
                                </div>
                                <h4 class="m-0 pt-2" style="font-size: 20px;    height: 56px;">{{ $workstep->workstep_title }}</h4>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
            <div class="row pb-4 mb-4 pt-4 mt-4">
                <div class="col-12">
                    <div class="imgb" style="background-image: url('public/grpbanner.png');    background-size: cover;border-radius: 15px; ">
                        <div class="row">
                            <div class="col-lg-12 col-12" style="    padding: 75px;">
                                <h2 style="color: white;font-weight: bold;padding-bottom: 12px;">Need the Best <span>Painting</span> or <br>
                                    <span>Water Proofing</span> Service?</h2>
                                    <a href="" class="btn btn-primary" style="background:#FF7D44;color:white;border-radius:30px;padding:15px 52px 15px 52px">Just Make a Call to Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
{{--  Worksteps  --}}
    <section id="services" class="d-lg-none d-block pt-0" style="background: white;margin-bottom:0px">
        <div class="container pb-4" style="background: url('public/we-color-your-dream-bg.png')">
            <header class="section-header wow fadeInUp">
                <h4 style="text-align: center;font-size: 22px;padding-top: 20px;font-weight: bold;color: #ffffff;">We Color Your Dream</h4>
            </header>

            <div class="row mt-4 pt-lg-4">
                @forelse ($worksteps as $workstep)
                    <div class="col-6 col-lg-3">
                        <div class="card" style="margin: 10px;border-radius: 20px;    box-shadow: 0px 1px 28px -10px #000;">
                            <div class="card-body" style="text-align: -webkit-center;border-radius: 20px;padding: 10px 10px 10px 10px;">
                                <div id="img-div">
                                    <img src="{{asset($workstep->workstep_image)}}" alt="" style="height: 64px;padding:6px;transform: scaleX(-1);    margin-top: 6px;">
                                </div>
                                <h4 class="m-0 pt-2" style="font-size: 14px;height: 44px;">{{ $workstep->workstep_title }}</h4>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>

        </div>
    </section>
{{--   Banner Section --}}
    @if($banner)
    <section id="services" class="d-lg-none d-block pt-0" style="background: white;margin-bottom:0px">
        <div class="container">
            <div class="row pb-4">
{{--                @foreach($banners as $banner) --}}
                <div class="col-12">
                    <div class="imgb" style="background-image: url('{{asset($banner->banner_image)}}');    background-size: cover;border-radius: 15px; ">
                        <div class="row">
                            <div class="col-lg-12 col-12" style="padding: 36px;">
                                <h2 style="color: white;font-weight: bold;padding-bottom: 12px;font-size: 22px;text-align: center;padding: 0;">{{$banner->banner_title}}</h2>
                                <a href="{{$banner->banner_btn_link}}" class="btn btn-primary" style="background:#FF7D44;color:white;border-radius:30px;padding:15px 52px 15px 52px">{{$banner->banner_btn_text}}</a>
                            </div>
                        </div>
                    </div>
                </div>
{{--                @endforeach--}}
            </div>

        </div>
    </section>
    @endif


{{--  Faclities  --}}
    <img src="{{ asset($facility_images->facilty_bg_img)}}" alt="" id="specialimg">
    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp" style="z-index: 999;position: relative;">
                <h3 style="color: #187C94;">{{$facility_images->facility_title}}</h3>
            </header>

            <div class="row mt-4 pt-lg-4 mb-4 pb-4">
                <div class="col-lg-6 mb-4">
                    @foreach($facilitys as $facility)
                    <div class="card card-body mb-2 p-2" style="background:#fff;border:none;">
                        <div class="d-flex">
                            <div class="img" style="width:60px;height:60px;margin-top: 6px;background:#E9F2F4;border-radius:50%">
                                <img src="{{ asset($facility->facility_image) }}" style="height: 44px;padding-left: 8px;margin-top: 8px;">
                            </div>
                            <h4 style="color: #000;font-weight:bold;margin-bottom: 0;margin-top: 22px;padding-left: 15px;font-size: 20px;">{{$facility->facility_title}}</h4>
                        </div>
                    </div>

                    @endforeach
                </div>
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                    <img src="{{ asset($facility_images->facilty_side_img1) }}" alt="" width="100%">
                </div>
            </div>
            <br>
            <div class="row mt-4 pt-lg-4">
                <div class="col-lg-4 mb-4">
                    <img src="{{ asset($facility_images->facilty_side_img2) }}" alt="" width="100%">
                </div>
                <div class="col-lg-2">

                </div>
                <div class="col-lg-6">
                    @foreach($facilitys as $facility)
                    <div class="card card-body mb-2 p-2" style="background:#fff;border:none;">
                        <div class="d-flex">
                            <div class="img" style="width:60px;height:60px;margin-top: 6px;background:#E9F2F4;border-radius:50%">
                                <img src="{{ asset($facility->facility_image)}}" style="height: 44px;padding-left: 8px;margin-top: 8px;">
                            </div>
                            <h4 style="color: #000;font-weight:bold;margin-bottom: 0;margin-top: 22px;padding-left: 15px;font-size: 20px;">{{$facility->facility_title}}</h4>
                        </div>
                    </div>

                    @endforeach
                </div>
                <div class="col-12 text-center pt-4 mt-4 pb-4 mb-4">
                    <a href="{{$facility_images->facilty_btn_link}}" class="btn btn-primary" style="background:#FF7D44;color:white;border-radius:30px;padding:15px 52px 15px 52px">{{$facility_images->facilty_btn_text}}</a>
                </div>
            </div>

        </div>
        <br>
        <br>
    </section>

{{--  Clients  --}}
    <section id="portfolio" style="max-height: 900px;background-repeat: no-repeat;background-size: cover;background-image: url('public/our-recent-works-bg.png');">

        <div class="container">

            <div class="container" id="trusted">

                <header class="section-header">
                    <h3 class="pt-4">We are trusted by</h3>
                </header>

                <div class="row mb-4 pb-4">
                    <div class="col-lg-12 m-auto">
                        <div class="owl-carousel clients-carousel">
                            @forelse ($clients as $client)
                            <img src="{{asset($client->image)}}" alt="">
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="container" id="recentwork">

            <header class="section-header">
                <h3 class="section-title" style="color: #fff">Our Recent Works</h3>
            </header>

            <div class="row">
                @forelse ($projects as $project)
                    <div class="col-6 col-lg-4">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{asset($project->image)}}" class="img-fluid" alt="" style="border-radius: 4px;">
                            </figure>
                        </div>
                    </div>
                @empty

                @endforelse

            </div>

        </div>
    </section>

{{--Faq--}}
    <section id="services" class="faq" style="background: white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <img src="{{ asset($faq_consult_img->faq_image) }}" style="width:100%">
                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-6 col-12">
                    <h3 id="faeh3"><b>FAQs</b></h3>
                    @forelse ($faqs as $faq)
                        <div class="card">
                            <div class="card-header p-0">
                                <h5 class="mb-0">
                                    <button type="button" style="width: 100%;text-align: left;color: #000; font-weight: 500;" class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapseOne">
                                        + {{ $faq->title }}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{ $faq->id }}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    {{ $faq->description }}
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </section>

{{--   Consult --}}
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
                                            @forelse ($services as $service)
                                                <option value="{{ $service->solution_title }}">{{ $service->solution_title }}</option>
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

<script>
    $(document).ready(function(){
        $('.carousel-item:first-child').addClass('active');
    });
</script>

@endsection
