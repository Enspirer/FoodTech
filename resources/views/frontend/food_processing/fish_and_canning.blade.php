@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid pt-5 machinery-title px-0 pb-0" style="background-color: #E1E8F6;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 data-aos="fade-up" data-aos-duration="500" style="color: #39393b;">Fish Processing and Canning Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/fish.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
        </div>

        <div class="container position-relative machinery-image-abs" style="top: -9rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/8.png') }}" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="500">
                </div>
            </div>
        </div>


        <div class="container blue position-relative" style="top: -4rem;">
            <div class="row justify-content-center mb-3">
                <div class="col-md-8 col-lg-6">
                    <p data-aos="fade-up" data-aos-duration="500">Import and supply of brand-new and used machinery for fish processing and canning.</p>

                    <ul class="p-3 mt-3 list">
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Fish Washing</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">De-heading, Slicing</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Cookers</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Can Filling and Can Seaming Machinery</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Sterilizers</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Labelling Machine</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Turnkey Solutions for Fish Canning</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    @include('frontend.includes.categories')


@endsection
