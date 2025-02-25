<?php
$baseUrl = '/Campus360/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Campus360' : 'Campus360'; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        :root {
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 70px;
            --sidebar-bg: #212529;
            --sidebar-hover: #343a40;
            --sidebar-active: #495057;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .header-spacer {
            height: 60px;
        }

        #sidebar {
            position: fixed;
            top: 60px;
            left: 0;
            bottom: 0;
            width: var(--sidebar-width);
            background: var(--sidebar-bg);
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            padding-top: 0;
            border-top: none;
        }

        #sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 1rem 1.5rem;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            margin: 0;
        }

        .nav-link:hover {
            color: #fff;
            background-color: var(--sidebar-hover);
            border-left: 4px solid #fff;
        }

        .nav-link.active {
            background-color: var(--sidebar-hover);
            border-left: 4px solid #fff;
            color: #fff;
        }

        .nav-link i {
            width: 1.5rem;
            text-align: center;
            margin-right: 1rem;
            font-size: 1.1rem;
        }

        #main-content {
            margin-left: var(--sidebar-width);
            padding: 1rem 2rem;
            transition: margin-left 0.3s ease;
            margin-top: 60px;
        }

        #main-content.expanded {
            margin-left: var(--sidebar-collapsed-width);
        }

        .d-sm-inline {
            transition: opacity 0.2s ease;
            opacity: 1;
        }

        #sidebar.collapsed .d-sm-inline {
            display: none !important;
            opacity: 0;
        }

        #sidebarToggle {
            position: fixed;
            top: 75px;
            left: 10px;
            z-index: 1050;
            padding: 0.4rem 0.7rem;
            border-radius: 4px;
            background-color: var(--sidebar-bg);
            border: none;
            color: white;
        }

        @media (min-width: 769px) {
            #sidebarToggle {
                display: none;
            }
        }

        @media (max-width: 768px) {
            #sidebar {
                width: var(--sidebar-collapsed-width);
            }
            #main-content {
                margin-left: var(--sidebar-collapsed-width);
            }
            #sidebar:hover {
                width: var(--sidebar-width);
            }
            #sidebar:hover .d-sm-inline {
                display: inline !important;
                opacity: 1;
            }
        }
    </style>
    <?php echo isset($additionalHead) ? $additionalHead : ''; ?>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Campus360/header2.php'; ?>
    
    <!-- Sidebar -->
    <div id="sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/lms.php" class="nav-link">
                    <i class="bi bi-mortarboard"></i>
                    <span class="d-sm-inline">Learning Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/attendance.php" class="nav-link">
                    <i class="bi bi-calendar-check"></i>
                    <span class="d-sm-inline">Attendance</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/visual-notes.php" class="nav-link">
                    <i class="bi bi-camera-video"></i>
                    <span class="d-sm-inline">Visual Notes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/scholarship.php" class="nav-link">
                    <i class="bi bi-award"></i>
                    <span class="d-sm-inline">Scholarships</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/internships.php" class="nav-link">
                    <i class="bi bi-briefcase"></i>
                    <span class="d-sm-inline">Internships</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/vrclassroom.php" class="nav-link">
                    <i class="bi bi-display"></i>
                    <span class="d-sm-inline">VR Classroom</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/onlineapplication.php" class="nav-link">
                    <i class="bi bi-journal-text"></i>
                    <span class="d-sm-inline">Online Application</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/notes.php" class="nav-link">
                    <i class="bi bi-book-fill"></i>
                    <span class="d-sm-inline">Notes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/forum.php" class="nav-link">
                    <i class="bi bi-chat-dots"></i>
                    <span class="d-sm-inline">Discussion Forum</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/qrcode.php" class="nav-link">
                    <i class="bi bi-qr-code"></i>
                    <span class="d-sm-inline">Qr cloud storage</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/mentor.php" class="nav-link">
                    <i class="bi bi-question-circle"></i>
                    <span class="d-sm-inline">Mentor</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/mental.php" class="nav-link">
                    <i class="bi bi-headset"></i>
                    <span class="d-sm-inline">Mental support</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/chatbot.php" class="nav-link">
                    <i class="bi bi-robot"></i>
                    <span class="d-sm-inline">ReGenAI</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/subject-planner.php" class="nav-link">
                    <i class="bi bi-calendar-plus"></i>
                    <span class="d-sm-inline">Subject Planner</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $baseUrl; ?>services/support.php" class="nav-link">
                    <i class="bi bi-question-circle"></i>
                    <span class="d-sm-inline">Support</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div id="main-content">
        <button class="btn" type="button" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>
        <?php echo isset($content) ? $content : ''; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const sidebarToggle = document.getElementById('sidebarToggle');
        let isCollapsed = false;

        // Function to toggle collapse state
        function toggleSidebar() {
            isCollapsed = !isCollapsed;
            sidebar.classList.toggle('collapsed', isCollapsed);
            mainContent.classList.toggle('expanded', isCollapsed);
        }

        // Determine if the current page should force the sidebar to remain expanded
        const currentPath = window.location.pathname;
        // List pages that should always have the sidebar expanded
        const forceExpandedPages = ['chatbot.php', 'onlineapplication.php'];
        let forceExpanded = forceExpandedPages.some(page => currentPath.includes(page));

        // Desktop behavior (for window width > 768)
        if (window.innerWidth > 768) {
            if (!forceExpanded) {
                // Collapse/expand on hover for most pages
                sidebar.addEventListener('mouseenter', function() {
                    sidebar.classList.remove('collapsed');
                    mainContent.classList.remove('expanded');
                });

                sidebar.addEventListener('mouseleave', function() {
                    sidebar.classList.add('collapsed');
                    mainContent.classList.add('expanded');
                });

                // Set initial state as collapsed (toggle once)
                toggleSidebar();
            } else {
                // Force expanded state for specific pages
                sidebar.classList.remove('collapsed');
                mainContent.classList.remove('expanded');
            }
        }

        // Toggle button for mobile devices
        sidebarToggle.addEventListener('click', function() {
            toggleSidebar();
        });

        // Set active navigation link based on current URL
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            if (currentPath.includes(link.getAttribute('href'))) {
                link.classList.add('active');
            }
        });
    });

    function openChatbot(botName) {
        // Logic to open the chatbot interface
        alert('Opening chatbot: ' + botName);
    }
    </script>
    <?php echo isset($additionalScripts) ? $additionalScripts : ''; ?>
</body>
</html>
