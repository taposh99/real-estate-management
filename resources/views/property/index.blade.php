@extends('layouts.app')
@section('content')

<body class="">
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Flash Messages -->
                    @if (session()->has('message'))
                    <p class="alert alert-success text-center mt-4">{{ session()->get('message') }}</p>
                    @elseif(session()->has('error'))
                    <p class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</p>
                    @endif

                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>Property List</h5>
                            <!-- Search box -->
                            <input type="text" id="searchBox" class="form-control w-25" placeholder="Search...">
                            <!-- Button to open modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#propertyModal">
                            Add Property 
                            </button>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-dark" id="propertyTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Location</th>
                                            <th>Property Purpose</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($properties as $property)
                                        <tr>
                                            <td>{{ $property->id }}</td>
                                            <td>{{ $property->title }}</td>
                                            <td>{{ $property->city->name }}</td>
                                            <td>{{ $property->location->name }}</td>
                                            <td>{{ $property->property_purpose }}</td>
                                            <td>
                                                @if ($property->image)
                                                    <img src="{{ asset($property->image) }}" alt="image"
                                                        style="width: 90px; height: 50px;">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td class="d-flex">
                                                <a class="btn btn-primary me-1" href="{{ route('property.edit', encrypt($property->id)) }}" style="font-size: 13px; width: 40px; display: inline-block; text-align: center;">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </a>
                                                <form action="{{ route('property.delete') }}" method="POST" onsubmit="return confirm('Are you sure?')" style="display: inline-block; width: 40px; text-align: center;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="corporate_delete_id" value="{{ $property->id }}">
                                                    <button class="btn btn-danger btn-sm" style="width: 40px;">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $properties->withQueryString()->links('pagination::bootstrap-5') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="propertyModal" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="propertyModalLabel">Add Property</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="propertyForm" action="{{route('property.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <div class="message">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            <div class="row">
                               
                                
                                <div class="col-md-6">
                                    <label class="form-label">Property Title</label>
                                    <input type="text" class="form-control" name="title" required placeholder="Sani Houses">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Property Type</label>
                                    <select class="form-control" name="property_type_id" required>
                                        <option value="">Select One</option>
                                        @foreach ($propertyTypes as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">City</label>
                                    <select class="form-control" name="city_id" required>
                                        <option value="">Select One</option>
                                        @foreach ($citys as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Location</label>
                                    <select class="form-control" name="location_id" required>
                                        <option value="">Select One</option>
                                        @foreach ($locations as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Property Purpose</label>
                                    <select class="form-control" name="property_purpose" required>
                                        <option value="">Select One</option>
                                        <option value="For sale">For sale</option>
                                        <option value="For rent">For rent</option>
                                      
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Property Video Link</label>
                                    <input type="url" class="form-control" name="video_link" placeholder="https://www.youtube.com/embed/example">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Land Area</label>
                                    <input type="text" class="form-control" name="land_area" required placeholder="350 Katha">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Appartment Size</label>
                                    <input type="text" class="form-control" name="appartment_size" required placeholder="500 Sft">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Bed Room</label>
                                    <input type="number" class="form-control" name="bed_room" required placeholder="3">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Bath Room</label>
                                    <input type="number" class="form-control" name="bath_room" required placeholder="3">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Drawing Room</label>
                                    <input type="text" class="form-control" name="drawing_room" required placeholder="1">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Dining Room</label>
                                    <input type="number" class="form-control" name="dining_room" required placeholder="1">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Garage</label>
                                    <input type="number" class="form-control" name="garage" required placeholder="1">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">properties Description</label>
                                    <textarea class="form-control" name="description" required placeholder="Enter Property Description"></textarea>
                                </div>
                               
                                <div class="col-md-6">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" accept="image/jpeg,image/jpg">
                                    <small class="form-text text-muted">Supported files: jpeg, jpg. Image will be resized into 992x740px.</small>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Price</label>
                                    <input type="number" class="form-control" name="price" required placeholder="10000">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <h5>Property Owner Information</h5>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="owner_name" required placeholder="Enter Full Name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="owner_phone" required placeholder="Enter Phone">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="owner_email" required placeholder="Enter Email Address">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Facebook URL</label>
                                    <input type="url" class="form-control" name="owner_facebook" placeholder="Enter Facebook URL">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Twitter URL</label>
                                    <input type="url" class="form-control" name="owner_twitter" placeholder="Enter Twitter URL">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">LinkedIn URL</label>
                                    <input type="url" class="form-control" name="owner_linkedin" placeholder="Enter LinkedIn URL">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Instagram URL</label>
                                    <input type="url" class="form-control" name="owner_instagram" placeholder="Enter Instagram URL">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!-- jQuery (for simplicity, you can replace with Vanilla JS if preferred) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Search functionality
            $('#searchBox').on('keyup', function() {
                var value = $(this).val().toLowerCase();
                $('#propertyTable tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

@endsection
