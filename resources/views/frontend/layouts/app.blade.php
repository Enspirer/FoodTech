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
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="{{ url('css/styles.css') }}" rel="stylesheet">

        @stack('after-styles')
    </head>
    <body>
        @include('includes.partials.read-only')

        <div id="app" style="margin-top: 9rem;">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            
            <!-- @include('includes.partials.messages') -->
            @yield('content')
            
        </div><!-- #app -->



        <div class="footer container-fluid py-5" style="background-color: #C6866D; margin-top: 2rem;">
            <div class="container">
                <div class="row text-white justify-content-between" data-aos="fade-up" data-aos-duration="500">
                    <div class="col-md">
                        <h5 class="border-bottom mb-2">Our Products and Services</h5>
                        <a href="{{ route('frontend.import_and_installation') }}" class="text-decoration-none text-white mb-1 d-inline-block">Import and Installation of Food Processing Machinery</a><br>
                        <p href="#" class="text-decoration-none text-white mb-1 d-inline-block">Designing Process Plants and Process Lines </p><br>
                        <p href="#" class="text-decoration-none text-white mb-1 d-inline-block">Importing Food Ingredients and Packaging Materials</p><br>
                        <a href="{{ route('frontend.food_safety') }}" class="text-decoration-none text-white mb-1 d-inline-block">Consultancy for Food Safety Certification</a><br>
                        <a href="{{ route('frontend.thermal_process') }}" class="text-decoration-none text-white mb-1 d-inline-block">Thermal Process Validation</a><br>
                        <p href="#" class="text-decoration-none text-white mb-1 d-inline-block">Providing Training for Food Industry</p><br>
                        <p href="#" class="text-decoration-none text-white mb-1 d-inline-block">Research and Development</p><br>
                        <p href="#" class="text-decoration-none text-white mb-1 d-inline-block">Processing and Exports</p>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md">
                        <h5 class="border-bottom mb-2">Contact Us</h5>
                        <p class="mb-1">80/16/5/31, Raymond Range, Panaluwa,</p>
                        <p class="mb-1">Watareke, Padukka. Sri Lanka.</p>

                        <p class="phone mb-1"><i class="bi bi-telephone text-white me-3"></i>+94714446144</p>

                        <p class="email mb-1"><i class="bi bi-envelope text-white me-3"></i>info@foodtechlk.com</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/frontend.js')) !!}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script>
            $('.machine-categories .col-md-4').hover(function() {
                $(this).find('img').addClass('cat-hover');
                $(this).find('p').addClass('cat-hover-p');
            }, function() {
                $(this).find('img').removeClass('cat-hover');
                $(this).find('p').removeClass('cat-hover-p');
            });
        </script>
        
        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
