@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/about_us.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 about-title" style="background-color: #EB8262;">
        <div class="container text-center text-white">
            <h2 data-aos="fade-up" data-aos-duration="500">ABOUT US</h2>


            <div class="row mt-4">
                <div class="col-4" data-aos="flip-up" data-aos-duration="500" data-aos-delay="100">
                    <img src="{{ url('images/about_us/card-1.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-4" data-aos="flip-up" data-aos-duration="500" data-aos-delay="200">
                    <img src="{{ url('images/about_us/card-2.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-4" data-aos="flip-up" data-aos-duration="500" data-aos-delay="300">
                    <img src="{{ url('images/about_us/card-3.png') }}" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </div>


    <div class="container mt-5 about_us_paragraphs">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <p data-aos="fade-up" data-aos-duration="500">FoodTech Solution (Pvt) Ltd is a limited liability company incorporated in Sri Lanka, mainly focused on providing a wide spectrum of technical solutions to the food processing industry. Our main services are the import of high-quality food machinery, food ingredients, food packaging and food analytical equipment, in addition to providing consultancy services for plant designing, process line designing, food research & development, food safety certifications, Thermal Process Audits and Thermal Process Validation, food safety training, etc.</p>

                <br>

                <p data-aos="fade-up" data-aos-duration="500">We are also engaged in providing value-addition to  Ceylon Cinnamon for the export market, having successfully carried out backward integration, including plant nursery management, cultivation, processing and packaging. We also process high quality Kithul syrup and Jackfruit-based products for the export market.</p>

                <br>

                <p data-aos="fade-up" data-aos-duration="500">The Company is under the leadership of technical experts and professionals having more than 25 years’ experience in the food processing industry. FoodTech solutions (Pvt) Ltd is engaged as the local representative of leading  food machinery manufacturers in Thailand, Germany, Singapore, India, China and Italy.</p>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5 vision-mission" style="background-color: #EB8262; margin-top: 7rem;">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-6">
                    <img src="{{ url('images/about_us/vision.svg') }}" alt="" class="img-fluid" style="height: 10rem;" data-aos="fade-up" data-aos-duration="500">

                    <div class="row mt-3">
                        <div class="col-md-7" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                            <p style="text-align:justify; font-size: 0.9rem;">To provide total technical solutions by highly qualified technical professionals with a view to uplifting Sri Lankan food processing industries.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-6 text-end">
                    <img src="{{ url('images/about_us/mission.svg') }}" alt="" class="img-fluid" style="height: 10rem;" data-aos="fade-up" data-aos-duration="500">

                    <div class="row mt-3">
                        <div class="col-md-9" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                            <p style="text-align:justify; font-size: 0.9rem;">To provide total technical solutions by highly qualified technical professionals with a view to uplifting Sri Lankan food processing industries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center about_us_history" style="margin-top: 5rem;">
        <p class="p1" style="font-size: 7rem" data-aos="fade-up" data-aos-duration="500">25 years'</p>
        <p class="p2" style="font-size: 3rem" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">Experience in the</p>
        <p class="p3" style="font-size: 3rem" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Food processing industry.</p>
    </div>


    
@endsection
