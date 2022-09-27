<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
//connect to the database
$data=new mysqli('localhost','root','','schoolproject');
$sql="SELECT *FROM teacher";
$result=mysqli_query($data,$sql);

if($_GET['teacher_id']){
    $t_id=$_GET['teacher_id'];
    $del="DELETE FROM teacher WHERE id='$t_id'";
    $result_del=mysqli_query($data,$del);
    if($result_del){
       header("location:view_teacher.php");
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
            /***** For Mobile Phones Screen ******** */
            @media (max-width:360px){
                .header{
                    min-width:1000px;
                }
                tbody{
               background-color: skyblue;
              
           }
           ul{
            width:15%;
           }
           /******* for Mobile Phones Landscape  */
           @media (orientation:landscape){
            .header{
                height:50px;
                width:1024px;
            }
            
            
           }


           td{
               font-size:large;
               font-weight:600;
           }
           thead th:nth-child(2){
               width:70px;
           }
           thead th:nth-child(4){
               width:100px;
           }
           thead th:nth-child(5){
               width:40px;
           }
           thead th{
               letter-spacing:5px;
           }

            }
           tbody{
               background-color: skyblue;
           }
           td{
               font-size:large;
               font-weight:600;
           }
           thead th:nth-child(2){
               width:70px;
           }
           thead th:nth-child(4){
               width:100px;
           }
           thead th:nth-child(5){
               width:40px;
           }
           thead th{
               letter-spacing:5px;
           }
            </style>
    </head>
    <body>
       <header class="header" id="landscape">
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
               <li><a href="inputresults.php">Enter Results</a></li>

           </ul>
       </aside>
       <div class="content">
           <center>
           <h1>Our Teachers</h1>
           <table class="table table-hover">
               <thead>
                   <tr>
                       <th>Name of Tutor</th>
                       <th>About the Tutor </th>
                       <th>Image of Tutor</th>
                       <th>Delete Teacher</th>
                       <th>Update Teacher</th>
                   </tr>

               </thead>
               <tbody>
                   <?php 
                   while($info=$result->fetch_assoc()){

                   
                   ?>
                   <tr>
                       <td>
                           <?php 
                                echo "{$info['name']}";
                           ?>
                       </td>
                       <td>
                       <?php 
                                echo "{$info['description']}";
                           ?>
                       </td>
                       <td>
                     <!-- //To get our image, we would place the php code in an image tag below-->
                    
                      <img height=200px width="300px" src="<?php echo "{$info['image']}";?>" alt="picture"/>

                       </td>
                       <td>
                       <?php
                       echo "
                       <a class='btn btn-danger' onClick=\"javascript:return confirm('Are you sure to delete Teacher Data ?');\"
                       href='view_teacher.php?teacher_id={$info['id']}'> Delete </a>
                       ";
                       ?>
                       </td>
                     <td>
                         <?php 
                        echo "
                        <a href='update_teacher.php?teacher_id={$info['id']} ' class='btn btn-primary'> Update</a>
                         ";
                         ?>
                     </td>
                   </tr>
                   <?php
                   //This is where the while loop ends 
                   }
                   
                   
                   ?>
               </tbody>
               <tfoot>

               </tfoot>
           </table>

           </center>
           
       </div>
    </body>
</html>