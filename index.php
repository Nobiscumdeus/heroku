<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
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
        <title>Rose of Sharon | Home </title>
        <script src="/Bootstrap/jquery/jquery-3.6.1.min.js"> </script>
        <style type="text/css">
            /** Bootstrap Media Queries for small devices(tablets,PHONES,768px and up ) **/
          
             /** Bootstrap Media Queries for desktops devices(desktops,992px and up ) **/
            
             /** Bootstrap Media Queries for large desktops(tablets,laptops,1200px and up ) **/
             @media (min-width:1200px){
               

                *{
                    margin:0;
                    padding:0;
                }
                nav{
                    position:fixed;
                    background-color: skyblue;
                    height:70px;
                    width:100%;
                    z-index:1;
                }
                .logo{
                    font-size: 25px;
                    position:relative;
                    left:5%;
                    color:white;
                    font-weight:bold;
                    line-height:70px;
                }
                .roselogo{
                    width:70px;
                    height:70px
                }
                ul{
                    position:relative;
                    float:right;
                    margin-right:20px;
                }
                ul li{
                    display:inline-block;
                    line-height:70px;
                    margin:0 5px;
                
                }
                ul li a {
                    text-decoration:none;
                    color:black;
                    font-weight:800;
                    font-size:17px;
                }
                .main_img{
                    width:100%;
                    height:300px;
                }
                .section1{
                    padding-top: 70px;
                }
                .img_text{
                    position:absolute;
                    top:20%;
                    left:30%;
                    color:white;
                    background-color:midnightblue;
                    padding-right:20px;
                    padding-left:20px;
                    font-size:35px;
                }
                .second_image{
                    width:100%;
                    height:250px;
                    margin:0px;
                }
                .container{
                    padding-top:50px;
                }
                .teacher{
                    width:100%;
                    height:200px;
                }
                .label_text{
                    display:inline-block;
                    width:100px;
                    text-align:right;
                    padding-right:10px;
                    font-weight:bold;
                }
                .input_deg{
                    width:30%;
                    height:40px;
                    border-radius:25px;
                    border:2px solid blue;
                }
                .adm_int{
                    padding-top:10px;
                }
                .input_txt{
                    width:30%;
                    height:120px;
                    border-radius:5px;
                    border:1px solid blue;
                }
                #submit{
                    position:relative;
                    width:15%;
                    left:5%;
                }
                footer{
                    background-color:black;
                    height: 50px;
                    width:100%;
                    
                
                }
                .footer_text{
                    text-align:center;
                    color:whitesmoke;
                    top:20%;
                    position:relative;
                    letter-spacing:10px;
                }
                .adm{
                    padding-top:30px;
                    padding-bottom:20px;
                }
                input:focus{
                    background-color:grey;
                    color:yellow;
                    outline:2px solid green;
                }
                input:invalid{
                    background-color:red;
                }
                #contact{
                    color:white;
                    text-decoration:none;
                }


            }





            
            /** Specific application for landscape **/
            @media(orientation:landscape){


                *{
                    margin:0;
                    padding:0;
                }
                nav{
                    position:fixed;
                    background-color: skyblue;
                    height:70px;
                    width:100%;
                    z-index:1;
                }
                .logo{
                    font-size: 20px;
                    position:relative;
                    color:white;
                    font-weight:bold;
                    line-height:70px;
                }
                .roselogo{
                    width:80px;
                    height:80px;
                }
                ul{
                    position:relative;
                    float:right;
                    margin-right:5px;
                }
                ul li{
                    display:inline-block;
                    line-height:70px;
                    margin:0 5px;
                
                }
                ul li a {
                    text-decoration:none;
                    color:black;
                    font-weight:800;
                    font-size:17px;
                }
                .btn{
                    font-size: small;
                }
                .main_img{
                    width:100%;
                    height:300px;
                }
                .section1{
                    padding-top: 70px;
                }
                .img_text{
                    position:absolute;
                    top:50%;
                    left:20%;
                    color:white;
                    background-color:midnightblue;
                    padding-right:20px;
                    padding-left:20px;
                    font-size:35px;
                }
                .second_image{
                    width:100%;
                    height:250px;
                    margin:0px;
                }
                .container{
                    padding-top:50px;
                }
                .teacher{
                    width:100%;
                    height:200px;
                }
                .label_text{
                    display:inline-block;
                    width:100px;
                    text-align:right;
                    padding-right:10px;
                    font-weight:bold;
                }
                .input_deg{
                    width:50%;
                    height:40px;
                    border-radius:25px;
                    border:2px solid blue;
                }
                .adm_int{
                    padding-top:10px;
                }
                .input_txt{
                    width:50%;
                    height:100px;
                    border-radius:5px;
                    border:1px solid blue;
                }
                #submit{
                    position:relative;
                    width:20%;
                    left:5%;
                    margin-bottom: 5px;
                }
                footer{
                    background-color:black;
                    height: 50px;
                    width:100%;
                    
                
                }
                .footer_text{
                    text-align:center;
                    color:whitesmoke;
                    top:20%;
                    position:relative;
                    letter-spacing:5px;
                }
                .adm{
                    text-transform: uppercase;
                    letter-spacing: 10px;
                    padding-top:30px;
                    padding-bottom:15px;
                }
                input:focus{
                    background-color:grey;
                    color:yellow;
                    outline:2px solid green;
                }
                input:invalid{
                    background-color:red;
                }
                #contact{
                    color:white;
                    text-decoration:none;
                }


            }
            /** Bootstrap Media Queries for large desktops(tablets,1200px and up ) **/
            @media (max-width:360px){
               

               *{
                   margin:0;
                   padding:0;
                   box-sizing: border-box;
                  }
               nav{
                   position:fixed;
                   background-color: skyblue;
                   height:175px;
                   width:100%;
                   z-index:1;
               }
               .logo{
                   margin-top:5px;
                   font-size: 30px;
                   position:relative;
                   text-transform:uppercase;
                   
                   text-align:center;
                   
                   color:black;
                   font-weight:bold;
                   line-height: 30px;
               }
               .roselogo{
                width:70px;
                height:70px;
               }
               nav ul{
                   display:inline;
                   
                   
               }
               nav ul li{
                   float:left;
               }
               ul{
                   position:relative;
                   float:right;
                   margin-right:2px;
               }
               ul li{
                   display:inline-block;
                   line-height:70px;
                   margin:0 5px;
               
               }
               ul li a {
                   text-decoration:none;
                   color:black;
                   font-weight:800;
                   font-size:17px;
               }
               .main_img{
                   width:100%;
                   height:250px;
               }
               .section1{
                   padding-top: 70px;
               }
               .img_text{
                   position:absolute;
                   top:25%;
                   left:10%;
                   color:white;
                   background-color:midnightblue;
                   margin-top:30px;
                   padding-right:5px;
                   padding-left:5px;
                   font-size:20px;
               }
               .second_image{
                   display:none;
                   width:100%;
                   height:250px;
                   margin:0px;
               }
               .container{
                   padding-top:50px;
               }
               .teacher{
                   width:100%;
                   height:200px;
               }
               .label_text{
                   display:inline-block;
                   width:100px;
                   text-align:right;
                   padding-right:10px;
                   font-weight:bold;
                   letter-spacing:2px;
               }
               .input_deg{
                   width:85%;
                   height:30px;
                   border-radius:15px;
                   border:2px solid blue;
               }
               .adm_int{
                   padding-top:5px;
                   padding-left:2px;
                   margin-left:0;
                   padding-bottom: 2px;
                   padding-right:12px;
               }
               .input_txt{
                   width:85%;
                   height:120px;
                   border-radius:5px;
                   border:1px solid blue;
               }
               #submit{
                   position:relative;
                   width:50%;
                   left:5%;
               }
               footer{
                   background-color:black;
                   height: 50px;
                   width:100%;
                   
               
               }
               .footer_text{
                   
                   color:whitesmoke;
                   top:20%;
                   position:relative;
                   font-size:small;
                   padding-left: 30px;
               }
               .adm{
                   padding-top:20px;
                   padding-bottom:10px;
                   text-transform: uppercase;
                   letter-spacing: 5px;
               }
               input:focus{
                   background-color:grey;
                   color:yellow;
                   outline:2px solid green;
               }
               input:invalid{
                   background-color:red;
               }
               #contact{
                   color:white;
                   text-decoration:none;
               }


           }

          





            
           
        </style>
    </head>
    <body>
      

        <nav>
            <label class="logo">
                <img src="./images/IMG-20221008-WA0004-removebg-preview.png" class="roselogo" alt="loading..." />
                Rose of Sharon Group of Schools 
            </label>
            <ul>
              <li><a href="#">Home </a></li>
              <!-- scroll to admission page at the bottom after clicking the admission link -->
              <li> <a class="btn btn-success" href="javascript: document.body.scrollIntoView(false);"> Admission</a></li>
              <li><a class="btn btn-info" onclick="contact()" id="contact"> Contact Us </a></li>
             
              <li><a href="login.php" class="btn btn-success">Login</a></li>
             
            </ul>
        </nav>
        <div class="section1">
            <label class="img_text">We teach students with care </label>
            <img src="./images/classroom2.png" alt="classroom picture" class="main_img" />
        </div>
        <div class="container">
            <div class="row">

            <div class="col-md-4">
             <img src="./images/classroom1.jfif" alt="A picture is here" class="second_image"/>
            </div>
            <div class="col-md-8">
                <h2>Welcome to Rose of Sharon School Akure </h2>
                <p>Our school is committed to global learning long before it became an indispensable
                    feature of contemporary education. 
                    Established in 2008, we proudly stand as one of the best grammar schools in Akure.
                    We bring our students up in the fear of the Lord and give them quality academic education in all their 
                    courses. 
                    
                </p>
            </div>
            </div>
        </div>

        <center>
            <h1>Our Tutors</h1>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!--
                    <img class="teacher" src="./images/DSC_5278.JPG" />
        -->
                    <img class="teacher" src="./images/proprietor.jpg" alt="loading..." />
                    <span> Our School Proprietor 
                        <style>
                            span{
                                position:absolute;
                                left:15%;
                                font-weight:bold;
                                bottom:60%;
                                letter-spacing:5px;
                                color:white;
                            }
                            </style>
                    </span>
                    <p>
                        Teaching students passionately so that in no time, the disciples today become 
                        renown professors and authorities in their academic field tomorrow.
                    </p> 
                </div>
                <div class="col-md-4">
                    <!--
                    <img class="teacher" src="./images/DSC_5286.JPG" /> 
        -->
                    <img class="teacher" src="./images/proprietress.jpg" alt="loading..." />
                    <span id="mummy"> Our school Proprietress 
                        <style>
                            #mummy{
                                position:absolute;
                                left:15%;
                                font-weight:bold;
                                bottom:60%;
                                letter-spacing:5px;
                                color:white;
                            }
                            </style>
                    </span>
                    <p>In a vibrant, academically challenging, and encouraging environment 
                        with successful teaching paradigms with room for success in academics established.
                    </p>
                </div>
                <div class="col-md-4">
                    <!--
                    <img class="teacher" src="./images/IMG_20210507_110857.jpg" /> 
        -->
                    <img class="teacher" id="segun" src="./images/tutorsegun.jpg" alt="loading..." />
                   
                    <p>
                        Making tutorials lively and engaging to encourage,impart and promote
                        learner's interest in academics, leaving little or no room for flippancy and 
                        lackaidasical attitude towards academic excellence. 
                    </p>
                </div>
            </div>
        </div>
        <center>
           <h1> Our Courses </h1>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="./images/law.jfif" class="teacher" alt="a picture is here "/>
                   
                    <h5> Arts and Social Science </h5>
                </div>
                <div class="col-md-4">
                    <img src="./images/science.jfif" class="teacher" alt="picture" />
                    <h5> Science and Engineering </h5>
                </div>
                <div class="col-md-4">
                    <img src="./images/computer.jfif" class="teacher" alt="picture" />
                   <h5> Information and Computer Techonology</h5>
                </div>
            </div>
        </div>

        <center>
            <h2 class="adm">Admission Form </h2>
        </center>


        <div align="center" class="admission_form">
            <form action="data_check.php" method="POST">
            
                <div class="adm_int">
                    <label class="label_text">Names</label>
                    <input class="input_deg" type="text" name="name" placeholder="Enter Full Names" autocomplete="new-password" id="no1"required/>
                </div>
                <div class="adm_int">
                    <label class="label_text">Email</label>
                    <input class="input_deg" type="email" name="email"  placeholder="Enter your Email Address" autocomplete="new-password" id="no2" required/>
                </div>
                <div class="adm_int">
                    <label class="label_text">Phone</label>
                    <input class="input_deg" type="num" name="phone" placeholder="Enter your phone number" autocomplete="new-password" required/>
                </div>
                <div class="adm_int">
                    <label class="label_text">Message </label>
                    <textarea class="input_txt" placeholder="Tell us why you are applying for admission..." name="message"></textarea>
                </div>
                <div class="adm_int">
                    <input class="btn btn-primary" name="apply" type="submit" id="submit" onclick="thanks()"  value="Apply Now"/>
                  
                  
                </div>
               
                </form>
        </div>
<footer>
    <h6 class="footer_text">All copyright reserved by @ Chasfat_Project$ 2022</h6>
</footer>
<noscript>
    window.alert("plese you need to enable javascript from your browser's settings ");
</noscript>
<script>
    function contact(){
        window.alert('Reach us through this contact '+ '+23438247851')
    }
    //Scrolling to the bottom page after clicking the link
    function bottom(){
        document.getElementById('scroll-to-bottom').addEventListener('click',function(){
            document.body.scrollIntoView(false);
        })
    }
    document.getElementById('scroll-to-bottom').addEventListener('click',function(){
        document.body.scollIntoView(false);
    })
    function thanks(){
       var pick_one=document.getElementById("no1").value();
       var pick_two=document.getElementById("no2").value();
        if(pick_one=="" && pick_two==""){
           
            return false;
        }else{
            window.alert("You have applied successfully, Thanks!!!");

        }
       
    }
    </script>
    </body>
</html>

