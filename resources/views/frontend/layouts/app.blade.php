<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link href="{{ url('css/styles.css') }}" rel="stylesheet">

        @stack('after-styles')
    </head>
    <body>
        @include('includes.partials.read-only')

        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            
            @include('includes.partials.messages')
            @yield('content')
            
        </div><!-- #app -->



        <div class="footer container-fluid py-5" style="background-color: #C6866D; margin-top: 6rem;">
            <div class="container">
                <div class="row text-white justify-content-center">
                    <div class="col-5">
                        <h5>Our Products and Services</h5>
                        <hr class="mb-2" style="width: 22rem;">
                        <a href="" class="text-decoration-none text-white">Import and Installation of Food Processing Machinery</a>
                        <a href="" class="text-decoration-none text-white">Designing Process Plants and Process Lines </a>
                        <a href="" class="text-decoration-none text-white">Importing Food Ingredients and Packaging Materials</a>
                        <a href="" class="text-decoration-none text-white">Consultancy for Food Safety Certification</a>
                        <a href="" class="text-decoration-none text-white">Thermal Process Validation</a>
                        <a href="" class="text-decoration-none text-white">Providing Training for Food Industry</a>
                        <a href="" class="text-decoration-none text-white">Research and Development</a>
                        <a href="" class="text-decoration-none text-white">Processing and Exports</a>
                    </div>

                    <div class="col-5">
                        <h5>Contact Us</h5>
                        <hr class="mb-2" style="width: 22rem;">
                        <p>80/16/5/31, Raymond Range, Panaluwa,</p>
                        <p>Watareke, Padukka. Sri Lanka.</p>

                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="bi bi-telephone text-white"></i>
                            </div>

                            <div class="col-11 p-0">
                                <p>+94714446144</p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-1">
                                <i class="bi bi-telephone text-white"></i>
                            </div>

                            <div class="col-11 p-0">
                                <p>info@foodtechlk.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
