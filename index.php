<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web điện thoại</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="wrapper">
      <?php 
            session_start();    
            include("admincp/config/config.php");
            include("pages/header.php");
            include("pages/menu.php");
            include("pages/main.php");
      ?>
    </div>
</body>
</html>