@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/index.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid mt-3 py-5" style="background-color: #EB8262;">
        <div class="container text-center text-white">
            <h3>Technical breakthrough in the</h3>
            <h1 class="display-4">Food Processing Industry</h1>
        </div>
    </div>


    <div class="container-fluid p-0">
        <div class="swiper banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ url('images/home/banner-1.jpg') }}" alt="" class="img-fluid w-100">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('images/home/banner-2.jpg') }}" alt="" class="img-fluid w-100">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('images/home/banner-3.jpg') }}" alt="" class="img-fluid w-100">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('images/home/banner-4.jpg') }}" alt="" class="img-fluid w-100">
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>


    <div class="container-fluid p-3" style="background-color: #6AA6A7;">
        <div class="container text-center text-white">
            <h3>Import and Installation of Food Processing Machinery</h3>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="text-center">
            <img src="{{ url('images/home/1.png') }}" alt="" class="img-fluid" style="height: 37.5rem;">
        </div>
    </div>

    <div class="container-fluid position-relative" style="background-color: #FFE5C5; top:-6.25rem; z-index: -1; padding: 6.25rem 0rem">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <p style="text-align: justify;">FoodTech Solution (Pvt) Ltd is a limited liability company incorporated in Sri Lanka, mainly focused on providing a wide spectrum of technical solutions to the Sri Lankan food processing industry and food industries in the South-Asian region</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row align-items-end">
            <div class="col-1 p-0">
                <img src="{{ url('images/home/2.png') }}" alt="" class="img-fluid position-relative" style="top: -4.2rem">
            </div>
            <div class="col-11 p-0">
                <div class="swiper categories">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="{{ route('frontend.beverage') }}" class="text-decoration-none text-dark">
                                <img src="{{ url('images/home/category-1.jpg') }}" alt="" class="img-fluid">
                                <p class="category-p">Beverage Processing Industry</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('frontend.baking') }}" class="text-decoration-none text-dark">
                                <img src="{{ url('images/home/category-2.jpg') }}" alt="" class="img-fluid">
                                <p class="category-p">Baking and Confectionery Industry</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('frontend.dairy') }}" class="text-decoration-none text-dark">
                                <img src="{{ url('images/home/category-3.jpg') }}" alt="" class="img-fluid">
                                <p class="category-p">Dairy Industry</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('frontend.fruit') }}" class="text-decoration-none text-dark">
                                <img src="{{ url('images/home/category-4.jpg') }}" alt="" class="img-fluid">
                                <p class="category-p">Fruit and Vegetable Processing Industry</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('frontend.spice') }}" class="text-decoration-none text-dark">
                                <img src="{{ url('images/home/category-5.jpg') }}" alt="" class="img-fluid">
                                <p class="category-p">Spice Processing Industry</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('frontend.coconut') }}" class="text-decoration-none text-dark">
                                <img src="{{ url('images/home/category-6.jpg') }}" alt="" class="img-fluid">
                                <p class="category-p">Coconut Processing Industry</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('frontend.fish') }}" class="text-decoration-none text-dark">
                                <img src="{{ url('images/home/category-7.jpg') }}" alt="" class="img-fluid">
                                <p class="category-p">Fish Processing and Canning Industry</p>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('frontend.steam') }}" class="text-decoration-none text-dark">
                                <img src="{{ url('images/home/category-8.jpg') }}" alt="" class="img-fluid">
                                <p class="category-p">Steam Boilers</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('after-scripts')
    <script>
        var swiper = new Swiper(".banner", {
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });

        var swiper = new Swiper(".categories", {
            slidesPerView: 8,
            loop: true,
            spaceBetween: 10,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush
