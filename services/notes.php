<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes Sharing Platform</title>
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
            <h1 class="display-4 fw-bold">Notes Sharing Platform</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-journal-text text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3>Upload Notes</h3>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Course</label>
                            <select class="form-select">
                                <option selected>Select Course</option>
                                <option>Computer Science 101</option>
                                <option>Mathematics 201</option>
                                <option>Physics 301</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Topic</label>
                            <input type="text" class="form-control" placeholder="Enter topic">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Brief description of the notes"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Upload File</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Upload Notes</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Recent Uploads</h3>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Data Structures and Algorithms</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Comprehensive notes on Binary Trees and Graph Algorithms</p>
                            <small class="text-muted">By John Doe • CS301 • PDF</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Calculus II</h5>
                                <small class="text-muted">5 days ago</small>
                            </div>
                            <p class="mb-1">Integration techniques and applications</p>
                            <small class="text-muted">By Jane Smith • MATH201 • PDF</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Organic Chemistry</h5>
                                <small class="text-muted">1 week ago</small>
                            </div>
                            <p class="mb-1">Reaction mechanisms and synthesis pathways</p>
                            <small class="text-muted">By Mike Johnson • CHEM202 • PDF</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3>Search Notes</h3>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Search by keyword, course, or uploader">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Filter by Subject</label>
                        <select class="form-select">
                            <option selected>All Subjects</option>
                            <option>Computer Science</option>
                            <option>Mathematics</option>
                            <option>Physics</option>
                            <option>Chemistry</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sort by</label>
                        <select class="form-select">
                            <option selected>Most Recent</option>
                            <option>Most Downloaded</option>
                            <option>Highest Rated</option>
                        </select>
                    </div>
                    <button class="btn btn-primary w-100">Search</button>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Your Contributions</h3>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-file-earmark-text fs-1 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Total Uploads</h6>
                            <h4 class="mb-0">15</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-download fs-1 text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Total Downloads</h6>
                            <h4 class="mb-0">234</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="bi bi-star-fill fs-1 text-warning"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Average Rating</h6>
                            <h4 class="mb-0">4.5/5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
