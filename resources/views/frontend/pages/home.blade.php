
@extends('frontend.layout.master')

@section('meta')
    @php
        $basicinfo=\App\Models\BasicInfo::first();
    @endphp
    <title>{{$basicinfo->meta_title}}</title>
    <meta name="description" content="{{$basicinfo->meta_description}}">
    <meta name="keywords" content="{{$basicinfo->meta_keyword}}">

    <meta itemprop="name" content="{{$basicinfo->meta_title}} | {{env('APP_NAME')}}">
    <meta itemprop="description" content="{{$basicinfo->meta_description}}">
    <meta itemprop="image" content="{{env('APP_URL')}}{{$basicinfo->meta_image}}">

    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$basicinfo->meta_title}}  | {{env('APP_NAME')}}">
    <meta property="og:description" content="{{$basicinfo->meta_description}}">
    <meta property="og:image" content="{{env('APP_URL')}}{{$basicinfo->meta_image}}">
    <meta property="image" content="{{env('APP_URL')}}{{$basicinfo->meta_image}}" />
    <meta property="url" content="{{env('APP_URL')}}">
    <meta itemprop="image" content="{{env('APP_URL')}}{{$basicinfo->meta_image}}">
    <meta property="twitter:card" content="{{env('APP_URL')}}{{$basicinfo->meta_image}}" />
    <meta property="twitter:title" content="{{$basicinfo->meta_title}} | {{env('APP_NAME')}}" />
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta name="twitter:image" content="{{ env('APP_URL') }}{{$basicinfo->meta_image}}">
@endsection


@section('body-content')

 <!-- Banner section start -->
 <section class="banner-section">
    <div class="container">
      <div class="banner-poster">
        <div class="row align-items-center">
          <div class="col-lg-6">
                <h1>
                    @if ( !empty( $banner->title ) )
                       {{ $banner->title }}
                    @else
                        "Demo Title"
                    @endif
                </h1>

                <div class="form-field">
                  <form action="{{url('search')}}" method="GET">
                      <input type="text" class="searching-form" name="search" placeholder="I'm Looking for....">
                      <button class="btn-search">Search</button>
                  </form>
                </div>
            </div>

            <div class="col-lg-6">
              <div class="img-container">
                @if ( !empty($banner->banner_img) )
                   <img src="{{ asset($banner->banner_img) }}" alt="">
                @else
                   <img src="{{ asset('public/asset/images/banner-image.png') }}" alt="">
                @endif
              </div>
           </div>
        </div>
      </div>
    </div>
</section>
<!-- Banner section end -->


<!-- About section start -->
<section class="about-section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6 order-1 order-lg-0">
                <div class="about-image">
                    @if ( !empty($about->image) )
                        <img src="{{ asset($about->image) }}" alt="" style="width: 100%;border-radius: 8px;">
                    @else
                        <img src="{{ asset('public/asset/images/about-image.jpg') }}" alt="" style="width: 100%;border-radius: 8px;">
                    @endif
                </div>
            </div>

            <div class="col-lg-6 col-xl-6 order-0 order-lg-1">
                <div class="about-info">
                    <h1>
                        @if ( !empty($about->title) )
                            {{ $about->title }}
                        @else
                            "Demo Title"
                        @endif
                    </h1>


                    <div class="about-contents">
                        @if ( !empty($about->description) )
                            {!! $about->description !!}
                        @else
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, architecto earum ducimus animi cum assumenda minus autem vitae numquam distinctio adipisci ad ratione deserunt fugiat.
                        @endif

                    </div>

                    <a href="{{ $about->url }}">
                        <button class="btn-join">Join Us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section start -->


<!-- Category section start -->
<section class="category-section pb-0">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="category-details">
                <h1>Service Category</h1>

                <div class="category-list">
                    @forelse($categories as $category)
                        <a href="{{url('category',$category->cat_slug)}}">
                            <div class="category-wise">
                                <img src="{{ asset($category->cat_img) }}" alt="" style="border-radius: 6px;">
                                <h5>{{$category->cat_name}}</h5>
                            </div>
                        </a>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Category section end -->


