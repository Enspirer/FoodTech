@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title" style="background-color: #D4EFF8;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Steam Boilers</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/steam.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container position-relative machinery-image-abs" style="top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/9.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <p style="text-align:justify;">FoodTech Solutions (Pvt) Ltd imports and supplies Steam Boilers of any capacity, according to customer requirements. We can supply different types of boilers fired by Diesel, Kerosine oil. furnace oil and biomass.</p>
                </div>
            </div>
        </div>

    </div>


@endsection
