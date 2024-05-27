<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('adminAsset')}}/assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/style.css">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">



    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	@include('layouts.sidebar')

	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
    @include('layouts.navbar')

	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
@yield('content')


    <script src="{{asset('adminAsset')}}/assets/js/vendor-all.min.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="{{asset('adminAsset')}}/assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="{{asset('adminAsset')}}/assets/js/pages/dashboard-main.js"></script>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
