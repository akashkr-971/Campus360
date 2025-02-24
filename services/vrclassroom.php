<?php
$pageTitle = 'VR Classroom';
$additionalHead = '
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
';
ob_start();
?>

<div class="service-content">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">VR Classroom</h1>
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
                        <h5 class="card-title mb-0">Available VR Sessions</h5>
                    </div>
                    <div class="card-body">
                        <div class="vr-session mb-4 p-3 border rounded">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>3D Model Design Workshop</h4>
                                    <p class="text-muted mb-2">Learn 3D modeling in an immersive environment</p>
                                    <div class="mb-2">
                                        <span class="badge bg-success me-2">Live Now</span>
                                        <span class="badge bg-info">25 Participants</span>
                                    </div>
                                    <small class="text-muted">Instructor: Prof. Anderson</small>
                                </div>
                                <button class="btn btn-primary btn-join-session">Join Session</button>
                            </div>
                        </div>

                        <div class="vr-session mb-4 p-3 border rounded">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>Virtual Chemistry Lab</h4>
                                    <p class="text-muted mb-2">Conduct experiments in a safe VR environment</p>
                                    <div class="mb-2">
                                        <span class="badge bg-warning me-2">Starting in 30m</span>
                                        <span class="badge bg-info">15 Participants</span>
                                    </div>
                                    <small class="text-muted">Instructor: Dr. Martinez</small>
                                </div>
                                <button class="btn btn-outline-primary btn-join-session">Join Waiting Room</button>
                            </div>
                        </div>

                        <div class="vr-session p-3 border rounded">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>Architecture Visualization</h4>
                                    <p class="text-muted mb-2">Explore architectural designs in VR</p>
                                    <div class="mb-2">
                                        <span class="badge bg-secondary me-2">Scheduled</span>
                                        <span class="badge bg-info">30 Participants</span>
                                    </div>
                                    <small class="text-muted">Instructor: Prof. Thompson</small>
                                </div>
                                <button class="btn btn-outline-primary btn-join-session">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">System Requirements</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="bi bi-gpu-card me-2"></i>
                                Graphics: NVIDIA GTX 1060 or better
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-cpu me-2"></i>
                                Processor: Intel i5 or better
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-memory me-2"></i>
                                RAM: 8GB minimum
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-wifi me-2"></i>
                                Internet: 10 Mbps or faster
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Quick Setup</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary btn-download-client">
                                <i class="bi bi-download me-2"></i>Download VR Client
                            </button>
                            <button class="btn btn-outline-info">
                                <i class="bi bi-gear me-2"></i>Setup Guide
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-question-circle me-2"></i>Help & Support
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
$additionalScripts = '<script src="../js/service-interactions.js"></script>';
include '../includes/layout.php';
?>
