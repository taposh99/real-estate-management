@extends('layouts.app')
@section('content')

<body class="">

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="container mt-5">
                <div class="text-center">
                    <h4 class="mt-2 mb-2">Banner</h4>
                    <!-- message -->
                    @if(session()->has('message'))
                    <div class="alert alert-success text-center mt-4">{{ session()->get('message') }}</div>
                    @elseif(session()->has('error'))
                    <div class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</div>
                    @endif
                    <!-- end-message -->
                </div>

                <div class="container mt-5">
                    <form action="{{ route('banner.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="banner_id" value="{{ $editBannerValues->id }}">
                
                        <div class="card shadow-sm p-4 mb-5 bg-white rounded">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Update Banner</h4>
                
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control" required value="{{ $editBannerValues->title }}">
                                </div>
                
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <div class="mb-3">
                                        <img width="90px" height="50" id="showImage" src="{{ asset('images/banner/' . $editBannerValues->image) }}" alt="Banner Image" class="img-thumbnail">
                                    </div>
                                    <input type="file" name="image" id="image" class="form-control">
                                    <small class="form-text text-muted">Supported files: jpeg, jpg, png, gif, svg. Image will be resized to 992x740px.</small>
                                </div>
                
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('banner.index') }}'">
                                        <i class="fa fa-arrow-left"></i> Back
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save"></i> Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>

    @endsection