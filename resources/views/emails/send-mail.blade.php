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
                <div class="card">
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
    </div>
</main>
@endsection
