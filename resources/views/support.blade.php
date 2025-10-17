<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Support - DRBS Internet</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Modern Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="bi bi-wifi me-2 fs-4"></i>
                <span class="fw-bold">DRBS Internet</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link px-3" href="/#plans">Plans</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/#about">About</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/#coverage">Coverage</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/#contact">Contact</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-outline-light btn-sm rounded-pill px-4" href="/register">Get Started</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-primary btn-sm rounded-pill px-4" href="/support">Support</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Support Header -->
    <section class="page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-nav mb-4">
                        <a href="/" class="text-white-50 text-decoration-none"><i class="bi bi-house-door me-2"></i>Home</a>
                        <span class="text-white-50 mx-2">/</span>
                        <span class="text-white">Support</span>
                    </div>
                    <h1 class="display-4 fw-bold text-white mb-3">How Can We Help You?</h1>
                    <p class="lead text-white-50 mb-0">Our support team is available 24/7 to assist you with any concerns.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Support Options -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="support-quick-card text-center">
                        <div class="support-icon mb-3">
                            <i class="bi bi-telephone-fill text-primary"></i>
                        </div>
                        <h6 class="fw-bold mb-2">Call Us</h6>
                        <p class="text-muted small mb-3">Available 24/7</p>
                        <a href="tel:+1234567890" class="btn btn-outline-primary btn-sm rounded-pill">+1-234-567-890</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="support-quick-card text-center">
                        <div class="support-icon mb-3">
                            <i class="bi bi-envelope-fill text-success"></i>
                        </div>
                        <h6 class="fw-bold mb-2">Email Us</h6>
                        <p class="text-muted small mb-3">Response within 2 hours</p>
                        <a href="mailto:support@drbsinternet.com" class="btn btn-outline-success btn-sm rounded-pill">Send Email</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="support-quick-card text-center">
                        <div class="support-icon mb-3">
                            <i class="bi bi-chat-dots-fill text-info"></i>
                        </div>
                        <h6 class="fw-bold mb-2">Live Chat</h6>
                        <p class="text-muted small mb-3">Instant support</p>
                        <button class="btn btn-outline-info btn-sm rounded-pill" onclick="openChat()">Start Chat</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="support-quick-card text-center">
                        <div class="support-icon mb-3">
                            <i class="bi bi-whatsapp text-success"></i>
                        </div>
                        <h6 class="fw-bold mb-2">WhatsApp</h6>
                        <p class="text-muted small mb-3">Quick messaging</p>
                        <a href="https://wa.me/1234567890" target="_blank" class="btn btn-outline-success btn-sm rounded-pill">Message Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Support Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <!-- Ticket Submission Form -->
                <div class="col-lg-8 mb-4">
                    <div class="card support-card shadow-sm border-0">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <h3 class="fw-bold mb-2"><i class="bi bi-ticket-perforated me-2"></i>Submit a Support Ticket</h3>
                                <p class="text-muted">Fill out the form below and we'll get back to you as soon as possible.</p>
                            </div>

                            <!-- Success/Error Messages -->
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Please correct the following errors:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <!-- Tab Navigation -->
                            <ul class="nav nav-pills mb-4" id="supportTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="new-ticket-tab" data-bs-toggle="pill" data-bs-target="#new-ticket" type="button" role="tab">
                                        <i class="bi bi-plus-circle me-2"></i>New Ticket
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="track-ticket-tab" data-bs-toggle="pill" data-bs-target="#track-ticket" type="button" role="tab">
                                        <i class="bi bi-search me-2"></i>Track Ticket
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="supportTabContent">
                                <!-- New Ticket Form -->
                                <div class="tab-pane fade show active" id="new-ticket" role="tabpanel">
                                    <form id="ticketForm" method="POST" action="{{ route('ticket.submit') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="ticketName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light border-end-0">
                                                        <i class="bi bi-person"></i>
                                                    </span>
                                                    <input type="text" class="form-control border-start-0" id="ticketName" name="name" placeholder="John Doe" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="ticketEmail" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light border-end-0">
                                                        <i class="bi bi-envelope"></i>
                                                    </span>
                                                    <input type="email" class="form-control border-start-0" id="ticketEmail" name="email" placeholder="john@example.com" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 mt-3">
                                            <div class="col-md-6">
                                                <label for="ticketPhone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light border-end-0">
                                                        <i class="bi bi-telephone"></i>
                                                    </span>
                                                    <input type="tel" class="form-control border-start-0" id="ticketPhone" name="phone" placeholder="+63 912 345 6789" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="accountNumber" class="form-label">Account Number <span class="text-muted">(Optional)</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light border-end-0">
                                                        <i class="bi bi-hash"></i>
                                                    </span>
                                                    <input type="text" class="form-control border-start-0" id="accountNumber" name="account_number" placeholder="ACC-12345">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <label for="ticketCategory" class="form-label">Issue Category <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light border-end-0">
                                                    <i class="bi bi-tag"></i>
                                                </span>
                                                <select class="form-select border-start-0" id="ticketCategory" name="category" required>
                                                    <option value="">Select a category...</option>
                                                    <option value="no-connection">No Internet Connection</option>
                                                    <option value="slow-connection">Slow/Intermittent Connection</option>
                                                    <option value="billing">Billing & Payment Inquiry</option>
                                                    <option value="installation">Installation Request</option>
                                                    <option value="equipment">Equipment Issue</option>
                                                    <option value="upgrade">Plan Upgrade/Downgrade</option>
                                                    <option value="cancellation">Service Cancellation</option>
                                                    <option value="other">Other Technical Issues</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <label for="ticketPriority" class="form-label">Priority Level <span class="text-danger">*</span></label>
                                            <div class="btn-group w-100" role="group">
                                                <input type="radio" class="btn-check" name="priority" id="priorityLow" value="low" required>
                                                <label class="btn btn-outline-success" for="priorityLow">
                                                    <i class="bi bi-circle-fill me-2"></i>Low
                                                </label>

                                                <input type="radio" class="btn-check" name="priority" id="priorityMedium" value="medium" checked>
                                                <label class="btn btn-outline-warning" for="priorityMedium">
                                                    <i class="bi bi-circle-fill me-2"></i>Medium
                                                </label>

                                                <input type="radio" class="btn-check" name="priority" id="priorityHigh" value="high">
                                                <label class="btn btn-outline-danger" for="priorityHigh">
                                                    <i class="bi bi-circle-fill me-2"></i>High
                                                </label>
                                            </div>
                                            <small class="text-muted">Select "High" only for urgent issues like complete service outage.</small>
                                        </div>

                                        <div class="mt-3">
                                            <label for="ticketSubject" class="form-label">Subject <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ticketSubject" name="subject" placeholder="Brief description of your issue" required>
                                        </div>

                                        <div class="mt-3">
                                            <label for="ticketDescription" class="form-label">Description <span class="text-danger">*</span></label>
                                            <textarea class="form-control" id="ticketDescription" name="description" rows="6" placeholder="Please provide detailed information about your issue. Include any error messages, when the problem started, and what troubleshooting steps you've already tried." required></textarea>
                                            <small class="text-muted">The more details you provide, the faster we can resolve your issue.</small>
                                        </div>

                                        <div class="mt-3">
                                            <label for="ticketAttachment" class="form-label">Attachments <span class="text-muted">(Optional)</span></label>
                                            <input class="form-control" type="file" id="ticketAttachment" name="attachments[]" multiple accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                                            <small class="text-muted">Upload screenshots, error logs, or any relevant files (Max 5MB each).</small>
                                        </div>

                                        <div class="alert alert-info d-flex align-items-start mt-4" role="alert">
                                            <i class="bi bi-info-circle-fill me-3 fs-5"></i>
                                            <div>
                                                <strong>Response Time:</strong><br>
                                                <small>• High Priority: Within 1 hour<br>
                                                • Medium Priority: Within 4 hours<br>
                                                • Low Priority: Within 24 hours</small>
                                            </div>
                                        </div>

                                        <div class="d-grid mt-4">
                                            <button type="submit" class="btn btn-primary btn-lg py-3">
                                                <i class="bi bi-send-fill me-2"></i>Submit Ticket
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Track Ticket -->
                                <div class="tab-pane fade" id="track-ticket" role="tabpanel">
                                    <div class="mb-4">
                                        <p class="text-muted">Enter your ticket ID or email address to check the status of your support ticket.</p>
                                    </div>

                                    <form id="trackTicketForm" method="POST" action="{{ route('ticket.track') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="trackInput" class="form-label">Ticket ID or Email Address <span class="text-danger">*</span></label>
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text bg-light">
                                                    <i class="bi bi-search"></i>
                                                </span>
                                                <input type="text" class="form-control" id="trackInput" name="track_input" placeholder="Enter ticket ID (e.g., TKT-12345) or email" required>
                                                <button class="btn btn-primary px-5" type="submit">
                                                    Track Status
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Ticket Status Display -->
                                    @if(session('ticket'))
                                    <div id="ticketStatus" class="mt-4">
                                        <div class="card bg-light border-0">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between align-items-start mb-3">
                                                    <div>
                                                        <h5 class="fw-bold mb-1">Ticket #{{ session('ticket')->ticket_number }}</h5>
                                                        <p class="text-muted mb-0">{{ session('ticket')->subject }}</p>
                                                    </div>
                                                    <span class="badge bg-{{ session('ticket')->status_color }} px-3 py-2">{{ ucfirst(str_replace('_', ' ', session('ticket')->status)) }}</span>
                                                </div>
                                                <hr>
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block">Created</small>
                                                        <strong>{{ session('ticket')->created_at->format('M d, Y g:i A') }}</strong>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block">Last Updated</small>
                                                        <strong>{{ session('ticket')->updated_at->format('M d, Y g:i A') }}</strong>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block">Priority</small>
                                                        <span class="badge bg-{{ session('ticket')->priority_color }}">{{ ucfirst(session('ticket')->priority) }}</span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block">Category</small>
                                                        <strong>{{ session('ticket')->category_name }}</strong>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h6 class="fw-bold mb-3">Description</h6>
                                                <p class="mb-0">{{ session('ticket')->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <!-- Sample Ticket Status Display (Hidden by default) -->
                                    <div id="ticketStatus" class="mt-4" style="display: none;">
                                        <div class="card bg-light border-0">
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between align-items-start mb-3">
                                                    <div>
                                                        <h5 class="fw-bold mb-1">Ticket #TKT-12345</h5>
                                                        <p class="text-muted mb-0">Slow Internet Connection</p>
                                                    </div>
                                                    <span class="badge bg-warning text-dark px-3 py-2">In Progress</span>
                                                </div>
                                                <hr>
                                                <div class="row g-3">
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block">Created</small>
                                                        <strong>Jan 15, 2025 10:30 AM</strong>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block">Last Updated</small>
                                                        <strong>Jan 15, 2025 2:45 PM</strong>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block">Priority</small>
                                                        <strong>Medium</strong>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block">Assigned To</small>
                                                        <strong>Support Team</strong>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h6 class="fw-bold mb-3">Recent Updates</h6>
                                                <div class="timeline">
                                                    <div class="timeline-item">
                                                        <div class="timeline-marker bg-success"></div>
                                                        <div class="timeline-content">
                                                            <small class="text-muted">2:45 PM</small>
                                                            <p class="mb-0">Our technician has identified the issue and is working on a solution.</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="timeline-marker bg-primary"></div>
                                                        <div class="timeline-content">
                                                            <small class="text-muted">11:00 AM</small>
                                                            <p class="mb-0">Ticket assigned to technical support team.</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="timeline-marker bg-secondary"></div>
                                                        <div class="timeline-content">
                                                            <small class="text-muted">10:30 AM</small>
                                                            <p class="mb-0">Ticket created and received.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sticky-sidebar">
                        <!-- Emergency Support -->
                        <div class="card border-0 shadow-sm mb-4 bg-danger text-white">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <i class="bi bi-exclamation-triangle-fill fs-1 mb-3"></i>
                                    <h5 class="fw-bold mb-3">Emergency Support</h5>
                                    <p class="small mb-4">For urgent service outages or critical issues, call us immediately:</p>
                                    <a href="tel:+1234567890" class="btn btn-light btn-lg w-100 mb-3">
                                        <i class="bi bi-telephone-fill me-2"></i>+1-234-567-890
                                    </a>
                                    <p class="small mb-0">Available 24/7</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Quick Links -->
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body p-4">
                                <h6 class="fw-bold mb-4"><i class="bi bi-question-circle me-2"></i>Common Issues</h6>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action border-0 px-0">
                                        <i class="bi bi-chevron-right text-primary me-2"></i>Slow internet connection
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 px-0">
                                        <i class="bi bi-chevron-right text-primary me-2"></i>Cannot connect to WiFi
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 px-0">
                                        <i class="bi bi-chevron-right text-primary me-2"></i>Reset my router
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 px-0">
                                        <i class="bi bi-chevron-right text-primary me-2"></i>Billing inquiries
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0 px-0">
                                        <i class="bi bi-chevron-right text-primary me-2"></i>Update my account info
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Support Hours -->
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h6 class="fw-bold mb-4"><i class="bi bi-clock me-2"></i>Support Hours</h6>
                                <div class="support-hours">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Phone Support</span>
                                        <strong>24/7</strong>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Live Chat</span>
                                        <strong>24/7</strong>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-muted">Email Support</span>
                                        <strong>24/7</strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted">WhatsApp</span>
                                        <strong>24/7</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="badge bg-primary-soft text-primary mb-3 px-4 py-2 rounded-pill">FAQ</span>
                <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
                <p class="lead text-muted">Find quick answers to common questions</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    <i class="bi bi-question-circle me-3 text-primary"></i>
                                    How do I troubleshoot slow internet connection?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Restart your router by unplugging it for 30 seconds</li>
                                        <li>Check if multiple devices are connected and using bandwidth</li>
                                        <li>Move closer to your router or access point</li>
                                        <li>Run a speed test at <a href="https://speedtest.net" target="_blank">speedtest.net</a></li>
                                        <li>If the issue persists, contact our support team</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    <i class="bi bi-question-circle me-3 text-primary"></i>
                                    What should I do if I have no internet connection?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Check if your router lights are on</li>
                                        <li>Verify all cables are properly connected</li>
                                        <li>Restart your router and modem</li>
                                        <li>Check if there's a service outage in your area</li>
                                        <li>If nothing works, call our emergency hotline: +1-234-567-890</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    <i class="bi bi-question-circle me-3 text-primary"></i>
                                    How do I pay my monthly bill?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can pay through multiple channels:
                                    <ul>
                                        <li>Online banking transfer to our account</li>
                                        <li>Payment centers (7-Eleven, Bayad Center, etc.)</li>
                                        <li>GCash or PayMaya</li>
                                        <li>Credit/Debit card through our website</li>
                                        <li>Cash payment to our authorized collectors</li>
                                    </ul>
                                    Your account number must be included in the payment reference.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    <i class="bi bi-question-circle me-3 text-primary"></i>
                                    Can I upgrade or downgrade my plan?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! You can change your plan anytime. Simply submit a support ticket or call us at +1-234-567-890.
                                    Plan changes take effect on your next billing cycle. Note that equipment changes may be required for upgrades,
                                    and installation fees may apply.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    <i class="bi bi-question-circle me-3 text-primary"></i>
                                    How do I cancel my subscription?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We're sorry to see you go! To cancel your subscription:
                                    <ol>
                                        <li>Submit a support ticket with category "Service Cancellation"</li>
                                        <li>Call us at +1-234-567-890 to speak with a representative</li>
                                        <li>Provide at least 30 days notice before your desired cancellation date</li>
                                        <li>Return any rented equipment within 7 days</li>
                                    </ol>
                                    Note: No cancellation fees during the trial period. After that, standard terms apply.
                                </div>
                            </div>
                        </div>
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
                    <div class="footer-brand mb-4">
                        <i class="bi bi-wifi me-2 fs-4"></i>
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
                        <li><a href="/#plans">Plans</a></li>
                        <li><a href="/#about">About Us</a></li>
                        <li><a href="/#coverage">Coverage</a></li>
                        <li><a href="/#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-4">Services</h6>
                    <ul class="list-unstyled footer-links">
                        <li><a href="/register">Registration</a></li>
                        <li><a href="/support">Support</a></li>
                        <li><a href="/#plans">Internet Plans</a></li>
                        <li><a href="/#coverage">Coverage Check</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h6 class="fw-bold mb-4">Contact Info</h6>
                    <ul class="list-unstyled footer-links">
                        <li><i class="bi bi-telephone me-2"></i>+1-234-567-890</li>
                        <li><i class="bi bi-envelope me-2"></i>support@drbsinternet.com</li>
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

    <!-- Support Page Scripts -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Form submissions are now handled by Laravel
        // Remove the preventDefault to allow natural form submission

        // Open chat function
        function openChat() {
            alert('Live chat will open here. This would typically integrate with a live chat service like Tawk.to, Intercom, or Zendesk.');
        }

        // File upload validation
        document.getElementById('ticketAttachment').addEventListener('change', function(e) {
            const files = e.target.files;
            const maxSize = 5 * 1024 * 1024; // 5MB

            for (let file of files) {
                if (file.size > maxSize) {
                    alert('File "' + file.name + '" exceeds 5MB limit. Please choose a smaller file.');
                    this.value = '';
                    break;
                }
            }
        });
    </script>
</body>
</html>
