<?php
$pageTitle = 'Discussion Forum';
$additionalHead = '
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
';
ob_start();
?>

<div class="service-content">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Discussion Forum</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-chat-dots text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Recent Discussions</h5>
                        <button class="btn btn-light btn-sm btn-new-topic">
                            <i class="bi bi-plus-lg"></i> New Topic
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="discussion-list">
                            <div class="discussion-item mb-4 p-3 border rounded">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="mb-1">Help with React Hooks Implementation</h5>
                                        <p class="text-muted mb-2">Having trouble understanding useEffect dependencies...</p>
                                        <div class="mb-2">
                                            <span class="badge bg-warning me-2">React</span>
                                            <span class="badge bg-info me-2">Frontend</span>
                                            <span class="badge bg-success">Active</span>
                                        </div>
                                        <small class="text-muted">
                                            <i class="bi bi-person-circle me-1"></i>John Doe
                                            <i class="bi bi-clock ms-2 me-1"></i>2 hours ago
                                            <i class="bi bi-chat-dots ms-2 me-1"></i>5 replies
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="discussion-item mb-4 p-3 border rounded">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="mb-1">Database Normalization Question</h5>
                                        <p class="text-muted mb-2">Need help understanding 3NF vs BCNF...</p>
                                        <div class="mb-2">
                                            <span class="badge bg-info me-2">DBMS</span>
                                            <span class="badge bg-danger">Urgent</span>
                                        </div>
                                        <small class="text-muted">
                                            <i class="bi bi-person-circle me-1"></i>Jane Smith
                                            <i class="bi bi-clock ms-2 me-1"></i>5 hours ago
                                            <i class="bi bi-chat-dots ms-2 me-1"></i>3 replies
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="discussion-item p-3 border rounded">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="mb-1">Software Design Patterns Discussion</h5>
                                        <p class="text-muted mb-2">Let's discuss the practical applications of Factory Pattern...</p>
                                        <div class="mb-2">
                                            <span class="badge bg-success me-2">Design Patterns</span>
                                            <span class="badge bg-primary">Discussion</span>
                                        </div>
                                        <small class="text-muted">
                                            <i class="bi bi-person-circle me-1"></i>Mike Johnson
                                            <i class="bi bi-clock ms-2 me-1"></i>1 day ago
                                            <i class="bi bi-chat-dots ms-2 me-1"></i>12 replies
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">Popular Tags</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-outline-warning btn-sm btn-tag-filter">React</button>
                            <button class="btn btn-outline-info btn-sm btn-tag-filter">DBMS</button>
                            <button class="btn btn-outline-success btn-sm btn-tag-filter">Design Patterns</button>
                            <button class="btn btn-outline-primary btn-sm btn-tag-filter">JavaScript</button>
                            <button class="btn btn-outline-secondary btn-sm btn-tag-filter">Python</button>
                            <button class="btn btn-outline-danger btn-sm btn-tag-filter">Java</button>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Top Contributors</h5>
                    </div>
                    <div class="card-body">
                        <div class="contributor-list">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <img src="https://ui-avatars.com/api/?name=John+Doe" class="rounded-circle" width="40">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0">John Doe</h6>
                                    <small class="text-muted">150 posts</small>
                                </div>
                                <span class="badge bg-primary">Expert</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <img src="https://ui-avatars.com/api/?name=Jane+Smith" class="rounded-circle" width="40">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0">Jane Smith</h6>
                                    <small class="text-muted">120 posts</small>
                                </div>
                                <span class="badge bg-info">Pro</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="https://ui-avatars.com/api/?name=Mike+Johnson" class="rounded-circle" width="40">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0">Mike Johnson</h6>
                                    <small class="text-muted">95 posts</small>
                                </div>
                                <span class="badge bg-success">Active</span>
                            </div>
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
