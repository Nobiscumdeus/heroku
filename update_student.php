<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:RoseofSharon-login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:RoseofSharon-login.php");
}

//$data=new mysqli('localhost','root','','schoolproject');
$data=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
$id=$_GET['student_id'];

$sql="SELECT *FROM user WHERE id='$id' ";
$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();

if(isset($_POST['update'])){
    $name=htmlspecialchars(stripslashes(trim($_POST['name'])));
    $email=htmlspecialchars(stripslashes(trim($_POST['email'])));
    $phone=htmlspecialchars(stripslashes(trim($_POST['phone'])));
    $password=htmlspecialchars(stripslashes(trim($_POST['password'])));

    $query="UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id' ";

    $result2=mysqli_query($data,$query);
    if($result2){
       
        header("location:RoseofSharon-view_student.php");
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
            /*********** For Mobile Phones Screen ****** */
            @media (max-width:360px){
                .header{
                    min-width:1000px;
                }
                ul{
                    width:35%;
                }
                ul li{
                    margin-bottom:20px;
                    font-size:30px;
                }
                .content{
                    transform:scale(1.5);
                    margin-top:250px;
                    margin-left:400px;
                }
                .form-control{
                    width:300px;
                }
                .content h2{
                    margin-left:300px;
                }
               











                form{
                width:50%;
            }
            .form-control{
                width:300px;
            }


            }
            /********** For Landscape Orientation ****** */
            @media (orientation:landscape){
                form{
                width:50%;
            }



            }
            /******** For laptop screens ****** */
            @media (min-width:1200px){
                form{
                width:50%;
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
               <li><a href="studentresults.php">View Student Results</a></li>
               <li><a href="inputresults.php">Enter Results</a></li>

           </ul>
       </aside>
       <div class="content">
            <h1>Update Student Page</h1>
            <form autocomplete="off" role="role" action="#" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="name" class="form-control" value="<?php echo "{$info['username']}";?>"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email"  class="form-control" value="<?php echo "{$info['email']}";?>"/>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" class="form-control" value="<?php echo "{$info['phone']}";?>"/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password"  class="form-control" value="<?php echo "{$info['password']}";?>"/>
                    </div>
                    <div>
                    
                        <input type="submit" name="update" value="Update" class="btn btn-success" />
                    </div>
                </form>
        
       </div>
    </body>
</html>