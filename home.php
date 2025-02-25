<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus360</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .navbar-nav .text-danger:hover {
            color: #dc3545 !important;
        }

        .dropdown-menu {
            background-color: #212529;
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 10px;
            padding: 8px 0;
        }

        /* Overlay Background */
        #demo-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1050;
            display: none;
        }

        /* Centered Form */
        .demo-form {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3);
            max-width: 450px;
            width: 90%;
            text-align: center;
            z-index: 1051;
            display: none;
        }

        /* Close Button */
        .demo-form .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 22px;
            cursor: pointer;
            border: none;
            background: transparent;
        }

        /* Contain Service Images */
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .card-body {
            padding: 20px;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- Hero Image Section -->
    <header class="hero-image" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1'); height: 600px; background-size: cover; background-position: center; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
        <div class="container text-center text-white d-flex flex-column justify-content-center align-items-center" style="position: relative; height: 100%;">
            <h1 style="font-size: 4rem;">Welcome to Campus360</h1>
            <p style="font-size: 2rem;">Your All-in-One Student Management Solution</p>
        </div>
    </header>

    <!-- About Us Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="display-5 fw-bold mb-3">About Campus360</h2>
                    <div class="divider d-flex align-items-center justify-content-center mb-4">
                        <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                        <div class="mx-3"><i class="bi bi-info-circle-fill text-primary"></i></div>
                        <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="static/bg-img1.jpg" alt="Students collaborating" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Transforming Education Through Innovation</h3>
                    <p class="lead mb-4">Campus360 is a cutting-edge student management system designed to simplify administrative tasks, enhance student engagement, and empower educational institutions with modern technology.</p>
                    <p class="lead mb-4">From tracking academic progress to fostering peer collaboration, our platform provides tools that make campus life seamless and efficient for students, educators, and administrators alike.</p>
                    
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-primary fs-4 me-2"></i>
                                <div>
                                    <h5>24/7 Access</h5>
                                    <p>Access your academic tools anytime, anywhere</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-lightning-fill text-primary fs-4 me-2"></i>
                                <div>
                                    <h5>Instant Updates</h5>
                                    <p>Real-time notifications and grade tracking</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-people-fill text-primary fs-4 me-2"></i>
                                <div>
                                    <h5>Community Hub</h5>
                                    <p>Connect with peers and faculty effortlessly</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-graph-up text-primary fs-4 me-2"></i>
                                <div>
                                    <h5>Data Insights</h5>
                                    <p>Analytics to support student success</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="#services" class="btn btn-primary">Our Services</a>
                        <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Campus Navigation Section -->
    <section id="campus" class="py-5 bg-white">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-5 fw-bold mb-3">Campus Navigation</h2>
                <div class="divider d-flex align-items-center justify-content-center mb-4">
                    <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                    <div class="mx-3"><i class="bi bi-info-circle-fill text-primary"></i></div>
                    <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                </div>
            </div>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3 class="mb-4">Navigate Your Campus Effortlessly</h3>
                <p class="lead mb-4">Discover our intuitive navigation tools designed to help you find your way around campus with ease. Whether you're looking for lecture halls, libraries, or student centers, our platform provides detailed maps and information to guide you.</p>
                <p class="lead mb-4">With real-time updates and customizable routes, you'll never be lost on campus. Stay informed and connected as you explore everything your university has to offer.</p>
                
                <div class="d-flex gap-3">
                    <a href="navigation.php" class="btn btn-primary">Explore</a>
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="static/navigation.png" alt="Campus Navigation" style="width:80%;height:auto;margin-left:100px;" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

    <!-- Services Section -->
    <section id="services" class="py-5" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="display-5 fw-bold mb-3">Our Services</h2>
                    <div class="divider d-flex align-items-center justify-content-center mb-4">
                        <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                        <div class="mx-3"><i class="bi bi-gear-fill text-primary"></i></div>
                        <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="card-img-top" alt="Scholarship Application">
                        <div class="card-body text-center">
                            <h5 class="card-title">Scholarship Portal</h5>
                            <p class="card-text">Apply for scholarships and track your eligibility status.</p>
                            <p class="lead">Our Scholarship Portal simplifies the process of applying for scholarships, easing student burden</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="card-img-top" alt="Internship Opportunities">
                        <div class="card-body text-center">
                            <h5 class="card-title">Internship Finder</h5>
                            <p class="card-text">Explore internship opportunities tailored to your field.</p>
                            <p class="lead">Our Internship Finder connects you with relevant opportunities, helping you gain practical experience in your chosen field.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top" alt="VR Classroom">
                        <div class="card-body text-center">
                            <h5 class="card-title">VR Classroom</h5>
                            <p class="card-text">Experience immersive learning with virtual reality.</p>
                            <p class="lead">Our VR Classroom offers an immersive learning experience, making education more engaging and interactive.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="static/stress.jpg" class="card-img-top" alt="Stress Management">
                        <div class="card-body text-center">
                            <h5 class="card-title">Stress Management</h5>
                            <p class="card-text">Tools and games to help you relax and manage stress.</p>
                            <p class="lead">Stress Management tools offer relaxing games and activities to help you unwind and manage stress effectively.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4" class="card-img-top" alt="Student Support">
                        <div class="card-body text-center">
                            <h5 class="card-title">Student Support</h5>
                            <p class="card-text">Access counseling and academic advisors.</p>
                            <p class="lead">Our Student Support service provides access to counseling and academic advising, ensuring you have the support you need.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="card-img-top" alt="Notes Sharing">
                        <div class="card-body text-center">
                            <h5 class="card-title">Notes Sharing</h5>
                            <p class="card-text">Share and access study materials with peers.</p>
                            <p class="lead">Our Notes Sharing platform allows you to share and access study materials from peers, making learning more efficient.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="static/peer1.png" class="card-img-top" alt="Peer Forum">
                        <div class="card-body text-center">
                            <h5 class="card-title">Peer Forum</h5>
                            <p class="card-text">Discuss topics and collaborate with classmates.</p>
                            <p class="lead">Our Peer Forum is a space for discussion and collaboration, enabling you to connect with peers on various topics.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="static/lms.jpeg" class="card-img-top" alt="Learning Management">
                        <div class="card-body text-center">
                            <h5 class="card-title">Learning Management</h5>
                            <p class="card-text">Manage attendance, marks, and assignments.</p>
                            <p class="lead">Our Learning Management system streamlines the management of attendance, marks, and assignments.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Package Section -->

    <?php include 'package.php'; ?>

    <!-- Contact Form Section -->
    <section id="contact" class="py-5"  style="background-color: #f5f5f5;">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-5 fw-bold mb-3">Contact Us</h2>
                <div class="divider d-flex align-items-center justify-content-center mb-4">
                    <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                    <div class="mx-3"><i class="bi bi-envelope-fill text-primary"></i></div>
                    <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                </div>
                <p class="lead text-muted">Reach out for support, inquiries, or feedback</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <form id="contactForm" method="post" action="contact_process.php">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject" class="form-label">Subject</label>
                                        <select class="form-select" id="subject" name="subject" required>
                                            <option value="">Select a subject</option>
                                            <option value="general">General Inquiry</option>
                                            <option value="support">Technical Support</option>
                                            <option value="demo">Demo Request</option>
                                            <option value="feedback">Feedback</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Contact Information</h4>
                        
                        <div class="d-flex mb-4">
                            <i class="bi bi-geo-alt-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <p class="mb-0">456 Campus Drive, Education City, USA</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <i class="bi bi-telephone-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <p class="mb-0">Support: +1 800 123 4567</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <i class="bi bi-envelope-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h5 class="mb-1">Email</h5>
                                <p class="mb-0">support@campus360.com</p>
                            </div>
                        </div>

                        <hr>

                        <h5 class="mb-3">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-primary fs-4"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-primary fs-4"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-primary fs-4"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="text-primary fs-4"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php include 'footer.php'; ?>

    <!-- Overlay -->
    <div id="demo-overlay" onclick="hideDemoForm()"></div>

    <!-- Demo Form -->
    <div class="demo-form">
        <button class="close-btn" onclick="hideDemoForm()">×</button>
        <h2 class="mb-4">Schedule a Demo</h2>
        <form id="contact-us-form">
            <div class="mb-3">
                <input class="form-control" type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" name="institution" placeholder="Institution Name" required>
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" name="contactNo" placeholder="Contact Number" required>
            </div>
            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="Email Address" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script>
        function showDemoForm() {
            document.getElementById("demo-overlay").style.display = "block";
            document.querySelector(".demo-form").style.display = "block";
        }

        function hideDemoForm() {
            document.getElementById("demo-overlay").style.display = "none";
            document.querySelector(".demo-form").style.display = "none";
        }
    </script>

</body>
</html>