<!-- service section start -->
<section class="service-section pb-0" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-container" id="propro">
                    <h1>See Our Services</h1>

                    <div class="service-list" style="background:none;padding:0;">
                        @foreach ($services as $service)
                            <div class="service-details mb-2">
                                <a href="{{ route('service.details', $service->id) }}">
                                    <img src="{{ asset( $service->service_img ) }}" alt="">
                                </a>
                                <div class="service-content">
                                    <a href="{{ route('service.details', $service->id) }}" style="color: black">
                                        <h2>{{ $service->title }}</h2>
                                    </a>
                                    <div class="d-flex" style="justify-content:space-between">
                                        <div class="star-ratings">
                                            @if ( $service->ratings == 2 )
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            @elseif( $service->ratings == 3 )
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            @elseif( $service->ratings == 4 )
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            @elseif( $service->ratings == 5 )
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            <i class='bx bxs-star' ></i>
                                            @endif
                                        </div>
                                        <div class="like" style="margin-bottom: 24px;">
                                            <div class="d-flex" style="justify-content: space-around;font-size: 14px;">
                                                <span style="padding-right:14px;"><span class="sts" style="padding-right: 4px;font-size:18px;"
                                                        id="likereactof{{ $service->id }}">{{ App\Models\React::where('service_id', $service->id)->where('sigment','like')->get()->count() }}</span><i
                                                        @if(App\Models\React::where('service_id', $service->id)->whereIn('user_id', [\Request::ip(),Auth::id()])->where('sigment','like')->first()) style="color:green !important;font-size:22px;cursor:pointer" @else  style="font-size:22px;cursor:pointer"  @endif class="fas fa-thumbs-up" id="likereactdone{{ $service->id }}"
                                                        onclick="givereactlike({{ $service->id }})"></i></span>
                                                <span><span class="sts" style="padding-right: 4px;font-size:18px;"
                                                        id="lovereactof{{ $service->id }}">{{ App\Models\React::where('service_id', $service->id)->where('sigment','love')->get()->count() }}</span><i
                                                        @if(App\Models\React::where('service_id', $service->id)->whereIn('user_id', [\Request::ip(),Auth::id()])->where('sigment','love')->first()) style="color:red !important;font-size:22px;cursor:pointer" @else  style="font-size:22px;cursor:pointer" @endif class="fas fa-heart" id="lovereactdone{{ $service->id }}"
                                                            onclick="givereactlove({{ $service->id }})"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action-service">
                                        <a href="{{ route('service.details', $service->id) }}"><span>Read More</span>
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>

                                        <a target="_blank" href="https://wa.me/{{ $service->whatsapp }}?text=I%20am%20interested%20for%20{{ $service->title }}">
                                            <button class="chat-btn">Chat Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service section end -->


<!-- pricelist section start -->
<section class="pricelist_section pb-0" id="price">
    <div class="container">
        <div class="row">
            <div class="price_head">
                <h1>Our Price List</h1>
            </div>
        </div>

        <div class="row">
            @foreach ($pricePlans as $pricePlan)

               @if ( $pricePlans->count() === 1 )
                  <div class="col-lg-6 offset-lg-3 mb-4">

               @elseif( $pricePlans->count() === 2 )
                  <div class="col-lg-6 mb-4">

               @else
                  <div class="col-lg-4 mb-4">
               @endif

                    <div class="main-price-list">
                        <div class="price-headlist" style="background-color: {{ $pricePlan->color_theme }};">
                            <h3>{{ $pricePlan->price_title }}</h3>
                            <p>{{ $pricePlan->price_package }}</p>
                        </div>

                        <div class="price-list-menu">
                            {!! $pricePlan->price_desc !!}
                        </div>

                        <div class="text-center">
                            <a target="_blank" href="https://wa.me/{{ $pricePlan->whatsapp }}?text=I%20am%20interested%20for%20{{ $pricePlan->price_package }}" class="price-btn" style="background-color: {{ $pricePlan->color_theme }};">
                                <div class="whatsapp-icon">
                                    <i class='bx bxl-whatsapp'></i>
                                    <label class="chat-text">Let's Chat</label>
                                </div>
                                <span>get best price</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- pricelist section end -->


