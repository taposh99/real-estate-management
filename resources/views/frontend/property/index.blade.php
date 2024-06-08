@extends('frontend.master')

@section('body')
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Our Amazing Properties</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">

            </div>
        </div>
    </div>
</section><!-- End Intro Single-->

<!-- ======= Property Grid ======= -->
<section class="property-grid grid">
    <div class="container">
        <div class="row">
          
            @forelse ($properties as $data)
            <div class="col-md-4">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a" style="height: 400px; overflow: hidden;">
                        <img src="{{ asset($data->image) }}" alt="" class="img-a img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">

                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a"> {{ $data->title }}</span>
                                </div>
                                <a href="{{ route('property.single', ['code' => $data->code]) }}" class="link-a">Click here to view
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                            <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around">
                                    <li>
                                        <h4 class="card-info-title">Area</h4>
                                        <span>320m<sup>2</sup></span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Beds</h4>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Baths</h4>
                                        <span>21</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Garages</h4>
                                        <span>2</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p>No Properties found.</p>
            @endforelse
        </div>
        <div class="row">
            <div class="col-sm-12">
                <nav class="pagination-a">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <span class="bi bi-chevron-left"></span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="#">
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>




@endsection