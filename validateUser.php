<?php
 
    include("conec.php"); 
    
    if(isset($_POST['submit'])){
        $username=$_POST['username']; //from Regpage.php(html form) name
        $email=$_POST['email'];       //from Regpage.php(html form) email
        $pass=md5($_POST['password']); //from Regpage.php(html form) password 

        //Check user is already regster
        $sql = "Select * from user_registration where email = '$email'";
        $res = mysqli_query($con,$sql);

        $row = mysqli_num_rows($res);
        //echo $row;

        if($row >=  1){
           echo "<script> alert('Email is already register.. Register using different email ')</script>";
           header("refresh:0,url=Regpage.php");
        }
        else{
            //inserting data into user_regisration table
            $result="INSERT INTO `user_registration`(`username`, `email`, `password`) VALUES ('$username','$email','$pass')";
            $run=mysqli_query($con,$result);
            if($run){
                echo "<script> alert('Registration Successfully !')</script>";
                header("refresh:0,url=login.php");
            }
            else{
                echo "<script> alert(' Registration failed ')</script>";
            }
        }
        
    }
    ?>