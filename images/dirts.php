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
                    height:150px;
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
                }
                .input_deg{
                    width:70%;
                    height:30px;
                    border-radius:15px;
                    border:2px solid blue;
                }
                .adm_int{
                    padding-top:5px;
                    padding-left:0px;
                    margin-left:0;
                    padding-bottom: 2px;
                    padding-right:12px;
                }
                .input_txt{
                    width:70%;
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

           