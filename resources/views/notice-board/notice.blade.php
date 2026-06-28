@extends('layout.app')

@section('content')

    <section class="team-section">

    <div class="container">

        <div class="section-title text-center mb-5">

            <span class="section-badge">
                <i class="fa-solid fa-bullhorn"></i>
                Notice Board
            </span>

            <h2 class="mt-3 text-white">
                Latest <span>Notices</span>
            </h2>

            <p class="section-subtitle">
                Stay updated with the latest announcements, academic notices and important information.
            </p>

        </div>

        <div class="row justify-content-center">

            @foreach($notices as $notice)

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="notice-card">

                        @if($notice->created_at->diffInDays(now()) <= 7)

                            <span class="notice-status new">
                                New
                            </span>

                        @else

                            <span class="notice-status old">
                                Previous
                            </span>

                        @endif

                        <div class="notice-icon">

                            <i class="fa-solid fa-bullhorn"></i>

                        </div>

                        <div class="notice-content">

                            <h4>
                                {{ $notice->title }}
                            </h4>

                            <div class="notice-date">

                                <i class="fa-regular fa-calendar"></i>

                                {{ $notice->created_at->format('d M Y • h:i A') }}

                            </div>

                            <p>

                                {{ \Illuminate\Support\Str::limit(strip_tags($notice->content),120) }}

                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


    <style>
     /*==========================
      NOTICE SECTION
===========================*/

.notice-card{

    position:relative;
    height:100%;
    padding:35px 30px;
    border:2px solid #47B2E4;
    border-radius:18px;
    background:transparent;
    transition:.35s;
    overflow:hidden;

}

.notice-card:hover{

    transform:translateY(-8px);

    box-shadow:0 18px 40px rgba(71,178,228,.18);

}

.notice-status{

    position:absolute;
    top:18px;
    right:18px;

    padding:6px 16px;

    border-radius:30px;

    color:#fff;

    font-size:12px;

    font-weight:600;

}

.notice-status.new{

    background:#20c997;

}

.notice-status.old{

    background:#6c757d;

}

.notice-icon{

    width:75px;

    height:75px;

    margin:auto;

    border:2px solid #47B2E4;

    border-radius:50%;

    display:flex;

    justify-content:center;

    align-items:center;

    margin-bottom:25px;

}

.notice-icon i{

    color:#47B2E4;

    font-size:30px;

}

.notice-content{

    text-align:center;

}

.notice-content h4{

    font-size:22px;

    font-weight:700;

    color:#cfd3dd;

    margin-bottom:18px;

}

.notice-date{

    color:#47B2E4;

    font-weight:600;

    margin-bottom:20px;

    font-size:14px;

}

.notice-date i{

    margin-right:6px;

}

.notice-content p{

    color:#e2dbdb;

    line-height:1.8;

    margin-bottom:25px;

}

.notice-btn{

    border:2px solid #47B2E4;

    background:#0B1220;

    color:#fff;

    padding:12px 25px;

    border-radius:10px;

    font-weight:600;

    transition:.35s;

}

.notice-btn:hover{

    background:#47B2E4;

    color:#fff;

}



/*==========================
        MODAL
===========================*/

.notice-modal .modal-content{

    background:#0B1220;

    border:2px solid #47B2E4;

    border-radius:20px;

    overflow:hidden;

}

.notice-modal .modal-header{

    border-bottom:1px solid rgba(71,178,228,.25);

    padding:22px 28px;

}

.notice-modal .modal-title{

    color:#fff;

    font-size:24px;

    font-weight:700;

}

.notice-modal .btn-close{

    filter:invert(1);

}

.notice-modal .modal-body{

    padding:35px;

}

.notice-modal-date{

    display:inline-block;

    border:2px solid #47B2E4;

    color:#47B2E4;

    padding:10px 20px;

    border-radius:30px;

    margin-bottom:30px;

    font-weight:600;

}

.notice-modal-content{

    color:#d9d9d9;

    line-height:2;

    font-size:16px;

}

.notice-modal .modal-footer{

    border-top:1px solid rgba(71,178,228,.25);

    padding:22px 28px;

}

.notice-close-btn{

    border:2px solid #47B2E4;

    background:transparent;

    color:#47B2E4;

    padding:10px 24px;

    border-radius:10px;

    font-weight:600;

    transition:.35s;

}

.notice-close-btn:hover{

    background:#47B2E4;

    color:#fff;

}



/*==========================
     SECTION TITLE
===========================*/

.section-badge{

    display:inline-block;

    border:2px solid #47B2E4;

    color:#47B2E4;

    padding:8px 20px;

    border-radius:30px;

    font-weight:600;

}

.section-title h2{

    font-size:42px;

    font-weight:700;

    color:#0B1220;

}

.section-title h2 span{

    color:#47B2E4;

}

.section-subtitle{

    max-width:700px;

    margin:auto;

    color:#666;

    margin-top:15px;

}
@endsection


