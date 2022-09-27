<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
$data=new mysqli('localhost','root','','schoolproject');
$sql="SELECT *FROM user WHERE usertype='student'";
$result=mysqli_query($data,$sql);
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
            /****** For Mobile Phones Screen ****** */
            @media (max-width:360px){
                .header{
                    
                    min-width:1000px;
                    font-size:30px;
                }
                ul{
                    width:18%;
                }
                ul li{
                list-style-type:none;
                padding-bottom:25px;
                
                font-size:20px;
                            }
                ul li a{
                    text-decoration:none;
                    
                    font-size:20px;
                    color:white;
                    font-weight:bold;
                }
                .content{
                    margin-left:52%;
                    margin-top:5%;
}


                table tbody{
                background:skyblue;
                text-align:center;
            }
            table thead{
                background-color: black;
                color:yellow;
                text-align:center;
            }

            }
            /******** For Mobile Phones Landscape  */
            @media (orientation:landscape){
                
                .header{
                    min-width:1045px;
                }
                
                table tbody{
                background:skyblue;
                text-align:center;
            }
            table thead{
                background-color: black;
                color:yellow;
                text-align:center;
            }

            }
            /******** For Laptop Screens ******** */
            @media (min-width:1200px){
                table tbody{
                background:skyblue;
                text-align:center;
            }
            table thead{
                background-color: black;
                color:yellow;
                text-align:center;
            }

            }

           
            </style>
    </head>
    <body>
      <?php 
      include('adminsidebar.php');
      ?>

       <div class="content">
           <center>
            <h2>Student Data</h2>
            <?php 
             //We add the session message here 
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
            }
            //The unset variable will remove the variable after its been used 
            unset($_SESSION['message']);
           
           
            ?>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <!-- To Delete Student Data -->
                    <th>Delete</th>
                    <!-- To update the Student -->
                    <th>Update</th>
                </tr>
        </thead>
               
                <?php 
                //Lets gets values from the database in the cells here 
                while($info=$result->fetch_assoc()){

               
                ?>
                <tbody>
                <tr>
                    <!-- We get our inputs in each of these cells through php code -->
                    <td>
                        <?php echo "{$info['username']}" ;?>
                        
                    </td>
                    <td>
                    <?php echo "{$info['email']}" ;?>

                    </td>
                    <td>
                    <?php echo "{$info['phone']}" ;?>

                    </td>
                    <td>
                    <?php echo "{$info['password']}" ;?>

                    </td>
                    <!-- Now to facilitate deleting a student details -->
                    <td>
                    <?php 
                    //1 - we create a new file RoseofSharon-delete.php
                    //2 - we want to get the id of the specific element through href of the anchor tag
                    //3 - we store the id of the element in the student_id
                    echo "
                    <a class='btn btn-danger' onClick=\"javascript:return confirm('Are you sure to delete Student Data ?');\"
                    href='delete.php?student_id={$info['id']}'> Delete </a>
                    ";?>

                    </td>


                    <td>
                        <!-- We need to update from here -->
                        <?php
                        //echo "<a  class='btn btn-primary' href='RoseofSharon-update_student.php?student_id={$info['id']}'>Update </a>";
                       
                        echo "
                        <a class='btn btn-success' onClick=\"javascript:return confirm('Are you sure you want to update student data ?');\"
                        href='update_student.php?student_id={$info['id']}'> Update </a>
                        ";
                        ?>

                    </td>

                </tr>
                <?php 
                //Note that the while loop stopped here(ending curly braces), 
                //but we now covered it with php tags for recognition
            }
            ?>
                </tbody>
            </table>
</center>
       </div>

    </body>
</html>