@extends('frontend.master')

@section('body')
<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single" style="margin-top: -99px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h5 class="title-single" style="font-size: 1.875em;">Property ID:</h5>
            <span class="color-text-a"><b>{{ $property->code }}</b></span>

          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{route('property.page')}}">Properties</a>
              </li>

            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div id="property-single-carousel" class="swiper">
            <div class="carousel-item-b swiper-slide" style="height: 572px; display: flex; justify-content: center; align-items: center; overflow: hidden;">
              <img src="{{ asset($property->image) }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)';">
            </div>
          </div>
        </div>
      </div>



      <br>

      <div class="row">
        <div class="col-sm-12">

          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo" style="box-shadow: 0 4px 8px rgba(0, 128, 0, 0.3); padding: 2px; border-radius: 33px;">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-cash"> {{ $property->price ? $property->price . ' TK' : 'Price Hidden' }}</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c"></h5>
                  </div>
                </div>
              </div>


              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">


                    @if($property->title)
                    <li class="d-flex justify-content-between">
                      <strong>Property Title:</strong>
                      <span>{{ $property->title }}</span>
                    </li>
                    @endif

                    @if($property->city->name)
                    <li class="d-flex justify-content-between">
                      <strong>City:</strong>
                      <span>{{ $property->city->name }}</span>
                    </li>
                    @endif

                    @if($property->location->name)
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>{{ $property->location->name }}</span>
                    </li>
                    @endif

                    @if($property->propertyType->name)
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>{{ $property->propertyType->name }}</span>
                    </li>
                    @endif

                    @if($property->property_purpose)
                    <li class="d-flex justify-content-between">
                      <strong>Purpose:</strong>
                      <span>{{ $property->property_purpose }}</span>
                    </li>
                    @endif

                    @if($property->land_area)
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span>{{ $property->land_area }}</span>
                    </li>
                    @endif

                    @if($property->appartment_size)
                    <li class="d-flex justify-content-between">
                      <strong>Appartment Size:</strong>
                      <span>{{ $property->appartment_size }}</span>
                    </li>
                    @endif

                    @if($property->bed_room)
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span>{{ $property->bed_room }}</span>
                    </li>
                    @endif

                    @if($property->bath_room)
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span>{{ $property->bath_room }}</span>
                    </li>
                    @endif

                    @if($property->drawing_room)
                    <li class="d-flex justify-content-between">
                      <strong>Drawing Room:</strong>
                      <span>{{ $property->drawing_room }}</span>
                    </li>
                    @endif

                    @if($property->garage)
                    <li class="d-flex justify-content-between">
                      <strong>Garage:</strong>
                      <span>{{ $property->garage }}</span>
                    </li>
                    @endif
                
                    @if($property->owner_name)
                    <li class="d-flex justify-content-between">
                      <strong>Property Owner Name:</strong>
                      <span>{{ $property->owner_name }}</span>
                    </li>
                    @endif

                    @if($property->owner_phone)
                    <li class="d-flex justify-content-between">
                      <strong>Owner Number:</strong>
                      <span>{{ $property->owner_phone }}</span>
                    </li>
                    @endif
                  </ul>

                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              @if ($property->description)
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  {{ $property->description }}
                </p>

              </div>
              @endif
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  <li>Balcony</li>
                  <li>Outdoor Kitchen</li>
                  <li>Cable Tv</li>
                  <li>Internet</li>
                  <li>Parking</li>
                  <li>Sun Room</li>
                  <li>playground</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @if ($property->video_link)
        <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Properties Video</a>
            </li>

          </ul>
          @php
          // Assuming $property->video_link is in the standard YouTube URL format
          // Convert it to embed format if necessary
          $video_link = $property->video_link;
          if (strpos($video_link, 'watch?v=') !== false) {
          $video_link = str_replace('watch?v=', 'embed/', $video_link);
          }
          @endphp

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <iframe id="video-iframe" src="{{ $video_link }}" width="100%" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>





        </div>
        @endif
        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Contact Agent</h3>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent">Real EState</h4>

                <ul class="list-unstyled">

                  <li class="d-flex justify-content-between">
                    <strong>Mobile:</strong>
                    <span class="color-text-a">(+880) 1934838499</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Email:</strong>
                    <span class="color-text-a">saniatulhaque@gmail.com</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Address:</strong>
                    <span class="color-text-a">Dhanmondhi 27</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Skype:</strong>
                    <span class="color-text-a">Annabela.ge</span>
                  </li>
                </ul>
                <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="bi bi-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="bi bi-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="bi bi-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-12 col-lg-4">
              <div class="property-contact">
                <form class="form-a">
                  <div class="row">
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-1">
                      <div class="form-group">
                        <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 mt-3">
                      <button type="submit" class="btn btn-a">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    const videoLink = "{{ $property->video_link }}";
    document.getElementById('pills-youtube-tab').addEventListener('click', function() {
      const iframe = document.getElementById('video-iframe');
      iframe.src = videoLink;
    });
  });
</script>
@endsection