@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title px-0" style="background-color: #FFEFC6;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 data-aos="fade-up" data-aos-duration="500" style="color: #8c5828;">Beverage Processing Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/beverages.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
        </div>


        <div class="container position-relative machinery-image-abs" style="top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/2.png') }}" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="500">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-6">
                    <p data-aos="fade-up" data-aos-duration="500">Import and supply of brand-new and used beverage processing machinery and complete turnkey solutions, according to customer requirements.</p>

                    <ul class="p-3 mt-3 list">
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Blending Tanks</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Pasteurizers (plate heat exchanges, tubular heat exchanges)</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">UHT Plants (indirect, injection and infusion)</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Filling Machinery (for low viscous and high viscous products)</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Glass Bottle Filling Machinery for Still and Carbonated Soft Drinks</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Palletizer</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Rinser</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Crate Washer</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Beverage Canning Lines for Fruit Juices, Energy Drinks and Breweries</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.includes.categories')
    

@endsection
