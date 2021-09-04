
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container" style="align-items: flex-end;">

        <a class="navbar-brand" href="{{ route('frontend.index') }}">
            <img src="{{ url('images/logo.png') }}" alt="" class="img-fluid" style="height: 6.5rem;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto p-0">
                <li class="nav-item px-3">
                    <a class="nav-link p-0 {{ Request::segment(1) == null ? 'active' : null }}" aria-current="page" href="{{ route('frontend.index') }}">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0 {{ Request::segment(1) == 'about-us' ? 'active' : null }}" href="{{ route('frontend.about_us') }}">ABOUT US</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle p-0 {{ Request::segment(1) == 'import-and-installation-of-food-processing-machinery' ? 'active' : (Request::segment(1) == 'import-food-packaging' ? 'active' : (Request::segment(1) == 'food-ingredients' ? 'active' : (Request::segment(1) == 'consultancy-for-food-safety-certifications' ? 'active' : (Request::segment(1) == 'thermal-process-validation' ? 'active' : null)))) }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PRODUCTS & SERVICES
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('frontend.import_and_installation') }}">Import and Installation of Food Processing Machinery</a></li>
                    <li><a class="dropdown-item" href="{{ route('frontend.food_packaging') }}">Import Food Packaging</a></li>
                    <li><a class="dropdown-item" href="{{ route('frontend.food_ingredients') }}">Food Ingredients</a></li>
                    <li><a class="dropdown-item" href="{{ route('frontend.food_safety') }}">Consultancy for Food Safety Certifications</a></li>
                    <li><a class="dropdown-item" href="{{ route('frontend.thermal_process') }}">Thermal Process Validation</a></li>
                </ul>
                </li>
                <li class="nav-item px-3 border-0">
                    <a class="nav-link p-0" href="#" tabindex="-1">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>