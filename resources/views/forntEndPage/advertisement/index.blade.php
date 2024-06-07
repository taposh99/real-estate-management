@extends('layouts.app')
@section('content')


    <body class="">

        <section class="pcoded-main-container">
            <div class="pcoded-content">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Flash Messages -->
                        <!-- Flash Messages -->
                        @if (session()->has('message'))
                            <p class="alert alert-success text-center mt-4">{{ session()->get('message') }}</p>
                        @elseif(session()->has('error'))
                            <p class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</p>
                        @endif

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>Banner List</h5>
                                <!-- Search box -->
                                <input type="text" id="searchBox" class="form-control w-25" placeholder="Search...">
                                <!-- Button to open modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#categoryModal">
                                    Add Baneer
                                </button>
                            </div>
                            <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-dark" id="categoryTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($allAdvertisement as $key => $data)
                                            <tr>
                                             <td>{{ $allAdvertisement->firstItem() + $key }}</td>
                                                <td>{{ $data->title }}</td>
                                                <td>
                                                    @if ($data->image)
                                                        <img src="{{ asset('images/advertisement/' . $data->image) }}"
                                                            alt="image" style="width: 90px; height: 50px;">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td class="d-flex">
                                                    <a class="btn btn-primary me-1"
                                                        href="{{ route('advertisement.edit', encrypt($data->id)) }}"
                                                        style="font-size: 13px; width: 40px; display: inline-block; text-align: center;">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                    </a>
                                                    <form action="{{ route('advertisement.delete') }}" method="POST"
                                                        onsubmit="return confirm('Are you sure?')"
                                                        style="display: inline-block; width: 40px; text-align: center;">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" name="banner_delete_id"
                                                            value="{{ $data->id }}">
                                                        <button class="btn btn-danger btn-sm" style="width: 40px;">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                            @empty
                                                <tr>
                                                    <td colspan="3">No Location found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>

                                    </table>

                                    {!! $allAdvertisement->withQueryString()->links('pagination::bootstrap-5') !!}


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Background-Utilities ] end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">Add Location</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form id="categoryForm" action="{{ route('advertisement.store') }}" method="POST"
                            enctype="multipart/form-data">
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
                                <label class="form-label">Advertisement Title</label>
                                <input type="text" class="form-control" name="title" id="categoryName" required
                                    placeholder="Title">

                                <label class="form-label">Advertisement Banner</label>
                                <input type="file" class="form-control" name="image" accept="image/jpeg,image/jpg">
                                <small class="form-text text-muted">Supported files: jpeg, jpg. Image will be resized into
                                    992x740px.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
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
                    $('#categoryTable tbody tr').filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });

                // Modal form submission

            });
        </script>
    </body>

@endsection
