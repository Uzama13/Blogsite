
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header>

      <h2>WELCOME TO THE ADMIN PAGE</h2>
       <a href="logout.php" class="logoutStyle">Logout</a>
    
      </header>

  
    <table>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>title</th>
          <th>Description</th>
          <th>Operation</th>
          
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
   <td><a href='update1.php?id= <?php echo $rows['blogid']; ?>'>
        <input type='submit'  value='Edite'class="btn1"></a>
        <a href='delete1.php?id=<?php echo $rows['blogid'];?>'>
        <input type='submit'  value='Delete'class="btn2"></a></td>
          
 </tr>
   
     
 

 <?php
}
}else{
echo "No Record Found!";
}
?>
 </table>


</body>
</html>