<img src="{{ asset('public/darkbg.png') }}" alt="" id="footerimg">
<footer id="footer" style="position: relative;z-index:999; margin-top: 20px;background:#02303D">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <a href="{{ url('/') }}"><img src="{{asset($setting->logo)}}" alt="" title="" style="width: 150px;margin-top: -10px;" /></a>
                    <p>{{ $setting->marquee_text }}</p>
                    <div class="d-flex mt-2">
                        <i class="fa fa-home" style="font-size: 26px;line-height: 45px;color:#187C94"></i>
                        <p style="text-align: left; padding-left: 16px;margin-bottom: 16px;"> {!!   $setting->address !!} </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-phone" style="font-size: 26px;color:#187C94"></i>
                        <p style="text-align: left; padding-left: 16px;margin-bottom: 16px;">{{$setting->phone_one}}</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-phone" style="font-size: 26px;color:#187C94"></i>
                        <p style="text-align: left; padding-left: 16px;margin-bottom: 16px;">{{$setting->phone_two}}</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-envelope" style="font-size: 20px;color:#187C94"></i>
                        <p style="text-align: left; padding-left: 16px;margin-bottom: 16px;">{{$setting->email}}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('/') }}">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('about-us') }}">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('services') }}">Services</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('terms-of-service') }}">Terms of service</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('privacy-policy') }}">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Newsletter</h4>
                    <div class="mb-4 w-100">
                        <div class="form-group">
                            <input type="text" name="" class="form-control" placeholder="Email Address" id="" style="border-radius:40px;">
                        </div>
                        <a href="#featured-services" class="btn-get-started scrollto" style="border-radius: 45px;background:#FF7D44;color: white;font-weight: bold;  border: 2px solid #FF7D44;padding: 6px 12px;">Subscribe</a>
                    </div>
                    <div class="social-links">
                        <a href="{{ $setting->twitter }}" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="{{ $setting->facebook }}" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="{{ $setting->instagram }}" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="{{ $setting->google }}" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="{{ $setting->linkedin }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Deyal</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="{{ url('/') }}">Deyal</a>
        </div>
    </div>
</footer>


<div class="chatbot_service">
    <img src="{{ asset('public/whatsapp.png') }}" class="msg_chat" >

    <div class="form_submission">
        <div class="message_cross">
            <i class='bx bx-x'></i>
        </div>

        <form id="createPost" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" required id="email" placeholder="Your Full Name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required id="email" placeholder="Your Email....">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone" required id="phone" placeholder="Phone Number">
            </div>

            <button type="submit" class="btn btn-primary" style="background: #198652; border: 1px solid #198652;">
                Send Message
            </button>
        </form>
    </div>
</div>
