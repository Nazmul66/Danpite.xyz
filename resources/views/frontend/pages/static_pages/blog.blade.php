@extends('frontend.layout.master')

@push('add-css')
    <link rel="stylesheet" href="{{ asset('public/asset/css/blog.css') }}">
@endpush


@section('body-content')

@if(isset($basicInfo->blogpage))
<section class="page-title bg-1" style="background: url({{ asset($basicInfo->blogpage) }}) no-repeat 50% 50%;
background-size: cover;">
@else
<section class="page-title bg-1" style="background: url({{ asset('public/asset/images/22.jpg') }}) no-repeat 50% 50%; background-size: cover;">
@endif
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Our blog</span>
            <h1 class="text-capitalize mb-5 text-lg">Blog articles</h1>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="blog_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                    {{-- @if ( $blogPages->count() > 0 )
                        @foreach ($blogPages as $blogPage)
                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <a href="{{ route('single.blog', $blogPage->slug) }}" >
                                            <img src="{{ asset($blogPage->image) }}" alt="" class="img-fluid" style="border-radius: 8px;">
                                        </a>
                                    </div>

                                    <div class="blog-item-content">
                                        <div class="blog-item-meta mb-3 mt-4">
                                            <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>{{$blogPage->created_at->diffForHumans()}}</span>
                                        </div>

                                        <h2 class="mt-3 mb-3"><a href="{{ route('single.blog', $blogPage->slug) }}" >{{ $blogPage->title }}</a></h2>

                                        <p class="mb-4">{!! $blogPage->short_description !!}</p>

                                        <a href="{{ route('single.blog', $blogPage->slug) }}" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
                                    </div>
                                </div>
                            </div>
                       @endforeach
                    @else
                        <div class="alert alert-danger text-center" role="alert">There is no blog post here!</div>
                    @endif --}}

                    <div class="main_blog_content_section">

                      @if ( $blogPages->count() > 0 )
                        @foreach ($blogPages as $blogPage)
                            <div class="single_blog_content">
                                {{-- Part-1 --}}
                                <div class="blog_thumb">
                                    <div class="blog_content">
                                        <div class="main_blog_title">
                                            <img src="{{ asset('public/asset/images/avatar2.png') }}" alt="">
                                            <div class="blog_titles">
                                                <h3>Tom Russo</h3>
                                                <span>{{ $blogPage->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>

                                        <div class="blog_description">
                                            {!! $blogPage->short_description !!}
                                        </div>
                                    </div>
                                </div>

                                {{-- Part-2 --}}
                                <div class="blog_image">
                                    <img src="{{ asset($blogPage->image) }}" alt="">
                                </div>

                                {{-- Part-3 --}}
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
                                        <form action="">
                                            <textarea name="comment_box" id="comment_box" data-id={{ $blogPage->id }} class="comment_box_field" placeholder="Comment Here....."></textarea>

                                            <div class="remove_comment">
                                                <i class='bx bx-x'></i>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                {{-- Part-4 --}}
                                <div class="comment_show">
                                    <div class="comment_content">
                                        <img src="{{ asset('public/asset/images/avatar.png') }}" alt="">

                                        <div class="comment_description">
                                            <h3>Client Name</h3>
                                            <p>User Comments Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos excepturi, illo deserunt fugiat voluptas quae porro esse, sit consequatur id molestias unde perferendis alias eos?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         @endforeach
                       @else
                        <div class="alert alert-danger text-center" role="alert">There is no blog post here!</div>
                       @endif
                    </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('script-tag')

<script>
   $(document).ready(function(){
      $(document).on('input','#comment_box', function(){
          let id = $(this).attr('data-id');
          let val = $(this).val();
          console.log(id, val);
      });
   })


    let comment_line    = document.querySelectorAll('.comment_line');
    let comment_field   = document.querySelectorAll('.comment_field');
    let remove_comment   = document.querySelectorAll('.remove_comment');

    comment_line.forEach((element, i) => {
            element.addEventListener('click', function() {
            comment_field[i].classList.toggle('comment_active');
        });
    });

    remove_comment.forEach((elements, i) => {
            elements.addEventListener('click', function() {
            comment_field[i].classList.remove('comment_active');
        });
    });

</script>

@endpush

