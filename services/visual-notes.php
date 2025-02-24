<?php
$pageTitle = 'Visual Notes';
include $_SERVER['DOCUMENT_ROOT'] . '/Campus360/includes/layout.php';
?>

<div class="service-content">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Visual Notes</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-camera-video text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Calendar Section -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Select Date</h5>
                        <div id="datepicker"></div>
                    </div>
                </div>

                <!-- Upload Section (Only visible to faculty) -->
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'faculty'): ?>
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Upload Class Video</h5>
                        <form id="uploadForm">
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" required>
                                    <option value="IMCA501">IMCA501 - Data Mining</option>
                                    <option value="IMCA502">IMCA502 - Data Structure</option>
                                    <option value="IMCA503">IMCA503 - Cryptography</option>
                                    <option value="IMCA504">IMCA504 - Algorithm and Design</option>
                                    <option value="IMCA505">IMCA505 - Linux Programming</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="videoFile" class="form-label">Video File</label>
                                <input type="file" class="form-control" id="videoFile" accept="video/*" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Upload Video</button>
                        </form>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <!-- Videos Section -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Class Videos</h5>
                        <div id="videosList">
                            <!-- Videos will be loaded here based on selected date -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.video-card {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 1rem;
    transition: transform 0.2s;
}

.video-card:hover {
    transform: translateY(-2px);
}

.video-thumbnail {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.video-info {
    padding: 1rem;
}

.subject-badge {
    font-size: 0.8rem;
    padding: 0.3rem 0.6rem;
    border-radius: 4px;
    background-color: #e9ecef;
    color: #495057;
    margin-bottom: 0.5rem;
    display: inline-block;
}

#datepicker .ui-datepicker {
    width: 100%;
}

.ui-datepicker-calendar .has-video {
    background-color: #d4edda;
    border-radius: 50%;
}
</style>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
$(document).ready(function() {
    // Initialize datepicker
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        onSelect: function(dateText) {
            loadVideos(dateText);
        }
    });

    // Sample video data (replace with actual database data)
    const sampleVideos = {
        '2025-02-24': [
            {
                subject: 'IMCA501',
                title: 'Data Mining - Classification Algorithms',
                thumbnail: 'path/to/thumbnail1.jpg',
                videoUrl: 'path/to/video1.mp4',
                description: 'Lecture on various classification algorithms in data mining.'
            },
            {
                subject: 'IMCA502',
                title: 'Data Structures - Binary Trees',
                thumbnail: 'path/to/thumbnail2.jpg',
                videoUrl: 'path/to/video2.mp4',
                description: 'Introduction to binary trees and their operations.'
            }
        ]
    };

    function loadVideos(date) {
        const videos = sampleVideos[date] || [];
        const videosList = $('#videosList');
        videosList.empty();

        if (videos.length === 0) {
            videosList.html('<p class="text-muted">No videos available for this date.</p>');
            return;
        }

        videos.forEach(video => {
            videosList.append(`
                <div class="video-card">
                    <video class="video-thumbnail" poster="${video.thumbnail}">
                        <source src="${video.videoUrl}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="video-info">
                        <span class="subject-badge">${video.subject}</span>
                        <h5 class="mb-2">${video.title}</h5>
                        <p class="text-muted mb-0">${video.description}</p>
                    </div>
                </div>
            `);
        });
    }

    // Handle video upload
    $('#uploadForm').on('submit', function(e) {
        e.preventDefault();
        // Add your upload logic here
        alert('Video upload functionality will be implemented with backend integration.');
    });

    // Load initial videos for current date
    loadVideos($("#datepicker").datepicker('getDate'));
});
</script>
