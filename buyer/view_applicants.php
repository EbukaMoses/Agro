 <?php include("admin_header.php");   ?>
      <div class="content-wrapper">
        
<div class="page-title">
  <div>
    <h1><i class="fa fa-user"></i> View Registered Applicants</h1>
  </div>
  <div>

  </div>
</div>

<div class="card">
       <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="text-center">View Registered Applicants</h4>
        </div>
        <div class="panel-body">
            <form method="POST" action="">
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Class</span>
                            <select class="form-control" name="outstanding_bills_class">
                                <option selected="selected">--select--</option>
                                
                                                <option>JSS1</option>
                                            
                                                <option>JSS2</option>
                                            
                                                <option>JSS3</option>
                                            
                                                <option>SSS1</option>
                                            
                                                <option>SSS2</option>
                                            
                                                <option>SSS3</option>
                                                                        </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Term</span>
                            <select class="form-control" name="outstanding_bills_term">
                                <option selected="selected">--select--</option>
                                <option>First Term</option><option>Second Term</option><option>Third Term</option>                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Session</span>
                            <select class="form-control" name="outstanding_bills_session">
                                <option selected="selected">--select--</option>
                                <option>2016/2017</option><option>2017/2018</option><option>2015/2016</option><option>2018/2019</option><option>2019/2020</option><option>2020/2021</option>                            </select>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <p id="btnsubmit"><input name="outstanding_bills_btn" id="submit" value="View" class="btn btn-sm btn-large btn-primary text-center" type="submit"></p>
                    </div>
                </div>
            </form>
                

            
                            <div class="table-responsive">
<!--                                <h3 class="text-info"><b>All Outstanding Fee Payment Records</b></h3>-->
                                <br>
                                <tfooter>
                                        </tfooter><table class="table table-bordered">
                                    <thead class="">
                                        <tr class="bg-info">
                                            <th>S/N</th>
                                            <th>REG NUMBER</th>
                                            <th>NAME</th>
                                            <th>CLASS</th>
                                            <th>STUDENT TYPE</th>
                                            <th>TERM</th>
                                            <th>SESSION</th>
                                            <th class="text-success">AMOUNT PAID (NGN)</th>
                                            <th class="text-danger">BALANCE (NGN)</th>
                                            <th>TELLER NO</th>
                                            <th>DATE</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                        
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>20174JSS1SJSS2</td>
                                        <td>Ojukwu Casweeney Chisom</td>
                                        <td>JSS1</td>
                                        <td>New Student</td>
                                        <td>First Term</td>
                                        <td>2017/2018</td>
                                        <td class="text-success"><b>27,350</b></td>
                                        <td class="text-danger"><b>5,000</b></td>
                                        <td>4544333</td>
                                        <td>27/Apr/2017</td>
                                        <td><b><p class="text-danger"><b>Not Cleared <span class="glyphicon glyphicon-remove"></span></b></p></b></td>
                                    </tr>
                                </tbody>
                            
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>20174JSS1SJSS3</td>
                                        <td>Ojukwu Bianca Chiemerie</td>
                                        <td>JSS1</td>
                                        <td>Old Student</td>
                                        <td>First Term</td>
                                        <td>2017/2018</td>
                                        <td class="text-success"><b>15,000</b></td>
                                        <td class="text-danger"><b>3,000</b></td>
                                        <td>00663344</td>
                                        <td>27/Apr/2017</td>
                                        <td><b><p class="text-danger"><b>Not Cleared <span class="glyphicon glyphicon-remove"></span></b></p></b></td>
                                    </tr>
                                </tbody>
                            
                                <tbody>
                                    <tr>
                                        <td>3</td>
                                        <td>20174JSS1SJSS4</td>
                                        <td>Nwofor Ejike Joseph</td>
                                        <td>JSS1</td>
                                        <td>New Student</td>
                                        <td>First Term</td>
                                        <td>2017/2018</td>
                                        <td class="text-success"><b>10,000</b></td>
                                        <td class="text-danger"><b>22,350</b></td>
                                        <td>007766</td>
                                        <td>27/Apr/2017</td>
                                        <td><b><p class="text-danger"><b>Not Cleared <span class="glyphicon glyphicon-remove"></span></b></p></b></td>
                                    </tr>
                                </tbody>
                            
                                <tbody>
                                    <tr>
                                        <td>4</td>
                                        <td>201514JSS1SJSS2</td>
                                        <td>Ojukwu Ejike Anthony</td>
                                        <td>JSS1</td>
                                        <td>Old Student</td>
                                        <td>First Term</td>
                                        <td>2016/2017</td>
                                        <td class="text-success"><b>10,000</b></td>
                                        <td class="text-danger"><b>8,000</b></td>
                                        <td>885444</td>
                                        <td>03/May/2017</td>
                                        <td><b><p class="text-danger"><b>Not Cleared <span class="glyphicon glyphicon-remove"></span></b></p></b></td>
                                    </tr>
                                </tbody>
                            
                                <tbody>
                                    <tr>
                                        <td>5</td>
                                        <td>201614JSS1SJSS1</td>
                                        <td>Ojukwu Bianca Chiemerie</td>
                                        <td>JSS1</td>
                                        <td>New Student</td>
                                        <td>First Term</td>
                                        <td>2016/2017</td>
                                        <td class="text-success"><b>20,000</b></td>
                                        <td class="text-danger"><b>12,350</b></td>
                                        <td>45355</td>
                                        <td>03/May/2017</td>
                                        <td><b><p class="text-danger"><b>Not Cleared <span class="glyphicon glyphicon-remove"></span></b></p></b></td>
                                    </tr>
                                </tbody>
                            
                                <tbody>
                                    <tr>
                                        <td>6</td>
                                        <td>201614JSS1SJSS1</td>
                                        <td>Ojukwu Kelvin Nnamdi</td>
                                        <td>JSS1</td>
                                        <td>Old Student</td>
                                        <td>First Term</td>
                                        <td>2017/2018</td>
                                        <td class="text-success"><b>5,000</b></td>
                                        <td class="text-danger"><b>13,000</b></td>
                                        <td>36225</td>
                                        <td>28-Nov-2017</td>
                                        <td><b><p class="text-danger"><b>Not Cleared <span class="glyphicon glyphicon-remove"></span></b></p></b></td>
                                    </tr>
                                </tbody>
                            
                                    <tbody><tr>
                                            <th colspan="4">Total Outstanding Bills</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <th>63,700</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    
                                </tbody></table>
                            </div>
                                    
        </div>
    </div>
</div>      </div>
        <?php include("admin_footer.php");   ?>