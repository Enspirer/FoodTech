@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid mt-3 py-5 px-0">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Import Food Packaging</h1>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <img src="{{ url('images/products_services/food_packaging.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container" style="margin-top: 6rem;">
            <div class="row justify-content-center">
                <div class="col-6">
                    <p style="text-align:justify;">We import high quality food packaging materials such as food cans, flexible pouches and retort pouches, to name a few.</p>
                        <br>
                    <p style="text-align:justify;">Food cans, for low acid food such as Vegetable, Fish, coconut milk and high acid foods such as Pineapple, Mango and other fruits varieties. We also supply cans for beverage products.</p>
                        <br>
                    <h6 class="fw-bolder">Can Types:</h6>
                    <p>BPA comply, BPA NI, different sizes, 3-piece, 2-piece, EOE and normal ends.</p>
                </div>
            </div>
        </div>

    </div>


@endsection
