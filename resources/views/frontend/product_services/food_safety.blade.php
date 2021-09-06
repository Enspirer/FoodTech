@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5 machinery-title food-safety" style="background-color: #D9F1FD;">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Consultancy for Food Safety Certifications</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 machinery-image">
            <img src="{{ url('images/products_services/food_safety.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container-fluid pt-5 food-sub">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h5 style="text-align: justify;">We provide consultations for implementation of food safety certifications such as BRC, IFS, ISO 22000, FSSC, HACCP, organic certifications, social standards and religious standards, including documentation, staff training, processing plans gap audits, internal audits, GMP audits, fabrication audits, etc.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container food-safety" style="margin-top: 6rem;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row mb-4">
                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/1.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>Hazard Analysis Critical Control Point (HACCP)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/2.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>British Retails Consortium (BRC)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/3.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>Fair Trade Sustainability Alliance</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/4.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>EU Organic</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/5.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>USDA Organic</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/6.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>JAS Organic</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/7.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>Halal</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/8.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>Kosher</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/9.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>ISO 22000:2018 Food Safety Management Systems</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/10.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>Supplier Ethical Data Exchange</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/11.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>International Featured standard</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/12.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>FSSC 22000 (Food Safety System Certification)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/13.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>Good Manufacturing practices (GMP)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md border">
                        <div class="row align-items-center p-2">
                            <div class="col-4">
                                <img src="{{ url('images/products_services/food_safety/14.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <p>Food safety Preventive Controls Alliance</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
