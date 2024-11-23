<!DOCTYPE html>
<html>
    <head>
        <title> Log In </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoirt" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="login-style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-----bootstrap----->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>

    <body>
        <img src="login-img.jpg" height="600"/>
        <div class="wrapper">
            <form action="">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text " placeholder="Username or Email">
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="Password" placeholder="Password">
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="register-link">
                    <p> Don't have an account? <a href = "register.php"> Register </a></p> 
                </div>

                <div class="separator">
                    <span>or</span>
                </div>

                <div class="media-account">
                    <button>
                        <img src="google.webp" alt="Google" class="social-icon">Google
                    </button>
                    <button>
                        <img src="facebook.webp" alt="Facebook" class="social-icon">Facebook
                    </button>
                </div>

            </form>
        </div>
    </body>
</html>