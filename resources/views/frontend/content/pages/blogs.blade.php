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

    <section id="intro">
        <div class="intro-container" id="contactcar">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="{{asset('public/frontend/img/')}}/contact.webp" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h3>Professional Painting Service <br>Across Bangladesh</h3>
                                <header class="section-header">
                                    <p style="margin: 0; width:100%;margin-top:10px;">We are a team of professional wall painters in your locale catering to all your painting needs</p>
                                    <h3 id="shh3"></h3>
                                </header>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- #intro -->

    <main id="main">

        <section id="services">
            <div class="container">
                <div class="row" id="blogbox">
                    <div class="row pt-lg-4">
                        <div class="col-12">
                            <h4 class="text-center" style="text-transform: uppercase;font-weight: bold;text-decoration: underline;">See Our Latest Blogs</h4>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{asset('public/frontend/img/')}}/bedroom.jpg" alt="">
                                    <h6>Hire The Best Painting Contractor in Your Location</h6>
                                    <p>
                                        The market is flooded with painting contractors. If you have a plan to paint your home be very cautious before selecting the contractors. Painting contractors help to reduce your painting related headache and ensure smooth completion of the painting task.
                                        The whole project will be charted and will be time bounded and professional. Here are some tips to select the best painting contractors in your locality.
                                    </p>

                                </div>
                                <div class="card_footer">
                                    {{-- Part-1 --}}
                                    <div class="reaction_section">
                                        <ul>
                                            <li class="reaction_list">
                                                <i class='bx bx-like'></i>
                                                <span>Like</span>
                                            </li>
                                            <li class="reaction_list comment_line">
                                                <i class='bx bx-comment-detail'></i>
                                                <span>Comment</span>
                                            </li>
                                            <li class="reaction_list">
                                                <i class='bx bx-share'></i>
                                                <span>Share</span>
                                            </li>
                                        </ul>

                                        <div class="comment_field">
                                            <form class="create_comment" method="POST">
                                                @csrf

                                                {{-- <input type="text" name="blog_id" value="{{ $blogPage->id }}" hidden>
                                                <input type="text" name="blog_id" value="{{ $blogPage->id }}" hidden> --}}

                                                <textarea name="comment" id="comment" class="comment_box_field" placeholder="Comment Here....."></textarea>

                                                <div class="remove_comment">
                                                    <i class='bx bx-x'></i>
                                                </div>

                                                <button type="submit" class="btn_comment_send"><i class='bx bxs-send'></i></button>
                                            </form>
                                        </div>

                                    </div>

                                    {{-- Part-2 --}}
                                    {{-- <div class="comment_show">
                                        @if ( $blogComments->count() > 0 )
                                            @foreach ($blogComments as $blogComment)
                                                @if ( $blogComment->blog_ids == $blogPage->id )
                                                        <div class="comment_content">
                                                            <img src="{{ asset('public/asset/images/avatar.png') }}" alt="">

                                                            <div class="comment_description">
                                                                <h3>{{ ucwords($blogComment->name) }}</h3>
                                                                <span>{{ Carbon\Carbon::parse($blogComment->created_at)->diffForHumans() }}</span>
                                                                <p>{{ $blogComment->comment }}</p>
                                                            </div>
                                                        </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
