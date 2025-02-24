<?php
$pageTitle = 'Visual Notes';
ob_start();
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
                        <h5 class="card-title mb-3">Select Video Date</h5>
                        <div id="datepicker"></div>
                        <ul class="list-unstyled mt-3">
                            <li>
                                <button class="btn video-date-button" data-date="2025-02-26">
                                    2025-02-26 <i class="bi bi-camera-video"></i> Algorithm Class
                                </button>
                            </li>
                            <li>
                                <button class="btn video-date-button" data-date="2025-02-27">
                                    2025-02-27 <i class="bi bi-camera-video"></i> Data Mining Class
                                </button>
                            </li>
                            <li>
                                <button class="btn video-date-button" data-date="2025-02-28">
                                    2025-02-28 <i class="bi bi-camera-video"></i> Cryptography Class
                                </button>
                            </li>
                            <li>
                                <button class="btn video-date-button" data-date="2025-03-01">
                                    2025-03-01 <i class="bi bi-camera-video"></i> Algorithm Class
                                </button>
                            </li>
                            <li>
                                <button class="btn video-date-button" data-date="2025-03-02">
                                    2025-03-02 <i class="bi bi-camera-video"></i> Data Mining Class
                                </button>
                            </li>
                            <li>
                                <button class="btn video-date-button" data-date="2025-03-03">
                                    2025-03-03 <i class="bi bi-camera-video"></i> Cryptography Class
                                </button>
                            </li>
                            <li>
                                <button class="btn video-date-button" data-date="2025-03-04">
                                    2025-03-04 <i class="bi bi-camera-video"></i> Algorithm Class
                                </button>
                            </li>
                            <li>
                                <button class="btn video-date-button" data-date="2025-03-05">
                                    2025-03-05 <i class="bi bi-camera-video"></i> Data Mining Class
                                </button>
                            </li>
                            <li>
                                <button class="btn video-date-button" data-date="2025-03-06">
                                    2025-03-06 <i class="bi bi-camera-video"></i> Cryptography Class
                                </button>
                            </li>
                        </ul>
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
                        <div id="videosList" class="mb-4">
                            <!-- Videos will be loaded here based on selected date -->
                        </div>
                        <div id="videoPlayer">
                            <video id="mainVideo" width="100%" controls>
                                <source src="" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div id="videoDescription" class="mt-2"></div>
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
        cursor: pointer;
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
    .video-date-button {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
        background-color: #f0f0f0;
        border: 1px solid #ddd;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        width: 100%;
        text-align: left;
        margin-bottom: 0.5rem;
    }
    .video-date-button:hover {
        color: #0056b3;
        background-color: #e9ecef;
        border-color: #ccc;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
// Sample videos data (single source of truth)
const sampleVideos = {
    '2025-02-26': [
        {
            title: 'Algorithm and Design - Sorting Algorithms',
            videoUrl: '../static/video/algorithm.mp4'
        }
    ],
    '2025-02-27': [
        {
            title: 'Data Mining - Introduction',
            videoUrl: '../static/video/datamining.mp4'
        }
    ],
    '2025-02-28': [
        {
            title: 'Cryptography - Introduction',
            videoUrl: '../static/video/cryptography.mp4'
        }
    ],
    '2025-03-01': [
        {
            title: 'Algorithm and Design - Sorting Algorithms',
            videoUrl: '../static/video/algorithm.mp4'
        }
    ],
    '2025-03-02': [
        {
            title: 'Data Mining - Introduction',
            videoUrl: '../static/video/datamining.mp4'
        }
    ],
    '2025-03-03': [
        {
            title: 'Cryptography - Introduction',
            videoUrl: '../static/video/cryptography.mp4'
        }
    ],
    '2025-03-04': [
        {
            title: 'Algorithm and Design - Sorting Algorithms',
            videoUrl: '../static/video/algorithm.mp4'
        }
    ],
    '2025-03-05': [
        {
            title: 'Data Mining - Introduction',
            videoUrl: '../static/video/datamining.mp4'
        }
    ],
    '2025-03-06': [
        {
            title: 'Cryptography - Advanced Concepts',
            videoUrl: '../static/video/cryptography.mp4'
        }
    ]
};

$(document).ready(function() {
    // Initialize the datepicker
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        onSelect: function(dateText) {
            loadVideos(dateText);
        }
    });

    // Event delegation for date buttons (only those with data-date attribute)
    $(document).on('click', '.video-date-button[data-date]', function() {
        const date = $(this).data('date');
        loadVideos(date);
    });

    function loadVideos(date) {
        const videos = sampleVideos[date] || [];
        const videosList = $('#videosList');
        videosList.empty();

        if (videos.length === 0) {
            videosList.html('<p class="text-muted">No videos available for this date.</p>');
            $('#mainVideo source').attr('src', '');
            $('#mainVideo')[0].load();
            return;
        }

        videos.forEach((video) => {
            // Create a video selection button with a different class to avoid conflicts
            const videoButton = $(`<button class="btn video-button mb-2" data-video-url="${video.videoUrl}">${video.title}</button>`);
            
            // Attach a click event handler that stops propagation
            videoButton.on('click', function(e) {
                e.stopPropagation(); // Prevent triggering the date button handler
                const videoUrl = $(this).data('video-url');
                const videoElement = $('#mainVideo')[0];
                $('#mainVideo source').attr('src', videoUrl);
                videoElement.load();
                videoElement.play();
            });

            videosList.append(videoButton);
        });

        // Automatically load and play the first video for the selected date
        if (videos.length > 0) {
            const firstVideoUrl = videos[0].videoUrl;
            const videoElement = $('#mainVideo')[0];
            $('#mainVideo source').attr('src', firstVideoUrl);
            videoElement.load();
            videoElement.play();
        }
    }

    // Load videos for a default date (e.g., first available date)
    const defaultDate = '2025-02-26'; // Set a default date with videos
    $("#datepicker").datepicker('setDate', defaultDate);
    loadVideos(defaultDate);
});
</script>

<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/Campus360/includes/layout.php';
?>
