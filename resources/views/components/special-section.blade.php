<section id="services" class="services-classic py-5">
    <div class="container">

        <!-- Header -->
        <div class="section-title text-center mb-5">
            <h2>Specialist</h2>
            <p>
                Build your future with modern technology and professional software solutions.
            </p>
        </div>

        <div class="row g-4">

            <!-- LEFT FEATURE COLUMN -->
            <div class="col-lg-6">

                <div class="feature-item">
                    <div class="icon-box">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Web Development</h5>
                        <p>Responsive, scalable and modern web applications using latest technologies.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="icon-box">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Mobile Applications</h5>
                        <p>Android & iOS apps with smooth UX and high performance.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="icon-box">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Business Solutions</h5>
                        <p>Smart systems for productivity, management and decision making.</p>
                    </div>
                </div>

            </div>

            <!-- RIGHT ABOUT PANEL -->
            <div class="col-lg-6">
                <div class="about-panel">
                    <h3>About Us</h3>
                    <p>
                        We are a dedicated software development team focused on delivering efficient,
                        scalable, and user-friendly applications. We transform ideas into real digital solutions.
                    </p>

                    <a href="{{ route('about') }}" class="about-btn">
                        Get in Touch
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.services-classic {
    background: #f6f7fb;
}

/* SECTION TITLE */
.section-title h2 {
    font-size: 32px;
    font-weight: 700;
    color: #1b1f2a;
}

.section-title p {
    color: #6b7280;
    max-width: 600px;
    margin: 10px auto 0;
}

/* FEATURE ITEM */
.feature-item {
    display: flex;
    gap: 15px;
    padding: 18px 20px;
    background: #060b23;
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 10px;
    margin-bottom: 15px;
    transition: 0.3s ease;
}

/* hover card */
.feature-item:hover {
    transform: translateX(6px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* ICON BOX (DEFAULT STATE) */
.icon-box {
    width: 50px;
    height: 50px;
    background: #f1f5f9;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #47B2E4;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

/* HOVER STATE (YOUR REQUIREMENT) */
.feature-item:hover .icon-box {
    background: #47B2E4;
    color: #ffffff;
}

/* TEXT */
.feature-content h5 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #ffffff;
}

.feature-content p {
    margin: 5px 0 0;
    font-size: 14px;
    color: rgba(255,255,255,0.7);
}

/* ABOUT PANEL */
.about-panel {
    background: #060b23;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 40px;
    height: 100%;
}

.about-panel h3 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #f2f3f6;
}

.about-panel p {
    font-size: 15px;
    color: #eaecf0;
    line-height: 1.8;
    margin-bottom: 20px;
}

/* BUTTON */
.about-btn {
    display: inline-block;
    padding: 10px 22px;
    border: 1px solid #cfd5e1;
    color: #eaedf1;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.3s;
}

.about-btn:hover {
    background: #111827;
    color: #fff;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .about-panel {
        padding: 25px;
    }

    .feature-item {
        flex-direction: row;
    }
}
</style>
