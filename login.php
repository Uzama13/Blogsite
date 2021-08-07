<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<div class="header">
        <h2>LoginPage</h2>
    </div>
    <form method="POST" action="userlogin.php">
        
        <div class="input-group">
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="submit" class="btn">Login</button>
        </div>
        <p>
            Dont have account?<a href="Regpage.php">Sign up</a>

        </p>
        </form>
        
      
      
    
   
</body>
</html>