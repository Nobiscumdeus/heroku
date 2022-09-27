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
        <title> Rose of Sharon | Login </title>
        <style type="text/css">

             /***********************    Targeting PHONES and mobile devices  *************************/
            @media(min-width:1200px){
                
            #me{
                width:350px;
                margin-left:100px;
            }
            .form_deg{
                padding-top:200px;
            }
            .label_deg{
                display:inline-block;
                color:skyblue;
                width:100px;
                text-align:right;
                padding-top:10px;
                padding-bottom:10px;
            }
            .login_form{
                background-color:black;
                width:600px;
                padding-top:70px;
                padding-bottom:70px;
            }
            .title_deg{
                background-color: skyblue;
                color:white;
                text-align:center;
                font-weight:bold;
                width:600px;
                padding-top:10px;
                padding-bottom:10px;
                font-size: 20px;
            }
            .body_deg{
                background-repeat: no-repeat;
                background-attachment:fixed;
                background-size:100% 100%;
            }
            input{
                width:350px;
            }
            #great{
                margin-left:100px;
            }






            }
            /***********************    Targeting PHONES and mobile devices  *************************/
            @media(min-width:360px){
                
        #me{
                width:350px;
                margin-left:100px;
            }
             .form_deg{
            padding-top:300px;
           
}
.label_deg{
    display:inline-block;
    color:skyblue;
    width:100px;
    text-align:right;
    padding-top:10px;
    padding-bottom:10px;
}
.login_form{
    background-color:black;
    width:500px;
    padding-top:70px;
    padding-bottom:70px;
}
.title_deg{
    background-color: skyblue;
    color:white;
    text-align:center;
    font-weight:bold;
    width:500px;
    padding-top:10px;
    padding-bottom:10px;
    font-size: 20px;
}
.body_deg{
    background-repeat: no-repeat;
    background-attachment:fixed;
    background-size:100% 100%;
}
input{
    width:350px;
}
#great{
    margin-left:100px;
}

            }



@media(orientation:landscape){
    

    #me{
                width:350px;
                margin-left:100px;
            }
        .form_deg{
    padding-top:70px;
    padding-bottom:50px;
}
.label_deg{
    display:inline-block;
    color:skyblue;
    width:100px;
    text-align:right;
    padding-top:10px;
    padding-bottom:10px;
}
.login_form{
    background-color:black;
    width:600px;
    padding-top:70px;
    padding-bottom:70px;
}
.title_deg{
    background-color: skyblue;
    color:white;
    text-align:center;
    font-weight:bold;
    width:600px;
    padding-top:10px;
    padding-bottom:10px;
    font-size: 20px;
}
.body_deg{
    background-repeat: no-repeat;
    background-attachment:fixed;
    background-size:100% 100%;
}
input{
    width:350px;
}
#great{
    margin-left:100px;
}
}








            </style>
    </head>




    <body background="./images/classroom1.jfif" class="body_deg">
      
        <center>
            <div class="form_deg">
                <center class="title_deg">
                    Login Form
                   <h6 style="color:red">
                       <?php
                       error_reporting(0);
                       session_start();
                       echo $_SESSION['loginMessage'];
                       session_destroy();
                       ?>
                   </h6>

                </center>
                <form action="login_check.php" method="POST" class="login_form">
                    <div>
                        <label class="label_deg">UserName</label>
                        <input type="text" name="username" autocomplete="off" />
                    </div>
                    <div>
                        <label class="label_deg">Password</label>
                        <input type="password" name="password" autocomplete="off"/>
                    </div>
                    <div>
                        <input class="btn btn-primary" id="great" type="submit" name="submit" value="Login" />
                       
                    </div>
                    <div>
                        <a href="index.php" class="btn btn-warning" id="me">
                            
                            Back to Home Page<span class="glyphicon glyphicon-play"></span></a>
                    </div>
                </form>
            </div>
        </center>
    </body>
</html>