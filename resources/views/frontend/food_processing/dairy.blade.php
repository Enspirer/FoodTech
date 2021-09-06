@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title" style="background-color: #CFEDFC;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Dairy Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/dairy.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container position-relative machinery-image-abs" style="top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/4.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>


        <div class="container blue">
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <p style="text-align:justify;">Import and supply of brand-new and used machinery for dairy processing industries and dairy farming.</p>

                    <ul class="p-3 mt-3 list">
                        <li class="mb-2">SS 316 Chilling tanks (Ice Bank Type and Direct Expansion)</li>
                        <li class="mb-2">Pasteurizers</li>
                        <li class="mb-2">UHT Plants</li>
                        <li class="mb-2">Spray Dryers</li>
                        <li class="mb-2">Ice Cream Plants</li>
                        <li class="mb-2">Cheese Processing Plants</li>
                        <li class="mb-2">Yoghurt Making Plants</li>
                        <li class="mb-2">Butter Processing Plants</li>
                        <li class="mb-2">CIP Plants, Pumps and Fittings</li>
                        <li class="mb-2">Homogenizers</li>
                        <li class="mb-2">Dairy Milking Parlors</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


    
@endsection
