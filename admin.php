<?php
session_start();
$id = $_SESSION["id"] ;
$email = $_SESSION["email"] ;

// $id=$_GET['id'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="nav">
        <h2>Welcome To Admin Page</h2>
        <h4> <a href="homepage.php" class="logoutStyle" >logout</a></h4>
    </div>
    
    <!-- <button type="submit" name="addpost" class="addbtn">Addpost</button> -->
    <div class="btnadd">
    <a href="post.php"  style="padding:10px 10px; background-color:blue; color:white; cursor:pointer; text-decoration:none;">Add Post</a>
      

    </div>
   
  
    <table id="customers">
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>title</th>
          <th>Description</th>
          <th>Operation</th>
          
        </tr>
<?php
include('conec.php');

$query = "select * from blog_info where userid1 = '$id' order by date1 desc";
$res = mysqli_query($con,$query);
if(mysqli_num_rows($res) > 0){
    while($rows = mysqli_fetch_assoc($res)){
      ?>
      <tr>
        <td> <?php echo $rows['blogid']; ?> </td>
        <td> <?php echo $email; ?> </td>
        <td> <?php echo $rows['title']; ?> </td>
        <td> <?php echo $rows['description1']; ?> </td>
        <td><a href='post1.php?id= <?php echo $rows['blogid']; ?>'>
        <input type='submit'  value='Edite'class="btn1"></a>
        <a href='delete.php?id=<?php echo $rows['blogid'];?>'><input type='submit'  value='Delete'class="btn2"></a></td>
          
      </tr>

      <?php
    }
}
else{
  echo "No Record Found!";
}
?>

          <!-- <td>1</td>
          <td>uzma</td>
          <td>jjj</td>
          <td>jjjjjjjj</td>
          <td><button type="submit" class="btn1">Edite</button><button type="submit" class="btn2">Delete</button></td>
           -->
        
          
        
        
      </table>


</body>
</html>