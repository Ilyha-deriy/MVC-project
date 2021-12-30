<?php require APPROOT . '/views/includes/header.php' ?>

<body>
<div class="container">
            <form action="<?php echo URLROOT; ?>/users/profile" method="POST" enctype="multipart/form-data">
            <?php if(isset($_SESSION['user_id']) && !empty($_SESSION['image'])) : ?>
                <img src="<?php echo URLROOT . '/images/' . $_SESSION['image']; ?>" alt="name" class="image">
                <?php else : ?>
                <img src="<?php echo URLROOT . '/images/img2.jpg'; ?>" alt="John" class="image">
                <?php endif; ?>
            <p class="title">Username : <?php echo $_SESSION['username']; ?></p>

            <div class="input-group">
                <label>Change Username: </label>
                <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>">
                <span class="wrong">
                    <?php echo $data['usernameError']; ?>
                </span>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                <span class="wrong">
                    <?php echo $data['emailError']; ?>
            </span>
            </div>


            <div class="input-group">
                <label>Change Password</label>
                <input type="password" name="password">
                <span class="wrong">
                    <?php echo $data['passwordError']; ?>
                </span>
            </div>

            <div class="input-group">
                <label>Confirm Changed Password</label>
                <input type="password" name="confirmPassword">
                <span class="wrong">
                    <?php echo $data['confirmPasswordError']; ?>
                </span>
            </div>

            <div class="input-group">
                <label>Choose The Image</label>
                <input type="file" name="image">
            </div>
            <p><button id="submit" type="submit" class="btn" value="submit">Change Profile</button></p>
    </form>    
</div>
</body>
</html>

