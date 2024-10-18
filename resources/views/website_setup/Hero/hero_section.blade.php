@extends('layout.dashboard')


@section('main')
<main>
    <div class="card mb-4" style="max-width: 100%; background-color: #f8f9fa; border: none;">
        <div class="row g-0 align-items-center">
          <!-- Image Column -->
          <!-- Content Column -->
          <div class="col-md-6">
              <div class="card-body">
                  <h2 class="card-title">Welcome to ITM Department</h2>
                  <p class="card-text">
                      Explore the intersection of information, technology, and management. Our programs offer cutting-edge curriculum
                      designed to prepare students for success in the ever-evolving tech industry.
                    </p>
                    <a href="#more-info" class="btn btn-primary">club link</a>
                </div>
            </div>
            <div class="col-md-6">
              <img src="http://127.0.0.1:8000/frontend/image/hero-img.png" class="img-fluid rounded-center" alt="Hero Image">
            </div>
        </div>
      </div>

</main>
@endsection
