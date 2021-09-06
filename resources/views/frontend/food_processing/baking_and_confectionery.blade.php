@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title" style="background-color: #FEE6D5; color: #0b3f52;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Baking and Confectionery Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/baking.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container position-relative">
            <div class="row">
                <div class="col-3">
                    <img src="{{ url('images/import_installation/baking-1.png') }}" alt="" class="img-fluid machinery-image-abs-single position-absolute" style="top: -6rem;">
                </div>
            </div>
        </div>

        <div class="container position-relative machinery-image-abs" style="top: -8rem;">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ url('images/import_installation/3.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <p style="text-align:justify;">Import and supply of brand-new and used machinery for baking and confectionery industries.</p>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <ul class="p-3 dual-list">
                                <li class="mb-2">Multi-Deck Ovens</li>
                                <li class="mb-2">Automatic Wafer Baking Machine</li>
                                <li class="mb-2">Dough Divider and Weigher</li>
                                <li class="mb-2">Beating and Stirring Machine</li>
                                <li class="mb-2">Planetary Mixing and Kneading Machine</li>
                                <li class="mb-2">Bun Machine</li>
                                <li class="mb-2">Spreader (for spreading on a conveyor belt including container)</li>
                                <li class="mb-2">Proofing Chamber (fermentation)</li>
                                <li class="mb-2">Clip Fix Bag Closing Machine</li>
                                <li class="mb-2">Bread Roll and Baguette Slicer</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="p-3 dual-list">
                                <li class="mb-2">Pretzel Production Line</li>
                                <li class="mb-2">Wendel Mixer</li>
                                <li class="mb-2">Stress-free Divider</li>
                                <li class="mb-2">Calibrating Unit</li>
                                <li class="mb-2">Conical Rounder</li>
                                <li class="mb-2">Spiral Mixer with Removable Bowls</li>
                                <li class="mb-2">Dosing Machine</li>
                                <li class="mb-2">Setting Machine</li>
                                <li class="mb-2">Dough Sheeter</li>
                                <li class="mb-2">Fat Frying Plants</li>
                                <li class="mb-2">Boilers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
@endsection
