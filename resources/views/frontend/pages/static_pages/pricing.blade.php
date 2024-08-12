@extends('frontend.layout.master')

@push('add-css')
    <link rel="stylesheet" href="{{ asset('public/asset/css/blog.css') }}">
@endpush


@section('body-content')

@if(isset($basicInfo->pricepage))
<section class="page-title bg-1" style="background: url({{ asset($basicInfo->pricepage) }}) no-repeat 50% 50%;
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
            <h1 class="text-capitalize mb-5 text-lg">Our Pricing List</h1>
          </div>
        </div>
      </div>
    </div>
</section>

@php
    $servicelists=App\Models\Service::with('priceing')->where('status',1)->get();
@endphp

<!-- pricelist section start [Done]  -->
<section class="pricelist_section" id="price">
    @forelse($servicelists as $servicelist)
        @if(count($servicelist->priceing)>0)
        <div class="container mb-4">
            <div class="row">
                <div class="price_head">
                    <h1 class="mb-3">{{$servicelist->title}}</h1>
                </div>
            </div>

            <div class="row">
                @foreach ($servicelist->priceing as $pricePlan)

                @if ( $pricePlans->count() === 1 )
                    <div class="col-lg-6 offset-lg-3 mb-4">

                @elseif( $pricePlans->count() === 2 )
                    <div class="col-lg-6 mb-4">

                @else
                    <div class="col-lg-4 mb-4">
                @endif

                        <div class="main-price-list">
                            <div class="price-headlist" style="background-color: {{ $pricePlan->color_theme }};">
                                <h3>{{ $pricePlan->price_title }}</h3>
                                <p>{{ $pricePlan->price_package }}</p>
                            </div>

                            <div class="price-list-menu">
                                {!! $pricePlan->price_desc !!}
                            </div>

                            <div class="text-center">
                                <a target="_blank" href="https://wa.me/{{ $pricePlan->whatsapp }}?text=I%20am%20interested%20for%20{{ $pricePlan->price_package }}" class="price-btn" style="background-color: {{ $pricePlan->color_theme }};">
                                    <div class="whatsapp-icon">
                                        <i class='bx bxl-whatsapp'></i>
                                        <label class="chat-text">Let's Chat</label>
                                    </div>
                                    <span>get best price</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    @empty

    @endforelse
</section>
<!-- pricelist section end -->

@endsection
