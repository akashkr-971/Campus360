<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus360</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="theme.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="height: 65px;">
        <div class="container">
            <a class="navbar-brand" href="home.php">Campus360</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="home.php#about">About</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="home.php#services">Services</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="home.php#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <button onclick="showDemoForm()" class="nav-link btn btn-primary text-white px-4" style="background-color: blue; transition: background-color 0.3s;">Schedule a Demo</button>
                    </li>
                    <li class="nav-item">
                        <button onclick=window.open("login.php") class="nav-link btn btn-primary text-white px-4" style="background-color: blue; transition: background-color 0.3s;">Test Website</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        .nav-link.btn:hover {
            background-color:  #5252ee; /* Change color on hover */
        }
    </style>
</body>
</html>
