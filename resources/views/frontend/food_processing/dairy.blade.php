@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title px-0" style="background-color: #CFEDFC;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 data-aos="fade-up" data-aos-duration="500" style="color: #3772aa;">Dairy Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/dairy.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
        </div>

        <div class="container position-relative machinery-image-abs" style="top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/4.png') }}" alt="" class="img-fluid" data-aos="zoom-in" data-aos-duration="500">
                </div>
            </div>
        </div>


        <div class="container blue">
            <div class="row justify-content-center mb-3">
                <div class="col-md-8 col-lg-6">
                    <p style="text-align:justify;" data-aos="fade-up" data-aos-duration="500">Import and supply of brand-new and used machinery for dairy processing industries and dairy farming.</p>

                    <ul class="p-3 mt-3 list">
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">SS 316 Chilling tanks (Ice Bank Type and Direct Expansion)</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Pasteurizers</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">UHT Plants</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Spray Dryers</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Ice Cream Plants</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Cheese Processing Plants</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Yoghurt Making Plants</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Butter Processing Plants</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">CIP Plants, Pumps and Fittings</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Homogenizers</li>
                        <li class="mb-2" data-aos="fade-up" data-aos-duration="500">Dairy Milking Parlors</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


    @include('frontend.includes.categories')


    
@endsection
