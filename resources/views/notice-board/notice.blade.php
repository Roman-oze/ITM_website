@extends('layout.app')

@section('content')
<br>
<br>
<br>
<br>
    <div class="container mt-5 ">
        <h1 class="mt-5 text-center">Notice Board</h1>
        <div class="row mt-4  ">
            @foreach ($notices as $notice)
                <div class="col-md-4 mb-4 shadow border-0 animated-card">
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
<br>
<br>
<br>

    <style>
        /* Card styling */


        /* Badge positioned in the top-left corner */
        .top-left-badge {
            top: 15px;
            left: 15px;
            font-size: 0.85rem;
            padding: 0.4rem 0.6rem;
        }

        /* Highlight styles for new and old notices */
        .new-notice {
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


