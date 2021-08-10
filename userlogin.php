<?php 
SESSION_START();
include('conec.php');
if(isset($_POST['submit']))
{
$email = $_POST['email']; //from login.php(html form) email
$upassword = md5($_POST['password']);//from login.php(html form) password

$query ="select * from user_registration where email='$email'and password='$upassword'";
$res = mysqli_query($con,$query) or die(mysqli_error($con));

$result = mysqli_num_rows($res);
if($result ==1)
{
    while($rows = mysqli_fetch_assoc($res)){
        $id = $rows['id'];
        $email = $rows['email'];
    }
    $_SESSION['id']= $id;
    $_SESSION['email']=$email;

    header("location:admin.php");
}
else
{
echo '<script>alert("invalid email or password") </script>';
header("refresh:0,url=login.php");
}
}
?>
