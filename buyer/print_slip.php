 <?php include("admin_header.php");   ?>
      <div class="content-wrapper">
        
<div class="page-title">
  <div>
    <h1><i class="fa fa-print"></i> Print Applicant Slip</h1>
  </div>
  <div>
    
  </div>
</div>

<div class="card">
       <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="text-center">Print Applicant Slip</h4>
        </div>
        <div class="panel-body">
            <form method="POST" action="">                
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Fee Term</span>
                            <select class="form-control" name="fee_payment_term">
                                <option selected="selected">--select--</option>
                                <option>First Term</option><option>Second Term</option><option>Third Term</option>                       
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Fee Session</span>
                            <select class="form-control" name="fee_payment_session">
                                <option selected="selected">--select--</option>
                                <option>2016/2017</option><option>2017/2018</option><option>2015/2016</option><option>2018/2019</option><option>2019/2020</option><option>2020/2021</option>                            
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Amount Paid</span>
                            <input name="fee_payment_amount" placeholder="Enter Fees Amount Paid by Student" class="form-control" type="text">
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Teller No</span>
                            <input name="fee_payment_teller_no" placeholder="Enter Bank Teller No" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <br>
                <center><input name="fetch_detail_btn" id="submit" value="Print" class="btn btn-large btn-primary text-center" type="submit"></center>  
            </form>
           </div>
    </div>
</div>      </div>
        <?php include("admin_footer.php");   ?>