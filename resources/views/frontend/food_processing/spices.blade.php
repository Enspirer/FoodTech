@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title" style="background-color: #FEE6D5;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Spice Processing Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/import_installation/spices.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container mt-5 spices">
            <div class="row justify-content-center">
                <div class="col-sm-5 text-center text-md-end">
                    <img src="{{ url('images/import_installation/6.png') }}" alt="" class="img-fluid position-relative" style="height: 30rem; top: -6rem;">
                </div>

                <div class="col-sm-7 pt-5">
                    <p style="text-align:justify;">Import and supply of brand-new and used machinery for spice processing.</p>

                    <ul class="p-3 mt-3 list">
                        <li class="mb-2">Spice Grinding Machine</li>
                        <li class="mb-2">Conveyers</li>
                        <li class="mb-2">Spice Powder Filling Machines</li>
                        <li class="mb-2">Spice Drying Ovens</li>
                        <li class="mb-2">Vibro Separators</li>
                        <li class="mb-2">Ribbon Blenders</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


@endsection
