<section id="services" class="team-section">

    <div class="container">

        <div class="section-title text-center mb-5">

            <span class="section-badge">
                <i class="fa-solid fa-layer-group"></i>
                Our Expertise
            </span>

            <h2 >
                Specialist
            </h2>

            <p class="text-white">
                Build your future with modern technology and professional software solutions.
            </p>

        </div>

        <div class="row g-4 align-items-stretch">

            <!-- Left -->

            <div class="col-lg-7">

                <div class="specialist-card">

                    <div class="feature-item">

                        <div class="icon-box">
                            <i class="fas fa-desktop"></i>
                        </div>

                        <div class="feature-content">
                            <h5>Web Development</h5>
                            <p>
                                Responsive, scalable and secure web applications using modern technologies.
                            </p>
                        </div>

                    </div>

                    <div class="feature-item">

                        <div class="icon-box">
                            <i class="fas fa-mobile-screen-button"></i>
                        </div>

                        <div class="feature-content">
                            <h5>Mobile Applications</h5>
                            <p>
                                High-performance Android & iOS applications with excellent user experience.
                            </p>
                        </div>

                    </div>

                    <div class="feature-item">

                        <div class="icon-box">
                            <i class="fas fa-chart-line"></i>
                        </div>

                        <div class="feature-content">
                            <h5>Business Solutions</h5>
                            <p>
                                ERP, CRM and customized management software for every organization.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Right -->

            <div class="col-lg-5">

                <div class="about-panel">

                    <span class="about-tag">
                        About Our Team
                    </span>

                    <h3>
                        Digital Solutions That Drive Success
                    </h3>

                    <p>
                        We develop reliable, scalable and user-friendly software solutions for businesses,
                        educational institutions and organizations using the latest technologies and
                        industry best practices.
                    </p>

                    <ul class="about-list">

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Modern UI/UX Design
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Secure & Scalable Architecture
                        </li>

                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Professional Support
                        </li>

                    </ul>

                    <a href="{{ route('about') }}" class="about-btn">
                        Learn More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<style>
/*=========================
    SPECIALIST SECTION
=========================*/

.specialist-section{
    background:transparent;
}

.section-badge{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:8px 18px;
    border:2px solid #47B2E4;
    border-radius:40px;
    color:#47B2E4;
    font-size:14px;
    font-weight:600;
    margin-bottom:15px;
}

.section-badge i{
    font-size:15px;
}

.specialist-card{

    border:2px solid #47B2E4;
    border-radius:20px;
    padding:15px;
    height:100%;
}

.feature-item{

    display:flex;
    align-items:flex-start;
    gap:20px;

    padding:25px;

    border-radius:16px;

    transition:.35s;

}

.feature-item:not(:last-child){

    margin-bottom:18px;

    border-bottom:1px solid rgba(71,178,228,.20);

}

.feature-item:hover{

    background:rgba(71,178,228,.06);

}

.icon-box{

    width:70px;
    min-width:70px;
    height:70px;

    border:2px solid #47B2E4;

    border-radius:18px;

    display:flex;
    justify-content:center;
    align-items:center;

    transition:.35s;

}

.icon-box i{

    color:#47B2E4;

    font-size:28px;

}

.feature-item:hover .icon-box{

    background:#47B2E4;

}

.feature-item:hover .icon-box i{

    color:#fff;

}

.feature-content h5{

    font-size:22px;

    font-weight:700;

    margin-bottom:10px;

    color:#e3e6eb;

}

.feature-content p{

    margin:0;

    color:#ece6e6;

    line-height:1.8;

}



/*=========================
      ABOUT PANEL
=========================*/

.about-panel{

    border:2px solid #47B2E4;

    border-radius:20px;

    padding:40px;

    height:100%;

    display:flex;

    flex-direction:column;

    justify-content:center;

}

.about-tag{

    display:inline-block;

    color:#47B2E4;

    font-weight:600;

    margin-bottom:15px;

}

.about-panel h3{

    font-size:34px;

    font-weight:700;

    margin-bottom:20px;

    color:#d0d4dc;

}

.about-panel p{

    color:#eae5e5;

    line-height:1.9;

    margin-bottom:25px;

}

.about-list{

    list-style:none;

    padding:0;

    margin:0 0 30px;

}

.about-list li{

    display:flex;

    align-items:center;

    gap:12px;

    margin-bottom:16px;

    color:#e8e2e2;

    font-weight:500;

}

.about-list i{

    color:#47B2E4;

    font-size:18px;

}

.about-btn{

    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:10px;

    width:fit-content;

    padding:14px 28px;

    border-radius:12px;

    background:#0B1220;

    color:#fff;

    text-decoration:none;

    font-weight:600;

    border:2px solid #47B2E4;

    transition:.35s;

}

.about-btn:hover{

    background:#47B2E4;

    color:#fff;

}

.about-btn i{

    transition:.35s;

}

.about-btn:hover i{

    transform:translateX(5px);

}



/*=========================
      RESPONSIVE
=========================*/

@media(max-width:991px){

    .about-panel{

        margin-top:10px;

        padding:30px;

    }

    .about-panel h3{

        font-size:28px;

    }

}

@media(max-width:576px){

    .feature-item{

        flex-direction:column;

        text-align:center;

        align-items:center;

    }

    .about-panel{

        text-align:center;

    }

    .about-list li{

        justify-content:center;

    }

    .about-btn{

        width:100%;

    }

}
</style>
