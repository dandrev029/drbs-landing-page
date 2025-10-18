<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DRBS Internet - Reliable Internet Provider</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/drbs-logo-small.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    @vite(['resources/css/app.css', 'resources/css/crypto-theme.css', 'resources/js/app.js'])

    <!-- Critical Inline CSS for immediate visibility -->
    <style>
        /* Crypto Dark Theme - Immediate Styles */
        body, html {
            opacity: 1 !important;
            visibility: visible !important;
            background-color: #0c0c2b !important;
        }

        .hero-section,
        .hero-content,
        .hero-overlay,
        .container,
        .navbar,
        section,
        [data-aos] {
            opacity: 1 !important;
            visibility: visible !important;
            display: block !important;
        }

        .hero-section {
            min-height: 100vh;
            background: #0c0c2b !important;
            position: relative;
            display: flex !important;
            align-items: center;
        }

        .text-white {
            color: #ffffff !important;
        }

        .text-white-50 {
            color: #c0c2bb !important;
        }

        /* Override any hidden states */
        * {
            max-height: none !important;
        }
    </style>
</head>
<body>

    <!-- Modern Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/drbs-logo-small.png') }}" alt="DRBS Logo" style="height: 40px; width: 40px; object-fit: contain;" class="me-2" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                <i class="bi bi-wifi me-2 fs-4" style="display: none;"></i>
                <span class="fw-bold">DRBS Internet</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link px-3" href="#plans">Plans</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#about">About</a></li>

                    <li class="nav-item"><a class="nav-link px-3" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-outline-light btn-sm rounded-pill px-4" href="/register">Get Started</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-primary btn-sm rounded-pill px-4" href="/support">Support</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Particle Background Canvas -->
        <canvas id="particles-canvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></canvas>
        
        <div class="hero-overlay"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="hero-content">
                        <span class="badge bg-primary-gradient mb-3 px-4 py-2 rounded-pill fade-in-up" style="animation-delay: 0.1s;">
                            <i class="bi bi-lightning-charge-fill me-2"></i>KEEP YOUR CONNECTION SAFE
                        </span>
                        <h1 class="display-2 fw-bold text-white mb-4 fade-in-up" style="animation-delay: 0.2s;">
                            Best Internet<br>
                            <span class="text-gradient">Platform for Your Future.</span>
                        </h1>
                        <p class="lead text-white-50 mb-5 fs-4 fade-in-up" style="animation-delay: 0.3s;">
                            Experience blazing-fast connectivity tailored for modern living.<br>
                            Join hundreds of satisfied users in the digital revolution.
                        </p>
                        <div class="d-flex gap-3 justify-content-center flex-wrap fade-in-up" style="animation-delay: 0.4s;">
                            <a href="/register" class="btn btn-primary btn-lg px-5 py-3 rounded-pill animate-glow">
                                <i class="bi bi-rocket-takeoff me-2"></i>EXPLORE NOW
                            </a>
                            <a href="#plans" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">
                                <i class="bi bi-grid-3x3-gap me-2"></i>VIEW PLANS
                            </a>
                        </div>
                        <div class="mt-5 d-flex justify-content-center gap-5 flex-wrap fade-in-up" style="animation-delay: 0.5s;">
                            <div class="stat-item">
                                <h3 class="text-white fw-bold mb-0 counter" data-target="250">0</h3>
                                <p class="text-white-50 mb-0">Active Users</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="text-white fw-bold mb-0"><span class="counter" data-target="99">0</span>.9%</h3>
                                <p class="text-white-50 mb-0">Network Uptime</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="text-white fw-bold mb-0">24/7</h3>
                                <p class="text-white-50 mb-0">Live Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator" style="z-index: 2;">
            <a href="#plans" class="text-white">
                <i class="bi bi-chevron-down animate-bounce animate-pulse"></i>
            </a>
        </div>
    </section>

    <!-- Service Status Banner -->
    <section class="status-banner py-3 bg-warning-subtle">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap text-center">
                <i class="bi bi-info-circle-fill text-warning fs-5"></i>
                <span class="fw-medium"><strong>Scheduled Maintenance:</strong> October 20, 2025, 2:00 AM - 4:00 AM. We apologize for any inconvenience.</span>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-card text-center p-4">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-speedometer2 fs-1 text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Lightning Fast</h4>
                        <p class="text-muted">Experience speeds up to 50 Mbps with consistent performance throughout the day.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card text-center p-4">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-shield-check fs-1 text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Reliable Connection</h4>
                        <p class="text-muted">99.9% uptime guarantee. Stay connected when it matters most.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card text-center p-4">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-headset fs-1 text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">24/7 Support</h4>
                        <p class="text-muted">Our dedicated support team is always ready to assist you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Internet Plans & Pricing -->
    <section id="plans" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary-soft text-primary mb-3 px-4 py-2 rounded-pill">PRICING PLANS</span>
                <h2 class="display-4 fw-bold mb-3">Choose Your Perfect Plan</h2>
                <p class="lead text-muted">All plans include a 3-day free trial. No commitment required.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Plan 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="pricing-card h-100">
                        <div class="card-body p-4">
                            <div class="plan-badge mb-3">
                                <span class="badge bg-light text-dark">STARTER</span>
                            </div>
                            <h3 class="fw-bold mb-4">10 Mbps</h3>
                            <div class="price-wrapper mb-4">
                                <span class="h2 fw-bold">₱900</span>
                                <span class="text-muted">/month</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>10 Mbps Speed</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>3-Day Free Trial</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Unlimited Data</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>No Device Limits</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>24/7 Support</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>₱600 Installation</li>
                            </ul>
                            <a href="/register" class="btn btn-outline-primary w-100 py-3 rounded-pill">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Plan 2 - Popular -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card pricing-card-popular h-100">
                        <div class="popular-banner text-white text-center py-2" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); margin: -1px -1px 0 -1px; border-radius: 18px 18px 0 0;">
                            <i class="bi bi-star-fill me-2"></i>
                            <strong>MOST POPULAR CHOICE</strong>
                            <i class="bi bi-star-fill ms-2"></i>
                        </div>
                        <div class="card-body p-4">
                            <div class="plan-badge mb-3">
                                <span class="badge bg-primary text-white">STANDARD</span>
                            </div>
                            <h3 class="fw-bold mb-4">25 Mbps</h3>
                            <div class="price-wrapper mb-4">
                                <span class="h2 fw-bold">₱1,500</span>
                                <span class="text-muted">/month</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>25 Mbps Speed</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>3-Day Free Trial</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Unlimited Data</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>No Device Limits</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Priority Support</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>₱600 Installation</li>
                            </ul>
                            <a href="/register" class="btn btn-primary w-100 py-3 rounded-pill">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Plan 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card h-100">
                        <div class="card-body p-4">
                            <div class="plan-badge mb-3">
                                <span class="badge bg-dark">PREMIUM</span>
                            </div>
                            <h3 class="fw-bold mb-4">50 Mbps</h3>
                            <div class="price-wrapper mb-4">
                                <span class="h2 fw-bold">₱2,500</span>
                                <span class="text-muted">/month</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>50 Mbps Speed</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>3-Day Free Trial</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Unlimited Data</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>No Device Limits</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>VIP Support</li>
                                <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>₱600 Installation</li>
                            </ul>
                            <a href="/register" class="btn btn-outline-primary w-100 py-3 rounded-pill">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <p class="text-muted"><i class="bi bi-shield-check me-2"></i>Installation fee charged only after your free trial ends</p>
            </div>
        </div>
    </section>

    <!-- About DRBS -->
    <section id="about" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <span class="badge bg-primary-soft text-primary mb-3 px-4 py-2 rounded-pill">ABOUT US</span>
                    <h2 class="display-5 fw-bold mb-4">Connecting Communities Since Day One</h2>
                    <p class="lead text-muted mb-4">
                        DRBS Internet is dedicated to providing reliable, affordable, and fast internet services specifically designed for condominium living.
                    </p>
                    <p class="text-muted mb-4">
                        We understand the unique challenges of high-density residential internet connectivity. Our infrastructure is built to handle multiple users while maintaining consistent speeds and reliability.
                    </p>
                    <div class="row g-4 mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon-sm me-3">
                                    <i class="bi bi-award-fill text-primary fs-3"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0">5+ Years</h5>
                                    <small class="text-muted">Experience</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="feature-icon-sm me-3">
                                    <i class="bi bi-building text-primary fs-3"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0">50+ Buildings</h5>
                                    <small class="text-muted">Coverage</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-image">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=600&fit=crop" alt="Technology" class="img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="mt-5 pt-5">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h3 class="display-6 fw-bold mb-3">What Our Customers Say</h3>
                    <p class="lead text-muted">Don't just take our word for it</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                        <div class="testimonial-card">
                            <div class="stars mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-4">"Switched to DRBS after years of frustration with other providers. The speed is consistent, and their support team actually cares. Best decision ever!"</p>
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">
                                    <img src="https://ui-avatars.com/api/?name=Mary+Rochelle+Joyce+Alvarico&background=0D8ABC&color=fff" alt="Mary Rochelle Joyce Alvarico" class="rounded-circle" width="50">
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">Mary Rochelle Joyce Alvarico</h6>
                                    <small class="text-muted">Unit 515 Tower 1</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-card">
                            <div class="stars mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-4">"Perfect for working from home! Video calls are crystal clear, and I've never experienced any downtime. The free trial convinced me immediately."</p>
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">
                                    <img src="https://ui-avatars.com/api/?name=Mohammad+Jamahali+Sezen&background=6610f2&color=fff" alt="Mohammad Jamahali Sezen" class="rounded-circle" width="50">
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">Mohammad Jamahali Sezen</h6>
                                    <small class="text-muted">Unit 516 Tower 1</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-card">
                            <div class="stars mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-4">"Finally, an internet provider that understands condo living! Fast installation, great pricing, and the customer service is top-notch."</p>
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">
                                    <img src="https://ui-avatars.com/api/?name=Breeana+Valdez&background=dc3545&color=fff" alt="Breeana Valdez" class="rounded-circle" width="50">
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">Breeana Valdez</h6>
                                    <small class="text-muted">Unit 1002 Tower 1</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary-soft text-primary mb-3 px-4 py-2 rounded-pill">GET IN TOUCH</span>
                <h2 class="display-5 fw-bold mb-3">Contact Us</h2>
                <p class="lead text-muted">We're here to help. Reach out through any channel.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="0">
                    <div class="contact-card h-100 w-100">
                        <div class="contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Phone</h5>
                        <p class="text-muted mb-2">Call us anytime</p>
                        <a href="tel:+639534953231" class="contact-link">+639534953231</a>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card h-100 w-100">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Email</h5>
                        <p class="text-muted mb-2">Drop us a line</p>
                        <a href="mailto:therandombytesolution@gmail.com" class="contact-link">therandombytesolution@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card h-100 w-100">
                        <div class="contact-icon">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Live Chat</h5>
                        <p class="text-muted mb-2">Chat with us instantly</p>
                        <div class="social-links d-flex justify-content-center">
                            <a href="https://t.me/CampaSupport_bot" target="_blank" class="social-link" title="Telegram"><i class="bi bi-telegram"></i></a>
                            <a href="viber://chat?number=+639519103428" class="social-link" title="Viber"><i class="bi bi-chat-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="zoom-in">
                    <h2 class="display-4 fw-bold text-white mb-4">Ready to Get Started?</h2>
                    <p class="lead text-white-50 mb-5">Join hundreds of satisfied customers enjoying fast, reliable internet. Try us risk-free for 3 days!</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="/register" class="btn btn-light btn-lg px-5 py-3 rounded-pill">
                            <i class="bi bi-rocket-takeoff me-2"></i>Start Free Trial
                        </a>
                        <a href="/support" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">
                            <i class="bi bi-headset me-2"></i>Talk to Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand mb-4 d-flex align-items-center">
                        <img src="{{ asset('images/drbs-logo-small.png') }}" alt="DRBS Logo" style="height: 40px; width: 40px; object-fit: contain;" class="me-2" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                        <i class="bi bi-wifi me-2 fs-4" style="display: none;"></i>
                        <span class="fw-bold fs-5">DRBS Internet</span>
                    </div>
                    <p class="text-muted mb-4">Connecting communities with fast, reliable, and affordable internet services designed for modern living.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-4">Quick Links</h6>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#plans">Plans</a></li>
                        <li><a href="#about">About Us</a></li>

                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-4">Services</h6>
                    <ul class="list-unstyled footer-links">
                        <li><a href="/register">Registration</a></li>
                        <li><a href="/support">Support</a></li>
                        <li><a href="#plans">Internet Plans</a></li>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h6 class="fw-bold mb-4">Contact Info</h6>
                    <ul class="list-unstyled footer-links">
                        <li><i class="bi bi-telephone me-2"></i>+639534953231</li>
                        <li><i class="bi bi-envelope me-2"></i>therandombytesolution@gmail.com</li>
                        <li><i class="bi bi-clock me-2"></i>24/7 Customer Support</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 border-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-muted">&copy; 2025 DRBS Internet. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-muted text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-muted text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Enhanced JavaScript -->
    <script>
        // Enable animations after page loads
        window.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('loaded');
            initParticles();
            initCounters();
            initScrollAnimations();
        });

        // Particle Background Animation
        function initParticles() {
            const canvas = document.getElementById('particles-canvas');
            if (!canvas) return;
            
            const ctx = canvas.getContext('2d');
            let particles = [];
            let animationFrameId;

            function resizeCanvas() {
                canvas.width = canvas.offsetWidth;
                canvas.height = canvas.offsetHeight;
            }
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            class Particle {
                constructor() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 2 + 0.5;
                    this.speedX = Math.random() * 0.5 - 0.25;
                    this.speedY = Math.random() * 0.5 - 0.25;
                    this.opacity = Math.random() * 0.5 + 0.2;
                }

                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;

                    if (this.x > canvas.width) this.x = 0;
                    if (this.x < 0) this.x = canvas.width;
                    if (this.y > canvas.height) this.y = 0;
                    if (this.y < 0) this.y = canvas.height;
                }

                draw() {
                    ctx.fillStyle = `rgba(213, 255, 64, ${this.opacity})`;
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            function createParticles() {
                const particleCount = Math.min(Math.floor(canvas.width / 10), 100);
                for (let i = 0; i < particleCount; i++) {
                    particles.push(new Particle());
                }
            }

            function animateParticles() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                
                particles.forEach(particle => {
                    particle.update();
                    particle.draw();
                });

                // Draw connections
                particles.forEach((particle, i) => {
                    particles.slice(i + 1).forEach(otherParticle => {
                        const dx = particle.x - otherParticle.x;
                        const dy = particle.y - otherParticle.y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < 100) {
                            ctx.strokeStyle = `rgba(213, 255, 64, ${0.15 * (1 - distance / 100)})`;
                            ctx.lineWidth = 0.5;
                            ctx.beginPath();
                            ctx.moveTo(particle.x, particle.y);
                            ctx.lineTo(otherParticle.x, otherParticle.y);
                            ctx.stroke();
                        }
                    });
                });

                animationFrameId = requestAnimationFrame(animateParticles);
            }

            createParticles();
            animateParticles();
        }

        // Counter Animation
        function initCounters() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200; // Animation speed

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const increment = target / speed;
                let count = 0;

                const updateCount = () => {
                    count += increment;
                    if (count < target) {
                        counter.innerText = Math.ceil(count);
                        setTimeout(updateCount, 10);
                    } else {
                        counter.innerText = target + '+';
                    }
                };
                updateCount();
            };

            // Intersection Observer for counters
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(counter => counterObserver.observe(counter));
        }

        // Scroll Animations
        function initScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all cards and sections
            document.querySelectorAll('.feature-card, .pricing-card, .testimonial-card, .contact-card').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect with parallax
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const currentScroll = window.scrollY;
            
            if (currentScroll > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }

            // Parallax effect for hero content
            const heroContent = document.querySelector('.hero-content');
            if (heroContent && currentScroll < window.innerHeight) {
                heroContent.style.transform = `translateY(${currentScroll * 0.5}px)`;
                heroContent.style.opacity = 1 - (currentScroll / window.innerHeight);
            }

            lastScroll = currentScroll;
        });

        // Add hover effect to buttons
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.02)';
            });
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add tilt effect to cards
        document.querySelectorAll('.pricing-card, .feature-card').forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;
                
                this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
            });
        });
    </script>
</body>
</html>
