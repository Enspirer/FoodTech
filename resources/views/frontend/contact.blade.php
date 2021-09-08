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
                    <img src="{{ url('images/home/1.png') }}" alt="" class="img-fluid contact-img" style="height: 30rem;"  data-aos="zoom-out" data-aos-duration="800">
                </div>
            </div>
        </div>

        <div class="container text-center mt-4">
            <p data-aos="fade-up" data-aos-duration="500">Please message us</p>
            <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">info@foodtechlk.com</h2>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('frontend.contact.send') }}" method="POST">
                    {{csrf_field()}}
                        <div class="row mb-4" data-aos="fade-up" data-aos-duration="500">
                            <div class="col-6">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" aria-describedby="first_name" name="first_name" required>
                            </div>
                            <div class="col-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" aria-describedby="last_name" name="last_name" required>
                            </div>
                        </div>

                        <div class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="email" required>
                        </div>

                        <div class="mb-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control"  id="message" rows="7" name="message" required></textarea>
                        </div>

                        <div class="row mb-4 justify-content-center">
                            <div class="col-6 text-center">
                                <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5 py-2" id="submit_btn" disabled>Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        @if(session()->get('flash_success'))

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" id="modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-body">
                            <h4 class="mb-3">Hello,</h4>

                            <h4 class="mb-4 text-center">Your message has been submitted. We will contact you shortly.</h4>

                            <h6 class="mb-2">Regards,</h6>
                            <h6>Food Tech Team</h6>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('frontend.contact') }}" class="btn" style="background-color: green;color: white">Refresh</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="container" style="margin-top: 6rem;">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <img src="{{ url('images/logo.png') }}" alt="" class="img-fluid contact-logo" data-aos="zoom-out" data-aos-duration="800">
                </div>
            </div>
        </div>
    </div>

@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function checked() {
        $('#submit_btn').removeAttr('disabled');
    };
    </script>

    <script>
        if(document.getElementById("modal-btn")){
            $('#modal-btn').click();
        }
    </script>
@endpush
