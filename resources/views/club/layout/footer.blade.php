<section id="contact" class="footer-section">
    <div class="container-fluid club-bg-color py-5">
        <div class="row text-center text-white">
            <!-- Contact Header -->
            <div class="col-12 mb-4">
                <h1 class="text-white p-2 rounded">Contact Us</h1>
            </div>

            <!-- Club Logo and Social Media -->
            <div class="col-12 col-md-3 text-center mb-4">
                <img src="{{ asset('frontend/image/clubimage.png') }}" class="img-fluid mb-3" alt="Club Logo">
                <div class="social-icons">
                    <a href="https://www.facebook.com/islamfull.5" class="social-link text-primary" target="_blank">
                        <i class="fa-brands text-white fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UClBIz9HlgUBfzYvnj-xX2-w" class="social-link text-danger" target="_blank">
                        <i class="fa-brands fa-youtube fa-2x"></i>
                    </a>
                    <a href="#" class="social-link text-info">
                        <i class="fa-brands fa-twitter fa-2x"></i>
                    </a>
                    <a href="#" class="social-link text-white">
                        <i class="fa-brands fa-whatsapp fa-2x"></i>
                    </a>
                </div>
            </div>

            <!-- Social Media Links -->
            <div class="col-12 col-md-3 text-center mb-4">
                <h3 class=" p-1 rounded">Social Media</h3>
                <ul class="text-white">
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">About</a></li>
                    <li><a href="#" class="footer-link">Service</a></li>
                </ul>
            </div>

            <!-- Support Links -->
            <div class="col-12 col-md-2 text-center mb-4">
                <h3 class=" p-1 rounded">Support</h3>
                <ul class="list-unstyled ">
                    <li><a href="#" class="footer-link">FAQ</a></li>
                    <li><a href="#" class="footer-link">How it Works</a></li>
                    <li><a href="#" class="footer-link">Features</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="col-12 col-md-4 text-center mb-4">
                <h3 class=" p-1 rounded " >Contact</h3>
                <p class="mb-1"><i class="fa fa-phone"></i><a href="++0184714003955"></a> ++0184714003955</p>
                <p class="mb-1"><i class="fa fa-envelope" style="text-align: justify"></i> itmoffice@daffodilvarsity.edu.bd</p>
                <a class="btn btn-block text-white" href="https://www.google.com/maps/place/Information+Technology+%26+Management+(ITM)+Club/@23.876693,90.3198752,47m/data=!3m1!1e3!4m6!3m5!1s0x3755c3004144093f:0x184a0902a97bafef!8m2!3d23.8766614!4d90.3198912!16s%2Fg%2F11vr5w94jr?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D"> <p><i class="fa fa-map-marker"></i> AB-4 Building (6th Floor), Khagan,Ashulia Dhaka</p></a>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="container footer-bottom ">
        <div class="row bottom-copy">
            <div class="col-md-6 text-center text-md-start">
                <div class="copyright">
                    © Copyright <strong><span>Roman Oze</span></strong>. All Rights Reserved
                </div>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="credits">
                    Maintained By
                    <a href="https://github.com/Roman-oze/resume" target="_blank" >Roman Oze</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.bottom-copy{
}
.footer .footer-bottom {
    border-top: 1px solid #444; /* Thin border for separation */
    padding-top: 15px;
    margin-top: 15px;
}

.footer .copyright {
    font-weight: 600;
    color: #f8f9fa;
}

.footer .credits a {
    color: #0dcaf0; /* Bootstrap's primary color */
    text-decoration: none;
    font-weight: bold;
}

.footer .credits a:hover {
    color: #0a58ca; /* Darker blue on hover */
    text-decoration: underline;
}
.footer-section {
    font-family: 'Arial', sans-serif;
    color: #333;
}

.club-bg-color{
background-color: #37517E;
/* background-image: linear-gradient(to right, rgba(205, 213, 205, 0.621) , rgba(8, 36, 121)); */
}
.footer-section h1,
.footer-section h3 {
    font-weight: bold;
}

.footer-section .social-link {
    text-decoration: none;
    font-size: 18px;
    margin: 0 5px;
    display: inline-block;
    transition: color 0.3s;
}

.footer-section .social-link:hover {
    color: #007bff;
}

.footer-section .footer-link {
    text-decoration: none;
    color: #e0d8d8;
    font-size: 16px;
    transition: color 0.3s;
    margin: 5px;
}

.footer-section .footer-link:hover {
    color: #ffffff;
}

.footer-section ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.footer-section p {
    margin: 0;
    font-size: 16px;
}

.footer-section img {
    max-width: 80px;
    height: auto;
    border-radius: 50%;
}

.footer-section .bg-light {
    border-radius: 5px;
}

.bg-primary {
    background-color: #007bff !important;
}

/* Bootstrap 5 Responsive Utility Classes */
@media (max-width: 768px) {
    .footer-section h1 {
        font-size: 24px;
    }
    .footer-section h3 {
        font-size: 18px;
    }
    .footer-section .social-link,
    .footer-section .footer-link {
        font-size: 14px;
    }
    .footer-section p {
        font-size: 14px;
    }
}

@media (max-width: 576px) {
    .footer-section .col-md-3 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .footer-section img {
        max-width: 60px;
    }
}
</style>
