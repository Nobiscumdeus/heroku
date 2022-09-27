<?php 
$data=new mysqli('localhost','root','','schoolproject');
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
