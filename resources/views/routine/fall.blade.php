@extends('layout.app')

@section('content')

<section id="services" class="services section-bg text-center">
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <div class="section-title text-left">
            <h2 class="text-dark mt-5">Routine</h2>
        </div>

        <div class="row p-3 d-flex justify-content-center">
            @foreach($falls as $fall)
            {{-- <div class="col-md-8">
                <img src="{{ asset($spring->image) }}" alt="" class="img-fluid">
            </div> --}}

            <div class="col-md-5 p-5 text-center">
                    <div class="card text-center shadow-lg mb-4" style="border-radius: 15px; overflow: hidden;">
                        <div class="card-header bg-color text-white" style="font-size: 1.2rem; padding: 20px 10px;">
                            <i class="fas fa-calendar-alt"></i> {{ $fall->type }}
                        </div>
                        <div class="card-body" style="background-image: url('https://example.com/background.jpg'); background-size: cover; padding: 30px;">
                            <p class="card-text  mb-4 routine-title">{{ $fall->title }}</p>
                            <a href="javascript:void(0);" class="btn btn-light btn-block mb-2 view-btn" data-image="{{ asset($fall->image) }}" style="border-radius: 20px;">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('files.download', $fall->id) }}" class="btn btn-light btn-block" style="border-radius: 20px;">
                                <i class="fas fa-download"></i> Download
                            </a>
                        </div>
                        <div class="card-footer text-muted">
                            Last updated: <strong>{{ $fall->uploaded_at }}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Modal for image display -->
<div id="imageModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" alt="Image Preview" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<script>
    // JavaScript to handle the view button click
    document.querySelectorAll('.view-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var imageUrl = this.getAttribute('data-image');
            document.getElementById('modalImage').src = imageUrl;
            $('#imageModal').modal('show');
        });
    });
</script>

@endsection
