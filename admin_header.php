<?php
    include 'configs.php';
    session_start();
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<header class="header">
    <div class="flex">
        <a href="admin_page.php" class="logo">Admin <span>Panel</span></a>

        <nav class="navbar">
            <a href="admin_page.php">Home</a>
            <a href="admin_products.php">Products</a>
            <a href="admin_orders.php">Orders</a>
            <a href="admin_users.php">Users</a>
            <!-- <a href="admin_contacts.php">Messages</a> -->

        </nav>
        <div class="icons">
            <div id="menu-btn" class="fa fa-bars"></div>
            <div id="user-btn" class="fa fa-user-circle"></div>
        </div>
        <div class="account-box">
            <p>Username: <?php echo $_SESSION['adminname']; ?></p>
            <p>Email: <?php echo $_SESSION['adminemail']; ?></p>
        </div>
    </div>
</header>