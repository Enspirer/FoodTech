@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title px-0" style="background-color: #FEE6D5;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 data-aos="fade-up" data-aos-duration="500" style="color: #895b2a;">Spice Processing Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/spices.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
        </div>

        <div class="container mt-5 spices">
            <div class="row justify-content-center">
                <div class="col-sm-5 text-center text-md-end">
                    <img src="{{ url('images/import_installation/6.png') }}" alt="" class="img-fluid position-relative" style="height: 30rem; top: -6rem;" data-aos="zoom-in" data-aos-duration="500">
                </div>

                <div class="col-sm-7 pt-5">
                    <p data-aos="fade-up" data-aos-duration="500">Import and supply of brand-new and used machinery for spice processing.</p>

                    <ul class="p-3 mt-3 list">
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Spice Grinding Machine</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Conveyers</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Spice Powder Filling Machines</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Spice Drying Ovens</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Vibro Separators</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Ribbon Blenders</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    @include('frontend.includes.categories')


@endsection
