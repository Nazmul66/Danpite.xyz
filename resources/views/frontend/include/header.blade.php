<header id="header" style="z-index: 99999999">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <a href="{{ url('/') }}"><img src="{{asset($setting->logo)}}" alt="" title="" style="width: 150px;margin-top: -10px;" /></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-has-children"><a href="">Services</a>
                    <ul>
                        <li><a href="{{ url('all-services') }}">All Services</a></li>
                        <li><a href="{{ url('interior') }}">Interior Painting</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="">Pricing</a>
                    <ul>
                        <li><a href="{{ url('priceing') }}">Pricing List</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('daily-blogs') }}">Blog</a></li>
                <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                <li id="limt">
                    <p class="m-0 p-0" style="color: #FAD105;font-size: 12px;">for appointment or query</p>
                    <a href="" style="padding-left:0px;font-size: 20px;color: #FAD105;">{{ App\Models\Websetting::first()->phone_one }}</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
