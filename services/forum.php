<html>
    <head>
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
            <h1 class="display-4 fw-bold">Peer Discussion Forum</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-chat-square-text-fill text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0">Recent Discussions</h3>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newTopicModal">
                            <i class="bi bi-plus-lg me-2"></i>New Topic
                        </button>
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Tips for Final Exam Preparation</h5>
                                <small class="text-muted">3 hours ago</small>
                            </div>
                            <p class="mb-1">Looking for study group partners and advice on exam preparation...</p>
                            <small class="text-muted">
                                <i class="bi bi-person-fill me-1"></i>Sarah Wilson
                                <i class="bi bi-chat-fill ms-3 me-1"></i>15 replies
                                <i class="bi bi-eye-fill ms-3 me-1"></i>45 views
                            </small>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Project Collaboration Opportunity</h5>
                                <small class="text-muted">1 day ago</small>
                            </div>
                            <p class="mb-1">Seeking team members for the upcoming hackathon...</p>
                            <small class="text-muted">
                                <i class="bi bi-person-fill me-1"></i>Mike Brown
                                <i class="bi bi-chat-fill ms-3 me-1"></i>8 replies
                                <i class="bi bi-eye-fill ms-3 me-1"></i>32 views
                            </small>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Research Paper Resources</h5>
                                <small class="text-muted">2 days ago</small>
                            </div>
                            <p class="mb-1">Looking for reliable sources for my research paper on AI ethics...</p>
                            <small class="text-muted">
                                <i class="bi bi-person-fill me-1"></i>Emily Chen
                                <i class="bi bi-chat-fill ms-3 me-1"></i>12 replies
                                <i class="bi bi-eye-fill ms-3 me-1"></i>38 views
                            </small>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Popular Tags</h3>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#" class="badge bg-primary text-decoration-none">Exams</a>
                        <a href="#" class="badge bg-secondary text-decoration-none">Projects</a>
                        <a href="#" class="badge bg-success text-decoration-none">Study Groups</a>
                        <a href="#" class="badge bg-info text-decoration-none">Research</a>
                        <a href="#" class="badge bg-warning text-decoration-none">Programming</a>
                        <a href="#" class="badge bg-danger text-decoration-none">Career</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3>Search Discussions</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search topics...">
                        <button class="btn btn-primary" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected>All Categories</option>
                            <option>Academic</option>
                            <option>Career</option>
                            <option>Campus Life</option>
                            <option>Events</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3>Forum Statistics</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-people-fill text-primary me-2"></i>
                            Active Users: 1,234
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-chat-square-text-fill text-success me-2"></i>
                            Total Topics: 567
                        </li>
                        <li>
                            <i class="bi bi-reply-fill text-info me-2"></i>
                            Total Replies: 2,345
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Forum Guidelines</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Be respectful to others</li>
                        <li class="list-group-item">No spam or self-promotion</li>
                        <li class="list-group-item">Stay on topic</li>
                        <li class="list-group-item">Follow academic integrity</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- New Topic Modal -->
<div class="modal fade" id="newTopicModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Topic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Topic Title</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" required>
                            <option value="">Select Category</option>
                            <option>Academic</option>
                            <option>Career</option>
                            <option>Campus Life</option>
                            <option>Events</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <input type="text" class="form-control" placeholder="Separate tags with commas">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Create Topic</button>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
    </body>
</html>

