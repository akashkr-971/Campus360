<?php
$pageTitle = 'Learning Management System';
ob_start();
?>

<style>
.dashboard-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 15px;
}

.dashboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.stat-card {
    background: linear-gradient(45deg, #4e73df 0%, #224abe 100%);
    color: white;
    border-radius: 15px;
    padding: 20px;
}

.progress-bar-custom {
    height: 10px;
    border-radius: 5px;
}

.course-card {
    border-left: 5px solid #4e73df;
}

.attendance-status {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    display: inline-block;
    margin-right: 5px;
}

.status-present { background-color: #1cc88a; }
.status-absent { background-color: #e74a3b; }
.status-late { background-color: #f6c23e; }

.calendar-event {
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
    background-color: #f8f9fc;
    border-left: 4px solid #4e73df;
}
</style>

<div class="service-content">
    <div class="container mt-4">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Learning Management System</h1>
                <div class="divider d-flex align-items-center justify-content-center mb-4">
                    <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                    <div class="mx-3"><i class="bi bi-mortarboard-fill text-primary"></i></div>
                    <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="row g-4 mb-4">
            <div class="col-xl-3 col-md-6">
                <div class="stat-card dashboard-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50">Overall Attendance</h6>
                            <h2 class="mb-0">85%</h2>
                        </div>
                        <div class="icon-circle">
                            <i class="bi bi-person-check-fill fa-2x text-white-50"></i>
                        </div>
                    </div>
                    <div class="progress mt-3 progress-bar-custom">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="stat-card dashboard-card" style="background: linear-gradient(45deg, #1cc88a 0%, #169a6f 100%);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50">Current GPA</h6>
                            <h2 class="mb-0">3.8</h2>
                        </div>
                        <div class="icon-circle">
                            <i class="bi bi-graph-up fa-2x text-white-50"></i>
                        </div>
                    </div>
                    <div class="progress mt-3 progress-bar-custom">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="stat-card dashboard-card" style="background: linear-gradient(45deg, #36b9cc 0%, #258391 100%);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50">Assignments</h6>
                            <h2 class="mb-0">12/15</h2>
                        </div>
                        <div class="icon-circle">
                            <i class="bi bi-file-text fa-2x text-white-50"></i>
                        </div>
                    </div>
                    <div class="progress mt-3 progress-bar-custom">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="stat-card dashboard-card" style="background: linear-gradient(45deg, #f6c23e 0%, #dda20a 100%);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white-50">Active Courses</h6>
                            <h2 class="mb-0">6</h2>
                        </div>
                        <div class="icon-circle">
                            <i class="bi bi-book fa-2x text-white-50"></i>
                        </div>
                    </div>
                    <div class="progress mt-3 progress-bar-custom">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Course List -->
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Current Courses</h5>
                    </div>
                    <div class="card-body">
                        <div class="course-card p-3 mb-3 bg-light">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-1">Advanced Web Development</h5>
                                    <p class="mb-0 text-muted">Prof. Johnson • CSE401</p>
                                </div>
                                <div class="text-end">
                                    <div class="mb-1">
                                        <span class="attendance-status status-present"></span>
                                        Attendance: 90%
                                    </div>
                                    <button class="btn btn-sm btn-primary">View Details</button>
                                </div>
                            </div>
                        </div>

                        <div class="course-card p-3 mb-3 bg-light">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-1">Database Management</h5>
                                    <p class="mb-0 text-muted">Dr. Smith • CSE302</p>
                                </div>
                                <div class="text-end">
                                    <div class="mb-1">
                                        <span class="attendance-status status-late"></span>
                                        Attendance: 85%
                                    </div>
                                    <button class="btn btn-sm btn-primary">View Details</button>
                                </div>
                            </div>
                        </div>

                        <div class="course-card p-3 mb-3 bg-light">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-1">Software Engineering</h5>
                                    <p class="mb-0 text-muted">Prof. Williams • CSE405</p>
                                </div>
                                <div class="text-end">
                                    <div class="mb-1">
                                        <span class="attendance-status status-present"></span>
                                        Attendance: 95%
                                    </div>
                                    <button class="btn btn-sm btn-primary">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Assignments -->
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Upcoming Assignments</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Assignment</th>
                                        <th>Course</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Project Proposal</td>
                                        <td>CSE401</td>
                                        <td>Mar 1, 2025</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td><button class="btn btn-sm btn-outline-primary">Submit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Database Design</td>
                                        <td>CSE302</td>
                                        <td>Mar 5, 2025</td>
                                        <td><span class="badge bg-success">Submitted</span></td>
                                        <td><button class="btn btn-sm btn-outline-secondary">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>Code Review</td>
                                        <td>CSE405</td>
                                        <td>Mar 8, 2025</td>
                                        <td><span class="badge bg-danger">Overdue</span></td>
                                        <td><button class="btn btn-sm btn-outline-danger">Submit Late</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Calendar -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Upcoming Events</h5>
                    </div>
                    <div class="card-body">
                        <div class="calendar-event">
                            <h6 class="mb-1">Midterm Exam - CSE401</h6>
                            <small class="text-muted">
                                <i class="bi bi-calendar3"></i> Mar 15, 2025
                                <i class="bi bi-clock ms-2"></i> 10:00 AM
                            </small>
                        </div>
                        <div class="calendar-event">
                            <h6 class="mb-1">Group Project Meeting</h6>
                            <small class="text-muted">
                                <i class="bi bi-calendar3"></i> Mar 18, 2025
                                <i class="bi bi-clock ms-2"></i> 2:00 PM
                            </small>
                        </div>
                        <div class="calendar-event">
                            <h6 class="mb-1">Guest Lecture - AI Ethics</h6>
                            <small class="text-muted">
                                <i class="bi bi-calendar3"></i> Mar 20, 2025
                                <i class="bi bi-clock ms-2"></i> 3:30 PM
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-cloud-upload me-2"></i>Submit Assignment
                            </button>
                            <button class="btn btn-outline-success">
                                <i class="bi bi-calendar-check me-2"></i>Mark Attendance
                            </button>
                            <button class="btn btn-outline-info">
                                <i class="bi bi-chat-dots me-2"></i>Contact Professor
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-file-earmark-text me-2"></i>View Grades
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
include '../includes/layout.php';
?>
