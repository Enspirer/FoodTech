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
                    <h1>Spice Processing Industry</h1>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <img src="{{ url('images/import_installation/spices.jpg') }}" alt="" class="img-fluid w-100">
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-5 text-end">
                    <img src="{{ url('images/import_installation/6.png') }}" alt="" class="img-fluid position-relative" style="height: 30rem; top: -6rem;">
                </div>

                <div class="col-7 pt-5">
                    <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure illo quibusdam nemo, dolore nobis nisi ab tempore rem error consectetur facere enim odio vero exercitationem eius ipsam autem, quam cumque laboriosam! Illum est, adipisci assumenda quo nisi cupiditate officia officiis nulla nemo architecto minus hic exercitationem, a doloremque quasi totam laborum explicabo tempora ex. Rem obcaecati eligendi perspiciatis maxime! Libero, consequuntur? Impedit nesciunt unde modi provident numquam iste quod, ullam id vitae praesentium officia quo culpa voluptate eveniet necessitatibus nisi expedita reprehenderit pariatur suscipit tempore. Possimus impedit officiis vel cum perferendis, consequatur recusandae aperiam cumque itaque obcaecati sequi cupiditate labore!</p>
                </div>
            </div>
        </div>

    </div>


@endsection
