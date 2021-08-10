<?php
session_start();
$id = $_SESSION["id"] ;
$email = $_SESSION["email"] ;

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
    
</head>
<body>

    <form method="POST" action="">
        
            <h2>Create Post</h2>
       
        
        <div class="input-group">
            <label for="">Author Email : <?php echo $email;?></label>
            
        </div>
        <div class="input-group">
            <label for="">Blog Title</label>
            <input type="text" name="title">
        </div>
        <div class="input-group">
            <label for="">Description</label>
            <textarea rows="10" cols="50" name="description1"> </textarea>
            
</div>

        <div class="input-group">
            <button type="submit" name="submit" class="btn">Create Blog</button>
        </div>
</form>   
<?php

   
       
include("conec.php"); //connection file
    
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $description=$_POST['description1'];
    if($_SESSION["email"])
    {
    $result="INSERT INTO blog_info (userid1,title,description1) VALUES ('$id','$title','$description')"; // insert query
    $run=mysqli_query($con,$result);
    if($run){
        echo "<script> alert('Blog Created Succesfully ')</script>";
           header("refresh:0,url=admin.php");
    }
    else{
        echo "<script> alert('Error! Creating Blog ')</script>";
           header("refresh:0,url=admin.php");
    }
}
}
 ?> 
</body>
</html>
