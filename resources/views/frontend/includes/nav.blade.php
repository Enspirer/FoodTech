
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container" style="align-items: flex-end;">

        <a class="navbar-brand col-4 text-end" href="{{ route('frontend.index') }}">
            <img src="{{ url('images/logo.png') }}" alt="" class="img-fluid" style="height: 6rem;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-8" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                <li class="nav-item px-3">
                    <a class="nav-link active p-0" aria-current="page" href="{{ route('frontend.index') }}">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link p-0" href="{{ route('frontend.about_us') }}">ABOUT US</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PRODUCTS & SERVICES
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('frontend.import_and_installation') }}">Import and Installation of Food Processing Machinery</a></li>
                    <li><a class="dropdown-item" href="#">Import Food Packaging</a></li>
                    <li><a class="dropdown-item" href="#">Food Ingredients</a></li>
                    <li><a class="dropdown-item" href="#">Consultancy for Food Safety Certifications</a></li>
                    <li><a class="dropdown-item" href="#">Thermal Process Validation</a></li>
                </ul>
                </li>
                <li class="nav-item px-3 border-0">
                    <a class="nav-link p-0" href="#" tabindex="-1">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>