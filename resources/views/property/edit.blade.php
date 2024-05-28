@extends('layouts.app')
@section('content')

<body class="">

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="container mt-5">
                <div class="text-center">
                    <h4 class="mt-2 mb-2">property</h4>
                    <!-- message -->
                    @if(session()->has('message'))
                    <div class="alert alert-success text-center mt-4">{{ session()->get('message') }}</div>
                    @elseif(session()->has('error'))
                    <div class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</div>
                    @endif
                    <!-- end-message -->
                </div>

                <div class="container">
                    <form action="{{ route('property.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="property_id" value="{{ $editPropertyValues->id }}">

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Property Title</label>
                                <input type="text" class="form-control" name="title" required placeholder="Enter Property Title" value="{{ $editPropertyValues->title }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Property Type</label>
                                <select class="form-control" name="property_type_id" required>
                                    @foreach ($propertyTyp as $data)
                                    <option value="{{ $data->id }}" {{ $editPropertyValues->property_type_id == $data->id ? 'selected' : '' }}>{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <select class="form-control" name="city_id" required>
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ $editPropertyValues->city_id == $city->id ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Location</label>
                                <select class="form-control" name="location_id" required>
                                    @foreach($locations as $location)
                                    <option value="{{ $location->id }}" {{ $editPropertyValues->location_id == $location->id ? 'selected' : '' }}>
                                        {{ $location->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Property Purpose</label>
                                <select class="form-control" name="property_purpose" required>
                                    <option value="For sale" {{ $editPropertyValues->property_purpose == 'For sale' ? 'selected' : '' }}>For sale</option>
                                    <option value="For rent" {{ $editPropertyValues->property_purpose == 'For rent' ? 'selected' : '' }}>For rent</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Property Video Link</label>
                                <input type="url" class="form-control" name="video_link" placeholder="https://www.youtube.com/embed/example" value="{{ $editPropertyValues->video_link }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" accept="image/jpeg,image/jpg">
                                <small class="form-text text-muted">Supported files: jpeg, jpg. Image will be resized into 992x740px.</small>
                            </div>
                            <div class="col-md-12 mt-4">
                                <h5>Property Owner Information</h5>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="owner_name" required placeholder="Enter Full Name" value="{{ $editPropertyValues->owner_name }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="owner_phone" required placeholder="Enter Phone" value="{{ $editPropertyValues->owner_phone }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="owner_email" required placeholder="Enter Email Address" value="{{ $editPropertyValues->owner_email }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Facebook URL</label>
                                <input type="url" class="form-control" name="owner_facebook" placeholder="Enter Facebook URL" value="{{ $editPropertyValues->owner_facebook }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Twitter URL</label>
                                <input type="url" class="form-control" name="owner_twitter" placeholder="Enter Twitter URL" value="{{ $editPropertyValues->owner_twitter }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">LinkedIn URL</label>
                                <input type="url" class="form-control" name="owner_linkedin" placeholder="Enter LinkedIn URL" value="{{ $editPropertyValues->owner_linkedin }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Instagram URL</label>
                                <input type="url" class="form-control" name="owner_instagram" placeholder="Enter Instagram URL" value="{{ $editPropertyValues->owner_instagram }}">
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('property.index') }}'">
                                <i class="fa-solid fa-arrow-left"></i> Back
                            </button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @endsection