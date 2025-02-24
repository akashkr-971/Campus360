<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="theme.css">
</head>
<body>
<?php include '../header.php'; ?>
<div class="container py-5"  style="margin-top:50px">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Scholarship Portal</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-mortarboard-fill text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4">Available Scholarships</h3>
                    
                    <div class="scholarship-item mb-4 p-3 border rounded">
                        <h4>Merit Scholarship 2025</h4>
                        <p class="text-muted">For students with exceptional academic performance</p>
                        <ul>
                            <li>Amount: Up to $5,000</li>
                            <li>Deadline: March 31, 2025</li>
                            <li>Eligibility: GPA 3.5 or higher</li>
                        </ul>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>

                    <div class="scholarship-item mb-4 p-3 border rounded">
                        <h4>Need-Based Financial Aid</h4>
                        <p class="text-muted">Supporting students with financial needs</p>
                        <ul>
                            <li>Amount: Variable based on need</li>
                            <li>Deadline: Ongoing</li>
                            <li>Eligibility: Demonstrated financial need</li>
                        </ul>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>

                    <div class="scholarship-item p-3 border rounded">
                        <h4>Research Excellence Scholarship</h4>
                        <p class="text-muted">For students pursuing research projects</p>
                        <ul>
                            <li>Amount: Up to $3,000</li>
                            <li>Deadline: April 15, 2025</li>
                            <li>Eligibility: Research proposal required</li>
                        </ul>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="card-title mb-3">Application Status</h3>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary">Check Status</button>
                        <button class="btn btn-outline-secondary">View History</button>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-3">Resources</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-file-text me-2"></i><a href="#" class="text-decoration-none">Application Guide</a></li>
                        <li class="mb-2"><i class="bi bi-question-circle me-2"></i><a href="#" class="text-decoration-none">FAQs</a></li>
                        <li class="mb-2"><i class="bi bi-chat-dots me-2"></i><a href="#" class="text-decoration-none">Contact Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>


</body>
</html>