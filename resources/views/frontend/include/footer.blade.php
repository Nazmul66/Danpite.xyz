<footer>
    <div class="container">
        <div class="main-footer">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget-1">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            @if ( !empty($basicInfo->footer_logo) )
                              <img src="{{ asset($basicInfo->footer_logo) }}" alt="" style="width: 200px;">
                            @else
                              <img src="{{ asset('public/asset/images/logo.png') }}" alt="" style="width: 200px;">
                            @endif
                        </a>
                        <p style="text-align: justify">
                            @if ( !empty($basicInfo->footer_text) )
                                {{ $basicInfo->footer_text }}
                            @else

                            @endif
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="widget-2">
                        <h4>Our Services</h4>
                        <ul>
                            @forelse($categories as $category)
                                <li>
                                    <a href="{{url('category',$category->cat_slug)}}">
                                        <div class="service_list">
                                            <i class='bx bx-right-arrow-alt'></i>
                                            <span>{{$category->cat_name}}</span>
                                        </div>
                                    </a>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="widget-2">
                        <h4>Quick Links</h4>
                        <ul>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>
                                        <a href="{{ url('/about') }}">About Us</a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>
                                        <a href="{{ url('/contact') }}">Contact Us</a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>
                                        <a href="{{ url('/terms-condition') }}">Terms & Condition</a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>
                                        <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>
                                        <a href="{{ url('/faq') }}">Faq</a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="widget-2">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><span>Address: </span> @if( !empty($basicInfo->address) ) {{ $basicInfo->address }} @else  @endif  </li>
                            <li><span>Email: </span> @if( !empty($basicInfo->email) ) <a href="mailto:{{$basicInfo->email}}" style="color: white;"> {{ $basicInfo->email }} </a> @else @endif </li>
                            <li><span>Phone: </span> @if( !empty($basicInfo->phone) ) <a href="tel:{{ $basicInfo->phone }}" style="color: white;">{{ $basicInfo->phone }} </a> @else @endif </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
