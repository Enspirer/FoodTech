@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title px-0" style="background-color: #E9D6D6;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 data-aos="fade-up" data-aos-duration="500">Fruit and Vegetable Processing Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/fruits.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
        </div>

        <div class="container position-relative machinery-image-abs" style="top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/5.png') }}" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="500">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-8 col-lg-6">
                    <p style="text-align:justify;" data-aos="fade-up" data-aos-duration="500">Import and supply of brand-new and used machinery for fruit and vegetable processing.</p>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <ul class="p-3 dual-list">
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">IQF Plants, Vacuumed Freeze Dryers for Fruits and Vegetables</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Peeling Machines</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Pulpers, Screw Press</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Potato Chips Making Machines</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Potato Peeling Machines</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Pre-washing Machines</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Scalding Machines</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Vacuum Processing Machines</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Vegetable Washing Machines</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Retorts</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="p-3 dual-list">
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Pasteurizer</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Batch Mixers</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Belt Dryers</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Batch Mixers</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Belt Dryers</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Check Weighers</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Coffee Grinders</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Coffee Roasting Machines</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Fruit Juice Bottling Lines</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Fruit Juice Canning Machinery</li>
                                <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Fruit Juice Aseptic Packing Machinery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
