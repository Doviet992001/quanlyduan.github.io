<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/base.css">
    <title>Admincp</title>
</head>
<body>
    <h3 class="title__admin">Welcome to Admin</h3>
    <div class="wrapper">
    <?php 
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
      ?>
    </div>
</body>
</html>