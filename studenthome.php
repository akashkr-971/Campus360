<?php 
session_start();
include 'header2.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus360 - Student Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        :root {
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 70px;
            --sidebar-bg: #1a237e;
            --sidebar-hover: #283593;
            --sidebar-active: #3949ab;
            --text-primary: #ffffff;
            --text-secondary: #b3e5fc;
        }

        body {
            padding: 0;
            overflow-x: hidden;
            background-color: #f5f7fa;
        }

        .sidebar {
            top: 60px;
            width: var(--sidebar-width);
            height: calc(100vh - 60px);
            background: var(--sidebar-bg);
            position: fixed;
            left: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1000;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
            padding-top: 20px;
            overflow-x: hidden;
        }

        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        .sidebar-link {
            color: var(--text-primary);
            text-decoration: none;
            padding: 15px 25px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            white-space: nowrap;
            border-left: 4px solid transparent;
            margin: 5px 0;
            overflow: hidden;
        }

        .sidebar-link:hover {
            background: var(--sidebar-hover);
            color: var(--text-primary);
            border-left: 4px solid var(--text-secondary);
            transform: translateX(5px);
        }

        .sidebar-link.active {
            background: var(--sidebar-active);
            border-left: 4px solid var(--text-primary);
        }

        .sidebar-link i {
            font-size: 1.4rem;
            margin-right: 15px;
            width: 25px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .sidebar-link:hover i {
            transform: scale(1.1);
        }

        .sidebar.collapsed .link-text {
            display: none;
        }

        .link-text {
            font-size: 0.95rem;
            letter-spacing: 0.3px;
            transition: opacity 0.3s ease;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 30px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            min-height: calc(100vh - 65px);
            background: #f5f7fa;
        }

        .main-content.expanded {
            margin-left: var(--sidebar-collapsed-width);
        }

        @media (max-width: 768px) {
            .sidebar {
                width: var(--sidebar-collapsed-width);
            }
            .sidebar .link-text {
                display: none;
            }
            .main-content {
                margin-left: var(--sidebar-collapsed-width);
                padding: 20px;
            }
            .sidebar:hover {
                width: var(--sidebar-width);
            }
            .sidebar:hover .link-text {
                display: inline;
            }
        }

        /* Dashboard Cards Styling */
        .stat-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 2rem;
            color: var(--sidebar-bg);
            margin-bottom: 10px;
        }

        .stat-title {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .stat-desc {
            color: #888;
            font-size: 0.8rem;
        }


    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="services/lms.php" class="sidebar-link active">
            <i class="bi bi-book"></i>
            <span class="link-text">Learning Management</span>
        </a>
        <a href="services/scholarship.php" class="sidebar-link">
            <i class="bi bi-award"></i>
            <span class="link-text">Scholarships</span>
        </a>
        <a href="services/internships.php" class="sidebar-link">
            <i class="bi bi-briefcase"></i>
            <span class="link-text">Internships</span>
        </a>
        <a href="services/vrclassroom.php" class="sidebar-link">
            <i class="bi bi-display"></i>
            <span class="link-text">VR Classroom</span>
        </a>
        <a href="services/notes.php" class="sidebar-link">
            <i class="bi bi-journal-text"></i>
            <span class="link-text">Notes</span>
        </a>
        <a href="services/forum.php" class="sidebar-link">
            <i class="bi bi-chat-dots"></i>
            <span class="link-text">Discussion Forum</span>
        </a>
        <a href="services/support.php" class="sidebar-link">
            <i class="bi bi-headset"></i>
            <span class="link-text">Support</span>
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <div class="dashboard-header">
            <h1>Welcome Back, <?php echo $_SESSION['full_name']; ?>!</h1>
            <p>Here's what's happening in your academic journey</p>
        </div>

        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="stat-title">Current GPA</div>
                <div class="stat-value">3.8</div>
                <div class="stat-desc">Last updated 2 days ago</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-file-text"></i>
                </div>
                <div class="stat-title">Assignments</div>
                <div class="stat-value">12/15</div>
                <div class="stat-desc">3 pending submissions</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-trophy"></i>
                </div>
                <div class="stat-title">Achievement Points</div>
                <div class="stat-value">850</div>
                <div class="stat-desc">Rank 5 in class</div>
            </div>
        </div>
    </div>
    <div class="chat-container">
        <div class="chat-box" id="chatBox">
            <div class="chat-header">ReGenAI</div>
            <div class="chat-messages" id="chatMessages">
                <div class="message bot-message">Hello! How can I help you today?</div>
            </div>
            <div class="chat-input-container">
                <input type="text" class="chat-input" id="userInput" placeholder="Type your message...">
                <button class="chat-send" onclick="sendMessage()">Send</button>
            </div>
        </div>
        <button class="chat-button" id="toggleChat">Chat With ReGenAI</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatBox = document.getElementById("chatBox");
            const chatContainer = document.querySelector(".chat-container");
            const userInput = document.getElementById("userInput");
            
            document.getElementById("toggleChat").addEventListener("click", function(e) {
                e.stopPropagation();
                chatBox.style.display = chatBox.style.display === "none" ? "block" : "none";
                if (chatBox.style.display === "block") {
                    userInput.focus();
                }
            });
            
            document.addEventListener('click', function(e) {
                if (chatBox.style.display === "block" && 
                    !chatContainer.contains(e.target)) {
                    chatBox.style.display = "none";
                }
            });
            
            chatBox.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });

        function sendMessage() {
            let userInput = document.getElementById("userInput");
            let userMessage = userInput.value.trim();
            
            if (userMessage === "") return;
            
            const chatMessages = document.getElementById("chatMessages");
            
            chatMessages.innerHTML += `<div class="message user-message">${userMessage}</div>`;
            
            const typingIndicator = `<div class="message bot-message" id="typing">Typing...</div>`;
            chatMessages.innerHTML += typingIndicator;
            
            chatMessages.scrollTop = chatMessages.scrollHeight;
            
            userInput.value = "";
            userInput.focus();

            fetch("http://localhost:5000/chat", {
                method: "POST",
                body: JSON.stringify({ message: userMessage }),
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "Access-Control-Allow-Origin": "*"
                }
            })
            .then(response => {
                console.log('Response status:', response.status);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Received data:', data);
                document.getElementById("typing").remove();
                
                if (data.error) {
                    throw new Error(data.error);
                }
                
                const formattedResponse = data.response
                    .replace(/\n/g, '<br>')
                    .replace(/ {2,}/g, function(match) {
                        return '&nbsp;'.repeat(match.length);
                    });
                
                chatMessages.innerHTML += `<div class="message bot-message">${formattedResponse}</div>`;
                chatMessages.scrollTop = chatMessages.scrollHeight;
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById("typing")?.remove();
                
                chatMessages.innerHTML += `<div class="message bot-message">Sorry, there was an error connecting to the AI service. Please try again later.</div>`;
                chatMessages.scrollTop = chatMessages.scrollHeight;
            });
        }

        document.getElementById("userInput").addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                sendMessage();
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            let isCollapsed = false;

            function toggleSidebar() {
                isCollapsed = !isCollapsed;
                sidebar.classList.toggle('collapsed', isCollapsed);
                mainContent.classList.toggle('expanded', isCollapsed);
            }

            if (window.innerWidth > 768) {
                sidebar.addEventListener('mouseenter', function() {
                    isCollapsed = false;
                    sidebar.classList.remove('collapsed');
                    mainContent.classList.remove('expanded');
                });

                sidebar.addEventListener('mouseleave', function() {
                    isCollapsed = true;
                    sidebar.classList.add('collapsed');
                    mainContent.classList.add('expanded');
                });

                // Set initial state
                toggleSidebar();
            }

            // Add active class to current page
            const currentPath = window.location.pathname;
            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            sidebarLinks.forEach(link => {
                if (link.getAttribute('href').includes(currentPath)) {
                    link.classList.add('active');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
