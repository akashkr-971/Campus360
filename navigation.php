<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Navigation</title>
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
            <h1 class="display-4 fw-bold">Campus Navigation</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-compass-fill text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search for a location...">
                        <button class="btn btn-primary" type="button">Search</button>
                    </div>
                    <!-- Placeholder for the map -->
                    <div id="campusMap" style="height: 400px; background-color: #eee;" class="rounded">
                        <!-- Map will be loaded here -->
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Popular Destinations</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-2 border rounded">
                                <i class="bi bi-book-fill fs-4 me-3 text-primary"></i>
                                <div>
                                    <h5 class="mb-0">Main Library</h5>
                                    <small class="text-muted">Open 24/7</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-2 border rounded">
                                <i class="bi bi-cup-hot-fill fs-4 me-3 text-primary"></i>
                                <div>
                                    <h5 class="mb-0">Student Center</h5>
                                    <small class="text-muted">7 AM - 10 PM</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-2 border rounded">
                                <i class="bi bi-laptop-fill fs-4 me-3 text-primary"></i>
                                <div>
                                    <h5 class="mb-0">Computer Lab</h5>
                                    <small class="text-muted">8 AM - 8 PM</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-2 border rounded">
                                <i class="bi bi-heart-pulse-fill fs-4 me-3 text-primary"></i>
                                <div>
                                    <h5 class="mb-0">Health Center</h5>
                                    <small class="text-muted">9 AM - 5 PM</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3>Quick Navigation</h3>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Academic Buildings</h5>
                                <small><i class="bi bi-chevron-right"></i></small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Residential Halls</h5>
                                <small><i class="bi bi-chevron-right"></i></small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Sports Facilities</h5>
                                <small><i class="bi bi-chevron-right"></i></small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Parking Areas</h5>
                                <small><i class="bi bi-chevron-right"></i></small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Emergency Contacts</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-telephone-fill text-danger me-2"></i>
                            Campus Security: 555-0123
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-hospital-fill text-danger me-2"></i>
                            Health Services: 555-0124
                        </li>
                        <li>
                            <i class="bi bi-wrench-adjustable-circle-fill text-danger me-2"></i>
                            Maintenance: 555-0125
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
