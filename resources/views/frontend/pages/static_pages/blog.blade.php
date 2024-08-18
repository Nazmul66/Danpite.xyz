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
                                        <form class="create_comment" method="POST">
                                            @csrf

                                            <input type="text" name="blog_id" value="{{ $blogPage->id }}" hidden>
                                            <input type="text" name="blog_id" value="{{ $blogPage->id }}" hidden>

                                            <textarea name="comment" id="comment" class="comment_box_field" placeholder="Comment Here....."></textarea>

                                            <div class="remove_comment">
                                                <i class='bx bx-x'></i>
                                            </div>

                                            <button type="submit" class="btn_comment_send"><i class='bx bxs-send'></i></button>
                                        </form>
                                    </div>

                                </div>

                                {{-- Part-4 --}}
                                <div class="comment_show">
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
                                        {{-- </div> --}}
                                    @endforeach


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
      $(document).on('submit', '.create_comment',function (e) {
        e.preventDefault();

        let formData = new FormData(this);
        // console.log(formData);

            $.ajax({
                type: "POST",
                url: "{{ route('blog.comments') }}",
                data: formData,
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {
                    // console.log(res);
                    if (res.status == true) {
                        swal.fire(
                        {
                            title: `Successfully Comments`,
                            icon: 'success'
                        })

                        $('.create_comment')[0].reset();
                        window.location.reload();

                    } else {
                        window.location.href= "{{ route('login') }}";
                    }
                },
                error: function (err) {
                    console.log(err);
                }

            })
      });
   })


    // Toggle
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

