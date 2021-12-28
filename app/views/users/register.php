<?php require APPROOT . '/views/includes/header.php' ?>

<div class="container">   
    <div class="title">
        <h2>Registration</h2>
    </div>

    <form id="register-form" action="<?php echo URLROOT; ?>/users/register" method="POST">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
            <span class="wrong">
                <?php echo $data['usernameError']; ?>
            </span>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email">
            <span class="wrong">
                <?php echo $data['emailError']; ?>
            </span>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
            <span class="wrong">
                <?php echo $data['passwordError']; ?>
            </span>
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="confirmPassword">
            <span class="wrong">
                <?php echo $data['confirmPasswordError']; ?>
            </span>
        </div>
        <div class="input-group">
            <button id="submit" type="submit" class="btn" value="submit">Register</button>
        </div>
        <div class="title">
        <p>
            Alredy a member? <a href="<?php echo URLROOT; ?>/users/login">Sign in</a>
        </p>
        </div>
    </form>
</div>     
</body>
</html>