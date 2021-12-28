<?php require APPROOT . '/views/includes/header.php' ?>

<body>
<div class="container">
  <img src="img.jpg" alt="John" class="image">
  <p class="title"><?php echo $_SESSION['username']; ?></p>
    <div class="info">
    <p> <?php echo $_SESSION['bio']; ?>
    </p>
    </div>
    <p><button class="btn">Change Profile</button></p>
</div>
</body>
</html>