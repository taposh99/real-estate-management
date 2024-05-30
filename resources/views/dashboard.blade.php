@extends('layouts.app')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-4">

                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table" style="background-color: #2C3E50;">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-star-on"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><b>{{ $totalProperty ?? '0' }}</b></h4>
                            <h6>Total Property</h6>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <div class="col-md-12 col-xl-4">

                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table"style="background-color: #48536C;">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-star-on"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><b>{{ $totalPending ?? '0' }}</b></h4>
                            <h6>Total Pending Property</h6>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-md-12 col-xl-4">

                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table"style="background-color: #6A6787;">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><b>{{ $totalApproved ?? '0' }}</b></h4>
                            <h6>Total Approved Property</h6>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-2 end -->
            <!-- Widget primary-success card start -->


        </div>
        <div class="row">
            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-4">

                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table"style="background-color: #917CA0;">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-star-on"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><b>{{ $totalReject ?? '0' }}</b></h4>
                            <h6>Total Reject Property</h6>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <div class="col-md-12 col-xl-4">

                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table"style="background-color: #BA90B4;">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-star-on"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><b>{{ $totalPropertyType ?? '0' }}</b></h4>
                            <h6>Total Property Type</h6>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-md-12 col-xl-4">

                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table"style="background-color: #E4A6C4;">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><b>{{ $totalCity ?? '0' }}</b></h4>
                            <h6>Total City</h6>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-2 end -->
            <!-- Widget primary-success card start -->


        </div>
        <div class="row">
            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-4">

                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table"style="background-color: #9FADBD;">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-star-on"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><b>{{ $totalLocation ?? '0' }}</b></h4>
                            <h6>Total Location</h6>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <div class="col-md-12 col-xl-4">

                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table"style="background-color: #9FADBD;">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-star-on"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4><b>50 +</b></h4>
                            <h6>Total Advertisements</h6>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-md-12 col-xl-4">

                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table"style="background-color: #E39E21;">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>100 +</h4>
                            <h6>Achievements</h6>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-2 end -->
            <!-- Widget primary-success card start -->


        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection