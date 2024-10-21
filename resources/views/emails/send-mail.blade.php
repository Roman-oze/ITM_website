@extends('layout.dashboard')

@section('main')
<main>
<div class="container">
    <h2>Send Mail to Multiple Users</h2>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <form action="{{ route('send.mail') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="emails">Emails (comma-separated)</label>
            <input type="text" class="form-control" id="emails" name="emails" placeholder="Enter emails" required>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
        </div>

        <div class="form-group">
            <label for="attachment">Attachment (PDF/DOC)</label>
            <input type="file" class="form-control-file" id="attachment" name="attachment">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Send Mail</button>
    </form>
</div>
</main>
@endsection



{{-- @extends('layout.dashboard')

@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Send Email with Attachment</div>

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
                            <label for="attachment">File Attachment</label>
                            <input type="file" name="attachment" class="form-control" id="attachment" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send Email</button>
                        </div>
                    </form>

                    <!-- Success or Error Message -->
                    @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
