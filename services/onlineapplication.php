<?php
$pageTitle = 'Online Application';
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Campus360' : 'Campus360'; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .form-section {
            display: none;
        }
        .form-section.active {
            display: block;
        }
        .divider .line {
            width: 50px;
            height: 3px;
        }
        #submittedApps {
            max-height: 500px;
            overflow-y: auto;
            background: #f9f9f9;
        }
        .app-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .app-item:hover {
            background-color: #e9ecef;
        }
        .app-item:last-child {
            border-bottom: none;
        }
        .app-item strong {
            color: #007bff;
        }
        /* Expanded Overlay Styling */
        .expanded-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2000;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .expanded-overlay.active {
            visibility: visible;
            opacity: 1;
        }
        .expanded-content {
            background: #fff;
            padding: 0; /* Remove padding to let header/content handle it */
            border-radius: 12px;
            max-width: 550px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.3s ease-out;
        }
        .expanded-header {
            background: #007bff;
            color: white;
            padding: 15px 20px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            position: relative;
        }
        .expanded-header h5 {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 600;
        }
        .expanded-details {
            padding: 20px;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .expanded-details p {
            margin: 0 0 10px;
        }
        .expanded-details strong {
            color: #333;
            font-weight: 600;
        }
        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            font-size: 1.2rem;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .close-btn:hover {
            background: rgba(255, 255, 255, 0.4);
        }
        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <?php require '../includes/layout.php'; ?>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold" style="margin-top:-180px;">Online Application Form</h1>
                <div class="divider d-flex align-items-center justify-content-center mb-4">
                    <div class="line bg-primary"></div>
                    <div class="mx-3"><i class="bi bi-file-earmark-text-fill text-primary"></i></div>
                    <div class="line bg-primary"></div>
                </div>
                <p class="lead text-muted">Submit applications for leaves, duties, classroom issues, or resource requests seamlessly.</p>
            </div>
        </div>

        <div class="row">
            <!-- Application Form -->
            <div class="col-lg-8">
                <div class="card shadow-sm p-4">
                    <form id="applicationForm">
                        <!-- Common Fields -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" required placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" required placeholder="Enter your email">
                        </div>
                        <div class="mb-4">
                            <label for="type" class="form-label">Application Type <span class="text-danger">*</span></label>
                            <select class="form-select" id="type" required>
                                <option value="">Select an application type...</option>
                                <option value="leave">Leave Application</option>
                                <option value="on-duty">On Duty Request</option>
                                <option value="issue">Issue with Smart Classroom</option>
                                <option value="request">Request for Something</option>
                            </select>
                        </div>

                        <!-- Dynamic Fields Sections -->
                        <!-- Leave Application -->
                        <div id="leaveFields" class="form-section">
                            <div class="mb-3">
                                <label for="leaveReason" class="form-label">Reason for Leave <span class="text-danger">*</span></label>
                                <select class="form-select" id="leaveReason" required>
                                    <option value="">Select a reason...</option>
                                    <option value="medical">Medical Leave</option>
                                    <option value="personal">Personal Leave</option>
                                    <option value="family">Family Emergency</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="leaveStart" class="form-label">Start Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="leaveStart" required>
                            </div>
                            <div class="mb-3">
                                <label for="leaveEnd" class="form-label">End Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="leaveEnd" required>
                            </div>
                            <div class="mb-3">
                                <label for="leaveDetails" class="form-label">Additional Details</label>
                                <textarea class="form-control" id="leaveDetails" rows="3" placeholder="Provide any additional information"></textarea>
                            </div>
                        </div>

                        <!-- On Duty Request -->
                        <div id="onDutyFields" class="form-section">
                            <div class="mb-3">
                                <label for="dutyPurpose" class="form-label">Purpose of Duty <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="dutyPurpose" required placeholder="e.g., Workshop, Field Trip">
                            </div>
                            <div class="mb-3">
                                <label for="dutyDate" class="form-label">Duty Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="dutyDate" required>
                            </div>
                            <div class="mb-3">
                                <label for="dutyLocation" class="form-label">Location <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="dutyLocation" required placeholder="e.g., Conference Hall">
                            </div>
                            <div class="mb-3">
                                <label for="dutyDetails" class="form-label">Details</label>
                                <textarea class="form-control" id="dutyDetails" rows="3" placeholder="Describe the duty or event"></textarea>
                            </div>
                        </div>

                        <!-- Issue with Smart Classroom -->
                        <div id="issueFields" class="form-section">
                            <div class="mb-3">
                                <label for="classroomNumber" class="form-label">Classroom Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="classroomNumber" required placeholder="e.g., Room 101">
                            </div>
                            <div class="mb-3">
                                <label for="issueType" class="form-label">Issue Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="issueType" required>
                                    <option value="">Select an issue...</option>
                                    <option value="projector">Projector Failure</option>
                                    <option value="audio">Audio Issues</option>
                                    <option value="internet">Internet Connectivity</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="issueDetails" class="form-label">Issue Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="issueDetails" rows="3" required placeholder="Describe the issue in detail"></textarea>
                            </div>
                        </div>

                        <!-- Request for Something -->
                        <div id="requestFields" class="form-section">
                            <div class="mb-3">
                                <label for="requestItem" class="form-label">Item/Service Requested <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="requestItem" required placeholder="e.g., Extra Chairs, Software Access">
                            </div>
                            <div class="mb-3">
                                <label for="requestReason" class="form-label">Reason for Request <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="requestReason" rows="3" required placeholder="Why do you need this?"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="requestDeadline" class="form-label">Required By (Date)</label>
                                <input type="date" class="form-control" id="requestDeadline">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">Submit Application</button>
                    </form>
                </div>
            </div>

            <!-- Submitted Applications Box -->
            <div class="col-lg-4">
                <div class="card shadow-sm p-3">
                    <h5 class="card-title mb-3">Submitted Applications</h5>
                    <div id="submittedApps"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Expanded Application Overlay -->
    <div id="expandedOverlay" class="expanded-overlay">
        <div class="expanded-content">
            <div class="expanded-header">
                <h5></h5>
                <button class="close-btn" onclick="closeExpandedView()"><i class="bi bi-x"></i></button>
            </div>
            <div class="expanded-details" id="expandedDetails"></div>
        </div>
    </div>

    <script>
        // Array to store submitted applications with dummy data
        let submittedApps = [
            {
                name: "John Doe",
                email: "john.doe@example.com",
                type: "leave",
                timestamp: "2025-02-24 10:30 AM",
                leaveReason: "Medical Leave",
                leaveStart: "2025-02-25",
                leaveEnd: "2025-02-27",
                leaveDetails: "Doctor's appointment and recovery time.",
                status: "Approved"
            },
            {
                name: "Jane Smith",
                email: "jane.smith@example.com",
                type: "request",
                timestamp: "2025-02-23 02:15 PM",
                requestItem: "Extra Projector",
                requestReason: "Need for a presentation in Room 101.",
                requestDeadline: "2025-02-26",
                status: "Pending"
            }
        ];

        // Show/hide fields based on application type
        document.getElementById('type').addEventListener('change', function() {
            const sections = document.querySelectorAll('.form-section');
            sections.forEach(section => section.classList.remove('active'));

            const selectedType = this.value;
            if (selectedType) {
                document.getElementById(selectedType + 'Fields').classList.add('active');
            }
        });

        // Form submission handler
        document.getElementById('applicationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Collect form data
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                type: document.getElementById('type').value,
                timestamp: new Date().toLocaleString()
            };

            switch (formData.type) {
                case 'leave':
                    formData.leaveReason = document.getElementById('leaveReason').value;
                    formData.leaveStart = document.getElementById('leaveStart').value;
                    formData.leaveEnd = document.getElementById('leaveEnd').value;
                    formData.leaveDetails = document.getElementById('leaveDetails').value;
                    break;
                case 'on-duty':
                    formData.dutyPurpose = document.getElementById('dutyPurpose').value;
                    formData.dutyDate = document.getElementById('dutyDate').value;
                    formData.dutyLocation = document.getElementById('dutyLocation').value;
                    formData.dutyDetails = document.getElementById('dutyDetails').value;
                    break;
                case 'issue':
                    formData.classroomNumber = document.getElementById('classroomNumber').value;
                    formData.issueType = document.getElementById('issueType').value;
                    formData.issueDetails = document.getElementById('issueDetails').value;
                    break;
                case 'request':
                    formData.requestItem = document.getElementById('requestItem').value;
                    formData.requestReason = document.getElementById('requestReason').value;
                    formData.requestDeadline = document.getElementById('requestDeadline').value;
                    break;
            }

            // Add to submitted applications array
            submittedApps.push(formData);
            updateSubmittedApps();

            // Simulate form submission
            console.log('Form Data:', formData);
            alert('Application submitted successfully!');
            this.reset();
            document.querySelectorAll('.form-section').forEach(section => section.classList.remove('active'));
        });

        // Function to update the submitted applications display
        function updateSubmittedApps() {
            const submittedAppsDiv = document.getElementById('submittedApps');
            submittedAppsDiv.innerHTML = '';

            if (submittedApps.length === 0) {
                submittedAppsDiv.innerHTML = '<p class="text-muted">No applications submitted yet.</p>';
                return;
            }

            submittedApps.forEach((app, index) => {
                let summary = `<div class="app-item" onclick="expandApplication(${index})">`;
                summary += `<strong>${app.name}</strong> (${app.email})<br>`;
                summary += `<small>Type: ${app.type} | Submitted: ${app.timestamp}</small>`;
                summary += `</div>`;
                submittedAppsDiv.innerHTML += summary;
            });
        }

        // Function to expand application details
        function expandApplication(index) {
            const app = submittedApps[index];
            const overlay = document.getElementById('expandedOverlay');
            const detailsDiv = document.getElementById('expandedDetails');
            const header = overlay.querySelector('.expanded-header h5');
            header.textContent = `${app.name}'s Application`;
            let details = `<p><strong>Email:</strong> ${app.email}</p>`;
            details += `<p><strong>Type:</strong> ${app.type}</p>`;
            details += `<p><strong>Submitted:</strong> ${app.timestamp}</p>`;

            switch (app.type) {
                case 'leave':
                    details += `<p><strong>Reason:</strong> ${app.leaveReason}</p>`;
                    details += `<p><strong>Start Date:</strong> ${app.leaveStart}</p>`;
                    details += `<p><strong>End Date:</strong> ${app.leaveEnd}</p>`;
                    if (app.leaveDetails) details += `<p><strong>Details:</strong> ${app.leaveDetails}</p>`;
                    details += `<p><strong>Status:</strong> ${app.status || 'Pending'}</p>`;
                    break;
                case 'on-duty':
                    details += `<p><strong>Purpose:</strong> ${app.dutyPurpose}</p>`;
                    details += `<p><strong>Date:</strong> ${app.dutyDate}</p>`;
                    details += `<p><strong>Location:</strong> ${app.dutyLocation}</p>`;
                    if (app.dutyDetails) details += `<p><strong>Details:</strong> ${app.dutyDetails}</p>`;
                    details += `<p><strong>Status:</strong> ${app.status || 'Pending'}</p>`;
                    break;
                case 'issue':
                    details += `<p><strong>Room:</strong> ${app.classroomNumber}</p>`;
                    details += `<p><strong>Issue:</strong> ${app.issueType}</p>`;
                    if (app.issueDetails) details += `<p><strong>Details:</strong> ${app.issueDetails}</p>`;
                    details += `<p><strong>Status:</strong> ${app.status || 'Pending'}</p>`;
                    break;
                case 'request':
                    details += `<p><strong>Item:</strong> ${app.requestItem}</p>`;
                    if (app.requestReason) details += `<p><strong>Reason:</strong> ${app.requestReason}</p>`;
                    if (app.requestDeadline) details += `<p><strong>Deadline:</strong> ${app.requestDeadline}</p>`;
                    details += `<p><strong>Status:</strong> ${app.status || 'Pending'}</p>`;
                    break;
            }

            detailsDiv.innerHTML = details;
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        // Function to close expanded view
        function closeExpandedView() {
            const overlay = document.getElementById('expandedOverlay');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Initialize with dummy data
        window.onload = updateSubmittedApps;
    </script>
</body>
</html>

<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/Campus360/includes/layout.php';
?>