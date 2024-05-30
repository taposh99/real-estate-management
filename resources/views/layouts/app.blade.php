<!DOCTYPE html>
<html lang="en">

<head>
    <title>Real Estate</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('adminAsset')}}/assets/images/favicon.png" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/style.css">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">


<!-- FontAwesome CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- jQuery (necessary for Toastr and AJAX requests) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
