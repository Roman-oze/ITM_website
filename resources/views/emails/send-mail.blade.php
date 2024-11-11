@extends('layout.dashboard')

<!-- Sweet alert -->
@include('include.alerts')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Mail Management</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Send Mail</li>
        </ol>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg rounded-lg">
                        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Send Mail to Users</h5>
                            <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#infoModal">
                                <i class="fas fa-info-circle"></i> Info
                            </button>
                        </div>

                        <div class="card-body p-4">
                            <ul class="nav nav-tabs mb-3 justify-content-center" id="mailTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active advanced-tab" id="batch-tab" data-bs-toggle="tab" href="#batch" role="tab" aria-controls="batch" aria-selected="true">
                                        <i class="fas fa-users"></i> Batch Emails
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link advanced-tab" id="manual-tab" data-bs-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false">
                                        <i class="fas fa-envelope-open-text"></i> Manual Emails
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content" id="mailTabContent">
                                <!-- Batch Tab -->
                                <div class="tab-pane fade show active" id="batch" role="tabpanel" aria-labelledby="batch-tab">
                                    <form action="{{ route('send.mail.data') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="batchSelect" class="form-label">Select Batch</label>
                                                <select name="batch_id" id="batchSelect" class="form-select">
                                                    <option value="">Choose Batch</option>
                                                    @foreach ($batches as $batch)
                                                        <option value="{{ $batch->batch_id }}">{{ $batch->batch_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="attachment" class="form-label">Add Attachment</label>
                                                <input type="file" class="form-control P-2" name="attachment" id="attachment">
                                                <small class="text-muted">Supported formats: PDF, DOC, JPG, PNG</small>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message here" required>{{ old('message') }}</textarea>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg mt-3"><i class="fa-regular fa-paper-plane"></i> Send Email</button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Manual Emails Tab -->
                                <div class="tab-pane fade" id="manual" role="tabpanel" aria-labelledby="manual-tab">
                                    <form action="{{ route('send.mail.data') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="emails" class="form-label">Enter Emails (comma-separated)</label>
                                            <input type="text" class="form-control" name="emails" id="emails" placeholder="Enter additional email addresses" value="{{ old('emails') }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="attachment" class="form-label">Add Attachment</label>
                                            <input type="file" class="form-control P-2" name="attachment" id="attachment">
                                            <small class="text-muted">Supported formats: PDF, DOC, JPG, PNG</small>
                                        </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="messageManual" class="form-label">Message</label>
                                            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message here" required>{{ old('message') }}</textarea>
                                        </div>


                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg mt-3"><i class="fa-regular fa-paper-plane"></i> Send Email</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal for Information -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Mail Management Help</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Use the "Select Batch" tab to send emails to a predefined batch of users. Use the "Manual Emails" tab if you want to manually input email addresses.</p>
                <p>Attachments are optional. Supported file formats include PDF, DOC, JPG, and PNG.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // AJAX request to populate emails based on selected batch
        $('#batchSelect').change(function() {
            var batchId = $(this).val();
            if(batchId) {
                $.ajax({
                    url: '/get-students/' + batchId,
                    type: 'GET',
                    success: function(data) {
                        $('#emails').val(data); // Populate emails input with batch emails
                    },
                    error: function() {
                        alert('Could not retrieve emails for the selected batch');
                    }
                });
            } else {
                $('#emails').val(''); // Clear emails input if no batch is selected
            }
        });
    });
</script>
@endsection
