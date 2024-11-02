@extends('layout.app')

@section('content')

    <div class="container mt-5">
        <h1 class="mt-5 text-center">Notice Board</h1>
        <div class="row mt-4">
            @foreach ($notices as $notice)
                <div class="col-md-4 mb-4">
                    <!-- Card design with conditional styling for new and old notices -->
                    <div class="card p-2 position-relative {{ $notice->created_at->diffInDays(now()) <= 7 ? 'new-notice' : 'old-notice' }}">
                        <!-- Badge positioned in top-left corner -->
                        @if ($notice->created_at->diffInDays(now()) <= 7)
                            <span class="badge bg-success position-absolute top-right-badge ">New Notice</span>
                        @else
                            <span class="badge bg-secondary position-absolute top-right-badge ">Old Notice</span>
                        @endif

                        <div class="card-body text-center mt-1">
                            <h1 class="notice-title mb-3">{{ $notice->title }}</h1>
                            <p class="badge bg-dark ">{{ $notice->created_at->format('F j, Y, g:i a') }}</p>
                            <p class="notice-content mt-3">{{ $notice->content  }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    
    <style>
        /* Card styling */
        .card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border-radius: 8px;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }
        
        /* Badge positioned in the top-left corner */
        .top-left-badge {
            top: 15px;
            left: 15px;
            font-size: 0.85rem;
            padding: 0.4rem 0.6rem;
        }

        /* Highlight styles for new and old notices */
        .new-notice {
            background-color: #b4c9e02f;
        }
        .old-notice {
            border: 1px solid #ced4da;
            background-color: #f8f9fa;
        }

        /* Typography */
        .notice-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #343a40;
        }
        .notice-date {
            font-size: 0.9rem;
        }
        .notice-content {
            font-size: 1rem;
            color: #6c757d;
        }

        /* Button styling */
        .download-btn {
            font-size: 1rem;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
    </style>
@endsection




@extends('layout.app')

@section('content')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}


    <div class="container mt-5 text-center">
        {{-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Notice </li>
        </ol> --}}
        <br>
        <br>
        <br>
        <h1 class="mt-4 text-center">Notice</h1>
{{--
            <div class="card">
                <div class="card-header">
                    <h5>
                        <a href="{{route('notice.create')}}" class="btn btn-primary float-end">Add notice</a>
                    </h5>
                </div>

            </div> --}}


<div class="row justify-content-center">
    <div class="col-md-8">
        @foreach ($notices as $notice)
        <div class="card p-3 mt-3">
              <div class="card-body p-3 mt-3">
                <h2  class="text-danger text-center mt-2">{{ $notice->title }}</h2>
                        <p class=" badge text-dark text-right">{{ $notice->created_at->format('F j, Y, g:i a') }}</p>
                        <p class="mt-2 p-3">{{ $notice->content }}</p>
                        <div style="display: flex; justify-content: space-evenly; align-items: center;">
                            {{-- <a href="{{ route('notice.edit', $notice->id) }}" class="btn btn-info">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a> --}}

                            {{-- <form action="{{ route('notice.delete', $notice->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form> --}}

                            <button id="downloadBtn" class="btn btn-block">
                                <i class="fa-solid fa-circle-down fa-2x"></i>
                            </button>
                        </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

</div>
</div>


<script>
    document.getElementById('downloadBtn').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '{{ url('/pdf_generate') }}', true); // Correct usage with quotes
        xhr.responseType = 'blob'; // Important for PDF download
        xhr.onload = function() {
            if (this.status === 200) {
                var blob = new Blob([this.response], { type: 'application/pdf' });
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'itm.pdf';
                link.click();
            }
        };
        xhr.send();
    });
</script>

@endsection