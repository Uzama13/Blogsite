<?php 

session_start();
$id = $_SESSION["id"] ;
$email = $_SESSION["email"] ;
?> 
<?php 
include('conec.php');


    
$id=$_GET['id'];
$qry=mysqli_query($con,"select * from blog_info where blogid='$id'");
$data=mysqli_fetch_array($qry);



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
        <div class="header-1">
            <h2>Create Post</h2>
        </div>
        
        
        <div class="input-group">
            <label for="">Author Email : <?php echo $email;?></label>
            
        </div>
        <div class="input-group">
            <label for="">Blog Title</label>
            <input type="text" name="title" value="<?php echo $data['title'];?>">
        </div>
        <div class="input-group">
            <label for="">Description</label>
            <textarea rows="10" cols="50" name="description1"><?php echo $data["description1"];?>
             </textarea>
             
         </div>

        <div class="input-group">
            <button type="submit" name="submit" class="btn">Create Blog</button>
        </div>

        <?php
include('conec.php');


if(isset($_POST['submit'])){
    
    $tit=$_POST['title'];
    $des1=$_POST['description1'];
    
     mysqli_query($con,"UPDATE `blog_info` SET `title`='$tit',`description1`='$des1' WHERE  blogid='$id'");
     echo '<script>alert("run")</script>';

    // if($edit){
        
         header("location:admin.php");
        
    //      echo "query run";
    // }
    // else{
    //     echo "query failed";
    // }

}
?>
</form> 
  








       

</body>
</html>