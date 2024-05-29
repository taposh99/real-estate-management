@extends('layouts.app')
@section('content')

<body class="">

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="container mt-5">
                <div class="text-center">
                    <h4 class="mt-2 mb-2">Contact Page</h4>
                    <!-- message -->
                    @if(session()->has('message'))
                    <div class="alert alert-success text-center mt-4">{{ session()->get('message') }}</div>
                    @elseif(session()->has('error'))
                    <div class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</div>
                    @endif
                    <!-- end-message -->
                </div>

                <div class="container mt-5">
                    <form action="{{ route('contact.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="contact_id" value="{{ $editContactValues->id }}">
                
                        <div class="card shadow-sm p-4 mb-5 bg-white rounded">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Update ContactUs</h4>
                
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
                                    <label for="title" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="title" class="form-control"  value="{{ $editContactValues->email }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">phone_number <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_number" id="title" class="form-control"  value="{{ $editContactValues->phone_number }}">
                                </div>
                
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">whatsapp <span class="text-danger">*</span></label>
                                    <input type="text" name="whatsapp" id="title" class="form-control"  value="{{ $editContactValues->whatsapp }}">
                                </div>
                
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Address <span class="text-danger">*</span></label>
                                    <input type="text" name="address" id="title" class="form-control"  value="{{ $editContactValues->address }}">
                                </div>
                
                              
                
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('contact.index') }}'">
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