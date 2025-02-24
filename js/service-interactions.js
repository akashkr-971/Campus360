// Common function to show toast notifications
function showToast(message, type = 'info') {
    Toastify({
        text: message,
        duration: 3000,
        gravity: "top",
        position: "right",
        backgroundColor: type === 'success' ? "#28a745" : 
                        type === 'error' ? "#dc3545" : 
                        type === 'warning' ? "#ffc107" : "#17a2b8",
        stopOnFocus: true
    }).showToast();
}

// Main event handler
document.addEventListener('DOMContentLoaded', function() {
    try {
        // VR Classroom interactions
        document.querySelectorAll('.btn-join-session').forEach(button => {
            button.addEventListener('click', function() {
                showToast('Joining VR session...', 'info');
                setTimeout(() => {
                    showToast('Successfully joined the session!', 'success');
                }, 1500);
            });
        });

        const downloadButton = document.querySelector('.btn-download-client');
        if (downloadButton) {
            downloadButton.addEventListener('click', function() {
                showToast('Starting download...', 'info');
                setTimeout(() => {
                    showToast('VR Client downloaded successfully!', 'success');
                }, 2000);
            });
        }

        // Notes interactions
        const newNoteBtn = document.querySelector('.btn-new-note');
        if (newNoteBtn) {
            newNoteBtn.addEventListener('click', function() {
                showToast('Creating new note...', 'info');
            });
        }

        document.querySelectorAll('.btn-edit-note').forEach(button => {
            button.addEventListener('click', function() {
                showToast('Opening note editor...', 'info');
            });
        });

        document.querySelectorAll('.btn-delete-note').forEach(button => {
            button.addEventListener('click', function() {
                if (confirm('Are you sure you want to delete this note?')) {
                    showToast('Note deleted successfully!', 'success');
                }
            });
        });

        // Forum interactions
        const newTopicBtn = document.querySelector('.btn-new-topic');
        if (newTopicBtn) {
            newTopicBtn.addEventListener('click', function() {
                showToast('Opening new topic form...', 'info');
            });
        }

        document.querySelectorAll('.btn-tag-filter').forEach(button => {
            button.addEventListener('click', function() {
                const tag = this.textContent.trim();
                showToast(`Filtering discussions by ${tag}`, 'info');
            });
        });

        // Support interactions
        const ticketForm = document.querySelector('.ticket-form');
        if (ticketForm) {
            ticketForm.addEventListener('submit', function(e) {
                e.preventDefault();
                showToast('Submitting your ticket...', 'info');
                setTimeout(() => {
                    showToast('Ticket submitted successfully!', 'success');
                    this.reset();
                }, 1500);
            });
        }

        document.querySelectorAll('.btn-view-ticket').forEach(button => {
            button.addEventListener('click', function() {
                showToast('Loading ticket details...', 'info');
            });
        });

        const chatButton = document.querySelector('.btn-live-chat');
        if (chatButton) {
            chatButton.addEventListener('click', function() {
                showToast('Connecting to support chat...', 'info');
                setTimeout(() => {
                    showToast('Connected! An agent will be with you shortly.', 'success');
                }, 1000);
            });
        }
    } catch (error) {
        console.error('Error initializing service interactions:', error);
        showToast('An error occurred while setting up page interactions', 'error');
    }
});
