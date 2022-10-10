<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
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





            </style>
        
    </head>
    <body>
       <header class="header">
         Admin Dashboard 
       <div class="logout">
          <button class="btn btn-primary" id="but"> <a href="login.php">
            <style>
                #but:hover{
                    background-color:red;
                }
                </style>
            Logout</a> </button>

       </div>
       </header>
       <aside>
           <ul>
               <li><a href="admission.php">Admission</a></li>
               <li><a href="add_student.php">Add Student</a></li>
               <li><a href="view_student.php">View Student</a></li>
               <li><a href="add_teacher.php">Add Teacher</a></li>
               <li><a href="view_teacher.php">View Teacher</a></li>
               <li><a href="studentresults.php">View Student Results </a></li>
               <li><a href="inputresults.php">Enter Student Results </a> </li>
               

           </ul>
       </aside>
       <div class="content">
            
            <h3>Administration Dashboard </h3>
       </div>
    </body>
</html>