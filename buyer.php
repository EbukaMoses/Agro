   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FoodConnect</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="sweetalert/sweetalert2.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" type="image/png" href="images/favicon.png">	
</head>
<body>
<!--
    <hader>
        <div class="container-fluid" id="header">
            <div class="row mt-3 mb-3">
                <div class="col-md-4">
                     <a href="index.php"><img src="images/logo2.png" class="img-fluid mt-2" width="220" alt=""></a>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                   
                </div>
            </div>
        </div>
    </hader>
    
    <nav class="navbar  navbar-expand-lg navbar-light bg-success" id="nav">
        <a class="navbar-brand" href="index.html" id="logo"></a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="btn">
		      <span><i class="fa fa-bars" aria-hidden="true" id="toggle"></i></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavDropdown">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="about.php">About Us<span class="sr-only">(current)</span></a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="team.php">Team</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		            Trade with us
		          </a>
		          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		            <a class="dropdown-item" href="buyer.php"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Buyer</a>
		            <a class="dropdown-item" href="seller.php"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Farmer</a>
		          </div>
		        </li>
		        <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		              Support
		            </a>
		            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		              <a class="dropdown-item" href="faq.php">FAQ</a>
		              <a class="dropdown-item" href="mission.php">Mission</a>
		              <a class="dropdown-item" href="whyus.php">Why use FoodConnect</a>
		              <a class="dropdown-item" href="feedback.php">Feedback</a>
		              <a class="dropdown-item" href="privacypolice.php">Privacy policy</a>
		              <a class="dropdown-item" href="terms&condition%20.php">Terms & Conditions</a>
		            </div>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="contactus.php">Contact Us</a>
		          </li>
		          
		      </ul>
		    </div>
		  </nav>
-->
    <section>
       <br>      
       <center><h1 class="text-success">Buyers </h1></center>
       <br>
        <div class="container">
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" id="panel_header">                      
                        <h5 class="card-title mt-3 mb-3"><center><span class="title"></span></center></h5> 
                    </div>
                   <div class="card-body">        
                    <br>
                       <div class="out">
                            <p class="card-text">               
                                 <input type="text" placeholder="Fullname" id="fullname_up" class="form-control">
                                 <br>
                                 <input type="email" placeholder="Email" id="email_up" class="form-control">
                                 <br>
                                 <input type="phone" placeholder="Phone" id="phone_up" class="form-control">
                                 <br>
                                 <input type="password" placeholder="password" id="password_up" class="form-control">
                                 <br>
                                 <input type="password" placeholder="Confirm Password" id="cpassword_up" class="form-control">
                                 <center><button class="btn btn-success"  id="submit_up">SignUp</button><br><span  id="sign_io">Don't have an account yet? <span id="signin_btn">Signin</span></span></center>
                            </p>
                        </div>
<!--                sign in section                         -->
                         <div class="in">                    
                            <br>                    
                            <p class="card-text">
                                <input type="text" placeholder="Fullname"  id="fullname_in" class="form-control">
                                 <br>
                                 <input type="email" placeholder="Email"  id="email_in" class="form-control">
                                 <br>
                                 <input type="password" placeholder="Password"  id="password_in" class="form-control">
                                 <center><button class="btn btn-success"  id="submit_in">SignIn</button><br><span  id="sign_io">Don't have an account yet? <a href="" id="signup_btn">Signup</a></span></center>
                              </p>
                          </div>
                      
                  </div>
                
                
                
<!--                sign in --------------------------------->
               
    <!--                  <img class="card-img-top img-fluid" src="images/slide/ph-10104.jpg" alt="Card image">-->
                  
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-3"></div>
<!--            <div class="col-md-6">-->
<!--
                <div class="card" style="">
                  <img class="card-img-top img-fluid" src="images/slide/ph-10104.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title text-success"><center>SgnIn As A Buyer</center></h4>
                    <br>                    
                    <p class="card-text">
                    <input type="text" placeholder="Fullname" class="form-control">
                     <br>
                     <input type="email" placeholder="Email" class="form-control">
                     <br>
                     <input type="passwor" placeholder="Password" class="form-control">
                     <center><a href="#" class="btn btn-success">SignIn</a></center>
                      </p>
                  </div>
                </div>
-->
<!--            </div>-->
                    
            
        </div>
        </div>

        <br>
        <br>
       
    </section>
   <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/app.js"></script>
     <script src="sweetalert/sweetalert2.all.js"></script>
     <script src="js/fontawesome.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>