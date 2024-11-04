@extends('layout.dashboard')

@section('main')
<main>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Send Mail to Multiple Users</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @elseif (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif

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
                        <input type="text" class="form-control" name="emails" id="emails" placeholder="Enter email addresses" value="{{ old('emails') }}">
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" name="message" rows="5" placeholder="Enter your message" required>{{ old('message') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="attachment">Attachment (optional):</label>
                        <input type="file" class="form-control-file" name="attachment">
                    </div>

                    <button type="submit" class="btn btn-primary">Send Email</button>
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
</main>
@endsection
