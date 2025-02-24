<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Navigation - Kerala Colleges</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        /* Custom Styling */
        .college-list .list-group-item {
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .college-list .list-group-item:hover {
            background-color: #f8f9fa;
        }
        .college-list .list-group-item.active {
            background-color: #007bff;
            color: white;
        }
        .floor-images .floor-section {
            margin-bottom: 30px;
        }
        .floor-images .image-scroller {
            display: flex;
            overflow-x: auto;
            gap: 15px;
            padding-bottom: 10px;
        }
        .floor-images .image-scroller img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            flex-shrink: 0;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .floor-images .image-scroller img:hover {
            transform: scale(1.05);
        }
        .divider .line {
            width: 50px;
            height: 3px;
        }
        /* Scrollbar Styling */
        .image-scroller::-webkit-scrollbar {
            height: 8px;
        }
        .image-scroller::-webkit-scrollbar-thumb {
            background-color: #007bff;
            border-radius: 10px;
        }
        .image-scroller::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        /* Search Bar Styling */
        .input-group .form-control {
            border-right: none;
        }
        .input-group .btn-primary {
            padding: 10px 25px;
            font-size: 1.1rem;
        }
        .default-message {
            color: #6c757d;
            font-style: italic;
        }
        /* Full-Screen Overlay Styling */
        .fullscreen-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2000; /* Increased to overlay header */
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .fullscreen-overlay.active {
            visibility: visible;
            opacity: 1;
        }
        .fullscreen-image {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }
        .close-btn, .next-btn {
            position: absolute;
            background: rgba(255, 255, 255, 0.3);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 1.5rem;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
            z-index: 2100; /* Ensure buttons are above image */
        }
        .close-btn:hover, .next-btn:hover {
            background: rgba(255, 255, 255, 0.5);
        }
        .close-btn {
            top: 20px;
            right: 20px;
        }
        .next-btn {
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container py-5" style="margin-top: 50px;">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Campus Navigation - Kerala Colleges</h1>
                <div class="divider d-flex align-items-center justify-content-center mb-4">
                    <div class="line bg-primary"></div>
                    <div class="mx-3"><i class="bi bi-compass-fill text-primary"></i></div>
                    <div class="line bg-primary"></div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Search Bar -->
            <div class="col-12">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="searchInput" placeholder="Search for a college in Kerala..." onkeyup="filterColleges()" style="max-width: 80%;">
                            <button class="btn btn-primary" type="button" style="width: 20%; height: 80%; margin-left: 10px; padding: 10px;"><i class="bi bi-search"> Search</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- College List and Floor Images -->
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4 college-list">
                    <div class="card-body">
                        <h3>Colleges in Kerala</h3>
                        <div class="list-group" id="collegeList">
                            <button class="list-group-item list-group-item-action" onclick="showCampusImages('Kmea-kochi')">KMEA Arts and Science College</button>
                            <button class="list-group-item list-group-item-action" onclick="showCampusImages('iit-palakkad')">IIT Palakkad</button>
                            <button class="list-group-item list-group-item-action" onclick="showCampusImages('nit-calicut')">NIT Calicut</button>
                            <button class="list-group-item list-group-item-action" onclick="showCampusImages('cet-trivandrum')">College of Engineering Trivandrum (CET)</button>
                            <button class="list-group-item list-group-item-action" onclick="showCampusImages('cochin-university')">Cochin University of Science and Technology (CUSAT)</button>
                            <button class="list-group-item list-group-item-action" onclick="showCampusImages('mg-university')">Mahatma Gandhi University, Kottayam</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Floor-Wise Images -->
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 id="selectedCampus">Select a Campus</h3>
                        <div id="floorImages" class="floor-images">
                            <p class="default-message">Select a college to view campus images</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Full-Screen Overlay -->
    <div id="fullscreenOverlay" class="fullscreen-overlay">
        <img id="fullscreenImage" class="fullscreen-image" src="" alt="">
        <button class="close-btn" onclick="closeFullscreen()"><i class="bi bi-x"></i></button>
        <button class="next-btn" onclick="nextImage()"><i class="bi bi-arrow-right"></i></button>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        let currentCampus = null;
        let currentFloorIndex = 0;
        let currentImageIndex = 0;

        // Define campus images data (single source of truth)
        const campusImages = {
            'Kmea-kochi': [
                { 
                    floor: 'Ground Floor', 
                    images: [
                        'static/collegephoto/floor1.1.jpg',
                        'static/collegephoto/floor1.2.jpg',
                        'static/collegephoto/floor1.3.jpg' 
                    ] 
                },
                { 
                    floor: 'First Floor', 
                    images: [
                        'static/collegephoto/floor2.1.jpg',
                        'static/collegephoto/floor2.2.jpg',
                        'static/collegephoto/floor2.3.jpg'
                    ] 
                },
                { 
                    floor: 'Second Floor', 
                    images: [
                        'static/collegephoto/floor3.1.jpg',
                        'static/collegephoto/floor3.2.jpg',
                        'static/collegephoto/floor3.3.jpg'
                    ] 
                }
            ],
            'iit-palakkad': [
                { 
                    floor: 'Ground Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4'
                    ] 
                },
                { 
                    floor: 'First Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4'
                    ] 
                },
                { 
                    floor: 'Second Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                    ] 
                }
            ],
            'nit-calicut': [
                { 
                    floor: 'Ground Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4'
                    ] 
                },
                { 
                    floor: 'First Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                    ] 
                },
                { 
                    floor: 'Second Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                    ] 
                }
            ],
            'cet-trivandrum': [
                { 
                    floor: 'Ground Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                    ] 
                },
                { 
                    floor: 'First Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                    ] 
                },
                { 
                    floor: 'Second Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1', 
                    ] 
                }
            ],
            'cochin-university': [
                { 
                    floor: 'Ground Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                    ] 
                },
                { 
                    floor: 'First Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                    ] 
                },
                { 
                    floor: 'Second Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                    ] 
                }
            ],
            'mg-university': [
                { 
                    floor: 'Ground Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                    ] 
                },
                { 
                    floor: 'First Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                    ] 
                },
                { 
                    floor: 'Second Floor', 
                    images: [
                        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1',
                        'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4',
                        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c', 
                    ] 
                }
            ]
        };

        // Filter colleges based on search input
        function filterColleges() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const colleges = document.getElementById('collegeList').getElementsByClassName('list-group-item');
            for (let i = 0; i < colleges.length; i++) {
                const collegeName = colleges[i].textContent.toLowerCase();
                colleges[i].style.display = collegeName.includes(input) ? '' : 'none';
            }
        }

        // Show floor-wise images for the selected campus
        function showCampusImages(campus) {
            const colleges = document.getElementById('collegeList').getElementsByClassName('list-group-item');
            for (let i = 0; i < colleges.length; i++) {
                colleges[i].classList.remove('active');
            }
            event.target.classList.add('active');

            const campusTitle = document.getElementById('selectedCampus');
            const floorImages = document.getElementById('floorImages');
            campusTitle.textContent = event.target.textContent;
            floorImages.innerHTML = ''; // Clear previous content
            currentCampus = campus;

            // Display images for the selected campus
            if (campusImages[campus]) {
                campusImages[campus].forEach((floor, floorIndex) => {
                    const div = document.createElement('div');
                    div.className = 'floor-section';
                    div.innerHTML = `
                        <h5>${floor.floor}</h5>
                        <div class="image-scroller"></div>
                    `;
                    const scroller = div.querySelector('.image-scroller');
                    floor.images.forEach((imageSrc, imageIndex) => {
                        const img = document.createElement('img');
                        img.src = imageSrc;
                        img.alt = `${floor.floor} - ${campusTitle.textContent}`;
                        img.onclick = () => openFullscreen(campus, floorIndex, imageIndex);
                        scroller.appendChild(img);
                    });
                    floorImages.appendChild(div);
                });
            } else {
                floorImages.innerHTML = '<p class="default-message">No images available for this campus yet.</p>';
            }
        }

        // Open image in full-screen
        function openFullscreen(campus, floorIndex, imageIndex) {
            currentFloorIndex = floorIndex;
            currentImageIndex = imageIndex;
            const overlay = document.getElementById('fullscreenOverlay');
            const fullscreenImage = document.getElementById('fullscreenImage');
            const campusData = campusImages[campus];
            fullscreenImage.src = campusData[floorIndex].images[imageIndex];
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling in background
        }

        // Close full-screen view
        function closeFullscreen() {
            const overlay = document.getElementById('fullscreenOverlay');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Navigate to next image
        function nextImage() {
            const campusData = campusImages[currentCampus];
            const floor = campusData[currentFloorIndex];
            currentImageIndex = (currentImageIndex + 1) % floor.images.length; // Cycle through images
            const fullscreenImage = document.getElementById('fullscreenImage');
            fullscreenImage.src = floor.images[currentImageIndex];
        }
    </script>
</body>
</html>