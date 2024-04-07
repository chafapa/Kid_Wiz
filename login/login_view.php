<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kid Wiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/login.css"> 
</head>
<body>

<div class="login-container">
    <form action="../actions/login_user_action.php" method="post" class="login-form-box">
        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wizard</a>
        <h3>Login</h3>
        <?php if (isset($_GET['error'])){ ?>
                <p class=  "error" style = "background: #F2DEDE; color: #A94442;padding: 10px;
                width: 95%; border-radius: 5px;margin: 20px auto;"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        <input type="email" placeholder="Email" name="email"  class="box" pattern = "[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
        <input type="password" placeholder="Password" name="password" class="box" pattern = ".{8,}" title = "Password must be at least 8 characters long" required>
        <p>Don't have an account? <a href="../login/register_view.php">Sign up</a></p>
        <!-- <input type="submit" name="submit" value="Login" class="btn"> -->
        <button type="submit" name="submit" class="btn">Login</button>
    </form>
</div>

</body>
</html>
