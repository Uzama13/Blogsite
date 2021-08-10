
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration page</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    
    <header>    
        <h2>RegisterationPage</h2>
    </header>
    <form method="POST" action="validateUser.php">
        
        <div class="input-group">
            <label for="">Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label for="">Email</label>
            <input type="text" name="email" required>
        </div>
        <div class="input-group">
            <label for="">Password</label>
            <input type="password" name="password" required>
        </div>
        
        <div class="input-group">
            <button type="submit" name="submit" class="btn">Register</button>
        </div>
        <p>
            already a user?<a href="login.php">Login</a>

        </p>
    </form>
    

</body>
</html>