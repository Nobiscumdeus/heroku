<?php
error_reporting(0);
session_start();
//Connection to the database that contains details of students,admins or teachers given access to the portal

$data=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
//$data=new mysqli('localhost','root','','schoolproject');
//Display an error message if there is an error in connection
if($data===false){
    die("connection error");
}
//This is coming from the login page 
if($_SERVER["REQUEST_METHOD"]=='POST'){
    //collect username and password of potential admins or students
   $name=htmlspecialchars(stripslashes(trim($_POST['username'])));
   $pass=htmlspecialchars(stripslashes(trim($_POST['password'])));
  //the user represents the table in our database for admin, teachers or students that have been registered
    $sql="SELECT * FROM user WHERE username='$name' AND password='$pass'";
    //mysqli_query runs our connection variable i.e data against the sql
    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);
    $id=$row['id'];
    //usertype is a field or column name in our user table telling us if the user is a student,admin etc
    if($row['usertype']=='student'){
        $_SESSION['username']=$name;
        $_SESSION['usertype']='student';
    
        //to take student to the student home page
       
        //header("location:studenthome.php");

       header("location:studenthome.php?id=$id");
   
        
    }
    elseif($row['usertype']=='admin'){
        $_SESSION['username']=$name;
        $_SESSION['usertype']='admin';
        //to take the admin to admin home page 
        header("location:adminhome.php");
    }
    else{
        //session_start();
        $message="username or password do not match, you may try again!!";
        $_SESSION['loginMessage']=$message;
        //This error message will be displayed back at the logn page 
        header("location:login.php");
    }
}

?>