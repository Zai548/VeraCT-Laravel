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

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
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

                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#features"
                                onclick="toggleDropdown(event)">Features</a>
                            <div class="dropdown-content">
                                <a href="{{ route('accounting') }}">Accounting Management</a>
                                <a href="#hr">Human Resources</a>
                                <a href="#inventory">Inventory Management</a>
                                <a href="#cservice">Customer Management</a>
                                <a href="#pos">Task Management</a>
                                <a href="#erp">Project Management</a>
                                <a href="#payroll">Payroll Management</a>
                            </div>
                        </div>

                        <a class="nav-link" href="#industries">Industries</a>
                        <a class="nav-link" href="#process">Process</a>
                        <a class="nav-link" href="#contacts">Contacts</a>
                    </div>
                </div>
            </div>
        </nav>

        <!--Hero Starts-->
        <section class="section-div home-container" id="home">
            <div class="hero-container">
                <div class="hero-left wow fadeInUp">
                    <h1>Power Your Business with VeraCT</h1>
                    <h2>The All-in-One IT Solution</h2>
                    <p>
                        " Streamline Operations with VeraCT – Accounting, HR, and More in One Platform!" </p>
                </div>
                <div class="hero-right">
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
                    <div class="features-style wow fadeInUp" data-link="{{ route('accounting') }}">
                        <div class="image-wrapper-style ">
                            <img src="{{ asset('images/Accountant-bro.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Accounting Management</h4>
                            <p>
                                Keep your business finances in check with VeraCT’s automated
                                accounting system. Generate real-time reports, manage invoices,
                                track expenses, and ensure compliance with financial
                                regulations—all in one place.
                            </p>
                        </div>
                    </div>
                    <div class="features-style wow fadeInUp" data-link="#hr">
                        <div class="image-wrapper-style ">
                            <img src="{{ asset('images/resume-folder-bro.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Human Resources</h4>
                            <p>
                                Manage your employees effortlessly with VeraCT's HR system. Handle payroll, track
                                attendance, and streamline employee records — ensuring smooth and efficient workforce
                                management.
                            </p>
                        </div>
                    </div>
                    <div class="features-style wow fadeInUp" data-link="#inventory">
                        <div class="image-wrapper-style ">
                            <img src="{{ asset('images/checking-boxes-rafiki.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Inventory Management</h4>
                            <p>
                                Optimize your supply chain with VeraCT’s inventory tracking
                                system. Monitor stock levels, automate restocking alerts, and
                                streamline order fulfillment to avoid shortages and reduce
                                operational costs.
                            </p>
                        </div>
                    </div>
                    <div class="features-style wow fadeInUp " data-link="#cservice">
                        <div class="image-wrapper-style ">
                            <img src="{{ asset('images/customer-relationship management-bro.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Customer Management</h4>
                            <p>
                                Enhance your sales and customer engagement with VeraCT’s CRM
                                tools. Track leads, follow up with clients, manage interactions,
                                and analyze sales data to maximize revenue growth.
                            </p>
                        </div>
                    </div>
                    <div class="features-style wow fadeInUp " data-link="#pos">
                        <div class="image-wrapper-style ">
                            <img src="{{ asset('images/Task-bro.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Task Management</h4>
                            <p>
                                Stay organized and boost productivity by assigning, tracking, and managing tasks within
                                your team. VeraCT helps ensure every task is completed on time and aligned with your
                                business goals.
                            </p>
                        </div>
                    </div>
                    <div class="features-style wow fadeInUp " data-link="#erp">
                        <div class="image-wrapper-style ">
                            <img src="{{ asset('images/business-plan-bro.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Project Management</h4>
                            <p>
                                Plan, collaborate, and monitor project progress with ease. VeraCT’s project management
                                system allows you to set milestones, assign tasks, and ensure seamless project delivery
                                on time.
                            </p>
                        </div>
                    </div>
                    <div class="features-style wow fadeInUp " data-link="#erp">
                        <div class="image-wrapper-style ">
                            <img src="{{ asset('images/Profiling-bro.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Payroll Management</h4>
                            <p>
                                Automate your payroll processing, attendance tracking, and
                                employee records with ease. VeraCT ensures accurate salary
                                computation, tax deductions, and benefits management while
                                staying compliant with labor laws.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--VeraCT Features ends-->
        <!--Industries Starts-->
        <div class="section-div industries" id="industries">
            <div class="industries-container">
                <h1 class="wow fadeInRight">
                    Tailored Solutions for Every Business
                </h1>
                <div class="industries-wrapper">
                    <div class="industries-style wow fadeInUp">
                        <div class="industries-image-wrapper-style ">
                            <img src="{{ asset('images/retail.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Retail Industry</h4>
                            <p>
                                Track sales, inventory, and orders with ease.
                            </p>
                        </div>
                    </div>
                    <div class="industries-style wow fadeInUp">
                        <div class="industries-image-wrapper-style ">
                            <img src="{{ asset('images/manufacture.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Manufacturing Industry</h4>
                            <p>
                                Manage production, supply chain, and materials efficiently.
                            </p>
                        </div>
                    </div>
                    <div class="industries-style wow fadeInUp">
                        <div class="industries-image-wrapper-style ">
                            <img src="{{ asset('images/healthcare.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Healthcare Industry</h4>
                            <p>
                                Simplify patient records, billing, and inventory management.
                            </p>
                        </div>
                    </div>
                    <div class="industries-style wow fadeInUp ">
                        <div class="industries-image-wrapper-style ">
                            <img src="{{ asset('images/delivery-truck.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Logistics Industry</h4>
                            <p>
                                Track shipments, delivery, and warehouse inventory.
                            </p>
                        </div>
                    </div>
                    <div class="industries-style wow fadeInUp ">
                        <div class="industries-image-wrapper-style ">
                            <img src="{{ asset('images/deposit.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Financial Services</h4>
                            <p>
                                Monitor transactions, reports, and account records easily.
                            </p>
                        </div>
                    </div>
                    <div class="industries-style wow fadeInUp ">
                        <div class="industries-image-wrapper-style ">
                            <img src="{{ asset('images/hotel-cleaning.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Hospitality Industry</h4>
                            <p>
                                Handle bookings, room availability, and customer management.
                            </p>
                        </div>
                    </div>
                    <div class="industries-style wow fadeInUp ">
                        <div class="industries-image-wrapper-style ">
                            <img src="{{ asset('images/construction.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Construction Industry</h4>
                            <p>
                                Manage projects, resources, and workforce efficiently.
                            </p>
                        </div>
                    </div>
                    <div class="industries-style wow fadeInUp ">
                        <div class="industries-image-wrapper-style ">
                            <img src="{{ asset('images/office-building.png') }}" alt="" />
                        </div>
                        <div>
                            <h4>Small and Medium Enterprises</h4>
                            <p>
                                Track business performance, expenses, and growth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Industries Ends-->
        <!--VeraCT Process-->
        <div class="section-div process" id="process">
            <h1 class=" wow fadeInRight">Easy Steps to Success</h1>
            <div class="process-container">
                <div class="process-image-wrapper">
                    <img id="default-image" class="active" src="{{ asset('images/c0ompleted-steps-bro.png') }}"
                        alt="Default Image" />
                    <img id="step1-image" src="{{ asset('images/business-deal-bro.png') }}" alt="Step 1 Image" />
                    <img id="step2-image" src="{{ asset('images/advanced-customization-bro.png') }}"
                        alt="Step 2 Image" />
                    <img id="step3-image" src="{{ asset('images/Analyze-bro.png') }}" alt="Step 3 Image" />
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

        <!--VeraCT Contacts ends-->

        <!--Footer-->
        <footer>
            <div class="footer-wrapper">
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
