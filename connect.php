<?php
//The purpose of this page is to connect to the choir Database itself where we have our records;
$host='localhost:3306';
$user='root';
$password='';
$dbname='rose of sharon';

$connect=new mysqli($host,$user,$password,$dbname);
/**if($connect){
    echo "<h1>Database Connected Succesfully <//h1>";
}else{
    die("Error in Connection".mysqli_error($connect));
}
**/
if(!$connect){
    die("Error in connection".mysqli_error($connect));
}

/**$grace="CREATE TABLE mathematics(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fullnames VARCHAR(200) NOT NULL,
    class VARCHAR(5),
    first_test INT(2) NOT NULL,
    second_test int(2) NOT NULL,
    third_test INT(2) NOT NULL,
    total_tests int(2) not null,
    exams int(2) not null,
    final_scores int(3) not null,
    grades varchar(1) not null,
    term varchar(100) not null)";

if(!mysqli_query($connect,$grace)){
die("An error occurred ".mysqli_error($connect));
}
**/




#mysqli_close($connect);


?>


/**
 //Get Heroku ClearDB information
//$cleardb_url=parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_url=parse_url(getenv("mysql://bfeacbb227cae1:4e4f1f58@us-cdbr-east-06.cleardb.net/heroku_e309c0affc5c52d"));
//$cleardb_server=$cleardb_url["host"];
$cleardb_url=$cleardb_url["us-cdbr-east-06.cleardb.net"];

//$cleardb_username=$cleardb_url["user"];
$cleardb_username=$cleardb_url["bfeacbb227cae1:4e4f1f58"];

//$cleardb_password=$cleardb_url["pass"];
//$cleardb_password=$cleardb_url["4e4f1f58"];
//just in case we don't need password
$cleardb_password=$cleardb_url[""];
$cleardb=substr($cleardb_url["path"],1);

$active_group='default';
$query_builder=TRUE;

//Connect to the DataBase
$conn=mysqli_connect($cleardb_server,$cleardb_username,$cleardb_password,$cleardb_username);

//echo "Hello world, Chasfat Projects here"
if(isset($conn)){
    echo "Connection Successful";
}else{
    die("connection error".mysqli_error($conn));
}

 ***/


<?php 
//Making our connection 
//$cleardb_url=parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_url=parse_url(getenv("mysql://bfeacbb227cae1:4e4f1f58@us-cdbr-east-06.cleardb.net/heroku_e309c0affc5c52d?reconnect=true"));
$cleardb_server=$cleardb_url["host"];
$cleardb_username=$cleardb_url["user"];
$cleardb_password=$cleardb_url["pass"];

$cleardb=substr($cleardb_url["path"],1);

$active_group='default';
$query_builder=TRUE;

//Connect to the DataBase
//$conn=mysqli_connect($cleardb_server,$cleardb_username,$cleardb_password,$cleardb_username);
$connect=new mysqli($cleardb_server,$cleardb_username,$cleardb_password,$cleardb);
if(isset($connect)){
    echo "Connection was successful";
}else{
    die("An error in connection".mysqli_error($connect));
}
$connection=new mysqli("mysql://bfeacbb227cae1:4e4f1f58@us-cdbr-east-06.cleardb.net/heroku_e309c0affc5c52d?reconnect=true", "bfeacbb227cae1", "4e4f1f58", "heroku_e309c0affc5c52d");
?>

