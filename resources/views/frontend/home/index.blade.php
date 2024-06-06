@extends('frontend.master')

@section('body')
    <div class="intro intro-carousel swiper position-relative">
        <div class="swiper-wrapper">
        @forelse ($allBanner as $data)
        @php
        $titleWords = explode(' ', $data->title, 2);
        $firstWord = $titleWords[0];
        $remainingWords = isset($titleWords[1]) ? $titleWords[1] : '';
    @endphp
    <div class="swiper-slide carousel-item-a intro-item bg-image"
         style="background-image: url({{ asset('images/banner/' . $data->image) }})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="intro-body">
                                <h1 class="intro-title mb-4">
                                <span class="color-b">{{ $firstWord }}</span>
                                    <br> {{ $remainingWords }}

                                </h1>
                                <p class="intro-subtitle intro-price">
                                    <a href="#">
                                        <span class="price-a" style="background-color: #ff9900; padding: 10px 20px; color: #ffffff; border-radius: 5px; transition: background-color 0.3s;">
                                            Read More
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
    <p>No Banners found.</p>
@endforelse


        </div>
        <div class="swiper-pagination"></div>
    </div>

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section class="section-services section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a" style="font-size: 36px; font-weight: bold; text-align: center; margin-bottom: 30px;">Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box-c foo" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico" style="font-size: 30px; margin-right: 10px;">
                                    <span class="bi bi-cart"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c" style="font-size: 21px; font-weight: bold;">Apartment Sales</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico" style="font-size: 30px; margin-right: 10px;">
                                    <span class="bi bi-calendar4-week"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c" style="font-size: 21px; font-weight: bold;">Land Sales</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico" style="font-size: 30px; margin-right: 10px;">
                                    <span class="bi bi-card-checklist"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c" style="font-size: 21px; font-weight: bold;">Commercial Real Estate</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-4">
                        <div class="card-box-c foo" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico" style="font-size: 30px; margin-right: 10px;">
                                    <span class="bi bi-cart"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c" style="font-size: 21px; font-weight: bold;">Real Estate Auctions</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico" style="font-size: 30px; margin-right: 10px;">
                                    <span class="bi bi-calendar4-week"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c" style="font-size: 21px; font-weight: bold;">Property Tax Consulting</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo" style="border: 1px solid #ddd; padding: 20px; border-radius: 10px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico" style="font-size: 30px; margin-right: 10px;">
                                    <span class="bi bi-card-checklist"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c" style="font-size: 21px; font-weight: bold;">Real Estate Legal Services</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
     
        <!-- End Services Section -->

        <!-- ======= Latest Properties Section ======= -->
        <section class="section-property section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Properties</h2>
                            </div>
                            <div class="title-link">
                                <a href="property-grid.html">All Property
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div id="property-carousel" class="swiper">
                    <div class="swiper-wrapper">
                        @forelse ($properties as $data)
                        <div class="carousel-item-b swiper-slide">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a" style="height: 400px; overflow: hidden;">
                                    <img src="{{ asset($data->image) }}" alt="" class="img-a img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
        
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="property-single.html">206 Mount
                                                    <br /> Olive Road Two</a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">rent | $ 12.000</span>
                                            </div>
                                            <a href="{{ route('property.single', ['id' => $data->id]) }}" class="link-a">Click here to view
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                            
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    <span>340m<sup>2</sup></span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Garages</h4>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End carousel item -->
                        @empty
                        <p>No Properties found.</p>
                        @endforelse
                    </div>
                </div>
                <div class="property-carousel-pagination carousel-pagination"></div>
            </div>
        </section>
        
        <!-- End Latest Properties Section -->

        <!-- ======= Agents Section ======= -->
      <!-- End Agents Section -->

        <!-- ======= Latest News Section ======= -->
        <section class="section-news section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Offer</h2>
                            </div>
                            <div class="title-link">
                                <a href="blog-grid.html">All News
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="news-carousel" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="{{ asset('/') }}frontend/assets/img/post8.png" alt=""
                                        class="img-b img-fluid">
                                </div>
                                {{-- <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">House</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="blog-single.html">House is comming
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div><!-- End carousel item -->
                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="{{ asset('/') }}frontend/assets/img/post-7.jpg" alt=""
                                        class="img-b img-fluid">
                                </div>
                                {{-- <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">House</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="blog-single.html">House is comming
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div><!-- End carousel item -->
                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="{{ asset('/') }}frontend/assets/img/post6.jpg" alt=""
                                        class="img-b img-fluid">
                                </div>
                                {{-- <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">House</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="blog-single.html">House is comming
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div><!-- End carousel item -->
                        <div class="carousel-item-c swiper-slide">
                            <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                    <img src="{{ asset('/') }}frontend/assets/img/post5.jpg" alt=""
                                        class="img-b img-fluid">
                                </div>
                                {{-- <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">House</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="blog-single.html">House is comming
                                                    <br> new</a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div><!-- End carousel item -->

                       <!-- End carousel item -->

                    </div>
                </div>

                <div class="news-carousel-pagination carousel-pagination"></div>
            </div>
        </section><!-- End Latest News Section -->

        <!-- ======= Testimonials Section ======= -->
       <!-- End Testimonials Section -->
    </main><!-- End #main -->

    <script>
        document.querySelectorAll('.card-box-c').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'scale(1.05)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'scale(1)';
            });
        });
    </script>
@endsection
