@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title px-0" style="background-color: #D4EFF8; color: #0b3f52;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 data-aos="fade-up" data-aos-duration="500">Import and Installation of <br> Food Processing Machinery</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/products_services/food_machinery.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
        </div>

        <div class="container import_installation" style="margin-top: 4rem;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6" data-aos="fade-up" data-aos-duration="500">
                    <p style="text-align: justify;">We import high quality brand-new and second-hand food processing machinery for dairy, coconut, fruits and vegetable processing, meat, sank processing, baking, confectionery, spice processing, carbonated soft-drinks and non-carbonated fruit beverages, while providing high quality after-sales services through our qualified technical team.</p>
                </div>
            </div>

            <div class="row justify-content-center import_image" style="margin-top: 4rem;">
                <div class="col-md-6">
                    <img src="{{ url('images/import_installation/1.jpg') }}" alt="" class="img-fluid rounded" data-aos="zoom-in" data-aos-duration="500">
                </div>
            </div>

        </div>
    </div>



    <div class="container mt-5 machine-categories">
        <div class="row">
            <div class="col-md-4 col-lg-3 position-relative" data-aos="fade-up" data-aos-duration="500">
                <a href="{{ route('frontend.beverage') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-1.jpg') }}" alt="" class="img-fluid w-100">
                    <p class="import_installation-p" style="background-color: #AE825A;">Beverage Processing Industry</p>
                </a>
            </div>
            
            <div class="col-md-4 col-lg-3 position-relative" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                <a href="{{ route('frontend.baking') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-2.jpg') }}" alt="" class="img-fluid w-100">
                    <p class="import_installation-p" style="background-color: #C4836A;">Baking and Confectionery Industry</p>
                </a>
            </div>

            <div class="col-md-4 col-lg-3 position-relative" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <a href="{{ route('frontend.fruit') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-4.jpg') }}" alt="" class="img-fluid w-100">
                    <p class="import_installation-p" style="background-color: #AE825A; ">Fruit and Vegetable Processing Industry</p>
                </a>
            </div>

            <div class="col-md-4 col-lg-3 position-relative" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                <a href="{{ route('frontend.dairy') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-3.jpg') }}" alt="" class="img-fluid w-100">
                    <p class="import_installation-p" style="background-color: #C4836A; ">Dairy Industry</p>
                </a>
            </div>

            <div class="col-md-4 col-lg-3 position-relative" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                <a href="{{ route('frontend.spice') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-5.jpg') }}" alt="" class="img-fluid w-100">
                    <p class="import_installation-p" style="background-color: #AE825A; ">Spice Processing Industry</p>
                </a>
            </div>

            <div class="col-md-4 col-lg-3 position-relative" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                <a href="{{ route('frontend.fish') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-7.jpg') }}" alt="" class="img-fluid w-100">
                    <p class="import_installation-p" style="background-color: #C4836A; ">Fish Processing and Canning Industry</p>
                </a>
            </div>

            <div class="col-md-4 col-lg-3 position-relative" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                <a href="{{ route('frontend.coconut') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-6.jpg') }}" alt="" class="img-fluid w-100">
                    <p class="import_installation-p" style="background-color: #AE825A; ">Coconut Processing Industry</p>
                </a>
            </div>

            <div class="col-md-4 col-lg-3 position-relative" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                <a href="{{ route('frontend.steam') }}" class="text-decoration-none">
                    <img src="{{ url('images/home/category-8.jpg') }}" alt="" class="img-fluid w-100">
                    <p class="import_installation-p" style="background-color: #C4836A; ">Steam Boilers</p>
                </a>
            </div>

        </div>

    </div>


    
@endsection

@push('after-scripts')
    <script>
        $('.machine-categories .col-md-4').hover(function() {
            $(this).addClass('cat-hover');
            $(this).find('p').addClass('cat-hover-p');
        }, function() {
            $(this).removeClass('cat-hover');
            $(this).find('p').removeClass('cat-hover-p');
        });
    </script>
@endpush
