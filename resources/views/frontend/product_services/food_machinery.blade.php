@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid mt-3 py-5 px-0" style="background-color: #d2f1fc; color: #0b3f52;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Import and Installation of <br> Food Processing Machinery</h1>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <img src="{{ url('images/products_services/food_machinery.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container import_installation" style="margin-top: 4rem;">
            <div class="row justify-content-center">
                <div class="col-6">
                    <p style="text-align: justify;">We import high quality brand-new and second-hand food processing machinery for dairy, coconut, fruits and vegetable processing, meat, sank processing, baking, confectionery, spice processing, carbonated soft-drinks and non-carbonated fruit beverages, while providing high quality after-sales services through our qualified technical team.</p>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top: 4rem;">
                <div class="col-6">
                    <img src="{{ url('images/import_installation/1.jpg') }}" alt="" class="img-fluid rounded">
                </div>
            </div>

        </div>
    </div>



    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <a href="{{ route('frontend.beverage') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-1.jpg') }}" alt="" class="img-fluid">
                    <p class="import_installation-p" style="background-color: #ad9f8c; ">Beverage Processing Industry</p>
                </a>
            </div>
            
            <div class="col-3">
                <a href="{{ route('frontend.baking') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-2.jpg') }}" alt="" class="img-fluid">
                    <p class="import_installation-p" style="background-color: #ad9f8c; ">Baking and Confectionery Industry</p>
                </a>
            </div>

            <div class="col-3">
                <a href="{{ route('frontend.fruit') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-4.jpg') }}" alt="" class="img-fluid">
                    <p class="import_installation-p" style="background-color: #ad9f8c; ">Fruit and Vegetable Processing Industry</p>
                </a>
            </div>

            <div class="col-3">
                <a href="{{ route('frontend.dairy') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-3.jpg') }}" alt="" class="img-fluid">
                    <p class="import_installation-p" style="background-color: #ad9f8c; ">Dairy Industry</p>
                </a>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-3">
                <a href="{{ route('frontend.spice') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-5.jpg') }}" alt="" class="img-fluid">
                    <p class="import_installation-p" style="background-color: #ad9f8c; ">Spice Processing Industry</p>
                </a>
            </div>

            <div class="col-3">
                <a href="{{ route('frontend.fish') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-7.jpg') }}" alt="" class="img-fluid">
                    <p class="import_installation-p" style="background-color: #ad9f8c; ">Fish Processing and Canning Industry</p>
                </a>
            </div>

            <div class="col-3">
                <a href="{{ route('frontend.coconut') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-6.jpg') }}" alt="" class="img-fluid">
                    <p class="import_installation-p" style="background-color: #ad9f8c; ">Coconut Processing Industry</p>
                </a>
            </div>

            <div class="col-3">
                <a href="{{ route('frontend.steam') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-8.jpg') }}" alt="" class="img-fluid">
                    <p class="import_installation-p" style="background-color: #ad9f8c; ">Steam Boilers</p>
                </a>
            </div>

        </div>

    </div>


    
@endsection
