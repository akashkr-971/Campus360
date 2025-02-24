<?php
$pageTitle = 'Support';
$additionalHead = '
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
';
ob_start();
?>

<div class="service-content">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Support</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-headset text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Submit a Support Ticket</h5>
                    </div>
                    <div class="card-body">
                        <form class="ticket-form">
                            <div class="mb-3">
                                <label class="form-label">Issue Category</label>
                                <select class="form-select">
                                    <option selected>Select Category</option>
                                    <option>Technical Issue</option>
                                    <option>Account Access</option>
                                    <option>Course Related</option>
                                    <option>Payment Issue</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control" placeholder="Brief description of your issue">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="5" placeholder="Please provide detailed information about your issue"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Attachments</label>
                                <input type="file" class="form-control" multiple>
                                <div class="form-text">You can upload screenshots or relevant documents (Max 5MB each)</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Priority</label>
                                <select class="form-select">
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                    <option value="urgent">Urgent</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Ticket</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">Your Recent Tickets</h5>
                    </div>
                    <div class="card-body">
                        <div class="ticket-list">
                            <div class="ticket-item mb-3 p-3 border rounded">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Unable to Access Virtual Classroom</h6>
                                        <p class="text-muted mb-2">Error occurs when trying to join live session</p>
                                        <div class="mb-2">
                                            <span class="badge bg-warning">In Progress</span>
                                            <span class="badge bg-info ms-2">Technical Issue</span>
                                        </div>
                                        <small class="text-muted">Ticket #12345 • Opened 2 days ago</small>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm btn-view-ticket">View Details</button>
                                </div>
                            </div>

                            <div class="ticket-item p-3 border rounded">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Course Material Download Issue</h6>
                                        <p class="text-muted mb-2">PDF files not downloading in Chrome browser</p>
                                        <div class="mb-2">
                                            <span class="badge bg-success">Resolved</span>
                                            <span class="badge bg-info ms-2">Course Related</span>
                                        </div>
                                        <small class="text-muted">Ticket #12344 • Closed 5 days ago</small>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm btn-view-ticket">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Quick Help</h5>
                    </div>
                    <div class="card-body">
                        <div class="quick-help-list">
                            <div class="mb-3">
                                <h6><i class="bi bi-book me-2"></i>Knowledge Base</h6>
                                <p class="small text-muted">Browse through our comprehensive guides and tutorials</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Articles</a>
                            </div>
                            <div class="mb-3">
                                <h6><i class="bi bi-chat-dots me-2"></i>Live Chat</h6>
                                <p class="small text-muted">Chat with our support team in real-time</p>
                                <button class="btn btn-outline-success btn-sm btn-live-chat">Start Chat</button>
                            </div>
                            <div>
                                <h6><i class="bi bi-telephone me-2"></i>Phone Support</h6>
                                <p class="small text-muted">Call us for immediate assistance</p>
                                <p class="small fw-bold">1-800-CAMPUS360</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="card-title mb-0">Support Hours</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <strong>Monday - Friday:</strong><br>
                                9:00 AM - 8:00 PM EST
                            </li>
                            <li class="mb-2">
                                <strong>Saturday:</strong><br>
                                10:00 AM - 6:00 PM EST
                            </li>
                            <li>
                                <strong>Sunday:</strong><br>
                                12:00 PM - 5:00 PM EST
                            </li>
                        </ul>
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
