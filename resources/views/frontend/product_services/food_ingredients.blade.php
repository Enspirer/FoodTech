@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))


@push('after-styles')
    <link href="{{ url('css/food.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid mt-3 py-5 px-0">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>Food Ingredients</h1>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <img src="{{ url('images/products_services/food_ingredients.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container-fluid p-5" style="background-color: #6AA6A7;">
            <div class="container text-white">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h5>We import & supply high quality food additives, stabilizers, emulsifiers, food flavours and food colorings for food industry.</h5>
                    </div>
                </div>
            </div>
        </div>


        <div class="container" style="margin-top: 6rem;">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="row align-items-center" style="margin-bottom: 6rem;">
                        <div class="col-4">
                            <img src="{{ url('images/products_services/food_ingredients/1.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-8">
                            <h6 class="fw-bold">Ascorbic Acid</h6>
                                <hr class="mb-2">
                            <p style="text-align: justify;">This is a substance that is naturally found in many fresh fruits and vegetables. It is also manufactured commercially be means of biological synthesis methods. During this process, glucose is hydrogenated to sorbitol and then by the special strain of bacteria which oxidizes sorbitol to sorbate. During a further process, sorbate converts to ascorbic acid.</p>
                                <br>
                            <h6 class="fw-bold" style="text-align: justify;">Functions - Mainly act as anti-oxidants which inhibits the browning reaction of fruit juices, coconut water, king coconut water processing, also used in the brewing industry.</h6>
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin-bottom: 6rem;">
                        <div class="col-4">
                            <img src="{{ url('images/products_services/food_ingredients/2.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-8">
                            <h6 class="fw-bold">Carboxy Methyl Cellulose</h6>
                                <hr class="mb-2">
                            <p style="text-align: justify;">Prepared by treating cellulose with alkali and monochloroacetic acid. Mostly used Cotton plant as base material.</p>
                                <br>
                            <h6 class="fw-bold" style="text-align: justify;">Functions - Act as Thickening agent, Texture modifications, moisture migration control, non-nutritive bulking agents etc. Used in fruit processing, coconut processing and dairy processing.</h6>
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin-bottom: 6rem;">
                        <div class="col-4">
                            <img src="{{ url('images/products_services/food_ingredients/3.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-8">
                            <h6 class="fw-bold">Carageenan</h6>
                                <hr class="mb-2">
                            <p style="text-align: justify;">Carrageenan is commercially produced using red sea weeds. This is commonly used in the food industry as a stabilizer.</p>
                                <br>
                            <h6 class="fw-bold" style="text-align: justify;">Functions - Suspending and gelling agent in fruit beverages and dairy beverages; typically used evaporated milk, condensed milk, UHT milk, coconut milk etc.</h6>
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin-bottom: 6rem;">
                        <div class="col-4">
                            <img src="{{ url('images/products_services/food_ingredients/4.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-8">
                            <h6 class="fw-bold">Guar Gum</h6>
                                <hr class="mb-2">
                            <p style="text-align: justify;">Guar gum extract from the seed of cluster bean (Cyamoposis tetragonalobus) belongs to the pea family which is native in India.</p>
                                <br>
                            <h6 class="fw-bold" style="text-align: justify;">Functions - Thickening agent, Suspending agent. Commercially use in coconut milk industry, dairy and fruit processing industry.</h6>
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin-bottom: 6rem;">
                        <div class="col-4">
                            <img src="{{ url('images/products_services/food_ingredients/5.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-8">
                            <h6 class="fw-bold">Xanthan Gum</h6>
                                <hr class="mb-2">
                            <p style="text-align: justify;">Xanthan gum is produced by the fermentation of carbohydrates such as corn sugar by bacterial strain Xanthomonas Spp.</p>
                                <br>
                            <h6 class="fw-bold" style="text-align: justify;">Functions - Emulsifier, stabilizer, thickener in coconut milk, dairy beverages, fruit beverages.</h6>
                        </div>
                    </div>

                    <div class="row align-items-center" style="margin-bottom: 6rem;">
                        <div class="col-4">
                            <img src="{{ url('images/products_services/food_ingredients/6.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-8">
                            <h6 class="fw-bold">Food Colours and Flavours</h6>
                                <hr class="mb-2">
                            <p style="text-align: justify;">We import high quality food colours and flavours, including natural, nature-identical and synthetic colours in food industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
