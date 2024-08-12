@extends('frontend.layout.master')


@push('meta-title')
    Danpite Tech
@endpush


@section('body-content')
<style>
    /*.detail_banner_page {*/
    /*    background: url(../images/banner_details.jpg) no-repeat;*/
    /*    background-position: 100% 28%;*/
    /*    background-size: cover;*/
    /*    padding: 15rem 0;*/
    /*    margin-top: 92px;*/
    /*    position: relative;*/
    /*    z-index: 1;*/
    /*}*/
</style>

<!-- Banner Section start-->
<section class="detail_banner_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner_content_details">{{ App\Models\Category::where('id',$service_detail->category_id)->first()->cat_name }}</div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section end-->


<!-- Service Details Section start-->
<section class="service_details">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset($service_detail->service_img) }}" alt="" style="width:100%;border-radius:6px;">
            </div>

            <div class="col-lg-5 offset-lg-1">
                <div class="service-details-container">
                    <h2>{{ $service_detail->title }}</h2>
                    <p>{{ $service_detail->short_desc }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Details Section end-->


<!-- Materials Section start-->
<section class="material_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="price_head">
                    <h1>Our Metarials</h1>
                </div>
            </div>

            @forelse($meterials as $meterial)
                <div class="col-lg-4">
                    <div class="materials_details">
                        <img src="{{ asset($meterial->img) }}" alt="">
                        <h2>{{$meterial->title}}</h2>
                        <p>{{$meterial->small_desc}}</p>
                    </div>
                </div>
            @empty

            @endforelse

        </div>
    </div>
</section>
<!-- Materials Section start-->


<!-- Projects section start  -->
<section class="project-section" id="project">
    <div class="container">
        <div class="row">
            <div class="project-headtitle">
               <h1>Awesome Project Could Inspire You</h1>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem atque nostrum quos. In, voluptatum maiores? In fugiat laboriosam odit qui harum molestiae possimus quod aut!</p>

               <div class="project-galary" data-aos="zoom-in" data-aos-duration="1500">
                  @foreach ($project_details as $project)
                      <a href="{{ $project->url }}"><img src="{{ asset($project->project_img) }}" alt="{{ $project->name }}"></a>
                  @endforeach
               </div>
            </div>
        </div>
    </div>
  </section>
  <!-- Projects section end -->


<!-- Description & Review Section start -->


<!-- Procedure Section start-->
<section class="procedure_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="price_head">
                    <h1>Our Procedure</h1>
                </div>
            </div>

            @forelse($procedures as $procedure)
                <div class="col-lg-4">
                    <div class="procedure_details">
                        <img src="{{ asset($procedure->img) }}" alt="">
                        <h2>{{$procedure->title}}</h2>
                        <p>{{$procedure->small_desc}}</p>
                    </div>
                </div>
            @empty

            @endforelse

        </div>
    </div>
</section>
<!-- Procedure Section start-->

<!-- Description & Review Section end -->
<section class="desc_review_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shuffle_tab_menu">
                    <ul>
                        <li class="shuffle_active">Description</li>
                        <li>Review</li>
                    </ul>
                </div>

                <div class="main-menu-body-content">
                     {{-- Description show --}}
                      <div class="shuffle_content content_active">
                          {!! $service_detail->long_desc !!}
                      </div>

                      {{-- Review show --}}

                      @php
                         $reviews = App\Models\Review::where('service_id', $service_detail->id)->get();
                      @endphp

                      <div class="shuffle_content">
                         <div class="review_section">
                            <h3>{{ $reviews->count() }} Reviews for This details page content.</h3>

                            <div class="">
                                @foreach ( $reviews as $review )

                                    <div class="review_details">
                                        <div class="review_titles">
                                            <h4>{{ $review->name }}</h4>
                                            <p>( {{ $review->created_at->diffForHumans() }} )</p>
                                        </div>

                                        <div class="review_ratings">
                                            @if ( $review->rating == 1 )
                                                <i class='bx bxs-star' ></i>
                                            @elseif ( $review->rating == 2 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @elseif( $review->rating == 3 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @elseif( $review->rating == 4 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @elseif( $review->rating == 5 )
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                                <i class='bx bxs-star' ></i>
                                            @endif
                                            <span>({{ $review->rating }})</span>
                                        </div>

                                        <div class="review_paragragh">
                                            <p>{{ $review->description }}</p>
                                        </div>
                                    </div>

                                @endforeach

                                {{-- <div class="review_details">
                                    <div class="review_titles">
                                        <h4>Jhon Doe</h4>
                                        <p><span>27 Feb 2017</span> <span>10:57:43</span></p>
                                    </div>

                                    <div class="review_ratings">
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <span>(5)</span>
                                    </div>

                                    <div class="review_paragragh">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti enim reiciendis, ipsa culpa minima possimus quasi cumque? Odit omnis voluptatum labore sint odio, quo nisi?</p>
                                    </div>
                                </div> --}}
                            </div>
                         </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <!-- step section start -->
<section class="step_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="step_details">
                    <h2>3 Step to start</h2>
                    <p>There are many variations of passengers of lorem ipsum available, but the majority have suffered alternation in some form.</p>

                    <div class="step_details_container">
                        <div class="step_start">
                            <div class="step_count">
                                <span>01</span>
                            </div>

                            <div class="step_count_details">
                                <h3>Create Your Wallet</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos similique ullam ducimus dicta eum corporis.</p>
                            </div>
                        </div>

                        <div class="step_start">
                            <div class="step_count">
                                <span>02</span>
                            </div>

                            <div class="step_count_details">
                                <h3>Make Payment</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos similique ullam ducimus dicta eum corporis.</p>
                            </div>
                        </div>


                        <div class="step_start">
                            <div class="step_count">
                                <span>03</span>
                            </div>

                            <div class="step_count_details">
                                <h3>Buy & Sell Coins</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos similique ullam ducimus dicta eum corporis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- step section end --> --}}


<!-- pricelist section start -->
<section class="pricelist_section" id="price">
    <div class="container">
        <div class="row">
            <div class="price_head">
                <h1>Our Price List</h1>
            </div>
        </div>

        <div class="row">
            @foreach ($pricePlan_details as $pricePlan)

               @if ( $pricePlan_details->count() === 1 )
                  <div class="col-lg-6 offset-lg-3" data-aos="zoom-out-right" data-aos-duration="1500">

               @elseif( $pricePlan_details->count() === 2 )
                  <div class="col-lg-6" data-aos="zoom-out-right" data-aos-duration="1500">

               @else
                  <div class="col-lg-4" data-aos="zoom-out-right" data-aos-duration="1500">
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
                            <a href="tel:{{ $pricePlan->whatsapp }}" class="price-btn" style="background-color: {{ $pricePlan->color_theme }};">
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


<!-- Contact section start -->
<section class="contact-section">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6">
             <div class="contact-img">
                 <img src="{{ asset('public/asset/images/contact-image.png') }}" alt="">
             </div>
          </div>

          <div class="col-lg-6" >
              <div class="contact-form">
                  <h6>Free Quote</h6>
                  <h1>Get A Free Quote</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, ex quod! In laudantium ipsa optio nulla quibusdam id enim molestiae magni accusantium veritatis. Praesentium animi repellendus expedita perferendis asperiores eveniet in quidem assumenda aperiam. Dolore, accusantium? Nulla iure soluta optio.</p>

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
                                     <option value="{{ $service->id }}" @if( $service->id == $id ) selected @endif>{{ $service->title }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>

                      <div class="col-lg-12">
                          <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="note" style="height: 100px"></textarea>
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
        let shuffle_list = document.querySelectorAll('.shuffle_tab_menu ul li');
        let shuffle_content = document.querySelectorAll('.shuffle_content');

        shuffle_list.forEach((item, index) =>{
            item.addEventListener("click", function(){
                    // console.log(item, index)
                item.classList.add('shuffle_active');

                shuffle_list.forEach((item2, i) => {
                    if( i!= index){
                        item2.classList.remove('shuffle_active');
                    }
                })


                shuffle_content.forEach((content, i) =>{
                    if( i!= index){
                        content.classList.remove('content_active');
                    }
                    else{
                        content.classList.add('content_active');
                    }
                })
            })
        })

   </script>
@endpush
