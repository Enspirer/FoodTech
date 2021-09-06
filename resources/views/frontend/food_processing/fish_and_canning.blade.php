@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title" style="background-color: #E1E8F6;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Fish Processing and Canning Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/fish.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container position-relative machinery-image-abs" style="top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/8.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>


        <div class="container blue">
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <p style="text-align:justify;">Import and supply of brand-new and used machinery for fish processing and canning.</p>

                    <ul class="p-3 mt-3 list">
                        <li class="mb-2">Fish Washing</li>
                        <li class="mb-2">De-heading, Slicing</li>
                        <li class="mb-2">Cookers</li>
                        <li class="mb-2">Can Filling and Can Seaming Machinery</li>
                        <li class="mb-2">Sterilizers</li>
                        <li class="mb-2">Labelling Machine</li>
                        <li class="mb-2">Turnkey Solutions for Fish Canning</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


@endsection
