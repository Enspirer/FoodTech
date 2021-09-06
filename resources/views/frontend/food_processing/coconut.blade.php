@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title" style="background-color: #E6F0CF;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Coconut Processing Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/coconut.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container position-relative machinery-image-abs" style="top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/7.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <p style="text-align:justify;">Import and supply of brand-new and used machinery for coconut processing.</p>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <ul class="p-3 dual-list">
                                <li class="mb-2">Coconut Milk Extractors</li>
                                <li class="mb-2">Conveyers</li>
                                <li class="mb-2">Pasteurizers</li>
                                <li class="mb-2">Milk Cooling Tanks</li>
                                <li class="mb-2">Homogenizers</li>
                                <li class="mb-2">Can Filling Machines</li>
                                <li class="mb-2">Can Seamers</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="p-3 dual-list">
                                <li class="mb-2">Retorts (direct steam, over pressure, continuous, rotary)</li>
                                <li class="mb-2">UHT Plants, Spray Dryers</li>
                                <li class="mb-2">Double Jacketed Kettles</li>
                                <li class="mb-2">Can De-palatizers</li>
                                <li class="mb-2">Can Loading Systems</li>
                                <li class="mb-2">Can Washers</li>
                                <li class="mb-2">Complete Turnkey Solutions for Coconut Processing Industry</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
