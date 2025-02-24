<?php
$pageTitle = 'Notes';
$additionalHead = '
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
';
ob_start();
?>

<div class="service-content">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Notes</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-journal-text text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">My Notes</h5>
                        <button class="btn btn-light btn-sm btn-new-note">
                            <i class="bi bi-plus-lg"></i> New Note
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="notes-list">
                            <div class="note-item mb-3 p-3 border rounded">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1">Database Management Systems</h5>
                                        <p class="text-muted mb-2">Chapter 4: Normalization</p>
                                        <div class="mb-2">
                                            <span class="badge bg-info me-2">DBMS</span>
                                            <span class="badge bg-secondary">Important</span>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-primary btn-sm btn-edit-note">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-danger btn-sm btn-delete-note">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <small class="text-muted">Last edited: March 1, 2025</small>
                            </div>

                            <div class="note-item mb-3 p-3 border rounded">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1">Web Development</h5>
                                        <p class="text-muted mb-2">React Hooks and State Management</p>
                                        <div class="mb-2">
                                            <span class="badge bg-warning me-2">React</span>
                                            <span class="badge bg-info">Frontend</span>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-primary btn-sm btn-edit-note">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-danger btn-sm btn-delete-note">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <small class="text-muted">Last edited: February 28, 2025</small>
                            </div>

                            <div class="note-item p-3 border rounded">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1">Software Engineering</h5>
                                        <p class="text-muted mb-2">Design Patterns and Architecture</p>
                                        <div class="mb-2">
                                            <span class="badge bg-success me-2">SE</span>
                                            <span class="badge bg-secondary">Exam Prep</span>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-primary btn-sm btn-edit-note">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-danger btn-sm btn-delete-note">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <small class="text-muted">Last edited: February 25, 2025</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">Quick Filters</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-outline-primary btn-sm">All Notes</button>
                            <button class="btn btn-outline-secondary btn-sm">DBMS</button>
                            <button class="btn btn-outline-warning btn-sm">React</button>
                            <button class="btn btn-outline-success btn-sm">SE</button>
                            <button class="btn btn-outline-info btn-sm">Frontend</button>
                            <button class="btn btn-outline-dark btn-sm">Exam Prep</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Tools</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-cloud-upload me-2"></i>Import Notes
                            </button>
                            <button class="btn btn-outline-success">
                                <i class="bi bi-cloud-download me-2"></i>Export Notes
                            </button>
                            <button class="btn btn-outline-info">
                                <i class="bi bi-share me-2"></i>Share Notes
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
