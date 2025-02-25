<?php
session_start();
include_once '../includes/layout.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Mentorship</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      text-align: center;
      background-color: #f4f4f4;
      padding: 20px;
      margin: 0;
    }
    header {
      background-color: #007bff;
      color: white;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    main {
      margin-top: 20px; /* Add margin for spacing below header */
    }
    form {
      background: white;
      padding: 30px;
      max-width: 500px;
      margin: 20px auto;
      border-radius: 10px;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }
    input, select {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }
    button {
      padding: 12px 25px;
      font-size: 16px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    button:hover {
      background-color: #218838;
    }
    small {
      display: block;
      color: red;
      margin-top: -8px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
<div class="row mb-5" style="margin-top:-30px;">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Student Mentorship Program</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-briefcase-fill text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>
  <main class="container mt-5">
    <h2 class="text-center mb-4">Fill in Your Details</h2>
    <form id="studentForm" class="bg-light p-4 rounded shadow-sm">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name:</label>
        <input type="text" id="name" class="form-control" required>
        <small id="nameError" class="text-danger" style="display: none;">Please enter a valid name.</small>
      </div>

      <div class="mb-3">
        <label for="interest" class="form-label">Select Your Interest:</label>
        <select id="interest" class="form-select" required>
          <option value="">-- Select Interest --</option>
        </select>
      </div>

      <button type="button" class="btn btn-primary w-100" onclick="matchMentor()">Find Mentor</button>
    </form>

    <h2 class="text-center mt-5">Mentor Recommendation:</h2>
    <p id="mentorResult" class="mt-3 p-3 bg-light border rounded shadow-sm text-center text-muted">Fill in your details and click "Find Mentor" to get matched.</p>
  </main>

  <script>
    const mentors = [
      { name: "John Doe", expertise: "AI, Data Science, Machine Learning" },
      { name: "Jane Smith", expertise: "Web Development, Frontend, UI/UX" },
      { name: "Michael Lee", expertise: "Cybersecurity, Networking" },
      { name: "Sarah Johnson", expertise: "Finance, Business Analysis" }
    ];

    window.onload = function() {
      const interestDropdown = document.getElementById("interest");
      const interests = new Set();

      mentors.forEach(mentor => {
        mentor.expertise.split(", ").forEach(skill => interests.add(skill));
      });

      interests.forEach(skill => {
        const option = document.createElement("option");
        option.value = skill;
        option.textContent = skill;
        interestDropdown.appendChild(option);
      });
    };

    function validateName(name) {
      return /^[A-Za-z\s]{2,}$/.test(name);
    }

    function matchMentor() {
      const name = document.getElementById("name").value.trim();
      const selectedInterest = document.getElementById("interest").value;
      const nameError = document.getElementById("nameError");

      if (!validateName(name)) {
        nameError.style.display = "block";
        return;
      } else {
        nameError.style.display = "none";
      }

      const matchedMentor = mentors.find(mentor => 
        mentor.expertise.includes(selectedInterest)
      );

      const resultText = matchedMentor 
        ? `Hello ${name}, your recommended mentor is: <strong>${matchedMentor.name}</strong> (Expertise: ${matchedMentor.expertise})`
        : "No exact match found. We will assign a mentor soon.";

      document.getElementById("mentorResult").innerHTML = resultText;
    }
  </script>
</body>
</html>
