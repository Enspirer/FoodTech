@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title px-0" style="background-color: #F2EFC8;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 data-aos="zoom-in" data-aos-duration="500" style="color: #657431;">Import Food Packaging</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/products_services/food_packaging.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
        </div>

        <div class="container food-details" style="margin-top: 6rem; margin-bottom: 3rem;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <p data-aos="fade-up" data-aos-duration="500">We import high quality food packaging materials such as food cans, flexible pouches and retort pouches, to name a few.</p>
                        <br>
                    <p data-aos="fade-up" data-aos-duration="500">Food cans, for low acid food such as Vegetable, Fish, coconut milk and high acid foods such as Pineapple, Mango and other fruits varieties. We also supply cans for beverage products.</p>
                        <br>
                    <h6 class="fw-bolder" data-aos="fade-up" data-aos-duration="500">Can Types:</h6>
                    <p data-aos="fade-up" data-aos-duration="500">BPA comply, BPA NI, different sizes, 3-piece, 2-piece, EOE and normal ends.</p>
                </div>
            </div>
        </div>

    </div>


@endsection
