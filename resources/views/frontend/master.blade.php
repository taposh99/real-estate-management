
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EstateAgency Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
   @include('frontend.includes.style')

</head>

<body>

<!-- ======= Property Search Section ======= -->
@include('frontend.includes.search')
<!-- End Property Search Section -->>

<!-- ======= Header/Navbar ======= -->

@include('frontend.includes.header')
<!-- End Header/Navbar -->
<!-- ======= Intro Section ======= -->

@yield('body')


<!-- ======= Footer ======= -->
@include('frontend.includes.footer')
<!-- End  Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('frontend.includes.script')
</body>

</html>
