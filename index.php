<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SVCC LMS</title>
</head>
<body>
    
    <div class="header">
        <div class="logo"><img src="images/svclogo.png" alt=""></div>
        <h1>Saint Vincent College of Cabuyao</h1>
    </div>
    <div class="bodys" method="post">
    <form action="login.php" method="post" >
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php   } ?>
        <label  for="Name" value></label>
        <input class="Name"  name="Name" type="text" id="Name" placeholder="User Name">
        <br>
        <label for="PASSWORD"></label>
        <input type="password" name="password" id="password" placeholder="Password">
        <br>
        <input class="login" type="submit" value="Log in">
        
        <br>
        <a href="create.php" class="button">Create new account</a>
        
    </form>
</div>
    <div class="bottom"></div>

</body>
</html>