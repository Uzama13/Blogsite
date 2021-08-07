
<?php
include('conec.php');


if(isset($_POST['submit'])){
    
    $tit=$_POST['title'];
    $des1=$_POST['description1'];
    
    $edit=mysqli_query($con,"UPDATE `blog_info` SET `title`='$tit',`description1`='$des1' WHERE  blogid='$id'");
    // echo '<script>alert("run")</script>';

    if($edit){
        
        //  header("location:admin.php");
        
         echo "query run";
    }
    else{
        echo "query failed";
    }

}
?>
