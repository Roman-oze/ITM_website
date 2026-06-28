@extends('layout.app')

@section('content')
    <section class="team-section">


        <div class="text-center mb-5">



            <h2 class="video-title  text-white">
                <i class="fa-solid fa-video  text-white"></i>
                Learn Through <span>Expert Videos</span>
            </h2>

            <p class="video-subtitle">
                Watch tutorials, insights, and technology discussions from our experts.
            </p>

        </div>
        <div class="container">
            <div class="row justify-content-center">

                @forelse($videos as $video)
                    <div class="col-lg-4 col-md-6">

                        <div class="video-card">

                            <div class="video-thumb">

                                <img src="{{ asset('storage/' . $video->thumbnail) }}" alt="{{ $video->title }}">

                                <button class="play-btn" data-bs-toggle="modal"
                                    data-bs-target="#videoModal{{ $video->id }}">

                                    <i class="fa-solid fa-play"></i>

                                </button>

                                <span class="video-tag">
                                    {{ $video->category }}
                                </span>

                            </div>

                            <div class="video-content">

                                <h4>
                                    {{ $video->title }}
                                </h4>

                                <p>
                                    {{ Str::limit($video->description, 100) }}
                                </p>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-12 text-center">

                        <h5 class="text-muted">
                            No Video Blogs Available.
                        </h5>

                    </div>
                @endforelse

            </div>
        </div>
    </section>


    @foreach ($videos as $video)
        <div class="modal fade" id="videoModal{{ $video->id }}" tabindex="-1">

            <div class="modal-dialog modal-xl modal-dialog-centered">

                <div class="modal-content border-0 shadow-lg">

                    <div class="modal-header">

                        <h5 class="modal-title">

                            {{ $video->title }}

                        </h5>

                        <button class="btn-close" data-bs-dismiss="modal"></button>

                    </div>

                    <div class="modal-body">

                        <video class="w-100 rounded" controls>

                            <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">

                            Your browser does not support the video tag.

                        </video>

                        <div class="mt-4">

                            <span class="badge bg-primary">

                                {{ $video->category }}

                            </span>

                            <p class="mt-3 mb-0">

                                {{ $video->description }}

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    @endforeach
    <script>
        document.querySelectorAll('.modal').forEach(modal => {

            modal.addEventListener('hidden.bs.modal', function() {

                const video = this.querySelector('video');

                if (video) {

                    video.pause();

                    video.currentTime = 0;

                }

            });

        });
    </script>
@endsection

<style>
    .video-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 50px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
        color: #47B2E4;
        font-weight: 600;
    }

    .video-title {
        font-size: 3rem;
        font-weight: 800;
        margin-top: 20px;
    }

    .video-title span {
        color: #47B2E4;
    }

    .video-subtitle {
        max-width: 650px;
        margin: auto;
        color: #e1e5e8;
    }

    .video-card {
        border-radius: 20px;
        overflow: hidden;
        transition: .4s;
        border: 1px solid #47B2E4
    }

    .video-card:hover {
        transform: translateY(-10px);
    }

    .video-thumb {
        position: relative;
        overflow: hidden;
    }

    .video-thumb img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: .5s;
    }

    .video-card:hover img {
        transform: scale(1.1);
    }

    /* Play Button */
    .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px;
        background: #47B2E4;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        text-decoration: none;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
        transition: .3s;
    }

    .play-btn:hover {
        background: #37517E;
        transform: translate(-50%, -50%) scale(1.1);
    }

    /* Tag */
    .video-tag {
        position: absolute;
        top: 15px;
        left: 15px;
        background: rgba(0, 0, 0, .6);
        color: #fff;
        padding: 6px 12px;
        font-size: 12px;
        border-radius: 20px;
    }

    .video-content {
        padding: 20px;
    }

    .video-content h4 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #47B2E4;

    }

    .video-content p {
        color: #d8dce0;
        margin-top: 10px;
    }
</style>
