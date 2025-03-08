<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @vite('resources/css/style.css')
    @vite('resources/js/main.js')
    @vite('resources/js/wow.min.js')
    @vite('resources/css/animate.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <title>VeraCT System</title>
</head>

<body>
    <div class="content">
        <!-- Navbar & Hero -->
        <nav class="navbar navbar-expand-lg p-2 sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-light p-3" href="#">VeraCT System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="#home">Home</a>
                        <a class="nav-link" href="#features">Features</a>
                        <a class="nav-link" href="#process">Process</a>
                        <a class="nav-link" href="#contacts">Contacts</a>
                    </div>
                </div>
            </div>
        </nav>

        <!--Hero Starts-->
        <section class="section-div home-container" id="home">
            <div class="hero-container">
                <div>
                    <div class="wow fadeInUp">
                        <h1>Power Your Business with VeraCT</h1>
                        <h2>The All-in-One IT Solution</h2>

                        <p>
                            " Streamline Operations with VeraCT – Accounting, HR, and More in One Platform!" </p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/heroImage.png') }}" alt="" />
                </div>
            </div>
        </section>
        <!-- Navbar & Hero ends -->

        <!--VeraCT Features-->
        <div class="section-div features" id="features">
            <div class="features-container">
                <h1 class="wow fadeInRight">
                    Enhancing Efficiency, One System at a Time
                </h1>
                <div class="features-wrapper">
                    <div class="features-style" data-link="{{ route('accounting') }}">
                        <div class="image-wrapper-style wow fadeInUp">
                            <img src="{{ asset('images/Accountant-bro.png') }}" alt="" />
                        </div>
                        <div class="wow fadeInUp">
                            <h4>Accounting Management</h4>
                            <p>
                                Keep your business finances in check with VeraCT’s automated
                                accounting system. Generate real-time reports, manage invoices,
                                track expenses, and ensure compliance with financial
                                regulations—all in one place.
                            </p>
                        </div>
                    </div>
                    <div class="features-style " data-link="#hr">
                        <div class="image-wrapper-style wow fadeInUp">
                            <img src="{{ asset('images/hr.png') }}" alt="" />
                        </div>
                        <div class="wow fadeInUp">
                            <h4>Human Resources</h4>
                            <p>
                                Automate your payroll processing, attendance tracking, and
                                employee records with ease. VeraCT ensures accurate salary
                                computation, tax deductions, and benefits management while
                                staying compliant with labor laws.
                            </p>
                        </div>
                    </div>
                    <div class="features-style" data-link="#inventory">
                        <div class="image-wrapper-style wow fadeInUp">
                            <img src="{{ asset('images/inventory.png') }}" alt="" />
                        </div>
                        <div class="wow fadeInUp">
                            <h4>Inventory Management</h4>
                            <p>
                                Optimize your supply chain with VeraCT’s inventory tracking
                                system. Monitor stock levels, automate restocking alerts, and
                                streamline order fulfillment to avoid shortages and reduce
                                operational costs.
                            </p>
                        </div>
                    </div>
                    <div class="features-style " data-link="#cservice">
                        <div class="image-wrapper-style wow fadeInUp">
                            <img src="{{ asset('images/cservice.png') }}" alt="" />
                        </div>
                        <div class="wow fadeInUp">
                            <h4>Customer Management</h4>
                            <p>
                                Enhance your sales and customer engagement with VeraCT’s CRM
                                tools. Track leads, follow up with clients, manage interactions,
                                and analyze sales data to maximize revenue growth.
                            </p>
                        </div>
                    </div>
                    <div class="features-style " data-link="#pos">
                        <div class="image-wrapper-style wow fadeInUp">
                            <img src="{{ asset('images/pos.png') }}" alt="" />
                        </div>
                        <div class="wow fadeInUp">
                            <h4>Task Management</h4>
                            <p>
                                Boost sales efficiency with an integrated POS system designed
                                for retail businesses. Process secure transactions, track sales
                                performance, manage customer purchases, and sync inventory
                                across multiple locations.
                            </p>
                        </div>
                    </div>
                    <div class="features-style " data-link="#erp">
                        <div class="image-wrapper-style wow fadeInUp">
                            <img src="{{ asset('images/erp.png') }}" alt="" />
                        </div>
                        <div class="wow fadeInUp">
                            <h4>Project Management</h4>
                            <p>
                                Get a fully customizable ERP solution that fits your unique
                                business needs. From workflow automation to advanced reporting,
                                VeraCT helps businesses of all sizes optimize operations and
                                scale efficiently.
                            </p>
                        </div>
                    </div>
                    <div class="features-style " data-link="#erp">
                        <div class="image-wrapper-style wow fadeInUp">
                            <img src="{{ asset('images/erp.png') }}" alt="" />
                        </div>
                        <div class="wow fadeInUp">
                            <h4>Payroll Management</h4>
                            <p>
                                Get a fully customizable ERP solution that fits your unique
                                business needs. From workflow automation to advanced reporting,
                                VeraCT helps businesses of all sizes optimize operations and
                                scale efficiently.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--VeraCT Features ends-->

        <!--VeraCT Process-->
        <div class="section-div process" id="process">
            <h1 class="wow fadeInRight">Easy Steps to Success</h1>
            <div class="process-container">
                <div class="process-image-wrapper">
                    <img id="default-image" class="active" src="{{ asset('images/easystep.png') }}"
                        alt="Default Image" />
                    <img id="step1-image" src="{{ asset('images/step1.png') }}" alt="Step 1 Image" />
                    <img id="step2-image" src="{{ asset('images/step2.png') }}" alt="Step 2 Image" />
                    <img id="step3-image" src="{{ asset('images/step3.png') }}" alt="Step 3 Image" />
                </div>
                <div class="process-style">
                    <div class="process-style-box box-one" data-target="step1-image">
                        <div class="wow slideInRight box-wrapper-one">
                            <h4>Step 1: Onboard with VPD</h4>
                            <p>
                                Our team provides your VeraCT login and assists in setting up
                                your business profile.
                            </p>
                        </div>
                    </div>
                    <div class="process-style-box box-two" data-target="step2-image">
                        <div class="wow slideInRight box-wrapper-two">
                            <h4>Step 2: Customize & Integrate</h4>
                            <p>
                                Adjust settings, integrate business processes, and begin
                                operations seamlessly.
                            </p>
                        </div>
                    </div>
                    <div class="process-style-box box-three" data-target="step3-image">
                        <div class="wow slideInRight box-wrapper-three">
                            <h4>Step 3: Monitor & Optimize</h4>
                            <p>
                                Use real-time data and reports to make smarter business
                                decisions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--VeraCT Process ends-->

        <!--VeraCT Contacts-->
        <div class="section-div contacts" id="contacts">
            <h1 class="wow fadeInRight">Ready to optimize your business?</h1>
            <div class="contacts-wrapper">
                <a href="#email" class="text-decoration-none">
                    <div class="wow zoom-in">
                        <div class="contacts-container">
                            <h4>Email</h4>
                            <p>vpd@vpdbusinesssolution.com</p>
                        </div>
                    </div>
                </a>
                <a href="#phone" class="text-decoration-none">
                    <div class="wow zoom-in">
                        <div class="contacts-container" id="phone">
                            <h4>Phone</h4>
                            <p>(02)-8721-8960</p>
                            <p>+63917-1230-684</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="wow fadeInUp contacts-image-wrapper">
                <a href="#facebook"><i class="bx bxl-facebook-circle contacts-img"></i></a>
                <a href="#website"><i class="bx bx-world contacts-img"></i></a>
            </div>
        </div>

        <!--VeraCT Contacts ends-->

        <!--Footer-->
        <footer>
            <div class="footer-wrapper">
                <p>
                    Unit B1, Block 2, Citiplaza 1 Commercial Complex, Tandang Sora
                    Avenue Corner Visayas Avenue Extension, Barangay Pasong Tamo, Quezon
                    City
                </p>
                <p>Copyright © VPD BUSINESS SOLUTIONS INC. 2022 - 2025</p>
            </div>
        </footer>
        <!--Footer ends-->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
