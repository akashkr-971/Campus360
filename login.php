<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'header.php';
require 'db_connect.php';

// Process login form
if(isset($_POST['login-button'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        
        if($user) {
            if($password == $user['password']) {
                // Set session variables
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['full_name'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                
                switch($user['role']) {
                    case 'admin':
                        header("Location: admin.php");
                        break;
                    case 'faculty':
                        header("Location: facultyhome.php");
                        break;
                    default:
                        header("Location: services/lms.php");
                        break;
                }
                exit();
            } else {
                $_SESSION['error'] = "Invalid password!";
            }
        } else {
            $_SESSION['error'] = "No account found with this email!";
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = "Error: " . $e->getMessage();
    }
}
?>

<style>
    .auth-container {
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.6),
            rgba(0, 0, 0, 0.6)
        ), url('static/collegephoto/scms.jpeg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 20px 0;
    }

    .auth-box {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .form-control {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .input-group-text {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        font-weight: 600;
    }
</style>

<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="auth-box">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                        unset($_SESSION['error']);
                    }
                    if (isset($_SESSION['success'])) {
                        echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
                        unset($_SESSION['success']);
                    }
                    ?>
                    <h2 class="text-center mb-4">Welcome Back</h2>
                    
                    <form id="loginForm" action="" method="POST">
                        <div class="form-group mb-3">
                            <label class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text" style="margin-right: 10px;">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text" style="margin-right: 10px;">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="password"  required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <a href="#" class="text-primary text-decoration-none">Forgot password?</a>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-3" name="login-button">Login</button>
                        
                        <div class="text-center">
                            <span>Don't have an account? </span>
                            <a href="signup.php" class="text-primary text-decoration-none">Sign up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>