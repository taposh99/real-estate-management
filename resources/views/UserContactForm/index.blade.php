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
                                <h5>Client Message List</h5>
                                <!-- Search box -->
                                <input type="text" id="searchBox" class="form-control w-25" placeholder="Search...">
                                <!-- Button to open modal -->
                              
                            </div>
                            <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-dark" id="categoryTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($allContact as $key => $data)
                                                <tr>
                                                    <td>{{ $allContact->firstItem() + $key }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>{{ $data->subject }}</td>
                                                    <td>{{ $data->message }}</td>
                                                    <td>{{ $data->number }}</td>
                                                    <td class="d-flex">
                                                       
                                                        <form action="{{ route('client.delete') }}" method="POST"
                                                              onsubmit="return confirm('Are you sure?')"
                                                              style="display: inline-block; width: 40px; text-align: center;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="contact_delete_id" value="{{ $data->id }}">
                                                            <button class="btn btn-danger btn-sm" style="width: 40px;">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No contact found.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                            
                                    {!! $allContact->withQueryString()->links('pagination::bootstrap-5') !!}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- [ Background-Utilities ] end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </section>

     



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