<!-- pro-service section start -->
<section class="pro-service-section">
  <div class="container">
      <div class="pro-service-container">
            <div class="service-images">
                @if ( !empty($professional->image) )
                    <img src="{{ asset($professional->image) }}" alt="" style="border-radius:8px;">
                @else
                    <img src="{{ asset('public/asset/images/paint-house.png') }}" alt="" style="border-radius:8px;">
                @endif
            </div>

            <div class="professional-service">
                <h5>
                    @if ( !empty($professional->small_title) )
                        {{ $professional->small_title }}
                    @else
                        "Demo Title"
                    @endif
                </h5>

                <h1>
                    @if ( !empty($professional->main_title) )
                        {{ $professional->main_title }}
                    @else
                        "Demo Title"
                    @endif
                </h1>

                <div class="professional-paragraph">
                    @if ( !empty($professional->description) )
                         {!! $professional->description !!}
                    @else
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae cupiditate, temporibus facilis nulla est maxime, dolorem dolor fuga pariatur unde, non dolore obcaecati illo delectus.
                    @endif
                </div>


                <a target="_blank" href="{{ $professional->url }}">
                    <button class="btn-watch">Watch Video</button>
                </a>
            </div>
      </div>
  </div>
</section>
<!-- pro-service section end -->


<!-- Projects section start -->
<section class="project-section" id="project">
  <div class="container">
      <div class="row">
          <div class="project-headtitle">
             <h1 class="mb-4">Awesome Project Done By Our Expert Team</h1>

             <div class="project-galary">
                @foreach ($projects as $project)
                    <a href="{{ url('details',$project->service_id) }}"><img src="{{ asset($project->project_img) }}" alt="{{ $project->name }}"></a>
                @endforeach
             </div>
          </div>
      </div>
  </div>
</section>
<!-- Projects section end -->


<!-- Safety section start -->
<section class="safty-section">
  <div class="container">
      <div class="row align-items-center">
          <div class="safety-headtitles">
              <h1>We care about your safety...</h1>
          </div>

          <div class="col-lg-6">
             <div class="safety-service-container">
                  <div class="safety-service">
                      @if ( !empty($safety->safty_img1) )
                         <img src="{{ asset($safety->safty_img1) }}" alt="">
                      @else
                        <img src="{{ asset('public/asset/images/mask.png') }}" alt="">
                      @endif


                      @if ( !empty($safety->safty_content1) )
                        <h4>{{ $safety->safty_content1 }}</h4>
                      @else
                        <h4>Ensuring Maskes</h4>
                      @endif
                  </div>

                  <div class="safety-service">
                    @if ( !empty($safety->safty_img2) )
                        <img src="{{ asset($safety->safty_img2) }}" alt="">
                    @else
                        <img src="{{ asset('public/asset/images/phone.png') }}" alt="">
                    @endif


                    @if ( !empty($safety->safty_content2) )
                       <h4>{{ $safety->safty_content2 }}</h4>
                    @else
                       <h4>24/7 Support</h4>
                    @endif
                  </div>

                  <div class="safety-service">
                    @if ( !empty($safety->safty_img3) )
                        <img src="{{ asset($safety->safty_img3) }}" alt="">
                    @else
                        <img src="{{ asset('public/asset/images/hand.png') }}" alt="">
                    @endif


                    @if ( !empty($safety->safty_content3) )
                        <h4>{{ $safety->safty_content3 }}</h4>
                    @else
                        <h4>Sanitising hands & Equipment</h4>
                    @endif
                  </div>

                  <div class="safety-service">
                    @if ( !empty($safety->safty_img4) )
                        <img src="{{ asset($safety->safty_img4) }}" alt="">
                    @else
                        <img src="{{ asset('public/asset/images/open-hands.png') }}" alt="">
                    @endif

                    @if ( !empty($safety->safty_content4) )
                        <h4>{{ $safety->safty_content4 }}</h4>
                    @else
                        <h4>Ensuring Gloves</h4>
                    @endif
                  </div>
             </div>
          </div>

          <div class="col-lg-6">
              <div class="youtube-video">
                    @if ( !empty($safety->youtube_url) )
                       {!! $safety->youtube_url !!}
                    @else
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, ex. Deserunt sapiente officia iste nostrum reiciendis, ipsam, aliquid labore repudiandae voluptas voluptatum tempora, magni totam?
                    @endif

              </div>
          </div>
      </div>
  </div>
