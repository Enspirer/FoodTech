@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))


@push('after-styles')
    <link href="{{ url('css/contact.css') }}" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-6-md text-center text-md-end">
                    <img src="{{ url('images/home/1.png') }}" alt="" class="img-fluid contact-img" style="height: 30rem;">
                </div>
            </div>
        </div>

        <div class="container text-center mt-4">
            <p>Please message us</p>
            <h2>info@foodtechlk.com</h2>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form>
                        <div class="row mb-4">
                            <div class="col-6">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" aria-describedby="first_name">
                            </div>
                            <div class="col-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" aria-describedby="last_name">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control"  id="message" rows="7"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 6rem;">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <img src="{{ url('images/logo.png') }}" alt="" class="img-fluid contact-logo">
                </div>
            </div>
        </div>
    </div>

@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush