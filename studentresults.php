<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}elseif($_SESSION['usertype']=='student'){
    header('location:login.php');
}
?>
<?php
error_reporting(0);
//Connection to the database to be used 
//$connect=new mysqli('localhost','root','','rose of sharon');
$connect=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
if(isset($_POST['submit'])){
    $name=htmlspecialchars(stripslashes(trim($_POST['name'])));
    $class=htmlspecialchars(stripslashes(trim($_POST['class'])));
    $term=htmlspecialchars(stripslashes(trim($_POST['term'])));
    $sql="SELECT *FROM mathematics WHERE fullnames='$name' and term='$term' ";
    $result=mysqli_query($connect,$sql);

  
    if($result==false){
        echo "Ooops!!! Sorry, there is nothing to show...";
    }
}



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <title>Rose of Sharon-results page </title>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap/dist/css/bootstrap.min.css" />
        <style type="text/css">
            /****** For Mobile Phones Screen ****** */
            @media(max-width:360px){

                *{
                margin:0;
                padding:0;
               
               
            }
            .head{
                position:relative;
                background-color: #fc766aff;
                width:690px;
                
                padding-left:70px;
                margin-left:0;
                height: 10vh;
                color:whitesmoke;
                font-size:25px;
                line-height:10vh;
                font-family:sans-serif;
                font-weight:800;
            
            }
            .logout{
                float:right;
                padding-right:30px;
            }
            .cover{
                display:grid;
                grid-template-columns: 1fr 3fr;
                transform:scale(1.3);
                margin-top:47%;
                height:150vh;
            }
           
            .left-side{
                background-color:#783937ff;
                
            }
            .right-side{
                background-color:#f1ac88ff;
               
            }
            .left-side ul{
                margin-left:50px;
                
                
                padding-top:20px;
                margin-bottom:20px;

            }
            .left-side ul li{
                transform:translateX(10px);
                margin-top:20px;
                font-size:20px;
                font-weight:600;
                list-style-type:none;
                
            }
            .left-side ul li a {
                
                padding-left:20px;
                text-decoration:none;
                font-size:20px;
                font-weight:600;
                color:#fff;
            }
            ul li a:link{
                /** 
                 color:#f1ac88ff;*/
              
               color:white;
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
                padding-left:50px;
                padding-top:20px;
               
            }
        
         .form-control{
            transform:scale(0.9);
            width:350px;
            padding-top:20px;
            margin-left:5px;
         }
         #submit{
            width:70%;
            padding:15px;
            margin-top:10px;
            margin-bottom:10px;
            margin-left:31px;
            text-transform:uppercase;
            font-weight:600;
         }

               
            }


            /************* For Landscape Screens ******** */
            @media (orientation:landscape){

                 
            *{
                margin:0;
                padding:0;
               
               
            }
            .head{
                position:relative;
                background-color: #fc766aff;
                width:100%;
                padding-left:70px;
                margin-left:0;
                height: 15vh;
                color:whitesmoke;
                font-size:25px;
                line-height:10vh;
                font-family:sans-serif;
            }
            .logout{
                float:right;
                margin-top:5px;
                padding-right:70px;
            }
            .cover{
                display:grid;
                grid-template-columns: 1fr 3fr;
               
            }
           
            .left-side{
                background-color:#783937ff;
                min-height:140vh;
            }
            .right-side{
                background-color:#f1ac88ff;
                min-height: 140vh;
            }
            .left-side ul{
                margin-left:20px;
                padding-top:20px;
                margin-bottom:20px;

            }
            .left-side ul li{
                margin-top:20px;
                font-size:20px;
                font-weight:800;
                list-style-type:none;
            }
            .left-side ul li a {
                text-decoration:none;
                font-size:20px;
                font-weight:800;
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
                padding-left:50px;
                padding-top:20px;
               
            }
        
         .form-control{
            width:70%;
            padding-top:20px;
            margin-left:30px;
         }
         #submit{
            width:70%;
            padding:15px;
            margin-top:10px;
            margin-bottom:10px;
            margin-left:31px;
            text-transform:uppercase;
            font-weight:600;
         }
       



            }

            
         /********** For Laptop Screens alone */
         @media (min-width:1200px){

            
            *{
                margin:0;
                padding:0;
               
               
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
                padding-right:70px;
            }
            .cover{
                display:grid;
                grid-template-columns: 1fr 3fr;
            }
           
            .left-side{
                background-color:#783937ff;
                min-height:100vh;
            }
            .right-side{
                background-color:#f1ac88ff;
                min-height: 100vh;
            }
            .left-side ul{
                margin-left:20px;
                padding-top:20px;
                margin-bottom:20px;

            }
            .left-side ul li{
                margin-top:20px;
                font-size:20px;
                font-weight:800;
                list-style-type:none;
            }
            .left-side ul li a {
                text-decoration:none;
                font-size:20px;
                font-weight:800;
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
                padding-left:50px;
                padding-top:20px;
               
            }
        
         .form-control{
            width:70%;
            padding-top:20px;
            margin-left:30px;
         }
         #submit{
            width:70%;
            padding:15px;
            margin-top:10px;
            margin-bottom:10px;
            margin-left:31px;
            text-transform:uppercase;
            font-weight:600;
         }
    
            
}
              
        </style>
    </head>
    <body>
        <div class="head"> 
            Admin Dashboard
            <div class="logout"> <a href="login.php" class="btn btn-success">Logout
                <style>
                    a{
                        text-decoration:none;
                   
                    }
                    </style>
                
        </a></div>

        </div>
        <div class="cover">
            <div class="left-side">
                <ul>
                    <li><a href="admission.php">Admission</a></li>
                    <li><a href="add_student.php">Add Student</a></li>
                    <li><a href="view_student.php">View Student</a></li>
                    <li><a href="add_teacher.php">Add Teacher</a></li>
                    <li><a href="view_teacher.php">View Teacher</a></li>
                    <li><a href="studentresults.php">View Student Results</a></li>
                    <li><a href="inputresults.php">Enter Results </a></li>

            </div>
            <div class="right-side">
                <h3> Check Student Results </h3>
                <hr/>
                <div class="form">
                    <form action="pdf.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="name" class="form-control" placeholder="Full Names of Student e.g Adesida Demilade" id="name" />
                        
                            <input type="text" name="class" class="form-control" placeholder="Student's Class e.g JSS1/JSS2/SSS1" id="class" />
                       
                            <input type="text" name="term" class="form-control" placeholder="Term e.g First Term/Second Term/Third Term" id="term" />
                        
                            <input type="submit" name="submit" class="btn btn-success" id="submit"/>
                           
                    </form>
                </div>
                
            </div>
         
    </body>

</html>