</section>
<!-- Safety section end -->


<!-- Emergency-call section start -->
   <section class="emergency-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="emergency-details">
                      <h1><i class='bx bx-phone-call'></i> Need Emergency Painting? Call us 24/7 For Expert Help</h1>
                        @if ( !empty($basicInfo->phone) )
                            <a href="tel:{{ $basicInfo->phone }}">Call {{ $basicInfo->phone }}</a>
                        @else
                        @endif
                  </div>
              </div>
          </div>
      </div>
   </section>
<!-- Emergency-call section end -->


<!-- Logo section start -->
  <section class="logo-section" id="galary">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="logo-container">
                      <h1>We can supply and use any below brand of paints of client choice.</h1>

                      <div class="owl-carousel owl-theme" id="logo-slider">
                        @foreach ($logos as $logo)
                            <div class="logo-div">
                                <img src="{{ asset($logo->logo_img) }}" alt="">
                            </div>
                        @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
<!-- Logo section end -->


<!-- Review section start -->
  <section class="review-section">
      <div class="container">
          <div class="row">
              <div class="review-container">
                  <h1>Client's Review</h1>

                  <div class="owl-carousel owl-theme" id="review-slider">
                        @foreach ( $reviews as $review )
                            <div class="review-content">
                                <div class="review-content-head">
                                    <img src="{{ asset( $review->review_img ) }}" alt="">

                                    <div class="review-ratings-deatils">
                                        <h4>{{ $review->name }}</h4>
                                        <div class="star-ratings">
                                            @if ( $review->ratings == 2 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @elseif( $review->ratings == 3 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @elseif( $review->ratings == 4 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @elseif( $review->ratings == 5 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <p>{{ $review->description }}</p>
                            </div>
                        @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>
<!-- Review section end -->


<!-- Contact section start -->
 <section class="contact-section">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6">
             <div class="contact-img">
                 <img src="{{ asset($basicInfo->contact_image) }}" alt="">
             </div>
          </div>

          <div class="col-lg-6">
              <div class="contact-form">
                  <h1>{{$basicInfo->contact_title}}</h1>
                  <p>{{$basicInfo->contact_description}}</p>

                  <form id="createForm" method="POST">
                    @csrf

                      <div class="row">
                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <input class="form-control form-control-lg" type="text" name="name" id="" placeholder="Your Name">
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="mb-3">
                                  <input class="form-control form-control-lg" type="text" name="mobile" id="" placeholder="Your Mobile">
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="mb-3">
                            <input class="form-control form-control-lg" type="email" name="email" id="" placeholder="Your Email">
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="mb-3">
                              <select class="form-select form-select-lg mb-3" name="service">
                                  <option selected>Open this select menu</option>
                                  @foreach ($services as $service)
                                     <option value="{{ $service->id }}">{{ $service->title }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="note" style="height: 100px" required></textarea>
                              <label for="floatingTextarea2">Special Notes</label>
                          </div>
                      </div>

                      <div class="d-flex justify-content-end">
                          <button class="contact-btn-submit">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
 </section>
<!-- Contact section end -->

@endsection



@push('script-tag')

<script>
    AOS.init();
</script>

<script>
    $('#logo-slider').owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        nav: true,
        dots: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                dots: false,
                items: 2
            },
            600:{
                dots: false,
                items: 3
            },
            1000:{
                dots: false,
                items: 5
            }
        }
    })


    $('#review-slider').owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        nav: true,
        dots: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                dots: true,
                items: 1
            },
            576:{
                dots: true,
                items: 1
            },
            993:{
                dots: true,
                items: 2
            },
           1200: {
               dots: true,
               items: 3
           }
        }
    })

    // Create Logo
    $('#createForm').submit(function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ url('contact-now') }}",
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
                if (res.status === true) {
                    $('#createForm')[0].reset();

                    swal.fire({
                        title: "Success",
                        text: `${res.message}`,
                        icon: "success"
                    })
                }
            },
            error: function (err) {
                console.error('Error:', err);
                swal.fire({
                    title: "Failed",
                    text: "Something Went Wrong !",
                    icon: "error"
                })
            }
        });
    })
</script>

@endpush
