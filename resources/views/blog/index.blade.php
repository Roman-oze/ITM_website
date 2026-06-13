@extends('layout.app')

@section('content')
    <section class="video-blog-section py-5 mt-5">
        <div class="container">

            <div class="text-center mb-5">
                <span class="video-badge">
                    <i class="fa-solid fa-video"></i>
                    Video Blogs
                </span>

                <h2 class="video-title">
                    Learn Through <span>Expert Videos</span>
                </h2>

                <p class="video-subtitle">
                    Watch tutorials, insights, and technology discussions from our experts.
                </p>
            </div>

            <div class="row g-4">

                <!-- Video 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="video-card">

                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/1Rs2ND1ryYc/maxresdefault.jpg" alt="Video">

                            <a href="https://www.youtube.com/watch?v=1Rs2ND1ryYc" target="_blank" class="play-btn">
                                <i class="fa-solid fa-play"></i>
                            </a>

                            <span class="video-tag">Laravel Tutorial</span>
                        </div>

                        <div class="video-content">
                            <h4>Laravel CRUD Full Project</h4>
                            <p>Learn how to build a complete CRUD system in Laravel step by </p>
                        </div>

                    </div>
                </div>

                <!-- Video 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="video-card">

                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/3PHXvlpOkf4/maxresdefault.jpg" alt="Video">

                            <a href="https://www.youtube.com/watch?v=3PHXvlpOkf4" target="_blank" class="play-btn">
                                <i class="fa-solid fa-play"></i>
                            </a>

                            <span class="video-tag">Web Design</span>
                        </div>

                        <div class="video-content">
                            <h4>Modern UI Design Tips</h4>
                            <p>Improve your frontend skills with modern UI/UX design techniques.</p>
                        </div>

                    </div>
                </div>

                <!-- Video 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="video-card">

                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/pQN-pnXPaVg/maxresdefault.jpg" alt="Video">

                            <a href="https://www.youtube.com/watch?v=pQN-pnXPaVg" target="_blank" class="play-btn">
                                <i class="fa-solid fa-play"></i>
                            </a>

                            <span class="video-tag">Programming</span>
                        </div>

                        <div class="video-content">
                            <h4>HTML & CSS Complete Guide</h4>
                            <p>Start your web development journey with HTML and CSS basics.</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

<style>
    .video-blog-section {
        background: #f8fbff;
    }

    .video-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff;
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
        color: #6c757d;
    }

    .video-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
        transition: .4s;
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
    }

    .video-content p {
        color: #6c757d;
        margin-top: 10px;
    }
</style>

