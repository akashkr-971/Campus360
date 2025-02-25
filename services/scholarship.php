<?php
$pageTitle = 'Scholarships';
ob_start();
?>

<div class="service-content">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Scholarships</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-award-fill text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Available Scholarships</h5>
                    </div>
                    <div class="card-body">
                        <div class="scholarship-item mb-4 p-3 border rounded">
                            <h4>Merit Scholarship 2025</h4>
                            <p class="text-muted">For outstanding academic achievement</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Amount: ₹5000</span>
                                <button class="btn btn-primary">Apply Now</button>
                            </div>
                        </div>
                        <div class="scholarship-item mb-4 p-3 border rounded">
                            <h4>Research Grant</h4>
                            <p class="text-muted">For innovative research projects</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Amount: ₹3000</span>
                                <button class="btn btn-primary">Apply Now</button>
                            </div>
                        </div>
                        <div class="scholarship-item p-3 border rounded">
                            <h4>Need-Based Aid</h4>
                            <p class="text-muted">Financial assistance for eligible students</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Amount: Variable</span>
                                <button class="btn btn-primary">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">Application Status</h5>
                    </div>
                    <div class="card-body">
                        <div class="status-item mb-3">
                            <h6>Merit Scholarship 2025</h6>
                            <span class="badge bg-warning">Under Review</span>
                        </div>
                        <div class="status-item">
                            <h6>Research Grant</h6>
                            <span class="badge bg-secondary">Draft Saved</span>
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