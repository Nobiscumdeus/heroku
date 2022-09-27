<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
$data=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
//$data=new mysqli('localhost','root','','schoolproject');
if(isset($_POST['add_teacher'])){
    $t_name=htmlspecialchars(stripslashes(trim($_POST['name'])));
    $t_description=htmlspecialchars(stripslashes(trim($_POST['description'])));
    //You deal with an image file a little bit differently
    $file=basename($_FILES['image']['name']);
    //note that $dst here represents destination.
    //$dst="C:/xampp/htdocs/Hello world/images/";
    $dst="images";
   
    //To save file in database
    //$dst_db="/Hello world/images/".$file;
    $dst_db="images/".$file;
    move_uploaded_file($_FILES['image']['tmp_name'],"$dst/$file");
    $sql="INSERT INTO teacher(name,description,image)
    VALUES('$t_name','$t_description','$dst_db')";
    

    $result=mysqli_query($data,$sql);
    if(isset($result)){
        echo "<script> window.alert('Done successfully');</script>";
        header("location:add_teacher.php");
        
    }

}


?>
<!DOCTYPE html>
<html>
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="keywords" content="Rose of Sharon,admission,school"/>
        <meta name="description" content="School eportla system"/>
        <meta name="author" content="Nobiscumdeus, Chasfat Projects" />
        <link rel="stylesheet"  href="/heroku/Bootstrap/css/bootstrap-grid.min.css" type="text/css" />
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css"  href="/Bootstrap/fontawesome-free-5.15.4-web/css/all.css" />
        <link rel="stylesheet" type="text/css" href="/Bootstrap/fontawesome-free-5.15.4-web/css/all.min.css" />
        <script src="/Bootstrap/jquery/jquery-3.6.1.min.js"> </script>
        <title>Rose of Sharon Admin Dashboard</title>
        <link rel="stylesheet" type="text/css" href="adminhome.css" />
       
        <style type="text/css">
            /********* For Mobile Phones Screen ******* */
            @media (max-width:360px){
                .header{
                    min-width:1000px;
                }
                form{
                    width:80%;
                    transform:scale(1.0);
                }
                .content h1{
                    transform:scale(1.0);
                    font-size:20px;
                    margin-left:300px;
                    margin-bottom:50px;
                }
                ul li{
                    font-size:16px;
                }
                ul li a{
                    font-size:16px;
                }
                ul{
                    width:28%;
                }
            
                .phone{
                    margin-top:5px;
                    margin-left:300px;
                    margin-right:0px;
                    transform:scale(1.2);
                }
                .form-control{
                    width:470px;
                }
                .content{
                    margin-left:24%;
                }

                



            }

            form{
                width:90%;
                margin-left:0px;
            }
            </style>
    </head>
    <body>
       <header class="header">
         Admin Dashboard 
       <div class="logout">
          <button class="btn btn-primary"> <a href="login.php">Logout</a> </button>

       </div>
       </header>
       <aside>
           <ul>
               <li><a href="admission.php">Admission</a></li>
               <li><a href="add_student.php">Add Student</a></li>
               <li><a href="view_student.php">View Student</a></li>
               <li><a href="add_teacher.php">Add Teacher</a></li>
               <li><a href="view_teacher.php">View Teacher</a></li>
               <li><a href="studentresults.php">View Student Results</a></li>
               <li><a href="inputresults.php">Enter Student Results</a></li>

           </ul>
       </aside>
       <div class="content">
         
           <h1>Add Teacher</h1>
           <div class="phone">
               <form role="form" action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                   <div class="form-group">
                       <label>Teacher Name </label>
                       <input type="text"name="name" class="form-control"/>
                   </div>
                   <div class="form-group">
                       <label>Description</label>
                       <input type="text" name="description" class="form-control"/>
                   </div>
                   <div class="form-group">
                       <label> Image </label>
                       <input type="file" name="image" class="form-control"/>
                   </div>
                   <div>
                   <input type="submit" name="add_teacher" value="Add Teacher" class="btn btn-success btn-lg"/>
                   </div>
               </form>
           </div>
     
            
       </div>
    </body>
</html>