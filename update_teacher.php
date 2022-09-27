<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
$data=new mysqli('localhost','root','','schoolproject');
if($_GET['teacher_id']){
    $t_id=$_GET['teacher_id'];

    $sql="SELECT * FROM teacher WHERE id='$t_id'  ";

    $result=mysqli_query($data,$sql);

    $info=$result->fetch_assoc();
}

if(isset($_POST['update'])){
    //code to update....

    $id=$_GET['teacher_id'];
    $t_name=htmlspecialchars(stripslashes(trim($_POST['name'])));
    $t_des=htmlspecialchars(stripslashes(trim($_POST['description'])));
    $file=$_FILES['image']['name'];
    //note that $dst here represents destination.
    $dst="/Hello world/images/".$file;
    //To save file in database
    $dst_db="/Hello world/images/".$file;
    move_uploaded_file($_FILES['image']['name'],$dst);

    if($file){
        $sql2="UPDATE teacher SET name='$t_name',description='$t_des',image='$dst_db' WHERE id='$id' ";
        $result2=mysqli_query($data,$sql2);
        if($result2){
            header("location:view_teacher.php");

    }
    else{
        $sql2="UPDATE teacher SET name='$t_name',description='$t_des',image='$dst_db' WHERE id='$id' ";
        $result2=mysqli_query($data,$sql2);
        if($result2){
            header("location:view_teacher.php");

    }
  
}
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
            /************ For Mobile Phones ****** */
            @media (max-width:360px){
                .header{
                    min-width:1000px;
                }
                ul{
                    width:25%;
                }
                .phone{
                    transform:scale(1.5);
                    margin-top:250px;
                    margin-left:300px;
                }
                .form-control{
                    width:300px;
                }
                .content h2{
                    margin-left:300px;
                }
               




                
            }


            /*********** For Landscape Orientation ********* */
            @media (orientation:landscape){

                label{
                font-weight:800;
            }
            form{
                width:70%;
                
            }
          .content{
              background-color:skyblue;
              margin-right:10%;
             
              
          }
          input,label{
              margin-left:100px;
          }
          h2{
              letter-spacing:10px;
              text-align:center;
              text-decoration:underline;
          }






            }
            /************* For Laptop Screen orientation ******** */
            @media (min-width:1200px){
                label{
                font-weight:800;
            }
            form{
                width:70%;
                
            }
          .content{
              background-color:skyblue;
              margin-right:10%;
             
              
          }
          input,label{
              margin-left:100px;
          }
          h2{
              letter-spacing:10px;
              text-align:center;
              text-decoration:underline;
          }




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
               <li><a href="">Add Courses</a></li>
               <li><a href="">View Courses</a></li>

           </ul>
       </aside>
       <div class="content">
            <h2>Update Details of Tutors</h2>
            <div class="phone">
                <form role="form" method="POST" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Teacher's Name </label>
                        <input type="text/css" name="name" class="form-control" value="<?php echo "{$info['name']}" ?>" />
                    </div>
                    <div class="form-group">
                        <label>About Teacher </label>
                        <input type="text/css" name="description" class="form-control" value="<?php echo "{$info['description']}" ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Teacher's Old Image</label>
                    <!-- Here we use src rather than the input tag since we need to collect an image -->
                    <img width="300" height="200" src="<?php echo "{$info['image']}" ?>" alt='picture' />
                    </div>

                    <div class="form-group">
                        <label>Choose new Image</label>
                        <input type="file" name="image" class="form-control" />
                    </div>


                    <div>
                        <input type="submit" name="update" value="Update Details" class="btn btn-success"/>
                    </div>
                </form>
            </div>
       </div>
    </body>
</html>