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
           <p id="information">
            <u> <b> Guidelines with regard to input of results  </b></ul>
            In entering the results for the students under the <u><a href="inputresults.php">Enter results Section </a></u>
            There is a form that requests for the subject code. It must be rightly provided for the results to 
            be entered successfully.<br/>
            Below are the lists of the subjects presently available and their codes 
            <ul>
                <li> Mathematics  : <b>MTH </b></li>
                <li> English : <b>ENG </b></li>
                <li> Physics  :<b> PHY</b> </li>
                <li> Chemistry : <b>CHM </b></li>
                <li> Biology : <b>BIO</b> </li>
                <li>Marketing : <b>MKT</b></li>
                <li>Literature  : <b>LIT</b></li>
                <li>Government  : <b>GOV</b></li>
                <li>Agricultural Science  : <b>AGR</b></li>
                <li>Prevocational Studies  : <b>PVS</b></li>
                <li>Yoruba  : <b>YOR</b></li>
                <li>Basic Science  : <b>BSC</b></li>
                <li>Civic Education : <b>CVC</b></li>
                <li>Home Economics  : <b>HECONS</b></li>
                <li>French  : <b>FRN</b></li>
                <li>Computer  : <b>COM</b></li>
                <li>Christian Religious Knowledge  : <b>CRK</b></li>

            </ul>
            


            </p>
            
       </div>
    </body>
</html>