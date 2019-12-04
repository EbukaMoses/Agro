<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="main/main.css">
    <link rel="stylesheet" type="text/css" href="main/defined.css">
    <link rel="shortcut icon" href="img/logo2.png">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <title>GH_Foundation</title>
    
    
  </head>
  <body>

    <div class="">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo img-responsive" href="index.php" title="Go-Back-To-Homepage"><img src="img/logo.png"></a>
        <nav class="navbar">
          <!-- Navbar Right Menu-->
          <div class="navbar">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="http://portal.stjosephschoolsng.com/admin_dashboard.php?logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
     
 

        <div class="card">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="panel panel-primary ch">
            <div class="panel-heading">					
                <h4 class="text-center">Online Registration</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <table class="table table-striped">
                                <tbody><tr>
                                    <td>Student Upload Image</td>
                                    <td>
                                        <div>
                                            <input name="file" class="form-control" required="" type="file">
                                        </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Lastname</td>
                                    <td>
                                        <input name="reg_student_firstname" placeholder="Lastname" class="form-control" required="" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>
                                        <input name="reg_student_lastname" placeholder="First name" class="form-control" required="" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Other Name</td>
                                    <td>
                                        <input name="reg_student_othername" placeholder="Other Name" class="form-control" required="" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <select name="reg_student_gender" class="form-control" required="">
                                            <option selected="selected">Male</option>
                                            <option>Female</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date Of Birth</td>
                                    <td>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <select name="reg_student_dob" class="form-control" required="">
                                                <option selected="selected">Day</option>
                                                <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <select name="reg_student_mob" class="form-control" required="">
                                                <option selected="selected">Month</option>
                                                <option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option>                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4">
                                            <select name="reg_student_yob" class="form-control" required="">
                                                <option selected="selected">Year</option>
                                                <option>2016</option><option>2015</option><option>2014</option><option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option><option>1960</option>                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td>State Of Origin</td>
                                <td>
                                    <select name="reg_student_state" class="form-control">
                                        <option selected="selected">States</option>
                                        <option>Abia</option><option>Adamawa</option><option>Akwa ibom</option><option>Anambra</option><option>Bauchi</option><option>Bayelsa</option><option>Benue</option><option>Borno</option><option>Cross River</option><option>Delta</option><option>Ebonyi</option><option>Edo</option><option>Ekiti</option><option>Enugu</option><option>Gombe</option><option>Imo</option><option>Jigawa</option><option>Kaduna</option><option>Kano</option><option>Katsina</option><option>Kebbi</option><option>Kogi</option><option>Kwara</option><option>Lagos</option><option>Nasarawa</option><option>Niger</option><option>Ogun</option><option>Ondo</option><option>Osun</option><option>Oyo</option><option>Plateau</option><option>Rivers</option><option>Sokoto</option><option>Taraba</option><option>Yobe</option><option>Zamfara</option><option>FCT Abuja</option>                                    </select>			
                                </td>
                            </tr>
                            <tr>
                                <td>LGA</td>
                                <td>
                                    <input class="form-control" name="reg_student_lga" placeholder="LGA" required="" type="text">	
                                </td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>
                                    <input class="form-control" name="reg_student_city" placeholder="Your City" required="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Student Address</td>
                                <td>
                                    <input class="form-control" name="reg_student_address" placeholder="Student address" required="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Student Phone Number</td>
                                <td>
                                    <div class="input-group">
                                        <input name="reg_student_phone" pattern="[0-9]+" title="Input must be a valid phone number" required="" class="form-control" placeholder="Phone Number" aria-describedby="basic-addon2" type="phone">
                                    </div>
                                </td>	
                            </tr>
                            <tr>
                                <td>Student E-mail</td>
                                <td>                                    
                                    <input name="reg_student_email" title="Input must be a valid E-mail" required="" class="form-control" placeholder="Student E-mail" type="text">                                    
                                </td>	
                            </tr>
                            <tr>
                                <td>Student UTME Reg Number</td>
                                <td>
                                    <div class="input-group">
                                        <input name="student_utme_num" pattern="[0-9]+" title="Input must be a valid UTME Reg Number" required="" class="form-control" placeholder="UTME Reg Number" aria-describedby="basic-addon2" type="text">
                                    </div>
                                </td>	
                            </tr>
                            <tr>
                                <td>Year Of Admission</td>
                                <td>
                                    <select name='year_of_admission' class='form-control' style='float:left;' required>
                                        <option selected="selected">Year</option>
                                                <option>2016</option><option>2015</option><option>2014</option><option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option><option>1960</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Institution Type</td>
                                <td>
                                    <select name='institution_type' class='form-control' style='float:left;' required>
                                        <option>College Of Education</option>
                                        <option>Polytechnic</option>
                                        <option>University</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Institution Name</td>
                                <td>
                                    <input class="form-control" name="institution_name" placeholder="Institution Name" required="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Faculty</td>
                                <td>
                                    <input class="form-control" name="faculty" placeholder="Faculty" required="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td>
                                    <input class="form-control" name="department" placeholder="Department" required="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Course Of Study</td>
                                <td>
                                    <input class="form-control" name="course_of_study" placeholder="Course Of Study" required="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Course Duration</td>
                                <td>
                                    <select name='course_duration' class='form-control' style='float:left;' required>
                                        <option>Select</option>
                                        <option>1 Year</option>
                                        <option>2 Year</option>
                                        <option>3 Year</option>
                                        <option>4 Year</option>
                                        <option>5 Year</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Matric Number</td>
                                <td>
                                    <input class="form-control" name="matric_number" placeholder="Matric Number" required="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Scratch Card Pin</td>
                                <td>
                                    <input class="form-control" name="scratch_card_pin" placeholder="Scratch Card Pin" required="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Are You Physically Challenged</td>
                                <td>
                                    <select name='physically_challenge' class='form-control' style='float:left;' required>
                                        <option>Select</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Have You Received a Scholarship</td>
                                <td>
                                    <select name='receieved_scholarship' class='form-control' style='float:left;' required>
                                        <option>Select</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </td>
                            </tr>                            
                            <tr>
                                <td>Next of Kin's Fullname</td>
                                <td>
                                    <input name="next_of_kin_fullname" title="Next of Kin's Fullname" required="" class="form-control" placeholder="Next of Kin's Fullname" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Next of Kin's Home Address</td>
                                <td>
                                    <input name="next_of_kin_address" title="Next of Kin's Home Address" required="" class="form-control" placeholder="Next of Kin's Home Address" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Next of Kin's Occupation</td>
                                <td>
                                    <input name="next_of_kin_occupation" title="Next of Kin's Fullname" required="" class="form-control" placeholder="Next of Kin's Occupation" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Next of Kin's Phone Number</td>
                                <td>
                                    <input name="next_of_kin_phone" title="Next of Kin's Phone Number" required="" class="form-control" placeholder="Next of Kin's Phone Number" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Next of Kin's E-mail Address</td>
                                <td>
                                    <input name="next_of_kin_email" title="Next of Kin's E-mail Address" required="" class="form-control" placeholder="Next of Kin's E-mail Address" type="text">
                                </td>
                            </tr>
                            <tr>
                                <td>Next of Kin's relationship</td>
                                <td>
                                    <input name="next_of_kin_relationship" title="Next of Kin's relationship" required="" class="form-control" placeholder="Next of Kin's relationship" type="text">
                                </td>
                            </tr>
                            
                        </tbody></table>
						<div class="col-xs-12 col-sm-12 col-md-6">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<button class="btn btn-primary" style="border-radius:10px;" name="student_reg_btn" type="submit">Submit Registration</button>
						</div><br><br>
					</div>
                </div>
            </div>
        </div>
    </form>
</div>      </div>
        <footer>
            <div class="container-fluid">
                <p class="text-center" style="color: #666;">Copyright © 2019 | Product of <a href="#">GH_Foundation</a> | <span class="glyphicon glyphicon-envelope"></span> GH_Foundation@outlook.com</p>
            </div>
        </footer>
    
    <!-- Javascripts-->
    <script src="main/jquery-2.js"></script>
    <script src="main/bootstrap.js"></script>
    <script src="main/pace.js"></script>
    <script src="main/main.js"></script>
    <script type="text/javascript" src="main/moment.js"></script>
    <script type="text/javascript" src="main/jquery-ui.js"></script>
  
</body></html>
