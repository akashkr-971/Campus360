<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Support Services</title>
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
            <h1 class="display-4 fw-bold">Student Support Services</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-people-fill text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3>Book an Appointment</h3>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Service Type</label>
                            <select class="form-select">
                                <option selected>Choose...</option>
                                <option>Academic Advising</option>
                                <option>Career Counseling</option>
                                <option>Mental Health Support</option>
                                <option>Financial Aid Consultation</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Preferred Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Time Slot</label>
                            <select class="form-select">
                                <option selected>Choose...</option>
                                <option>9:00 AM</option>
                                <option>10:00 AM</option>
                                <option>11:00 AM</option>
                                <option>2:00 PM</option>
                                <option>3:00 PM</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Meeting Type</label>
                            <select class="form-select">
                                <option selected>Choose...</option>
                                <option>In-Person</option>
                                <option>Virtual</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Brief Description of Your Concern</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Schedule Appointment</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Upcoming Workshops</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Workshop</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Study Skills Enhancement</td>
                                    <td>March 1, 2025</td>
                                    <td>2:00 PM</td>
                                    <td><button class="btn btn-sm btn-primary">Register</button></td>
                                </tr>
                                <tr>
                                    <td>Stress Management</td>
                                    <td>March 5, 2025</td>
                                    <td>3:30 PM</td>
                                    <td><button class="btn btn-sm btn-primary">Register</button></td>
                                </tr>
                                <tr>
                                    <td>Career Planning</td>
                                    <td>March 10, 2025</td>
                                    <td>1:00 PM</td>
                                    <td><button class="btn btn-sm btn-primary">Register</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3>Quick Resources</h3>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-file-text me-2"></i>Academic Calendar
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-journal-text me-2"></i>Study Resources
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-card-checklist me-2"></i>Wellness Tips
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-currency-dollar me-2"></i>Financial Resources
                        </a>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>24/7 Support Lines</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <strong><i class="bi bi-telephone-fill text-success me-2"></i>Crisis Hotline</strong>
                            <p class="mb-0">1-800-555-0123</p>
                            <small class="text-muted">Available 24/7</small>
                        </li>
                        <li class="mb-3">
                            <strong><i class="bi bi-chat-dots-fill text-primary me-2"></i>Online Chat Support</strong>
                            <p class="mb-0">chat.campus360.com</p>
                            <small class="text-muted">Response within 5 minutes</small>
                        </li>
                        <li>
                            <strong><i class="bi bi-envelope-fill text-info me-2"></i>Email Support</strong>
                            <p class="mb-0">support@campus360.com</p>
                            <small class="text-muted">Response within 24 hours</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
