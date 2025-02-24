<?php
$pageTitle = 'Internships';
ob_start();
?>

<div class="service-content">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Internships</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-briefcase-fill text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Available Internships</h5>
                    </div>
                    <div class="card-body">
                        <div class="internship-item mb-4 p-3 border rounded">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Software Developer Intern</h4>
                                    <p class="text-muted mb-2">Google</p>
                                    <div class="mb-2">
                                        <span class="badge bg-primary me-2">Remote</span>
                                        <span class="badge bg-info me-2">Paid</span>
                                        <span class="badge bg-secondary">3 Months</span>
                                    </div>
                                </div>
                                <img src="https://logo.clearbit.com/google.com" alt="Google" class="company-logo" style="width: 50px; height: 50px; object-fit: contain;">
                            </div>
                            <button class="btn btn-primary mt-2">Apply Now</button>
                        </div>

                        <div class="internship-item mb-4 p-3 border rounded">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Data Science Intern</h4>
                                    <p class="text-muted mb-2">Microsoft</p>
                                    <div class="mb-2">
                                        <span class="badge bg-success me-2">On-site</span>
                                        <span class="badge bg-info me-2">Paid</span>
                                        <span class="badge bg-secondary">6 Months</span>
                                    </div>
                                </div>
                                <img src="https://logo.clearbit.com/microsoft.com" alt="Microsoft" class="company-logo" style="width: 50px; height: 50px; object-fit: contain;">
                            </div>
                            <button class="btn btn-primary mt-2">Apply Now</button>
                        </div>

                        <div class="internship-item p-3 border rounded">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>UI/UX Design Intern</h4>
                                    <p class="text-muted mb-2">Apple</p>
                                    <div class="mb-2">
                                        <span class="badge bg-success me-2">On-site</span>
                                        <span class="badge bg-info me-2">Paid</span>
                                        <span class="badge bg-secondary">4 Months</span>
                                    </div>
                                </div>
                                <img src="https://logo.clearbit.com/apple.com" alt="Apple" class="company-logo" style="width: 50px; height: 50px; object-fit: contain;">
                            </div>
                            <button class="btn btn-primary mt-2">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">Application Status</h5>
                    </div>
                    <div class="card-body">
                        <div class="status-item mb-3">
                            <h6>Google - Software Developer Intern</h6>
                            <span class="badge bg-warning">Interview Scheduled</span>
                            <small class="text-muted d-block">March 5, 2025 - 10:00 AM</small>
                        </div>
                        <div class="status-item">
                            <h6>Microsoft - Data Science Intern</h6>
                            <span class="badge bg-info">Application Submitted</span>
                            <small class="text-muted d-block">Applied on March 1, 2025</small>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Resources</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="bi bi-file-text me-2"></i>Resume Templates
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="bi bi-camera-video me-2"></i>Interview Tips
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="bi bi-journal-text me-2"></i>Cover Letter Guide
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../includes/layout.php';
?>