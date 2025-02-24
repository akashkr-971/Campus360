<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Finder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="theme.css">
</head>
<body>

<?php include '../header.php'; ?>

<div class="container py-5" style="margin-top:100px">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Internship Finder</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-briefcase-fill text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Field of Study</label>
                            <select class="form-select">
                                <option selected>Choose...</option>
                                <option>Computer Science</option>
                                <option>Engineering</option>
                                <option>Business</option>
                                <option>Healthcare</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control" placeholder="Enter city or remote">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Search Internships</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Software Development Intern</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Tech Solutions Inc.</h6>
                    <p class="card-text">Join our dynamic team and work on real-world projects using cutting-edge technologies.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt me-2"></i>San Francisco, CA</li>
                        <li><i class="bi bi-clock me-2"></i>3 months</li>
                        <li><i class="bi bi-currency-dollar me-2"></i>Paid</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Marketing Assistant</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Global Marketing Co.</h6>
                    <p class="card-text">Gain hands-on experience in digital marketing and social media management.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt me-2"></i>Remote</li>
                        <li><i class="bi bi-clock me-2"></i>6 months</li>
                        <li><i class="bi bi-currency-dollar me-2"></i>Stipend Available</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Research Assistant</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Research Institute</h6>
                    <p class="card-text">Assist in groundbreaking research projects in your field of study.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt me-2"></i>Boston, MA</li>
                        <li><i class="bi bi-clock me-2"></i>4 months</li>
                        <li><i class="bi bi-currency-dollar me-2"></i>Paid</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 100px;"></div>
<?php include '../footer.php'; ?>


    
</body>
</html>