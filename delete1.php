<?php

include ('conec.php'); // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"delete from blog_info where blogid = '$id'"); // delete query

if($del)
{   
    echo '<script>alert("deleted succesfully")</script>';
    
    header("location:view.php"); // redirects to the view page
   
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>