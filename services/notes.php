<?php
$pageTitle = 'Notes';
$additionalHead = '
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
';
ob_start();
?>

<div class="service-content">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Notes</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-book-fill text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <!-- Left Column: Notes List & Sorting -->
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">My Notes</h5>
                        <button id="btnNewNote" class="btn btn-light btn-sm btn-new-note">
                            <i class="bi bi-plus-lg"></i> New Note
                        </button>
                    </div>
                    <div class="card-body">
                        <!-- Sort Controls -->
                        <div class="sort-controls mb-3">
                            <button id="sortRelevance" class="btn btn-outline-secondary btn-sm active" onclick="sortNotes('relevance')">Sort by Relevance</button>
                            <button id="sortRating" class="btn btn-outline-secondary btn-sm" onclick="sortNotes('rating')">Sort by Rating</button>
                        </div>
                        <div id="sortStatus" class="mb-3 text-center">Sorted by Relevance</div>
                        <div class="notes-list" id="notesList">
                            <!-- Note Item 1 -->
                            <div class="note-item mb-3 p-3 border rounded" data-index="1" data-rating="4.5" data-relevance="2">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1">Database Management Systems</h5>
                                        <p class="text-muted mb-2">Chapter 4: Normalization</p>
                                        <div class="mb-2">
                                            <span class="badge bg-info me-2">DBMS</span>
                                            <span class="badge bg-secondary">Important</span>
                                        </div>
                                        <div class="note-rating text-warning">
                                            Rating: <strong>4.5</strong> / 5
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-success btn-sm btn-open-note">
                                            <i class="bi bi-eye"></i> Open
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm btn-edit-note">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-warning btn-sm btn-edit-rating">
                                            <i class="bi bi-star"></i> Edit Rating
                                        </button>
                                        <button class="btn btn-outline-danger btn-sm btn-delete-note">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <small class="text-muted">Last edited: March 1, 2025</small>
                                <!-- Hidden full note content with extra dummy text -->
                                <div class="full-note-content" style="display:none;">
                                    <p>This is the full detailed content for the Database Management Systems note. It contains extended information about normalization, various normal forms, examples, and best practices in database design.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. In hac habitasse platea dictumst.</p>
                                </div>
                            </div>
                            
                            <!-- Note Item 2 -->
                            <div class="note-item mb-3 p-3 border rounded" data-index="2" data-rating="4.0" data-relevance="1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1">Web Development</h5>
                                        <p class="text-muted mb-2">React Hooks and State Management</p>
                                        <div class="mb-2">
                                            <span class="badge bg-warning me-2">React</span>
                                            <span class="badge bg-info">Frontend</span>
                                        </div>
                                        <div class="note-rating text-warning">
                                            Rating: <strong>4.0</strong> / 5
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-success btn-sm btn-open-note">
                                            <i class="bi bi-eye"></i> Open
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm btn-edit-note">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-warning btn-sm btn-edit-rating">
                                            <i class="bi bi-star"></i> Edit Rating
                                        </button>
                                        <button class="btn btn-outline-danger btn-sm btn-delete-note">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <small class="text-muted">Last edited: February 28, 2025</small>
                                <div class="full-note-content" style="display:none;">
                                    <p>This is the full content for the Web Development note covering React Hooks, state management techniques, and best practices for building responsive UIs.</p>
                                    <p>It includes code examples, component lifecycle explanations, and debugging tips. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            
                            <!-- Note Item 3 -->
                            <div class="note-item p-3 border rounded" data-index="3" data-rating="5.0" data-relevance="3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1">Software Engineering</h5>
                                        <p class="text-muted mb-2">Design Patterns and Architecture</p>
                                        <div class="mb-2">
                                            <span class="badge bg-success me-2">SE</span>
                                            <span class="badge bg-secondary">Exam Prep</span>
                                        </div>
                                        <div class="note-rating text-warning">
                                            Rating: <strong>5.0</strong> / 5
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-success btn-sm btn-open-note">
                                            <i class="bi bi-eye"></i> Open
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm btn-edit-note">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-outline-warning btn-sm btn-edit-rating">
                                            <i class="bi bi-star"></i> Edit Rating
                                        </button>
                                        <button class="btn btn-outline-danger btn-sm btn-delete-note">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <small class="text-muted">Last edited: February 25, 2025</small>
                                <div class="full-note-content" style="display:none;">
                                    <p>This note covers various software engineering design patterns, architectural decisions, and best practices for exam preparation.</p>
                                    <p>It discusses MVC, Singleton, Observer, and Factory patterns in depth. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div><!-- /.notes-list -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div>
            
            <!-- Right Column: Quick Filters & Tools -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="card-title mb-0">Quick Filters</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-outline-primary btn-sm">All Notes</button>
                            <button class="btn btn-outline-secondary btn-sm">DBMS</button>
                            <button class="btn btn-outline-warning btn-sm">React</button>
                            <button class="btn btn-outline-success btn-sm">SE</button>
                            <button class="btn btn-outline-info btn-sm">Frontend</button>
                            <button class="btn btn-outline-dark btn-sm">Exam Prep</button>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Tools</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-cloud-upload me-2"></i>Import Notes
                            </button>
                            <button class="btn btn-outline-success">
                                <i class="bi bi-cloud-download me-2"></i>Export Notes
                            </button>
                            <button class="btn btn-outline-info">
                                <i class="bi bi-share me-2"></i>Share Notes
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.service-content -->

