<?php




$conn=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
if(isset($conn)){
    echo "Connection successful";
}else{
    die(mysqli_error($conn));
}
?>
