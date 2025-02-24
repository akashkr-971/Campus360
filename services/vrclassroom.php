<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Reality Classroom</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="theme.css">
</head>
<body>
<?php include '../header.php'; ?>

<div class="container py-5" style="margin-top:50px">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Virtual Reality Classroom</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-display text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3>Available VR Sessions</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Time</th>
                                    <th>Instructor</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Human Anatomy</td>
                                    <td>10:00 AM</td>
                                    <td>Dr. Smith</td>
                                    <td><button class="btn btn-sm btn-primary">Join</button></td>
                                </tr>
                                <tr>
                                    <td>Architecture Design</td>
                                    <td>2:00 PM</td>
                                    <td>Prof. Johnson</td>
                                    <td><button class="btn btn-sm btn-primary">Join</button></td>
                                </tr>
                                <tr>
                                    <td>Chemistry Lab</td>
                                    <td>3:30 PM</td>
                                    <td>Dr. Brown</td>
                                    <td><button class="btn btn-sm btn-primary">Join</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Featured Experience</h3>
                    <div class="ratio ratio-16x9 mb-3">
                        <img src="https://images.unsplash.com/photo-1622979135225-d2ba269cf1ac" class="img-fluid rounded" alt="VR Experience">
                    </div>
                    <h4>Interactive Solar System Tour</h4>
                    <p>Explore the wonders of our solar system in this immersive VR experience. Travel between planets, observe astronomical phenomena, and learn about space exploration.</p>
                    <button class="btn btn-primary">Start Experience</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3>System Requirements</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">VR Headset (Oculus/HTC Vive)</li>
                        <li class="list-group-item">Stable Internet Connection</li>
                        <li class="list-group-item">Windows 10 or later</li>
                        <li class="list-group-item">8GB RAM minimum</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Quick Guide</h3>
                    <div class="accordion" id="vrGuide">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#setup">
                                    Setup Instructions
                                </button>
                            </h2>
                            <div id="setup" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Step-by-step guide to set up your VR equipment...
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#controls">
                                    Controls Guide
                                </button>
                            </h2>
                            <div id="controls" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Learn how to navigate in VR space...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