<!-- Note Details Modal -->
<div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="noteModalLabel">Note Details</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <h5 id="modalNoteTitle"></h5>
         <p id="modalNoteDescription"></p>
         <div id="modalNoteRating" class="mb-3"></div>
         <div id="modalRelatedContent">
             <h6>Related Notes</h6>
             <p>Here you can show some additional or related content. (This is placeholder text.)</p>
         </div>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- New Note Modal -->
<div class="modal fade" id="newNoteModal" tabindex="-1" aria-labelledby="newNoteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="newNoteForm">
        <div class="modal-header">
           <h5 class="modal-title" id="newNoteModalLabel">New Note</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="mb-3">
              <label for="newNoteTitle" class="form-label">Title</label>
              <input type="text" class="form-control" id="newNoteTitle" required>
           </div>
           <div class="mb-3">
              <label for="newNoteDescription" class="form-label">Description</label>
              <textarea class="form-control" id="newNoteDescription" rows="4" required></textarea>
           </div>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
           <button type="submit" class="btn btn-primary">Add Note</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
$additionalScripts = '
<script>
// Function to sort notes based on rating or original order (relevance)
// and update active state on buttons plus a status message
function sortNotes(sortType) {
    document.getElementById("sortRelevance").classList.remove("active");
    document.getElementById("sortRating").classList.remove("active");
    if (sortType === "rating") {
        document.getElementById("sortRating").classList.add("active");
        document.getElementById("sortStatus").textContent = "Sorted by Rating";
    } else if (sortType === "relevance") {
        document.getElementById("sortRelevance").classList.add("active");
        document.getElementById("sortStatus").textContent = "Sorted by Relevance";
    }
    
    const container = document.getElementById("notesList");
    const notes = Array.from(container.getElementsByClassName("note-item"));
    notes.sort(function(a, b) {
        if (sortType === "rating") {
            return parseFloat(b.getAttribute("data-rating")) - parseFloat(a.getAttribute("data-rating"));
        } else if (sortType === "relevance") {
            return parseInt(a.getAttribute("data-index")) - parseInt(b.getAttribute("data-index"));
        }
    });
    container.innerHTML = "";
    notes.forEach(note => container.appendChild(note));
}

// Event listener for "Open" buttons to show note details modal
document.querySelectorAll(".btn-open-note").forEach(function(button) {
    button.addEventListener("click", function() {
        const noteItem = this.closest(".note-item");
        const noteTitle = noteItem.querySelector("h5").textContent;
        const noteDesc = noteItem.querySelector("p.text-muted").textContent;
        const noteRating = noteItem.getAttribute("data-rating");
        const fullContent = noteItem.querySelector(".full-note-content").innerHTML || "";
        
        document.getElementById("modalNoteTitle").textContent = noteTitle;
        document.getElementById("modalNoteDescription").innerHTML = noteDesc + fullContent;
        document.getElementById("modalNoteRating").innerHTML = "Rating: <strong>" + noteRating + "</strong> / 5";
        
        var noteModal = new bootstrap.Modal(document.getElementById("noteModal"));
        noteModal.show();
    });
});

