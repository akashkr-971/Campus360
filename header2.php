<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus360</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #212529;
            padding: 0.5rem 1rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            height: 60px;
        }

        .navbar-brand {
            color: #fff !important;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .navbar-toggler {
            border-color: rgba(255,255,255,0.5);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .nav-link {
            color: rgba(255,255,255,0.85) !important;
        }

        .nav-link:hover {
            color: #fff !important;
        }

        .notification-bell {
            font-size: 1.25rem;
            padding: 0.5rem;
            color: rgba(255,255,255,0.85) !important;
            text-decoration: none;
        }

        .notification-bell:hover {
            color: #fff !important;
        }

        .notification-badge {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
            line-height: 1;
            background-color: #dc3545;
            color: white;
            border-radius: 50%;
            min-width: 20px;
            text-align: center;
        }

        .dropdown-menu {
            background-color: #212529;
            border: 1px solid rgba(255,255,255,0.15);
            padding: 0.5rem 0;
        }

        .dropdown-item {
            color: rgba(255,255,255,0.85);
            padding: 0.5rem 1rem;
        }

        .dropdown-item:hover {
            background-color: #343a40;
            color: #fff;
        }

        .dropdown-divider {
            border-color: rgba(255,255,255,0.15);
        }

        .user-info {
            display: flex;
            align-items: center;
            color: #fff;
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Campus360</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item dropdown me-3">
                        <a class="notification-bell" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell-fill"></i>
                            <span class="notification-badge">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">New assignment posted</a></li>
                            <li><a class="dropdown-item" href="#">Grade updated</a></li>
                            <li><a class="dropdown-item" href="#">New message received</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-center" href="#">View all notifications</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link user-info" href="#" role="button">
                            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['full_name']); ?>&background=random" alt="User" class="user-avatar">
                            <span><?php echo htmlspecialchars($_SESSION['full_name']); ?></span>
                        </a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="../logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enable all dropdowns
        const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
        const dropdownList = [...dropdownElementList].map(dropdownToggleEl => {
            return new bootstrap.Dropdown(dropdownToggleEl);
        });

        // Enable all tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
    </script>
</body>
</html>