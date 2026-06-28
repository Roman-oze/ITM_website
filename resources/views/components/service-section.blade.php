<section id="services" class="team-section">

    <div class="container">

        <div class="section-title text-center mb-5">

            <span class="section-badge">
                <i class="fa-solid fa-briefcase"></i>
                What We Offer
            </span>

            <h2>
                Our Services
            </h2>

            <p class="text-white">
                We provide modern software solutions designed to help businesses
                grow, automate workflows, and improve efficiency.
            </p>

        </div>

        <div class="row g-4">

            @foreach ($services as $service)

                <div class="col-xl-3 col-lg-4 col-md-6">

                    <div class="service-card">

                        <div class="service-image">

                            <img src="{{ asset($service->image) }}"
                                alt="{{ $service->link_name }}">

                        </div>

                        <div class="service-content">

                            <span class="service-badge">
                                Service
                            </span>

                            <h4 class="service-title">

                                {{ $service->link_name }}

                            </h4>

                            <p class="service-text">

                                {{ \Illuminate\Support\Str::limit($service->description,110) }}

                            </p>

                            <a href="{{ $service->link }}"
                                target="_blank"
                                class="service-btn">

                                Learn More

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


<style>
    /*==========================
        SERVICES
===========================*/

.services-section{
    background:transparent;
}

/* Card */

.service-card{

    height:100%;

    display:flex;

    flex-direction:column;

    overflow:hidden;

    background:transparent;

    border:2px solid #47B2E4;

    border-radius:20px;

    transition:all .35s ease;

}

.service-card:hover{

    transform:translateY(-8px);

    box-shadow:0 18px 40px rgba(71,178,228,.18);

}

/* Image */

.service-image{

    overflow:hidden;

    position:relative;

}

.service-image img{

    width:100%;

    height:230px;

    object-fit:cover;

    transition:.5s;

}

.service-card:hover .service-image img{

    transform:scale(1.08);

}

/* Content */

.service-content{

    padding:25px;

    display:flex;

    flex-direction:column;

    flex:1;

}

.service-badge{

    width:fit-content;

    margin-bottom:15px;

    border:2px solid #47B2E4;

    color:#47B2E4;

    padding:6px 15px;

    border-radius:30px;

    font-size:12px;

    font-weight:600;

    letter-spacing:.4px;

}

.service-title{

    font-size:23px;

    font-weight:700;

    color:#cfd3db;

    margin-bottom:15px;

}

.service-text{

    color:#666;

    line-height:1.8;

    flex:1;

    margin-bottom:25px;

}

/* Button */

.service-btn{

    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:10px;

    width:fit-content;

    text-decoration:none;

    color:#fff;

    background:#0B1220;

    border:2px solid #47B2E4;

    border-radius:12px;

    padding:12px 22px;

    font-weight:600;

    transition:.35s;

}

.service-btn i{

    transition:.35s;

}

.service-btn:hover{

    background:#47B2E4;

    color:#fff;

}

.service-btn:hover i{

    transform:translateX(5px);

}

/* Responsive */

@media(max-width:992px){

    .service-image img{

        height:210px;

    }

}

@media(max-width:768px){

    .service-content{

        padding:20px;

    }

    .service-title{

        font-size:20px;

    }

}
</style>