// Event listener for "Edit Rating" buttons
document.querySelectorAll(".btn-edit-rating").forEach(function(button) {
    button.addEventListener("click", function() {
        const noteItem = this.closest(".note-item");
        let newRating = prompt("Enter new rating (0-5):", noteItem.getAttribute("data-rating"));
        if(newRating !== null) {
            newRating = parseFloat(newRating);
            if(isNaN(newRating) || newRating < 0 || newRating > 5) {
                alert("Please enter a valid rating between 0 and 5.");
            } else {
                noteItem.setAttribute("data-rating", newRating);
                const ratingDisplay = noteItem.querySelector(".note-rating strong");
                ratingDisplay.textContent = newRating;
            }
        }
    });
});

// Event listener for "New Note" button to show new note modal
document.getElementById("btnNewNote").addEventListener("click", function() {
    var newNoteModal = new bootstrap.Modal(document.getElementById("newNoteModal"));
    newNoteModal.show();
});

// Event listener for new note form submission
document.getElementById("newNoteForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const title = document.getElementById("newNoteTitle").value.trim();
    const description = document.getElementById("newNoteDescription").value.trim();
    if(title === "" || description === "") {
        alert("Please fill in both the title and description.");
        return;
    }
    // Determine new note index (set to last index + 1)
    const notes = document.querySelectorAll(".note-item");
    let newIndex = notes.length ? notes.length + 1 : 1;
    // Create new note element
    const newNote = document.createElement("div");
    newNote.className = "note-item mb-3 p-3 border rounded";
    newNote.setAttribute("data-index", newIndex);
    newNote.setAttribute("data-rating", "0"); // default rating
    newNote.setAttribute("data-relevance", newIndex); // assume new notes are added at the end
    newNote.innerHTML = `
        <div class="d-flex justify-content-between align-items-start">
            <div>
                <h5 class="mb-1">${title}</h5>
                <p class="text-muted mb-2">${description.substring(0, 60)}...</p>
                <div class="note-rating text-warning">
                    Rating: <strong>0</strong> / 5
                </div>
            </div>
            <div class="btn-group">
                <button class="btn btn-outline-success btn-sm btn-open-note">
                    <i class="bi bi-eye"></i> Open
                </button>
                <button class="btn btn-outline-primary btn-sm btn-edit-note">
                    <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-outline-warning btn-sm btn-edit-rating">
                    <i class="bi bi-star"></i> Edit Rating
                </button>
                <button class="btn btn-outline-danger btn-sm btn-delete-note">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>
        <small class="text-muted">Last edited: Just now</small>
        <div class="full-note-content" style="display:none;">
            <p>${description}</p>
        </div>
    `;
    document.getElementById("notesList").appendChild(newNote);
    // Reattach event listeners for the new note buttons
    newNote.querySelector(".btn-open-note").addEventListener("click", function() {
        const noteItem = this.closest(".note-item");
        const noteTitle = noteItem.querySelector("h5").textContent;
        const noteDesc = noteItem.querySelector("p.text-muted").textContent;
        const noteRating = noteItem.getAttribute("data-rating");
        const fullContent = noteItem.querySelector(".full-note-content").innerHTML || "";
        
        document.getElementById("modalNoteTitle").textContent = noteTitle;
        document.getElementById("modalNoteDescription").innerHTML = noteDesc + fullContent;
        document.getElementById("modalNoteRating").innerHTML = "Rating: <strong>" + noteRating + "</strong> / 5";
        
        var noteModal = new bootstrap.Modal(document.getElementById("noteModal"));
        noteModal.show();
    });
    newNote.querySelector(".btn-edit-rating").addEventListener("click", function() {
        const noteItem = this.closest(".note-item");
        let newRating = prompt("Enter new rating (0-5):", noteItem.getAttribute("data-rating"));
        if(newRating !== null) {
            newRating = parseFloat(newRating);
            if(isNaN(newRating) || newRating < 0 || newRating > 5) {
                alert("Please enter a valid rating between 0 and 5.");
            } else {
                noteItem.setAttribute("data-rating", newRating);
                const ratingDisplay = noteItem.querySelector(".note-rating strong");
                ratingDisplay.textContent = newRating;
            }
        }
    });
    // Reset and hide the new note modal
    document.getElementById("newNoteForm").reset();
    var newNoteModal = bootstrap.Modal.getInstance(document.getElementById("newNoteModal"));
    newNoteModal.hide();
});
</script>
<script src="../js/service-interactions.js"></script>
';
include '../includes/layout.php';
?>
    