<!DOCTYPE html>
    <head>
        <title>Welcome Page </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="keywords" content="Rose of Sharon,admission,school"/>
        <meta name="description" content="School eportla system"/>
        <meta name="author" content="Nobiscumdeus, Chasfat Projects" />
        <link rel="stylesheet"  href="/heroku/Bootstrap/css/bootstrap-grid.min.css" type="text/css" />
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css"  href="/Bootstrap/fontawesome-free-5.15.4-web/css/all.css" />
        <link rel="stylesheet" type="text/css" href="/Bootstrap/fontawesome-free-5.15.4-web/css/all.min.css" />
        <script src="/Bootstrap/jquery/jquery-3.6.1.min.js"> </script>
    
        
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-md-navbar-light bg-light">
            <div class="container">
                <!-- Navigation code here -->
                <a class="navbar-brand" href="#">Responsive Bootstrap Website</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar Collapse" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!--Navigation Links -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Active linke-->
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">Current</span>
                            </a>
                        </li>
                        <!--Regular links -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                About
                            </a>
                        </li>
                        <!-- More Navigation Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <!-- Right navigation link -->
                    <ul class="nav nav-bar ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Register
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </nav>
       <div class="jumbotron">
        <h1 class="display-2">Learn how to make Responsive website with Bootstrap</h1>
        <p class="lead">Register Now to get acess to the tutorial</p>
        <a class="btn btn-lg btn-primary" href="#" role="button">Get 10% Discount </a>
       </div>


 <!-- Getting the Sidebar ready-->
 <ul class="nav nav-pills flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="#">Key Tutorials</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Learn more from Experts</a>
    </li>
    <!-- You could add more links here-->
   </ul>




       <!-- Nested Columns-->
       <div class="row">
            <!--First nested column-->
            <div class="col-md">
                <h3 class="display-4">A complete introduction to Bootstrap</h3>
                <p>
                    Get to know Bootstrap as a child 
                </p>
                <a href="#" class="btn btn-primary">
                    Learn More 
                </a>
            </div>
            <!-- Scond Nested Column -->
            <div class="col-md">
                <h3 class="display-4">
                    Learn Web Development The Right Way 
                </h3>
                <p>Want to become a web developer</p>
                <a href="#" class="btn btn-lg btn-primary">Learn More </a>
            </div>
            <!-- Third Nested Column-->
            <div class="col-md">
                <h3 class="display-4">Check Out Collection of books </h3>
                <p>Get best books, the right way to learn </p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
       </div>

      

       <!-- Footer class -->
       <footer class="container mt-4">
        <div class="row">
            <div class="col">
                <p class="text-center">Designed by <a href="#">Chastfat Projects</a></p>
            </div>
        </div>
       </footer>
    </body>
   </html>