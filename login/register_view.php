<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Kid Wiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>

<div class="signup-container">
    <form action="../actions/register_user_action.php" method="post" class="signup-form-box">
        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wizard</a>
        <h3>Sign Up</h3>
        <input type="text" id="firstname" placeholder="First Name *" name="firstname" required class="box">
        <input type="text" id="lastname" placeholder="Last Name *" name="lastname" required class="box">
        <div class="gender-select">
            <label>Gender:</label>
            <select name="gender" class="box">
            <option value="">Select Gender</option>
                <option value="0">Male</option>
                <option value="1">Female</option>
                <option value="2">Prefer not to say</option>
            </select>
        </div>
        <!-- <div class="role-select">
        <label for="role">Role:</label>
        <select name="role" id="role" class="box" required>
            <option value="">Select Role</option>
            <?php foreach ($roles as $role) : ?>
                <option value="<?php echo htmlspecialchars($role['role_id']); ?>">
                    <?php echo htmlspecialchars($role['role_name']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div> -->
        <input type="email" id="email" placeholder="Email *" name="email" required class="box">
        <input type="number" id="number" name="number" placeholder="Phone Number"  class="box">
        <input type="password" id="password" placeholder="Password *" name="password" required class="box">
        <input type="date" id="birthday" name="birthday" class="box">
        <p>Already have an account? <a href="../login/login_view.php">Login</a></p>

        <button type="submit" name="submit" class="btn">Sign Up</button>
        <!-- <input type="submit" value="Sign Up" class="btn"> -->
    </form>
</div>

</body>
</html>
