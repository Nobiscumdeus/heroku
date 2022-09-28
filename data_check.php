<?php
session_start();
//$data=new mysqli('localhost','root','','schoolproject');
$data=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
if($data===false){
    die("connection error");
}
if(isset($_POST['apply'])){
    $data_name=htmlspecialchars(stripslashes(trim($_POST['name'])));
    $data_email=htmlspecialchars(stripslashes(trim($_POST['email'])));
    $data_phone=htmlspecialchars(stripslashes(trim($_POST['phone'])));
    $data_message=htmlspecialchars(stripslashes(trim($_POST['message'])));
    
    $sql="INSERT INTO admission(name,email,phone,message)
    VALUES('$data_name','$data_email','$data_phone','$data_message')";
    $result=mysqli_query($data,$sql);
    if($result){
        $_SESSION['message']="Your Application is Successful...";
        header("location:index.php");

    }else{
        echo "oops!!! Application Failed!";
    }

}
?>