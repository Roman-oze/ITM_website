@extends('layout.dashboard')
@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Student Create</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Student Create</li>
    </ol>

    <div class="container bg-image">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main class="">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="card shadow-lg border-0 rounded-lg bg-black">
                                    <div class="card-body">
                                        <form action="{{ route('student.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" name="name" required placeholder="Name">
                                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" name="roll" required placeholder="ID">
                                                <span class="text-danger">@error('roll'){{ $message }}@enderror</span>
                                            </div>

                                            <div class="form-group mb-3 d-flex justify-content-lg-evenly">
                                                <select name="batch_id" id="batch" class="form-select">
                                                    @foreach($batches as $batch)
                                                        <option value="{{ $batch->batch_id }}">{{ $batch->batch_name }}</option>
                                                    @endforeach
                                                </select>
                                                <button type="button" class="btn btn-light ms-2" data-bs-toggle="modal" data-bs-target="#addBatchModal">
                                                    <i class="fa fa-plus text"></i>
                                                </button>
                                            </div>

                                            <div class="form-group mb-3">
                                                <input type="email" class="form-control" name="email" required placeholder="Email">
                                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" name="blood" required placeholder="Blood">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" name="address" required placeholder="Address">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" name="mobile" required placeholder="Mobile">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="type" class="text-white">Status</label>
                                                <select name="type" class="form-select">
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                                <span class="text-danger">@error('type'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-dark">
                                                    <i class="fas fa-paper-plane"></i> Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

<!-- Add Batch Modal -->
<div class="modal fade" id="addBatchModal" tabindex="-1" aria-labelledby="addBatchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBatchModalLabel">Add Batch</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="batchForm" action="{{route('student.batch')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" id="batch_name" name="batch_name" class="form-control" placeholder="Batch Name" required>
                        <span id="batchError" class="text-danger"></span>
                    </div>
                    <button type="submit" class="btn btn-dark">Save Batch</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#batchForm').on('submit', function (e) {
            e.preventDefault(); // Prevent form submission

            let batchName = $('#batch_name').val();
            let csrfToken = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ route('batches.store') }}",
                type: "POST",
                data: {
                    _token: csrfToken,
                    batch_name: batchName
                },
                success: function (response) {
                    if (response.success) {
                        // Add new batch to the dropdown
                        $('#batch').append(
                            `<option value="${response.data.batch_id}">${response.data.batch_name}</option>`
                        );
                        $('#addBatchModal').modal('hide'); // Close modal
                        $('#batchForm')[0].reset(); // Clear form
                    }
                },
                error: function (xhr) {
                    let errors = xhr.responseJSON.errors;
                    $('#batchError').text(errors.batch_name ? errors.batch_name[0] : '');
                }
            });
        });
    });
</script>

@endsection
