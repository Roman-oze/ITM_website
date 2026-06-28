<footer class="modern-footer">

    <div class="container">

        <div class="row gy-5">

            @foreach ($footers as $footer)
                <!-- Company -->

                <div class="col-lg-4">

                    <div class="footer-box">

                        <img src="{{ asset('frontend/logo/sgl-marketing-logo.png') }}" class="footer-logo mb-4">

                        <h3>Software Giant</h3>

                        <p class="footer-text">

                            {{ $footer->address }}

                        </p>

                        <div class="footer-contact">

                            <div>

                                <i class="fa-solid fa-phone"></i>

                                {{ $footer->phone }}

                            </div>

                            <div>

                                <i class="fa-solid fa-envelope"></i>

                                {{ $footer->email }}

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Quick Links -->

                <div class="col-lg-2 col-md-6">

                    <div class="footer-box">

                        <h4>Quick Links</h4>

                        <ul>

                            <li><a href="{{ route('home') }}">Home</a></li>

                            <li><a href="{{ route('about') }}">About Us</a></li>

                            <li><a href="{{ route('about') }}">Contact</a></li>

                            <li><a href="https://softwaregiantltd.com/">Services</a></li>

                        </ul>

                    </div>

                </div>



                <!-- Resources -->

                <div class="col-lg-3 col-md-6">

                    <div class="footer-box">

                        <h4>Resources</h4>

                        <ul>

                            <li>

                                <a href="{{ $footer->tuition_fees }}">
                                    Tuition Fees
                                </a>

                            </li>

                            <li>

                                <a href="{{ $footer->course_download }}">
                                    Download Course
                                </a>

                            </li>

                            <li>

                                <a href="#">
                                    Reports
                                </a>

                            </li>

                            <li>

                                <a href="#">
                                    Features
                                </a>

                            </li>

                        </ul>

                    </div>

                </div>



                <!-- Social -->

                <div class="col-lg-3">

                    <div class="footer-box">

                        <h4>Follow Us</h4>

                        <p class="footer-text">

                            Connect with us through our social media platforms.

                        </p>

                        <div class="footer-social">

                            <a href="{{ $footer->facebook }}" target="_blank">

                                <i class="fab fa-facebook-f"></i>

                            </a>

                            <a href="{{ $footer->linkedin }}" target="_blank">

                                <i class="fab fa-linkedin-in"></i>

                            </a>

                            <a href="{{ $footer->instragram }}" target="_blank">

                                <i class="fab fa-instagram"></i>

                            </a>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </div>



    <div class="footer-bottom">

        <div class="row align-items-center">

            <div class="col-md-6">

                © {{ date('Y') }}

                <strong>Software Giant</strong>

                All Rights Reserved.

            </div>

            <div class="col-md-6 text-md-end">

                Developed by

                <a href="https://github.com/Roman-oze/resume">

                    Roman Oze

                </a>

            </div>

        </div>
    </div>

</footer>

<style>
    /*=========================
        FOOTER
=========================*/

    .modern-footer {

        background: #0B1220;

        border-top: 2px solid #47B2E4;

    }

    .modern-footer .container {

        padding-top: 70px;

        padding-bottom: 60px;

    }

    .footer-box {

        height: 100%;

    }

    .footer-logo {

        width: 250px;

    }

    .footer-box h3 {

        color: #fff;

        font-size: 30px;

        margin-bottom: 15px;

        font-weight: 700;

    }

    .footer-box h4 {

        color: #47B2E4;

        margin-bottom: 25px;

        font-size: 20px;

        font-weight: 700;

    }

    .footer-text {

        color: #c4cad4;

        line-height: 1.8;

    }

    .footer-contact {

        margin-top: 20px;

    }

    .footer-contact div {

        color: #fff;

        margin-bottom: 15px;

    }

    .footer-contact i {

        color: #47B2E4;

        width: 25px;

    }

    .footer-box ul {

        list-style: none;

        padding: 0;

        margin: 0;

    }

    .footer-box ul li {

        margin-bottom: 16px;

    }

    .footer-box ul li a {

        color: #c4cad4;

        text-decoration: none;

        transition: .35s;

        position: relative;

    }

    .footer-box ul li a::before {

        content: "";

        width: 0;

        height: 2px;

        background: #47B2E4;

        position: absolute;

        bottom: -4px;

        left: 0;

        transition: .35s;

    }

    .footer-box ul li a:hover {

        color: #47B2E4;

    }

    .footer-box ul li a:hover::before {

        width: 100%;

    }

    /* Social */

    .footer-social {

        display: flex;

        gap: 15px;

        margin-top: 25px;

    }

    .footer-social a {

        width: 48px;

        height: 48px;

        border: 2px solid #47B2E4;

        border-radius: 50%;

        display: flex;

        justify-content: center;

        align-items: center;

        color: #47B2E4;

        text-decoration: none;

        transition: .35s;

    }

    .footer-social a:hover {

        background: #47B2E4;

        color: #fff;

        transform: translateY(-5px);

    }

    /* Bottom */

    .footer-bottom {

        border-top: 1px solid rgba(71, 178, 228, .25);

        padding: 20px ;

        color: #bfc7d5;

        font-size: 15px;

    }

    .footer-bottom a {

        color: #47B2E4;

        text-decoration: none;

        font-weight: 600;

    }

    .footer-bottom a:hover {

        color: #fff;

    }

    /* Responsive */

    @media(max-width:768px) {

        .footer-bottom {

            text-align: center;

        }

        .footer-bottom .text-md-end {

            text-align: center !important;

            margin-top: 10px;

        }

        .footer-box {

            text-align: center;

        }

        .footer-social {

            justify-content: center;

        }

    }
</style>
