<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @vite('../resources/css/featuresStyle.css')
    @vite('../resources/js/features.js')
    @vite('../resources/js/wow.min.js')
    @vite('../resources/css/animate.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    @yield('title')

</head>

<body>
    <div class="content">
        {{-- Navbar Starts --}}
        <nav class="navbar navbar-expand-lg p-2 sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-light p-3" href="{{ route('home') }}" id="hero">VeraCT
                    System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" onclick="toggleDropdown(event)">Features</a>
                            <div class="dropdown-content">
                                <a href="{{ route('accounting') }}">Accounting Management</a>
                                <a href="{{ route('hr') }}">Human Resources</a>
                                <a href="{{ route('inventory') }}">Inventory Management</a>
                                <a href="{{ route('customer') }}">Customer Management</a>
                                <a href="{{ route('task') }}">Task Management</a>
                                <a href="{{ route('project') }}">Project Management</a>
                                <a href="{{ route('payroll') }}">Payroll Management</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        {{-- Navbar Ends --}}

        {{-- Hero Starts --}}
        <section class=" home-container ">
            <div class="hero-container">
                <div class="hero-left">
                    @yield('hero-left')
                </div>
                <div class="hero-right">
                    @yield('hero-right')
                </div>
            </div>
        </section>
        {{-- Hero Ends --}}

        <div class="body-div">
            <div class="side-nav">
                <div class="side-nav-wrapper">
                    <a class="side-nav-link active" href="#overview">Overview</a>
                </div>
                <div class="side-nav-wrapper">
                    <a class="side-nav-link" href="#key-features">Features</a>
                </div>
                <div class="side-nav-wrapper">
                    <a class="side-nav-link" href="#benefits">Benefits</a>
                </div>
            </div>
            <div class="feature-content">
                {{-- Overview Starts --}}
                <div class="section-div overview" id="overview">
                    @yield('overview')
                </div>
                {{-- Overview Ends --}}
                {{-- Key Features Starts --}}
                <div class="section-div key-features" id="key-features">
                    @yield('key-features')
                </div>
                {{-- Key Features Ends --}}
                {{-- Benefits Starts --}}
                <div class="section-div benefits" id="benefits">
                    @yield('benefits')
                </div>
                {{-- Benefits Ends --}}
            </div>
        </div>

        {{-- Footer Starts --}}
        <div class=" contacts">
            <div class="contacts-container">
                <h1 class="wow fadeInRight">
                    Ready to optimize your business?
                </h1>
                <div class="contacts-wrapper">
                    <div class="contacts-style">
                        <h4>Our office</h4>
                        <p><img src="{{ asset('images/icons8-phone-50.png') }}" alt=""> (02)-8721-8960</p>
                        <p><img src="{{ asset('images/icons8-mobile-phone-48.png') }}" alt="">
                            +63917-1230-684
                        </p>
                        <p>Unit B1, Block 2, Citiplaza 1 Commercial Complex, Tandang Sora
                            Avenue Corner Visayas Avenue Extension, Barangay Pasong Tamo, Quezon
                            City</p>
                    </div>
                    <div class="contacts-style">
                        <h4>Say Hello</h4>
                        <div class="contact-form">
                            <form action="#" method="post">
                                <input type="text" placeholder="Name" required>
                                <input type="text" placeholder="Telephone" required>
                                <input type="email" placeholder="Email" required>
                                <textarea placeholder="Comment" rows="4" required></textarea>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="contacts-style">
                        <h4>Keep Connected</h4>
                        <a href="#" class="no-style">
                            <img src="{{ asset('images/icons8-facebook-50.png') }}" alt="">
                            <p>Facebook</p>
                        </a>
                        <a href="#" class="no-style">
                            <img src="{{ asset('images/icons8-website-50.png') }}" alt="">
                            <p>Web Page</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <footer>
            <div class="footer-wrapper">
                <p>Copyright © VPD BUSINESS SOLUTIONS INC. 2022 - 2025</p>
            </div>
        </footer>
        {{-- Footer Ends --}}


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
