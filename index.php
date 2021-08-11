<?php
session_start();

if (isset($_SESSION['email'])){
  header("location:admin.php");
}
else{

  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
  <link rel="stylesheet" href="css/home.css">
</head>
<body>
    
   
      <nav>
         <ul>
            <li style="float: left;"><a href="#">Welcome </a></li>
            <li><a href="Regpage.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
  
        </ul>
      </nav>
       

        <div class="upload-list">
            <h2>recently upload</h2>
        </div>
       
       <table>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>title</th>
          <th>Description</th>
        </tr>
        <?php
        include('conec.php');

      $query = "SELECT b.blogid,u.username,b.title,b.description1 FROM blog_info b,user_registration u WHERE u.id=b.userid1";
      $res = mysqli_query($con,$query);
      if(mysqli_num_rows($res) > 0){
      while($rows = mysqli_fetch_assoc($res)){
        ?>
      <tr>
        <td><?php echo $rows['blogid']; ?></td>
        <td> <?php echo $rows['username']; ?> </td>
        <td> <?php echo $rows['title']; ?> </td>
        <td> <?php echo $rows['description1']; ?> </td>
        
          
      </tr>

      <?php
    }
}else{
  echo "No Record Found!";
}
}
?>      
        
      </table>
</body>
</html>