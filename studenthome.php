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
$me=$_GET['id'];
$conn=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
$seq="SELECT username,password FROM user WHERE id='$me'";
$result=mysqli_query($conn,$seq);

$output=mysqli_fetch_array($result);
$name=$output['username'];
$password=$output['password'];
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="keywords" content="Rose of Sharon,admission,school"/>
        <meta name="description" content="School eportal system"/>
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
                ul li{
                    transform:scale(0.8);
                }
                .content{
                margin-left:40%;
                margin-top:5%;
        
                    }
                .content h3{
                font-size:16px;

                }


            }
            /************** For Landscape Orientation ******** */
            @media (orientation:landscape){
                ul li{
                    transform:scale(0.8);
                }
                .content{
                margin-left:25%;
                margin-top:5%;
        
                    }
                .content h3{
                font-size:16px;

                }

            }
            /************ For Laptop Screens ******** */
            @media (min-width:1200px){

                ul li{
                    transform:scale(0.9);
                }
                .content{
                margin-left:20%;
                margin-top:5%;
        
                    }
                .content h3{
                font-size:16px;

                }

                .logout{
                    margin-top:2px;
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
              <li> <a href="details.php?id=<?php echo $me; ?>">School Information</a></li>
              <li> <a href="myresults.php?id=<?php echo $me; ?>">My Results </a></li>
               <li><a href="">Payment Activities </a></li>
               <li><a href="">Know your Tutors </a></li>
               <li><a href=""> School Calendar </a></li>
               <li> <a href="">School Time Table</a></li>
               
           </ul>
       </aside>
       <div class="content">
        <?php
        //Was not compulsorily used, it does same work as colleague at least here....
         $person=$_GET['user']; ?>
           <h2>Welcome, <span> <?php echo $name; ?>
           <style>
            span{
                text-transform:uppercase;
            }
            </style>
        </span></h2>
           <p> 
            <i> Its a wonderful and rare opportunity being a student of Rose of Sharon Group of Schools 
                Akure at such a time as this. You are enjoined to make the best use of this opportunity . 
                With best regards from the School Management  

            </i>
             </p>
       </div>
    </body>
</html>