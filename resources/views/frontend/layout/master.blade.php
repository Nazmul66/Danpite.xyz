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


    @include('frontend.include.others')
    
    
    @include('frontend.include.script')

    
</body>
</html>
