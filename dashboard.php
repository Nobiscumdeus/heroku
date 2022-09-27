<!DOCTYPE html>
<html>
    <head>
        <title>
            Rose of Sharon Dashboard 
        </title>
        <meta charset="utf-8">
        <style type="text/css">
            *{
                box-sizing:border-box;
            }
            html,body{
                padding:0;
                margin:0;

            }
            .row::after{
                content:"";
                display:block;
                clear:both;
            }
            .row>div{
                float:left;
                color:white;
                padding:10px;
                height:500px;
                
            }
            h1{
                color:white;
                text-align:center;
            }
         
            .side-nav{
                width:30%;
                background:#903c56;
               
            }
            .content{
                width:70%;
                background:#173459;
            }
            .side-nav>ul{
                list-style-type:none;
                padding:0;
                line-height:175%;
                
            }
            .side-nav>ul>li>a{
                color:white;
                text-decoration:none;
                font-weight:800;
                font-size:18px;
                
            }
            ul li{
                padding-bottom:20px;
            }
            header{
                text-align:center;
                background-color:goldenrod;
                font-size:35px;
                justify-content: center;
                height:10vh;
                line-height:60px;
                color:black;
                font-weight:800;
                letter-spacing: 5px;

            }
            footer{
                text-align:center;
                background-color:goldenrod;
                height:6.3vh;
                letter-spacing:5px;
                justify-content: center;
                font-weight:800;
                line-height:35px;
                
            }
            button{
                width:100px;
                color:#f8f9f9;
                border:none;
                height:4vh;
                border-radius:5px;
                position:absolute;
                bottom:40px;
                right:5px
            }
            button a{
                text-decoration:none;
                font-size:20px;
            }
            

            
            </style>
    </head>
    <body>
        <header>
            Rose of Sharon Group of Schools Akure
        </header>
        <div class="row">
            <div class="side-nav">
                <h1>Menu</h1>
                <ul>
                  <li><a href="#">Administration</a></li>
                  <li><a href="#">Check Results</a></li>
                  <li><a href="#">Payment Activities</a></li>
                  <li><a href="#">Our Tutors </a></li>
                  <li><a href="#">School Time Table</a></li>
                  <li><a href="#">Terms and Conditions </a></li>
                  <li><a href="#">Gallery</a></li>
                  
                </ul>
            </div>
            <div class="content">
                <h1> Our Dashboard</h1>
                <h2> Student Registration </h2>
                <h2> Student Login </h2>
                <h2> Assignments </h2>
                <h2> Notifications </h2>
                <button> <a href="#">Log out </a></button>
            </div>
        </div>
        <footer>
            Nobiscumdeus &copy;2022 
        </footer>
    </body>
</html>