<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty Dashboard - Campus360</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI CSS -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
  <style>
    body {
      background: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .header {
      background-color: #343a40;
      color: #fff;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .header .app-name {
      font-size: 1.8rem;
    }
    .logout-btn {
      background-color: #dc3545;
      border: none;
      color: #fff;
      padding: 8px 16px;
      cursor: pointer;
    }
    .logout-btn:hover {
      opacity: 0.9;
    }
    .container {
      margin-top: 30px;
    }
    #datepicker,
    #monthpicker {
      width: 300px;
      margin: 0 auto;
    }
    /* Announcements styles remain unchanged */
    #announcementContent {
      list-style-type: none;
      padding-left: 0;
    }
    #announcementContent li {
      background: #f1f1f1;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 8px;
      color: #333;
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
  
  <div class="container mt-5">
    <h1>Welcome, Faculty</h1>
    <p>This is the faculty dashboard. Here you can manage your courses, view student progress, and update your profile.</p>
    <div class="row mt-4">
      <!-- Left Column -->
      <div class="col-md-6">
        <!-- Courses & Upload Notes Card -->
        <div class="card mb-4">
          <div class="card-body">
            <h3>Courses</h3>
            <ul>
              <li>Course 101: Introduction to Programming</li>
              <li>Course 102: Advanced Mathematics</li>
              <li>Course 103: Modern History</li>
            </ul>
            <div class="mt-4">
              <h4>Upload Notes</h4>
              <form action="upload_notes.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="course" class="form-label">Select Course</label>
                  <select class="form-select" id="course" name="course" required>
                    <option value="101">Course 101: Introduction to Programming</option>
                    <option value="102">Course 102: Advanced Mathematics</option>
                    <option value="103">Course 103: Modern History</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="notes" class="form-label">Upload Notes</label>
                  <input type="file" class="form-control" id="notes" name="notes" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
              </form>
            </div>
          </div>
        </div>
        <!-- Announcements Card -->
        <div class="card mb-4">
          <div class="card-body">
            <h3>Announcements</h3>
            <button class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#announcementModal">Publish Announcement</button>
            <ul id="announcementContent">
              <li>No new announcements.</li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- Right Column -->
      <div class="col-md-6">
        <!-- Date and Month Picker Card -->
        <div class="card mb-4">
          <div class="card-body">
            <h3>Date Picker</h3>
            <div id="datepicker"></div>
            <h3>Month Picker</h3>
            <input type="text" id="monthpicker" class="form-control" readonly />
          </div>
        </div>
        <!-- Additional Calendar Card (Optional) -->
        <div class="card mb-4">
          <div class="card-body">
            <h3>Events Calendar</h3>
            <div id="eventsCalendar"></div>
          </div>
        </div>
        <!-- Recent Activities Card -->
        <div class="card mb-4">
          <div class="card-body">
            <h3>Recent Activities</h3>
            <ul>
              <li>Graded assignments for Course 101</li>
              <li>Uploaded lecture notes for Course 102</li>
              <li>Held office hours for Course 103</li>
            </ul>
          </div>
        </div>
        <!-- Students Card -->
        <div class="card">
          <div class="card-body">
            <h3>Students</h3>
            <ul>
              <li>John Doe</li>
              <li>Jane Smith</li>
              <li>Michael Johnson</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="mt-4">
      <h3>Resources</h3>
      <p><a href="faculty_guide.pdf" target="_blank">Download Faculty Guide</a></p>
    </div>
  </div>
  
  <!-- Announcement Modal -->
  <div class="modal fade" id="announcementModal" tabindex="-1" aria-labelledby="announcementModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="announcementModalLabel">Publish Announcement</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="announcementForm">
            <div class="mb-3">
              <label for="announcementText" class="form-label">Announcement Content</label>
              <textarea class="form-control" id="announcementText" rows="3" required></textarea>
