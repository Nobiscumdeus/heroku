



<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
$data=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
//$data=new mysqli('localhost','root','','schoolproject');
if(isset($_POST['add_student'])){
    $username=htmlspecialchars(stripslashes(trim($_POST['name'])));
    $user_email=htmlspecialchars(stripslashes(trim($_POST['email'])));
    $user_phone=htmlspecialchars(stripslashes(trim($_POST['phone'])));
    $usertype=htmlspecialchars(stripslashes(trim($_POST['usertype'])));
    $usertype=strtolowercase($usertype);
    $user_password=htmlspecialchars(stripslashes(trim($_POST['password'])));
    
    //we need to check id username already exists to prevent multiple entries for a person
    $check="SELECT *FROM user WHERE username='$username' ";
    $check_user=mysqli_query($data,$check);
    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo "<script type='text/javascript'>
        alert('Sorry, username already exists !!! Try another one.');
        </script> ";
    }else{

  
    $sql="INSERT INTO user(username,email,phone,usertype,password)
    VALUES('$username','$user_email','$user_phone','$usertype','$user_password')";

    $result=mysqli_query($data,$sql);
    if($result){
        echo "<script type='text/javascript'>
        alert('Data Uploaded Successfully'); </script>";
    }else{
        echo "
        <script type='text/javascript'>alert('Oops !!! data not uploaded'); </script>
        ";
        
    }
}
//code runs to this point as long as there are no multiple rows with the username


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
        /************** For Laptop Screens *************** */
        @media (min-width:1200px){
            .header{
                font-size:30px;
                line-height:45px;
                height:100px;

        }
        ul li{
            margin-bottom:10px;
        }
        ul li a{
        text-decoration:none;
        font-size:25px;
        text-decoration:none;
        color:white;
        font-weight:bold;
        }
       
           label{
               display:inline-block;
               text-align:right;
               width:100px;
               padding-top:10px;
               padding-bottom:10px;
               font-weight:700;

           }
           .div_deg{
               background-color:skyblue;
               width:550px;
               transform:translateX(20px);
               padding-top:70px;
               padding-bottom:40px;
               margin-top:10px;
               margin-bottom:60px;

           }
           input{
               width:350px;
               height:30px;
               border-radius:5px;
           }
           #me{
               margin-left:100px;
               height:50px;
           }

        }

        /************ For Phone Screens ********** */
        @media (max-width:360px){
            .header{
            min-width:1000px;
            height:80px;
            font-size:30px;

        }
        ul{
            width:30%;
        }
        ul li{
            margin-bottom:20px;
        }
        ul li a{
        text-decoration:none;
        font-size:20px;
        
        text-decoration:none;
        color:white;
        font-weight:bold;
        }
           
    
            label{
               display:inline-block;
               text-align:right;
               width:100px;
               padding-top:10px;
               padding-bottom:10px;
               font-weight:700;

           }
           .div_deg{
                transform:scale(1.1);
                margin-top:40px;
                margin-left:230px;
               background-color:skyblue;
               width:550px;
               padding-top:70px;
               padding-bottom:70px;

           }
           .content h2{
            margin-top:20%;
            text-align:center;
            
            margin-left:400px;
            padding-bottom:10px;
           }
           
           input{
               width:350px;
               height:30px;
               border-radius:5px;
           }
           #me{
               margin-left:100px;
               height:50px;
           }



        }
        /*********** for Landscape Orientation******* */
        @media (orientation:landscape){
            .header{
                min-width:1000px;
                height:50px;

            }
            ul li{
            margin-bottom:10px;
        }
        ul li a{
        text-decoration:none;
        font-size:10px;
        
        text-decoration:none;
        color:white;
        font-weight:bold;
        }
           

            label{
               display:inline-block;
               text-align:right;
               width:100px;
               padding-top:10px;
               padding-bottom:10px;
               font-weight:700;

           }
           .div_deg{
                margin-top:50px;
                margin-left:100px;
               background-color:skyblue;
               width:550px;
               padding-top:70px;
               padding-bottom:70px;

           }
           input{
               width:350px;
               height:30px;
               border-radius:5px;
           }
           #me{
               margin-left:100px;
               height:50px;
           }
        }






           </style>
    </head>
    <body>
    </div>
       <?php
       include('adminsidebar.php');
       ?>
       <div class="content">
          <center>
            <h2>Add Student</h2>
            <div class="div_deg">
                <form action="#" method="POST" autocomplete="off">
                    <div>
                        <label>Username</label>
                        <input type="text" name="name" required/>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="text" name="email" required />
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="number" name="phone" required />
                    </div>
                    <div>
                        <label>Userype</label>
                        <input type="text" name="usertype" placeholder="student or teacher"required />
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" />
                    </div>
                    <div>
                    
                        <input type="submit" id="me"name="add_student" value="Add Student/Teacher" class="btn btn-primary btn-lg" />
                    </div>
                </form>
        </center>
            </div>
          
    </body>
</html>