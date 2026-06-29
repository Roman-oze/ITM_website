
    <section id="client" class="section-p1 client-section ">
        <div class="container">
            <div class="row justify-content-center text-center g-4">

                <div class="col-lg-3 col-md-6 col-6">
                    <a href="https://hall.daffodilvarsity.edu.bd/" target="_blank" class="client-link">
                        <div class="client-card">
                            <img src="https://edge.gov.bd/wp-content/themes/edgewebsite/images/logo.png" alt="Hall">
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <a href="https://daffodilvarsity.edu.bd/article/transport" target="_blank" class="client-link">
                        <div class="client-card">
                            <img src="{{ asset('frontend/client/govt.png') }}" alt="Transport">
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <a href="#" target="_blank" class="client-link">
                        <div class="client-card">
                            <img src="https://dphe.s3.amazonaws.com/freap/media/logo/freap_mpyWKzS.png" alt="Innovation">
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <a href="#" target="_blank" class="client-link">
                        <div class="client-card">
                            <img src="{{ asset('frontend/client/wecare-lged.png') }}" alt="Club">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <style>

#client{
    background-color: #ffffff;

}

        .client-card {
    border-radius: 10px;
    padding: 20px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;

    /* animation base */
    opacity: 0;
    transform: translateY(15px);
    animation: clientFadeUp 0.6s ease forwards;
}

/* stagger animation */
.client-card:nth-child(1) { animation-delay: 0.1s; }
.client-card:nth-child(2) { animation-delay: 0.2s; }
.client-card:nth-child(3) { animation-delay: 0.3s; }
.client-card:nth-child(4) { animation-delay: 0.4s; }

/* hover effect */
.client-card:hover {
    transform: translateY(-6px);
    border-color: #47B2E4;
    box-shadow: 0 8px 18px rgba(71, 178, 228, 0.15);
}

/* IMAGE */
.client-card img {
    max-width: 100%;
    max-height: 60px;
    object-fit: contain;

    transition: transform 0.3s ease;
}

/* image hover zoom */
.client-card:hover img {
    transform: scale(1.08);
}

/* animation keyframe */
@keyframes clientFadeUp {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
    </style>
