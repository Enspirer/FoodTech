@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title px-0" style="background-color: #FADDCE;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 data-aos="zoom-in" data-aos-duration="500" style="color: #a65e50;">Thermal Process Validation</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/products_services/thermal_process.jpg') }}" alt="" class="img-fluid w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" data-aos="fade-up" data-aos-duration="500">
        </div>


        <div class="container thermal" style="margin-top: 5rem; margin-bottom: 3rem;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <p style="text-align:justify;" data-aos="fade-up" data-aos-duration="500">Thermal process validation is an essential practice which is compulsory according US FDA regulations under low acid and Acidified low acid canned food regulation of 21 CFR 113 and 114. Wih the advancement of regulations thermal process validation has become important in canning of low acid canned foods such as canned coconut milk, canned vegetables, canned fish and other canned vegetables, as well as seafoods and meat products. Those who export canned foods to the USA are required to validate their thermal process in order to assure the time temperature combinations are compatible to control the most harmful and dangerous bacteria in the universe known as Clostridium botulinum. In this process we provide required technical consultation to select suitable and correct sterilizers and Retort inspections. We also conduct heat penetration trials and heat distribution studies in various types of retorts for any packaging materials such as cans, bottles, retort pouches, etc.</p>
                        <br>
                    <p style="text-align:justify;" data-aos="fade-up" data-aos-duration="500">We use the latest advanced thermal wireless loggers for thermal data collection process and these studies can also be carried out in rotary retort. We issue valid report for the study, and this report can be used in process filing in USFDA online system to obtain SID numbers specially for canned food exporters who exports low acid canned foods to the USA.</p>
                        <br>
                    <p style="text-align:justify;" data-aos="fade-up" data-aos-duration="500">This thermal process validation in conducted by highly qualified technical professionals who are well-experienced in food canning industry with USFDA approved BPCS certification.</p>
                </div>
            </div>
        </div>

    </div>


@endsection
