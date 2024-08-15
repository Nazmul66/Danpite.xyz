<header>
    <div class="container">
       <div class="row">
          {{-- <div class="col-lg-12"> --}}
             <nav class="navbar navbar-expand-lg">
                 <div class="container-fluid">
                   <a class="navbar-brand" href="{{ url('/') }}">

                        @if ( !empty($basicInfo->logo) )
                            <img src="{{ asset($basicInfo->logo) }}" alt="" style="width: 200px;">
                        @else
                            <img src="{{ asset('public/asset/images/logo.png') }}" alt="" style="width: 200px;">
                        @endif
                   </a>

                   <!-- Mobile button toggle -->
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                   </button>


                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="{{ asset('/') }}">Home</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="{{ asset('/service') }}">Services</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="{{ asset('/pricing') }}">Price</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="{{ asset('/project') }}">Projects</a>
                       </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ asset('/blog') }}">Blogs</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ asset('/contact') }}">Contact Us</a>
                        </li>
                     </ul>

                      <div class="searching-products">
                          <button>
                              @if ( !Auth::check() )
                                <a href="{{ url('/login') }}">Login</a>

                              @else
                                <form method="POST" action="{{ route('logout') }}">
                                   @csrf

                                   <a href="{{ url('/login') }}" onclick="event.preventDefault();  this.closest('form').submit();">LogOut</a>
                                </form>
                              @endif
                          </button>
                      </div>
                   </div>
                 </div>
               </nav>
          {{-- </div> --}}
       </div>
    </div>
</header>
