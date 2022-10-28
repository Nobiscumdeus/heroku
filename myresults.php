<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}elseif($_SESSION['usertype']=='admin'){
    header('location:login.php');
}

$me=$_GET['id'];
$con=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
$sql="SELECT * FROM user WHERE id='$me'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$student_name=$row['username'];


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <title>Rose of Sharon-results page </title>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap/dist/css/bootstrap.min.css" />
        <style type="text/css">
           
            *{
                margin:0;
                padding:0;
                color:blue;
               
               
            }
            .head{
                position:relative;
                background-color: #fc766aff;
                width:100%;
                padding-left:70px;
                margin-left:0;
                height: 12vh;
                color:whitesmoke;
                font-size:25px;
                line-height:10vh;
                font-family:sans-serif;
            }
            .logout{
                float:right;
                padding-right:40px;
            }
           
            .right-side{
               
                min-height: 100vh;
            }
         
            ul li a:link{
               color:#f1ac88ff;
            }
            .right-side h3{
                text-transform: uppercase;
                margin-left:50px;
                letter-spacing:5px;
                padding-left:20px;
                margin-top:10px;
            }
            form input{
                margin-top:10px;
               
            }
            .form{
                background:white;
                padding-left:30px;
                padding-top:20px;
               
            }
        
         .form-control{
            width:90%;
            padding-top:20px;
            margin-left:25px;
         }
         #submit{
            width:90%;
            padding:15px;
            margin-top:10px;
            margin-bottom:10px;
            margin-left:25px;
            text-transform:uppercase;
            font-weight:600;
         }
       
         
    
        </style>
    </head>
    <body>
        
        <div class="head"> 
            Admin Dashboard
            <div class="logout"> <button class="btn btn-success" > Logout </button></div>

        </div>
        
        <div class="cover">
           
        
            <div class="right-side">
                <h3> Check your Results </h3>
                <hr/>
                <div class="form">
                    <form action="pdf.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="name" class="form-control" placeholder="Full Names of Student e.g Adesida Demilade" id="name"
                            value="<?php echo $student_name; ?>" readonly/>
                            <input type="text" name="class" class="form-control" placeholder="Student's Class e.g JSS1/JSS2/SSS1" id="class" />
                       
                           <input type="text" name="term" class="form-control" placeholder="Term e.g First Term/ Second Term /Third Term"  id="term"/>

                            <input type="text" name="dept" class="form-control" placeholder="Department e.g Arts/ Science / Commercial" id="dept" />

                            <input type="submit" name="submit" class="btn btn-success" id="submit"/>
                           
                    </form>
                </div>

            </div>
    </body>

</html>


