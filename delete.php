<?php 
//$data=new mysqli('localhost','root','','schoolproject');
$data=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
if($_GET['student_id']){
    $user_id=$_GET['student_id'];
    $sql="DELETE FROM USER where id='$user_id'";
    $result=mysqli_query($data,$sql);

    if($result){
        $_SESSION['message']='Student details deleted successfully';
        header('location:view_student.php');
    }
}
?>
