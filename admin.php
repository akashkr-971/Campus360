<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - Campus360</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Include face-api.js via CDN -->
  <script defer src="https://cdn.jsdelivr.net/npm/face-api.js"></script>
  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa, #e9ecef);
      min-height: 100vh;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      background-color: #343a40;
      color: #fff;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .header .app-name {
      font-size: 1.8rem;
      font-weight: 700;
    }
    .header .logout-btn {
      background-color: #dc3545;
      border: none;
      padding: 8px 16px;
      color: #fff;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.2s;
    }
    .header .logout-btn:hover {
      background-color: #c82333;
      transform: scale(1.05);
    }
    .dashboard-container {
      padding: 40px;
    }
    .dashboard-container h1 {
      font-weight: 700;
      margin-bottom: 20px;
    }
    .attendance-btn {
      background-color: #007bff;
      border: none;
      padding: 10px 20px;
      font-size: 1.2rem;
      border-radius: 4px;
      color: #fff;
      transition: background-color 0.3s, transform 0.2s;
    }
    .attendance-btn:hover {
      background-color: #0056b3;
      transform: scale(1.05);
    }
    /* Modal Styling */
    .modal-header {
      background-color: #007bff;
      color: #fff;
    }
    .video-container {
      position: relative;
    }
    #webcamVideo {
      width: 100%;
      border-radius: 8px;
    }
    #overlayCanvas {
      position: absolute;
      top: 0;
      left: 0;
      pointer-events: none;
    }
    .ai-status {
      font-weight: 600;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="header">
    <div class="app-name">Campus360</div>
    <form action="logout.php" method="post">
      <button type="submit" class="logout-btn">Logout</button>
    </form>
  </div>
  
  <div class="container dashboard-container">
    <h1>Welcome, Admin</h1>
    <p class="lead">This is the admin dashboard where you can manage various administrative tasks.</p>
    <button type="button" class="attendance-btn" data-bs-toggle="modal" data-bs-target="#attendanceModal">
      Take Attendance
    </button>
  </div>
  
  <!-- Attendance Modal -->
  <div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="attendanceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="attendanceModalLabel">Attendance via Webcam</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="stopWebcam()"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3 video-container">
            <video id="webcamVideo" autoplay muted playsinline></video>
            <canvas id="overlayCanvas"></canvas>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <button id="recognizeBtn" class="btn btn-success">Recognize Face &amp; Mark Attendance</button>
            <div id="aiStatus" class="ai-status text-info"></div>
          </div>
          <p class="mt-3">
            Note: Students must be enrolled in the system (their images are stored in <code>/labeled_images</code>) for recognition to work.
            Enrollment is done by computing face descriptors from multiple images per student.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="stopWebcam()">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    let stream;
    let faceMatcher;
    
    // Load models and enroll students
    async function loadModels() {
      const MODEL_URL = '/models'; // Ensure your models folder is accessible at this URL
      try {
        await Promise.all([
          faceapi.nets.tinyFaceDetector.loadFromUri(MODEL_URL),
          faceapi.nets.faceLandmark68Net.loadFromUri(MODEL_URL),
          faceapi.nets.faceRecognitionNet.loadFromUri(MODEL_URL)
        ]);
        console.log("Models loaded");
      } catch (err) {
        console.error("Error loading models: ", err);
      }
      await enrollStudents();
    }
    
    // Load images for a given student label and compute descriptors
    async function loadLabeledImages(label) {
      const descriptions = [];
      // Assuming 3 images per student; adjust if needed.
      for (let i = 1; i <= 3; i++) {
        const imgUrl = `/labeled_images/${label}/img${i}.jpg`;
        try {
          const img = await faceapi.fetchImage(imgUrl);
          const detection = await faceapi.detectSingleFace(img, new faceapi.TinyFaceDetectorOptions())
                                          .withFaceLandmarks().withFaceDescriptor();
          if (detection) {
            descriptions.push(detection.descriptor);
          } else {
            console.warn(`No face detected for ${label} in image ${i}`);
          }
        } catch (err) {
          console.error(`Error loading image ${imgUrl}:`, err);
        }
      }
      return new faceapi.LabeledFaceDescriptors(label, descriptions);
    }
    
    // Enroll students and create a FaceMatcher
    async function enrollStudents() {
      // Replace these with your actual folder names
      const labels = ["akashkr", "janedoe"];
      const labeledDescriptors = await Promise.all(
        labels.map(label => loadLabeledImages(label))
      );
      faceMatcher = new faceapi.FaceMatcher(labeledDescriptors, 0.6);
      console.log("Students enrolled", faceMatcher);
    }
    
    window.addEventListener('load', loadModels);
    
    // Start webcam and adjust canvas dimensions
    function startWebcam() {
      const video = document.getElementById('webcamVideo');
      const canvas = document.getElementById('overlayCanvas');
      if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: {} })
          .then(function(s) {
            stream = s;
            video.srcObject = stream;
            video.play();
            video.addEventListener("loadedmetadata", function() {
              canvas.width = video.videoWidth;
              canvas.height = video.videoHeight;
            });
          })
          .catch(function(err) {
            console.error("Error accessing webcam: ", err);
            alert("Unable to access webcam.");
          });
      }
    }
    
    function stopWebcam() {
      const video = document.getElementById('webcamVideo');
      if (stream) {
        stream.getTracks().forEach(track => track.stop());
        video.srcObject = null;
      }
      const canvas = document.getElementById('overlayCanvas');
      const ctx = canvas.getContext("2d");
      ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
    
    // Start/Stop webcam when modal is shown/hidden
    const attendanceModal = document.getElementById('attendanceModal');
    attendanceModal.addEventListener('shown.bs.modal', startWebcam);
    attendanceModal.addEventListener('hidden.bs.modal', stopWebcam);
    
    // Draw bounding box and label on the overlay canvas
    function drawOverlay(box, label) {
      const canvas = document.getElementById('overlayCanvas');
      const ctx = canvas.getContext("2d");
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.strokeStyle = "red";
      ctx.lineWidth = 3;
      ctx.strokeRect(box.x, box.y, box.width, box.height);
      ctx.fillStyle = "red";
      ctx.font = "20px Arial";
      ctx.fillText(label, box.x, box.y - 10);
    }
    
    // Recognize face and mark attendance
    document.getElementById('recognizeBtn').addEventListener('click', async function() {
      const video = document.getElementById('webcamVideo');
      const aiStatus = document.getElementById('aiStatus');
      aiStatus.textContent = "Processing...";
      const detection = await faceapi.detectSingleFace(video, new faceapi.TinyFaceDetectorOptions())
                                      .withFaceLandmarks().withFaceDescriptor();
      if (detection && faceMatcher) {
        const bestMatch = faceMatcher.findBestMatch(detection.descriptor);
        const box = detection.detection.box;
        drawOverlay(box, bestMatch.toString());
        aiStatus.textContent = "Attendance marked for " + bestMatch.label;
        // Optionally, add AJAX here to update attendance records on the server
      } else {
        aiStatus.textContent = "No face detected or no match found.";
      }
    });
  </script>
</body>
</html>
