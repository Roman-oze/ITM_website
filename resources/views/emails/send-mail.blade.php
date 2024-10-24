@extends('layout.dashboard')

@section('main')
<main>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Send Mail to Multiple Users</h2>

        {{-- <a href="{{route('sendMail')}}" class="btn btn-outline-dark">Tap send mail </a> --}}



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
                {{-- <div class="card">
                    <div class="card-header bg-dark text-white text-center h4">Send Email with Attachment</div>
                    <div class="card-body">
                        <form action="{{ route('send.mail') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Email Addresses -->
                            <div class="form-group mb-3">
                                <label for="emails">Email Addresses (Comma-separated)</label>
                                <input type="text" name="emails" class="form-control" id="emails" placeholder="Enter email addresses, separated by commas" required>
                            </div>

                            <!-- Subject -->
                            <div class="form-group mb-3">
                                <label for="subject">Email Subject</label>
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter subject" required>
                            </div>

                            <!-- Message -->
                            <div class="form-group mb-3">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                            </div>

                            <!-- File Upload -->
                            <div class="form-group mb-3">
                                <label for="attachment">File Attachment (PDF/DOC)</label>
                                <input type="file" name="attachment" class="form-control-file" id="attachment" accept=".pdf,.doc,.docx">
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Send Email</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="container mt-5">
        <h2 class="mb-4">Send Mail</h2>

        <form action="{{ route('send.mail.data') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>

            <div class="form-group">
                <label for="phone">Email:</label>
                <input type="text" class="form-control" id="phone" name="email" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> --}}

    <form action="{{ route('send.mail.data') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- <label for="batch">Select Batch:</label>
        <select name="batch" id="batch" required>
            <option value="">Choose Batch</option>
            @foreach ($batches as $batch)
                <option class="text-dark" value="{{ $batch->batch }}">{{ $batch->email }}</option>
            @endforeach
        </select> --}}



        {{-- <div class="form-group">
            <select name="batch_id" id="batch" class="form-select">
                <option value="">Choose Batch</option>
                @foreach($students as $student)
                    <option value="">{{ $student->email }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="emails">Emails (comma separated):</label>
            <input type="text" class="form-control" name="emails" placeholder="Enter email addresses" value="{{ old('emails')}}">
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message" required={{ old('message') }}></textarea>
        </div>

        <div class="form-group">
            <label for="attachment">Attachment (optional):</label>
            <input type="file" class="form-control-file" name="attachment">
        </div>

        <button type="submit" class="btn btn-primary">Send Email</button>
    </form> --}}

    <!DOCTYPE html>
<html>
<head>
    <title>Batch Dependent Email Dropdown</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Select Batch to Show Student Emails</h1>

    <label for="batch">Select Batch:</label>
    <select name="batch" id="batch">
        <option value="">Choose Batch</option>
        @foreach($students as $batch)
            <option value="{{ $batch->batch_id }}">{{ $batch->batch_name }}</option>
        @endforeach
    </select>

    <h2>Emails</h2>
    <ul id="emailList"></ul>

    <script>
        $(document).ready(function () {
            $('#batch').on('change', function () {
                var batchId = $(this).val();
                $('#emailList').empty(); // Clear the previous email list

                if (batchId) {
                    $.ajax({
                        url: '/get-students',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            batch_id: batchId
                        },
                        success: function (data) {
                            if (data.length > 0) {
                                $.each(data, function (key, email) {
                                    $('#emailList').append('<li>' + email + '</li>');
                                });
                            } else {
                                $('#emailList').append('<li>No students found for this batch.</li>');
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>


</main>
@endsection

