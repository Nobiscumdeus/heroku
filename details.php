<?php
error_reporting(0);
session_start();
/** 
 * session_start();
$_SESSION['usertype']='student';
if(!isset($_SESSION['username'])){
    header('location:login.php');
}elseif($_SESSION['usertype']=='admin'){
    header('location:login.php');
}
$_SESSION['student']='page';
*/
if(!isset($_SESSION['username'])){
    header('location:login.php');
}elseif($_SESSION['usertype']=='admin'){
    header('location:login.php');
}

?>

<?php
//session_start();

if(isset($_SESSION['username'])){
    $colleague=$_SESSION['username'];
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
        <title>Student Information</title>
        
        <style type="text/css">
            /******** For Mobile Phones Screen ******* */
            @media (max-width:360px){
                *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            .cover{
                position:relative;
                background-color: black;
                display:grid;
                grid-template-columns:repeat(3,2fr);
                width:1000px;
                height:100%;
                grid-gap:20px;
                grid-column-gap:10px;
                grid-row-gap:10px;
                
            }
            .fourth{
                background-color:yellow;

            }
            .fifth{
                background-color:green;
            }
            .sixth{
                background-color:brown;


            }
            .seventh{
                background-color:blueviolet;
              
            }
            .eight{
                background-color:chocolate;
               

            }
            .ninth{
                background-color: cornflowerblue;
                grid-row-end: 3;
              

            }
           .seventh,.eight,.ninth{
                max-width:450px;
                min-height:50vh;
                padding-left:10px;
                
            }
            .seventh h3,.eight h3,.ninth h3{
                text-align:center;
                letter-spacing:5px;
                margin-left:5px;
            }
           ul{
            padding-top:10px;
            transform:scale(0.9);
            
           }
           ul li{
            letter-spacing:5px;
            margin-bottom:5px;
            
           }
            .first{
                
                width:100%;
                height:250px;
                background-color:darkgrey;
                margin-bottom:15px;
                grid-column-start:1;
                grid-column-end:4;
                justify-self:end;
            }
            .last{
                width:100%;
                height:150px;
                background-color: crimson;
                margin-top:10px;
                grid-column-start:1;
                grid-column-end:4;
                text-align:center;
                letter-spacing:10px;
                font-weight:700;
                line-height:15vh;
            }
            .first h1{
                letter-spacing:10px;
                text-transform:uppercase;
                text-align:center;
                line-height:15vh;
            }
            #but{
                margin-left:5px;
                margin-bottom:30px;
                margin-left:15px;
                margin-right:5px;
                color:black;
               
            }
            #but a{
                color:black;
                text-decoration:none;
            }
            




            }
            /************* For Landscape Orientation ******* */
            @media (orientation:landscape){
                *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            .cover{
                position:relative;
                background-color: black;
                display:grid;
                grid-template-columns:repeat(3,2fr);
                width:100%;
                height:100%;
                grid-gap:20px;
                grid-column-gap:10px;
                grid-row-gap:10px;
                
            }
            .fourth{
                background-color:yellow;

            }
            .fifth{
                background-color:green;
            }
            .sixth{
                background-color:brown;


            }
            .seventh{
                background-color:blueviolet;
              
            }
            .eight{
                background-color:chocolate;
               

            }
            .ninth{
                background-color: cornflowerblue;
                grid-row-end: 3;
              

            }
           .seventh,.eight,.ninth{
                max-width:470px;
                min-height:50vh;
                padding-left:10px;
                
            }
            .seventh h3,.eight h3,.ninth h3{
                text-align:center;
                letter-spacing:5px;
                margin-left:5px;
            }
           ul{
            transform:scale(0.9);
            padding-top:10px;
           }
           ul li{
            letter-spacing:5px;
            margin-bottom:5px;
            
           }
            .first{
                
                width:100%;
                height:150px;
                background-color:darkgrey;
                margin-bottom:15px;
                grid-column-start:1;
                grid-column-end:4;
                justify-self:end;
            }
            .last{
                width:100%;
                height:104px;
                background-color: crimson;
                margin-top:10px;
                grid-column-start:1;
                grid-column-end:4;
                text-align:center;
                letter-spacing:10px;
                font-weight:700;
                line-height:15vh;
            }
            .first h1{
                letter-spacing:10px;
                text-transform:uppercase;
                text-align:center;
                line-height:15vh;
            }
            #but{
                margin-left:25px;
                margin-bottom:20px;
                margin-right:3px;
                color:black;
               
            }
            #but a{
                color:black;
                text-decoration:none;
            }
             



            }
            /************ For Laptop Screens ******** */
            @media (min-width:1200px){

                *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            .cover{
                position:relative;
                background-color: black;
                display:grid;
                grid-template-columns:repeat(3,2fr);
                width:100%;
                height:100%;
                grid-gap:20px;
                grid-column-gap:10px;
                grid-row-gap:10px;
                
            }
            .fourth{
                background-color:yellow;

            }
            .fifth{
                background-color:green;
            }
            .sixth{
                background-color:brown;


            }
            .seventh{
                background-color:blueviolet;
              
            }
            .eight{
                background-color:chocolate;
               

            }
            .ninth{
                background-color: cornflowerblue;
                grid-row-end: 3;
              

            }
           .seventh,.eight,.ninth{
                max-width:470px;
                min-height:50vh;
                padding-left:10px;
                
            }
            .seventh h3,.eight h3,.ninth h3{
                text-align:center;
                letter-spacing:5px;
                margin-left:5px;
            }
           ul{
            padding-top:10px;
           }
           ul li{
            letter-spacing:5px;
            margin-bottom:5px;
            font-weight:500;
           }
            .first{
                
                width:100%;
                height:150px;
                background-color:darkgrey;
                margin-bottom:15px;
                grid-column-start:1;
                grid-column-end:4;
                justify-self:end;
            }
            .last{
                width:100%;
                height:104px;
                background-color: crimson;
                margin-top:5px;
                grid-column-start:1;
                grid-column-end:4;
                text-align:center;
                letter-spacing:10px;
                font-weight:700;
                line-height:15vh;
            }
            .first h1{
                letter-spacing:10px;
                text-transform:uppercase;
                text-align:center;
                line-height:15vh;
            }
            #but{
                margin-left:20px;
                margin-bottom:30px;
                margin-right:30px;
                color:black;
               
            }
            #but a{
                color:black;
                text-decoration:none;
            }
            




            }
           
        </style>
    </head>
    <body>
        <div class="cover">
           <div class="first">
            <h1>Student Information </h1>
            <button class="btn btn-primary" id="but" >
                <a href="studenthome.php?user=<?php echo $colleague ?>"> Return to Previous Page</a>
            </button> 
            <button class="btn btn-warning" id="but"> Check Results </button> 
            <button class="btn btn-success" id="but"> Know your Tutors </button> <button class="btn btn-primary" id="but"> Payment Activities </button>
            <button class="btn btn-success" id="but">School Gallery</button> <button class="btn btn-danger" id="but"> 
                <a href="login.php"> Log out </a>
            </button>

           </div>
            
            <div class="seventh">
                <h3> Announcements </h3>
                <hr/>
                <ul>
                    <li >
                        The New Session Commences on Monday 18th of September 2022

                    </li>
                    <li> The Schol fees remain NGN20000</li>
                    <li> School resumes by 8:00AM every morning on working days </li>
                </ul>
            </div>
            <div class="eight">
                <h3> School Calendar </h3>
                <hr/>
                <ul>
                    <li>There are 13 weeks in this new session</li>
                </ul>
            </div>
           
            <div class="ninth">
                <h3> Examinations </h3>
                <hr/>
                <ul>
                    <li>Common Entrance holds in the third term for Primary Six Students </li>
                    <li>Junior Waec exams holds for JSS3 Students in the third term</li>
                    <li>Joint Examinations holds for SSS2 students </li>
                    <li>Our SSS3 will write their external exams in the third term </li>
                </ul>
            </div>
            <div class="last">
                
                Copyright &copy; 2022 Chasfat Project$

            </div>
           
        </div>
    </body>
</html>