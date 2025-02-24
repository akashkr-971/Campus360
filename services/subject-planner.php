<?php
$pageTitle = 'Subject Planner';
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? $pageTitle . ' - Campus360' : 'Campus360'; ?></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Bootstrap Icons (for PDF icon) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    .subject-card {
      cursor: pointer;
      transition: transform 0.2s;
    }
    .subject-card:hover {
      transform: translateY(-5px);
    }
  </style>
</head>
<body>
  <div class="container mt-4">
  <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Subject Planner</h1>
                <div class="divider d-flex align-items-center justify-content-center mb-4">
                    <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                    <div class="mx-3"><i class="bi bi-book text-primary"></i></div>
                    <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                </div>
            </div>
        </div>
    
    <!-- Subjects Grid -->
    <div class="row mt-4">
      <div class="col-12">
        <h3>Select a Subject</h3>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <div class="card subject-card" onclick="loadResources('Data Mining')">
          <div class="card-body text-center">
            <h5 class="card-title">Data Mining</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <div class="card subject-card" onclick="loadResources('Cryptography')">
          <div class="card-body text-center">
            <h5 class="card-title">Cryptography</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <div class="card subject-card" onclick="loadResources('Algorithm Design')">
          <div class="card-body text-center">
            <h5 class="card-title">Algorithm Design</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <div class="card subject-card" onclick="loadResources('Data Structure')">
          <div class="card-body text-center">
            <h5 class="card-title">Data Structure</h5>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Course Resources Gallery -->
    <div class="notes-gallery mt-4" id="notesGallery" style="display: none;">
      <h3>Course Resources</h3>
      <!-- Upload Button -->
      <button class="btn btn-secondary mb-3" id="uploadNoteBtn">Upload Note</button>
      <!-- Hidden File Input -->
      <input type="file" id="noteFileInput" style="display: none;" accept="application/pdf,image/*">
      
      <div class="row" id="resourcesContent"></div>
    </div>
  </div>

  <script>
    function loadResources(subject) {
      // Sample course resources for each subject.
      // Replace these with your actual resource data.
      const subjectResources = {
        'Data Mining': [
          { title: 'Data Mining Techniques', type: 'pdf', fileUrl: 'resources/data_mining/techniques.pdf' },
          { title: 'Data Preprocessing', type: 'pdf', fileUrl: 'resources/data_mining/preprocessing.pdf' },
          { title: 'Cluster Analysis Diagram', type: 'image', fileUrl: '../static/stress.jpg' }
        ],
        'Cryptography': [
          { title: 'Cryptography Basics', type: 'pdf', fileUrl: 'resources/cryptography/basics.pdf' },
          { title: 'Encryption Methods', type: 'image', fileUrl: '../static/navigation.png' },
          { title: 'Public Key Infrastructure', type: 'pdf', fileUrl: 'resources/cryptography/pki.pdf' }
        ],
        'Algorithm Design': [
          { title: 'Algorithm Design Manual', type: 'pdf', fileUrl: 'resources/algorithm_design/manual.pdf' },
          { title: 'Sorting Algorithms', type: 'pdf', fileUrl: 'resources/algorithm_design/sorting.pdf' },
          { title: 'Graph Theory', type: 'image', fileUrl: '../static/check.jpg' }
        ],
        'Data Structure': [
          { title: 'Data Structure Basics', type: 'pdf', fileUrl: 'resources/data_structure/basics.pdf' },
          { title: 'Advanced Data Structures', type: 'pdf', fileUrl: 'resources/data_structure/advanced.pdf' },
          { title: 'Tree Diagrams', type: 'image', fileUrl: '../static/navigation.png' }
        ]
      };

      // Clear previous resources
      const resourcesContent = document.getElementById('resourcesContent');
      resourcesContent.innerHTML = ''; 

      // Append subject resources
      const resources = subjectResources[subject] || [];
      if (resources.length > 0) {
        resources.forEach(resource => {
          const col = document.createElement('div');
          col.className = 'col-md-4 mb-3';
          
          const card = document.createElement('div');
          card.className = 'card h-100';
          
          // Display image thumbnail for images or a PDF icon for PDFs
          if (resource.type === 'image') {
            const img = document.createElement('img');
            img.src = resource.fileUrl;
            img.className = 'card-img-top';
            img.alt = resource.title;
            card.appendChild(img);
          } else if (resource.type === 'pdf') {
            const pdfIconDiv = document.createElement('div');
            pdfIconDiv.className = 'd-flex justify-content-center align-items-center';
            pdfIconDiv.style.height = '180px';
            pdfIconDiv.innerHTML = '<i class="bi bi-file-earmark-pdf" style="font-size: 64px; color: red;"></i>';
            card.appendChild(pdfIconDiv);
          }
          
          const cardBody = document.createElement('div');
          cardBody.className = 'card-body';
          cardBody.innerHTML = `<h5 class="card-title">${resource.title}</h5>`;
          
          // Add a link so users can open the resource in a new tab
          const link = document.createElement('a');
          link.href = resource.fileUrl;
          link.target = '_blank';
          link.className = 'stretched-link';
          cardBody.appendChild(link);
          
          card.appendChild(cardBody);
          col.appendChild(card);
          resourcesContent.appendChild(col);
        });
      } else {
        resourcesContent.innerHTML = '<p>No course resources available for this subject.</p>';
      }
      
      // Show the resources gallery
      document.getElementById('notesGallery').style.display = 'block';
    }
    
    // Upload Note functionality
    document.getElementById('uploadNoteBtn').addEventListener('click', function() {
      document.getElementById('noteFileInput').click();
    });
    
    document.getElementById('noteFileInput').addEventListener('change', function(event) {
      const fileInput = event.target;
      if (fileInput.files && fileInput.files.length > 0) {
        // Get the first selected file's name
        const file = fileInput.files[0];
        const fileName = file.name;
        
        // Create a simple card to display the uploaded note's name
        const col = document.createElement('div');
        col.className = 'col-md-4 mb-3';
        
        const card = document.createElement('div');
        card.className = 'card h-100';
        
        const cardBody = document.createElement('div');
        cardBody.className = 'card-body';
        cardBody.innerHTML = `<h5 class="card-title">Uploaded Note</h5><p class="card-text">${fileName}</p>`;
        
        card.appendChild(cardBody);
        col.appendChild(card);
        
        // Append the new card to the resources content area
        document.getElementById('resourcesContent').appendChild(col);
        
        // Clear the file input so that the same file can be re-uploaded if needed
        fileInput.value = '';
      }
    });
  </script>
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/Campus360/includes/layout.php';
?>
