@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title" style="background-color: #FFEFC6;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Beverage Processing Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/beverages.jpg') }}" alt="" class="img-fluid w-100">
        </div>


        <div class="container position-relative machinery-image-abs" style="top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/2.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <p style="text-align:justify;">Import and supply of brand-new and used beverage processing machinery and complete turnkey solutions, according to customer requirements.</p>

                    <ul class="p-3 mt-3 list">
                        <li class="mb-2">Blending Tanks</li>
                        <li class="mb-2">Pasteurizers (plate heat exchanges, tubular heat exchanges)</li>
                        <li class="mb-2">UHT Plants (indirect, injection and infusion)</li>
                        <li class="mb-2">Filling Machinery (for low viscous and high viscous products)</li>
                        <li class="mb-2">Glass Bottle Filling Machinery for Still and Carbonated Soft Drinks</li>
                        <li class="mb-2">Palletizer</li>
                        <li class="mb-2">Rinser</li>
                        <li class="mb-2">Crate Washer</li>
                        <li class="mb-2">Beverage Canning Lines for Fruit Juices, Energy Drinks and Breweries</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    

@endsection
