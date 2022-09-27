<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
$admission=new mysqli("us-cdbr-east-06.cleardb.net","bfeacbb227cae1","4e4f1f58","heroku_e309c0affc5c52d");
//$admission=new mysqli('localhost','root','','schoolproject');
$sql="SELECT *FROM admission";
$result=mysqli_query($admission,$sql);


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
           /******** For Mobile Phones ********* */
           @media(max-width:360px){
            .header{
                z-index:1;
                min-width:1000px;
                height: 100px;
                font-size:30px;
                line-height:90px;
            }
            .logout{
            float:right;
            
            padding-right:30px;
            }

  


            ul{
            background-color:#424a5b;
                width:25%;
                height:100%;
                position:fixed;
                padding-top:10%;
                text-align:center;
            }
            ul li{
                list-style-type:none;
                padding-bottom:25px;
                font-size:30px;
            }
            ul li a{
                text-decoration:none;
                color:white;
                font-weight:bold;
            }
            .content{
                
                margin-left:90%;
                margin-top:5%;
                
            }
           
 
.content h3{
                padding-top:10px;
                font-size:18px;
                letter-spacing:5px;

            }
            

           }

            /******** For Landscape Orientation ********* */
            @media(orientation:landscape){
                .header{
                    min-width:950px;
                    height:50px;
                    z-index:1;
                }
             


}



 /******** For Laptop Screens   ********* */
 @media(min-width:1200px){
        .header{
            z-index:1;
            height:60px;
        }
        ul li{
                list-style-type:none;
                padding-bottom:25px;
                font-size:30px;
            }
            ul li a{
                text-decoration:none;
                color:white;
                font-weight:bold;
                font-size:30px;
            }
            .content{
                
                margin-left:20%;
                margin-top:5%;
                
                
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
            <h3>Admission Applicants</h3>
            <table class="table table-hover">
                <tr>
                    <th>Candidte's Full Names </th>
                    <th>Candidate's Email Address</th>
                    <th>Candidate's Phone Number</th>
                    <th>Candidate's Message </th>
                </tr>
                <?php
                while($info=$result->fetch_assoc()){
                    //Note that while loop started over here covering the whole body of the main table
                
                ?>
                <tr>
                    <td>
                        <!-- Adding the content we want in this column through php connected to database -->
                        <?php echo "{$info['name']}"; ?>
                    </td>
                    <td>
                    <?php echo "{$info['email']}"; ?>

                    </td>
                    <td>
                    <?php echo "{$info['phone']}"; ?>
                    </td>
                    <td>
                    <?php echo "{$info['message']}"; ?>
                    </td>
                </tr>
                <?php
                }
                //By adding the last curly braces above, we mean that our while loop is ending over here
                //hence covering the whole body of the table
                ?>
            </table>
           </center>
    </body>
</html>