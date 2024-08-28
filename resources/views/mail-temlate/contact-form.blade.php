<!doctype html>
<html lang="en">
    <head>
        <title>Send email with attachment</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>


    <body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif
            <div class="col-md-6">
                <form action="{{route('contact.mail')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Send Email with Attachment</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                @error('eamil')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                @error('subject')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="message">Message <span class="text-danger">*</span></label>
                                <textarea  class="form-control" id="message" name="message" placeholder="Message"> Message  </textarea>
                                @error('message')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file">Attachment <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="attachment" name="attachment" placeholder="Message">
                                @error('attachment')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>


                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Send Email</button>

                        </div>
                     </div>
                 </form>
            </div>
        </div>


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>



{{-- @extends('layout.dashboard')

@section('content')

<main>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="" enctype="multipart/form-data">
                <div class="card" >
                    <div class="card-header">
                        <h5 class="card-title">Send Email with Attachment</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="message">Message <span class="text-danger">*</span></label>
                                <textarea  class="form-control" id="message" name="message" placeholder="Message">
                            </div>
                            <div class="form-group">
                                <label for="file">Attachment <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="attachment" name="attachment" placeholder="Message">
                            </div>


                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Send Email</button>

                        </div>
                     </div>
                 </form>
            </div>
        </div>

    </main>

    @endsection --}}
