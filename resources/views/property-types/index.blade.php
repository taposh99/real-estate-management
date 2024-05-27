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
                            <h5>Add Property Type</h5>
                            <!-- Search box -->
                            <input type="text" id="searchBox" class="form-control w-25" placeholder="Search...">
                            <!-- Button to open modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
                                Add Property Type
                            </button>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-dark" id="categoryTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-primary">
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>




                                    </tbody>
                                </table>

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
                    <h5 class="modal-title" id="categoryModalLabel">Add Property Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form id="categoryForm" action="{{ route('property.types.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="form-label">Property Type</label>
                            <input type="text" class="form-control" name="name" id="categoryName" required>
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
                $('#categoryTable tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            // Modal form submission

        });
    </script>



</body>

@endsection