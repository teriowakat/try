<x-layout>
    <x-slot name="title">Benguet State University</x-slot>

    <!-- Navigation Bar -->
    <x-slot name="navbar">
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav mx-auto">
                <a class="nav-link text-black fw-bold" href="#about">About Us</a>
                <a class="nav-link text-black fw-bold" href="#demo">Demo</a>
                <a class="nav-link text-black fw-bold" href="#features">Features</a>
                <a class="nav-link text-black fw-bold" href="#lookup">ID Lookup</a>
                <a class="nav-link text-black fw-bold" href="#analytics">Analytics</a>
                <a class="nav-link text-black fw-bold" href="#faq">FAQ</a>
                <a class="nav-link text-black fw-bold" href="#contact">Contact Us</a>
            </div>
            <div class="d-flex ms-auto">
                <a href="{{ url('/register') }}" 
                   class="btn btn-outline-light fw-bold me-2 px-4 py-2 shadow-sm"
                   style="border-radius: 50px; transition: 0.3s;">
                   Sign Up
                </a>
                <a href="{{ url('/login') }}" 
                   class="btn fw-bold px-4 py-2 shadow-sm"
                   style="background: white; color: #198754; border-radius: 50px; transition: 0.3s;">
                   Log In
                </a>
            </div>
        </div>
    </x-slot>

    <!-- Main Content with Full-Viewport Background -->
   <div class="w-100 min-vh-100 d-flex flex-column justify-content-center"
     style='background-image: url("{{ asset("images/uni.jpg") }}"); background-repeat: no-repeat; background-position: center center; background-size: cover; background-attachment: fixed;'>


        <!-- Optional overlay for readability -->
        <div class="flex-grow-1 w-100 h-100 bg-white bg-opacity-75 py-5">
            <div class="container">
                <header class="text-center mb-5">
                    <h1 class="display-4 fw-bold">Digital ID Scanner System</h1>
                    <p class="lead text-muted">Secure. Smart. Seamless identification across the campus.</p>
                </header>

                <main class="rounded">

                    <!-- About Section -->
                    <section id="about" class="mb-5">
                        <h2 class="fw-bold">About Our Digital ID System</h2>
                        <p>
                            Our Digital ID Scanner platform provides a secure and convenient solution for managing and verifying identities. 
                            Designed for institutions and organizations, the system eliminates manual checking and improves security.
                        </p>
                    </section>

                    <!-- Demo Section -->
                    <section id="demo" class="mb-5">
                        <h2 class="fw-bold">Live Demo</h2>
                        <p>Experience how scanning and verification works in real time. Coming soon.</p>
                    </section>

                    <!-- Features -->
                    <section id="features" class="mb-5">
                        <h2 class="fw-bold mb-4">Core Features</h2>
                        <div class="row">
                            @php
                                $features = [
                                    ['icon' => 'scanner.png', 'title' => 'Real-Time Scanning', 'desc' => 'Scan and verify Digital IDs instantly with QR/barcode recognition.'],
                                    ['icon' => 'idreg.png', 'title' => 'ID Registration', 'desc' => 'Allow users to register their ID profiles securely.'],
                                    ['icon' => 'admin.jpg', 'title' => 'Admin Dashboard', 'desc' => 'Track user scans, manage roles, and generate reports.'],
                                    ['icon' => 'history.png', 'title' => 'Scan History', 'desc' => 'View logs of all scans with timestamps and location data.'],
                                    ['icon' => 'notif.jpg', 'title' => 'Notifications', 'desc' => 'Send alerts for invalid IDs or unauthorized attempts.'],
                                    ['icon' => 'api.jpg', 'title' => 'API Integration', 'desc' => 'Integrate ID validation into your own systems with ease.']
                                ];
                            @endphp

                            @foreach ($features as $feature)
                            <div class="col-md-4 mb-3">
                                <div class="card h-100 shadow-sm border-0 bg-light feature-card transition-hover">
                                    <div class="card-body d-flex align-items-center">
                                        <img src="{{ asset('images/' . $feature['icon']) }}" alt="{{ $feature['title'] }}" class="me-3" style="height: 48px; width: 48px; object-fit: contain;">
                                        <div>
                                            <h5 class="card-title mb-1">{{ $feature['title'] }}</h5>
                                            <p class="card-text mb-0">{{ $feature['desc'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- ID Lookup -->
                    <section id="lookup" class="mb-5">
                        <h2 class="fw-bold">ID Lookup</h2>
                        <p>Search and verify registered users using their ID number.</p>
                        <form class="d-flex flex-column flex-md-row gap-3">
                            <input type="text" class="form-control" placeholder="Enter ID Number" required>
                            <button class="btn btn-primary px-4 lookup-btn" type="submit">Search</button>
                        </form>
                    </section>

                    <!-- Analytics -->
                    <section id="analytics" class="mb-5">
                        <h2 class="fw-bold">Admin Analytics</h2>
                        <div class="row text-center">
                            <div class="col-md-4 mb-3">
                                <div class="p-4 shadow-sm rounded bg-light analytics-card transition-hover">
                                    <h3 class="text-success">1,204</h3>
                                    <p class="mb-0">Total Scans Today</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-4 shadow-sm rounded bg-light analytics-card transition-hover">
                                    <h3 class="text-primary">578</h3>
                                    <p class="mb-0">Active Users</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-4 shadow-sm rounded bg-light analytics-card transition-hover">
                                    <h3 class="text-danger">12</h3>
                                    <p class="mb-0">Unauthorized Attempts</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- FAQ Section -->
                    <section id="faq" class="mb-5">
                        <h2 class="fw-bold">Frequently Asked Questions</h2>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        How does the scanner work?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        The scanner uses QR/barcode technology to retrieve and validate a user’s ID from the database in real time.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        Is the system secure?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, all data is encrypted and follows best practices in digital security and user privacy.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Contact -->
                    <section id="contact" class="mb-5">
                        <h2 class="fw-bold">Contact Us</h2>
                        <p>
                            For support or business inquiries, email us at 
                            <a class="text-dark fw-bold" href="mailto:bsuwakat@gmail.com">bsuwakat@gmail.com</a>
                        </p>
                    </section>

                </main>
            </div>
        </div>
    </div>

    <!-- Custom Styles -->
    <style>
        .transition-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover,
        .analytics-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .lookup-btn:hover {
            background-color: #0b5ed7;
            transform: translateY(-2px);
        }

        .navbar-nav .nav-link:hover {
            color: #198754 !important;
            transform: scale(1.05);
            transition: all 0.2s ease-in-out;
        }
    </style>
</x-layout>
