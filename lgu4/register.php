<!DOCTYPE html>
<html>
    <head>
        <title> Register </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoirt" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="login-style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
    </head>

    <body>
        <img src="login-img.jpg" height="600"/>
        <div class="wrapper">
            <form action="">
                <h1>Register</h1>
                <div class="input-box">
                    <input type="text " placeholder="First Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text " placeholder="Last Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text " placeholder="Username or Email" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Confirm Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                
                <button type="submit" class="btn"> Register </button>

                <div class="register-link">
                    <p> Already have an account? <a href = "login.php"> Login </a></p> 
                    
                </div>

            </form>
        </div>
    </body>
</html>