<?php include 'sever.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Login Page</title>
</head>

<body>
    <div class="form-body">
        <div class="form-container">
            <h3>Login</h3>
            <?php if ($error_message): ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email" class="visually-hidden">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="form-group">
                    <label for="password" class="visually-hidden">Password:</label>
                    <input type="password" name="password" id="pass" class="pass" placeholder="Password">
                    <i class="fa-solid fa-eye toggle-password" id="toggle-Pass"></i>
                </div>
                <div class="form-btn">
                    <button type="submit" class="btn-form btn-primary" name="login">Login</button>
                    <p><?php echo $error_message; ?></p>
                </div>
            </form>
            <div class="form-footer-login">
                <!-- <p>By clicking Register, you agree to our <a href="#">Terms & Conditions</a> and <a href="#">Privacy
                        Policy</a></p> -->
                <p>Don't have an account?<a href="register.php"> Register Here</a></p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>