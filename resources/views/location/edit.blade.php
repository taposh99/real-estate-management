@extends('layouts.app')
@section('content')

<body class="">

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="container mt-5">
                <div class="text-center">
                    <h4 class="mt-2 mb-2">location Area Update </h4>
                    <!-- message -->
                    @if(session()->has('message'))
                    <div class="alert alert-success text-center mt-4">{{ session()->get('message') }}</div>
                    @elseif(session()->has('error'))
                    <div class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</div>
                    @endif
                    <!-- end-message -->
                </div>

                <div class="container">
                    <form action="{{ route('location.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="location_id" value="{{ $editLocationValues->id }}">

                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <div class="form-group mb-3">
                                    <label class="form-label">Location Area / Thana <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" required value="{{ $editLocationValues->name }}">
                                </div>

                                <label class="form-label">City</label>
                                <select name="city_id" id="city_id" class="form-control">
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ $editLocationValues->city_id == $city->id ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('location.index') }}'">
                                        <i class="fa-solid fa-arrow-left"></i> Back
                                    </button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @endsection