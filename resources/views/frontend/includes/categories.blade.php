<div class="container mt-5 index-slider">
    <div class="row align-items-end">
        <div class="col-12 p-0" style="margin: 0 auto">
            <div class="swiper categories">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="500">
                        <a href="{{ route('frontend.beverage') }}" class="text-decoration-none text-dark">
                            <img src="{{ url('images/home/category-1.jpg') }}" alt="" class="img-fluid w-100">
                            <p class="category-p {{ Request::segment(2) == 'beverage-processing-industry' ? 'active' : null }}">Beverage Processing Industry</p>
                        </a>
                    </div>
                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="500" data-aos-delay="150">
                        <a href="{{ route('frontend.baking') }}" class="text-decoration-none text-dark">
                            <img src="{{ url('images/home/category-2.jpg') }}" alt="" class="img-fluid w-100">
                            <p class="category-p {{ Request::segment(2) == 'baking-and-confectionery-industry' ? 'active' : null }}">Baking and Confectionery Industry</p>
                        </a>
                    </div>
                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300">
                        <a href="{{ route('frontend.dairy') }}" class="text-decoration-none text-dark">
                            <img src="{{ url('images/home/category-3.jpg') }}" alt="" class="img-fluid w-100">
                            <p class="category-p {{ Request::segment(2) == 'dairy-industry' ? 'active' : null }}">Dairy Industry</p>
                        </a>
                    </div>
                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="500" data-aos-delay="450">
                        <a href="{{ route('frontend.fruit') }}" class="text-decoration-none text-dark">
                            <img src="{{ url('images/home/category-4.jpg') }}" alt="" class="img-fluid w-100">
                            <p class="category-p {{ Request::segment(2) == 'fruit-and-vegetable-processing-industry' ? 'active' : null }}">Fruit and Vegetable Processing Industry</p>
                        </a>
                    </div>
                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="500" data-aos-delay="600">
                        <a href="{{ route('frontend.spice') }}" class="text-decoration-none text-dark">
                            <img src="{{ url('images/home/category-5.jpg') }}" alt="" class="img-fluid w-100">
                            <p class="category-p {{ Request::segment(2) == 'spice-processing-industry' ? 'active' : null }}">Spice Processing Industry</p>
                        </a>
                    </div>
                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="500" data-aos-delay="750">
                        <a href="{{ route('frontend.coconut') }}" class="text-decoration-none text-dark">
                            <img src="{{ url('images/home/category-6.jpg') }}" alt="" class="img-fluid w-100">
                            <p class="category-p {{ Request::segment(2) == 'coconut-processing-industry' ? 'active' : null }}">Coconut Processing Industry</p>
                        </a>
                    </div>
                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="500" data-aos-delay="900">
                        <a href="{{ route('frontend.fish') }}" class="text-decoration-none text-dark">
                            <img src="{{ url('images/home/category-7.jpg') }}" alt="" class="img-fluid w-100">
                            <p class="category-p {{ Request::segment(2) == 'fish-processing-and-canning-industry' ? 'active' : null }}">Fish Processing and Canning Industry</p>
                        </a>
                    </div>
                    <div class="swiper-slide" data-aos="fade-left" data-aos-duration="500" data-aos-delay="1050">
                        <a href="{{ route('frontend.steam') }}" class="text-decoration-none text-dark">
                            <img src="{{ url('images/home/category-8.jpg') }}" alt="" class="img-fluid w-100">
                            <p class="category-p {{ Request::segment(2) == 'steam-boilers' ? 'active' : null }}">Steam Boilers</p>
                        </a>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>