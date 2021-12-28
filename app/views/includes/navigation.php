
        <ul class="navigation">
                <a href="<?php echo URLROOT; ?>/pages/index"><li>Home</li></a>
                <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout"><li>Log out</li></a>
                <a href="<?php echo URLROOT; ?>/users/profile"><li><?php echo $_SESSION['username']; ?></li></a>
                <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login"><li>Login</li></a>       
                <a href="<?php echo URLROOT; ?>/users/register"><li>Register</li></a>
                <?php endif; ?>
        </ul>
