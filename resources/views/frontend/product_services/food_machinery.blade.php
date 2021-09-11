@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title px-0" style="background-color: #D4EFF8;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 data-aos="fade-up" data-aos-duration="500" style="color: #02769b;">Import and Installation of <br> Food Processing Machinery</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/products_services/food_machinery.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
        </div>

        <div class="container import_installation" style="margin-top: 4rem;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6" data-aos="fade-up" data-aos-duration="500">
                    <p style="text-align: justify;">We import high quality brand-new and second-hand food processing machinery for dairy, coconut, fruits and vegetable processing, meat, sank processing, baking, confectionery, spice processing, carbonated soft-drinks and non-carbonated fruit beverages, while providing high quality after-sales services through our qualified technical team.</p>
                </div>
            </div>

            <div class="row justify-content-center import_image" style="margin-top: 4rem;">
                <div class="col-md-6">
                    <img src="{{ url('images/import_installation/1.jpg') }}" alt="" class="img-fluid rounded" data-aos="zoom-in" data-aos-duration="500">
                </div>
            </div>

        </div>
    </div>

    @include('frontend.includes.categories')

@endsection