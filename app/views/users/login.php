<?php require APPROOT . '/views/includes/header.php' ?>

<?php var_dump($_SESSION); ?>
<div class="container">   
    <div class="title">
        <h2>Login</h2>
    </div>

    <form action="<?php echo URLROOT; ?>/users/login" method="post">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="">
            <span class="wrong">
                <?php echo $data['usernameError']; ?>
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
            <button id="submit" type="submit" class="btn" value="submit">Login</button>
        </div>
            <div class="title">
            <p>Not registered? <a href="<?php echo URLROOT; ?>/users/register">
            Create an account</a></p>
            </div>
    </form>
</div>     
</body>
</html>