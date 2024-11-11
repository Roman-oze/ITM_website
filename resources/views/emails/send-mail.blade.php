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
        {{-- <h2 class="text-center mb-4">Send Mail to Multiple Users</h2> --}}

        <div class="row justify-content-center ">
            <div class="col-md-8 ">
                <div class="card shadow rounded animated-card p-5">

                <form action="{{ route('send.mail.data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <select name="batch_id" id="batchSelect" class="form-select">
                            <option value="">Choose Batch</option>
                            @foreach ($batches as $batch)
                            <option value="{{ $batch->batch_id }}">{{ $batch->batch_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="emails">Emails (comma separated):</label>
                        <input type="text" class="form-control" name="emails" id="emails" placeholder="Enter manual email addresses" value="{{ old('emails') }}">
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" name="message" rows="5" placeholder="Enter your message" required>{{ old('message') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="attachment">Attachment (optional):</label>
                        <input type="file" class="form-control-file" name="attachment">
                    </div>

                    <div class="text-center ">
                        <button type="submit"   class="btn btn-dark "><i class="fa-regular fa-paper-plane"></i> Send Email</button>

                    </div>
                </form>

                <script>
                    $(document).ready(function() {
                        $('#batchSelect').change(function() {
                            var batchId = $(this).val();
                            if(batchId) {
                                $.ajax({
                                    url: '/get-students/' + batchId,
                                    type: 'GET',
                                    success: function(data) {
                                        $('#emails').val(data);  // populate the emails input
                                    },
                                    error: function() {
                                        alert('Could not retrieve emails for the selected batch');
                                    }
                                });
                            } else {
                                $('#emails').val(''); // clear the emails input if no batch is selected
                            }
                        });
                    });
                </script>
            </div>
          </div>
        </div>
    </div>
</main>
<br>
<br>
@endsection
