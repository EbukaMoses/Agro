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

    <section>
       <br>      
       <center><h1 class="text-success">Seller </h1></center>
       <br>
        <div class="container">
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" id="spanel_header">                      
                        <h5 class="card-title mt-3 mb-3"><center><span class="stitle"></span></center></h5> 
                    </div>
                   <div class="card-body">        
                    <br>
                       <div class="sout">
                            <p class="card-text">               
                                 <input type="text" placeholder="Fullname" id="sfullname_up" class="form-control">
                                 <br>
                                 <input type="email" placeholder="Email" id="semail_up" class="form-control">
                                 <br>
                                 <input type="phone" placeholder="Phone" id="sphone_up" class="form-control">
                                 <br>
                                 <input type="password" placeholder="password" id="spassword_up" class="form-control">
                                 <br>
                                 <input type="password" placeholder="Confirm Password" id="scpassword_up" class="form-control">
                                 <center><button class="btn btn-success"  id="ssubmit_up">SignUp</button><br><span  id="ssign_io">Don't have an account yet? <span id="ssignin_btn">Signin</span></span></center>
                            </p>
                        </div>
<!--                sign in section                         -->
                         <div class="sin">                    
                            <br>                    
                            <p class="card-text">
                                <input type="text" placeholder="Fullname"  id="sfullname_in" class="form-control">
                                 <br>
                                 <input type="email" placeholder="Email"  id="semail_in" class="form-control">
                                 <br>
                                 <input type="password" placeholder="Password"  id="spassword_in" class="form-control">
                                 <center><button class="btn btn-success"  id="ssubmit_in">SignIn</button><br><span  id="ssign_io">Don't have an account yet? <a href="" id="ssignup_btn">Signup</a></span></center>
                              </p>
                          </div>
                      
                  </div>
                
                
      
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-3"></div>

                    
            
        </div>
        </div>

        <br>
        <br>
       
    </section>
   <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/app2.js"></script>
     <script src="sweetalert/sweetalert2.all.js"></script>
     <script src="js/fontawesome.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>