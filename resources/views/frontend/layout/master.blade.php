<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{$basicInfo->favicon}}">

    @yield('meta')
    @include('frontend.include.head-titles')
</head>

<body>

    <!-- Navbar start -->
        @include('frontend.include.header')
    <!-- Navbar end -->

    <!-- Body container start -->

        @yield('body-content')

    <!-- Body container end -->

    <!-- Footer section start -->
        @include('frontend.include.footer')
    <!-- Footer section end -->

    <a href="https://wa.me/{{ App\Models\Basicinfo::first()->whatsapp }}?text=I%20am%20interested" target="_blank" style="position: fixed;bottom: 10px;right: 6px;z-index:1111">
        <img src="{{asset('public/whatsapp.png')}}" style="height:75px;border-radius:50%">
    </a>
    
    @include('frontend.include.script')

    
</body>
</html>
