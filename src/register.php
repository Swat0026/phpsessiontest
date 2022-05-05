<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Registration Page</h1>

    <form action="index.php" method="post">
        Register name :<input type="text" name="reg">
        Register password :<input type="password" name="regpas">
        <button type="submit" name="sub">Register</button>
    </form>
    <?php
    
    if(isset($_SESSION['sub'])){
        session_start();
    }
    

    ?>

   
    
</body>
</html>