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
                    <h1 data-aos="fade-up" data-aos-duration="500" style="color: #ab5d53;">Baking and Confectionery Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/baking.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
        </div>

        <div class="container position-relative">
            <div class="row">
                <div class="col-3">
                    <img src="{{ url('images/import_installation/baking-1.png') }}" alt="" class="img-fluid machinery-image-abs-single position-absolute" style="top: -6rem;" data-aos="zoom-in" data-aos-duration="500">
                </div>
            </div>
        </div>

        <div class="container position-relative machinery-image-abs" style="top: -8rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/3.png') }}" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="500">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-8 col-lg-6">
                    <p style="text-align:justify;" data-aos="fade-up" data-aos-duration="500">Import and supply of brand-new and used machinery for baking and confectionery industries.</p>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <ul class="p-3 dual-list">
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Multi-Deck Ovens</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Automatic Wafer Baking Machine</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Dough Divider and Weigher</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Beating and Stirring Machine</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Planetary Mixing and Kneading Machine</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Bun Machine</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Spreader (for spreading on a conveyor belt including container)</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Proofing Chamber (fermentation)</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Clip Fix Bag Closing Machine</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Bread Roll and Baguette Slicer</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="p-3 dual-list">
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Pretzel Production Line</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Wendel Mixer</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Stress-free Divider</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Calibrating Unit</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Conical Rounder</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Spiral Mixer with Removable Bowls</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Dosing Machine</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Setting Machine</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Dough Sheeter</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Fat Frying Plants</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Boilers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('frontend.includes.categories')

    
@endsection
