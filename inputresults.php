<?php
session_start();
if(!isset($_SESSION['usertype'])){
    header('location:login.php');
}elseif($_SESSION['usertype']=='student'){
    header('location:login.php');
}
?>
<?php
//make the connection
$connect=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
//$connect=new mysqli('localhost','root','','rose of sharon');
if(!$connect){
    die(mysqli_error());
 
}
if(isset($_POST['submit'])){
    $fullnames=htmlspecialchars(stripslashes(trim($_POST['fullnames'])));
    $class=htmlspecialchars(stripslashes(trim($_POST['class'])));
    $first_test=htmlspecialchars(stripslashes(trim($_POST['first_test'])));
    $second_test=htmlspecialchars(stripslashes(trim($_POST['second_test'])));
    $third_test=htmlspecialchars(stripslashes(trim($_POST['third_test'])));
    $total_tests=htmlspecialchars(stripslashes(trim($_POST['total_tests'])));
    $exams=htmlspecialchars(stripslashes(trim($_POST['exams'])));
    $final_scores=htmlspecialchars(stripslashes(trim($_POST['final_scores'])));
    $grades=htmlspecialchars(stripslashes(trim($_POST['grades'])));
    $term=htmlspecialchars(stripslashes(trim($_POST['term'])));

    $sql="INSERT INTO mathematics(fullnames,class,first_test,second_test,third_test,total_tests,exams,final_scores,grades,term)
    VALUES('$fullnames','$class','$first_test','$second_test','$third_test','$total_tests','$exams','$final_scores','$grades','$term')";

    $result=mysqli_query($connect,$sql);

    if(!$result){
        echo "Thank you ";
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
        <title>Rose of Sharon-results page </title>
        
        <style type="text/css">
            /******** For Mobile Phone Screens ******** */
            @media (max-width:360px){
                *{
                margin:0;
                padding:0;
               
               
            }
            .head{
                position:relative;
                background-color: #fc766aff;
                min-width:1005px;
                padding-left:40px;
                margin-left:0;
                height: 15vh;
                color:whitesmoke;
                font-size:30px;
                font-weight:800;
                line-height:10vh;
                font-family:sans-serif;
            }
            .logout{
                float:right;
                padding-right:40px;
            }
            .cover{
                display:grid;
                grid-template-columns: 1fr 3fr;
                transform:scale(0.9);
            }
           
            .left-side{

                background-color:#783937ff;
                min-height:184vh;
                min-width:250px;
                transform:scale(1.8);
                margin-top:445px;
                margin-left:40px;
            }
            .right-side{
                background-color:#f1ac88ff;
                min-width:435px;
                min-height: 184vh;
                transform:scale(1.8);
                margin-top:445px;
                margin-left:200px;
                
            }
            .left-side ul{
                margin-left:70px;
                padding-top:20px;
                margin-bottom:20px;

            }
            .left-side ul li{
                margin-top:30px;
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
                margin-left:5px;
               
            }
            .form{
                background:white;
                padding-left:10px;
                padding-top:20px;
              
               
            }
            .form-group{
                padding-left:0px;
                margin-left:0px;
            }
        
         .form-control{
            transform:scale(0.60);
            width:450px;
            padding-top:20px;
            margin-left:0px;
            padding-left:5px;
         }
         #submit{
            transform:scale(0.6);
            width:400px;
            
            padding:15px;
            margin-top:10px;
            margin-bottom:10px;
            margin-left:31px;
            text-transform:uppercase;
            font-weight:600;
         }
         input:out-of-range{
            border:2px solid red;
         }
         a:hover{
            color:green;
            font-weight:700;
         }
         .log{
            text-decoration:none;
            color:white;
         }




            }
            /************ For Landscape Screens ********* */
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
            width:90%;
            padding-top:20px;
            margin-left:30px;
         }
         #submit{
            width:90%;
            padding:15px;
            margin-top:10px;
            margin-bottom:10px;
            margin-left:31px;
            text-transform:uppercase;
            font-weight:600;
         }
         input:out-of-range{
            border:2px solid red;
         }
         a:hover{
            color:green;
            font-weight:700;
         }
         .log{
            text-decoration:none;
            color:white;
         }



            }
            /************* For Laptop Screens ********* */
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
         input:out-of-range{
            border:2px solid red;
         }
         a:hover{
            color:green;
            font-weight:700;
         }
         .log{
            text-decoration:none;
            color:white;
         }






            }
           
            
        </style>
    </head>
    <body>
        <div class="head"> 
            Admin Dashboard
            <div class="logout"> <button class="btn btn-success" > <a href="logout.php" class="log">Logout </a></button></div>

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
                    <li><a href="#">Enter Results </a></li>

            </div>
            <div class="right-side">
                <form role="form" action="#" method="POST">
                    <h3> Student Assessment Form </h3>
                    <hr/>
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullnames" placeholder="Enter Student's Name e.g Kehinde Goodluck" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="class" placeholder="Enter Student's Class e.g JSS1/JSS2/JSS3/SSS1/SSS2" required />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="first_test" placeholder="First Test Score e.g 10 out of 20" min="0" max="20" required />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="second_test" placeholder="Second Test Score e.g 10 out of 20" min="0" max="20" required/>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="third_test" placeholder="Third Test Score e.g 10 out of 20" min="0" max="20" required/>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="total_tests" placeholder="Total Test scores i.e first test + second test + third test" min="0" max="60" required/>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="exams" placeholder="Exam Score e.g 20 out of 40" min="0" max="40" required/>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="final_scores" placeholder="Total Scores i.e Exam Score + Total Test Scores" min="0" max="100" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="grades" placeholder="Student Grades e.g A/B/C/D/E/F" maxlength="1" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="term" placeholder="Enter Term e.g First Term/Second Term /Third Term" />
                    </div>
                    <input type="submit" class="btn btn-warning btn-lg" name="submit" id="submit"/>


                </form>
                
            </div>
    </body>

</html>

