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
                              
                            </div>
                            <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-dark" id="propertyTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>City</th>
                                                <th>Location</th>
                                                <th>Property Purpose</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pendingPropertyValues as $key => $data)
                                                <tr class="bg-primary">
                                                    <td>{{ $pendingPropertyValues->firstItem() + $key }}</td>
                                                    <td>{{ $data->title }}</td>
                                                    <td>{{ $data->city->name }}</td>
                                                    <td>{{ $data->location->name }}</td>
                                                    <td>{{ $data->property_purpose }}</td>
                                                    <td>
                                                        @if ($data->image)
                                                            <img src="{{ asset($data->image) }}" alt="image"
                                                                style="width: 90px; height: 50px;">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td>{{ $data->status == 0 ? 'Pending' : ($data->status == 1 ? 'Approved' : 'Rejected') }}
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('properties.updateStatus', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="status" value="1">
                                                            <button type="submit" class="btn btn-success">Approve</button>
                                                        </form>
                                                        <form action="{{ route('properties.updateStatus', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="status" value="2">
                                                            <button type="submit" class="btn btn-danger">Reject</button>
                                                        </form>
                                                    </td>



                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3">No property types found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {!! $pendingPropertyValues->withQueryString()->links('pagination::bootstrap-5') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



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
