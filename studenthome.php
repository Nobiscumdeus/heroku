<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}elseif($_SESSION['usertype']=='admin'){
    header('location:login.php');
}
?>
<?php
if($_SESSION['student']=='page'){
    echo "<script type='text/javascript'> alert('welcome back');</script>";
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
        <title>Rose of Sharon Student Dashboard</title>
        <link rel="stylesheet" type="text/css" href="adminhome.css" />

        <style type="text/css">
            /************* For Mobile Phone Screens ******* */
            @media(max-width:360px){
                
                /**** Nothing for now ... */
                


            }
            /************** For Landscape Orientation ******** */
            @media (orientation:landscape){

            }
            /************ For Laptop Screens ******** */
            @media (min-width:1200px){
                .logout{
                    margin-top:20px;
                }

            }

            </style>
       
    </head>
    <body>
       <header class="header">
         Student Dashboard 
       <div class="logout">
          <button class="btn btn-primary"> <a href="login.php">Logout</a> </button>

       </div>
       </header>
       <aside>
           <ul>
               <li><a href="">My Courses</a></li>
               <li><a href="studentresults.php">My Results </a></li>
               <li><a href="details.php">Student Information</a></li>
               <li><a href="">Payment Activities </a></li>
               <li><a href="">Know your Tutors </a></li>
               <li><a href=""> School Calendar </a></li>
               <li> <a href="">School Time Table</a></li>
               
           </ul>
       </aside>
       <div class="content">
           <h1>Sidebar Accordion</h1>
           <p> In this example ,we have added an accordion and a dropdown menu inside the navigation
               Click on both to understand how they differ from each other. The accordion will push down the content, 
               whilt the dropdown lays over the content </p>
       </div>
    </body>
</html>