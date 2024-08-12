@extends('frontend.layout.master')

@push('add-css')
    <link rel="stylesheet" href="{{ asset('public/asset/css/blog.css') }}">
@endpush


@section('body-content')

@if(isset($basicInfo->blogpage))
<section class="page-title bg-1" style="background: url({{ asset($basicInfo->blogpage) }}) no-repeat 50% 50%;
background-size: cover;">
@else
<section class="page-title bg-1" style="background: url({{ asset('public/asset/images/22.jpg') }}) no-repeat 50% 50%;
background-size: cover;">
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


<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @if ( $blogPages->count() > 0 )
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
