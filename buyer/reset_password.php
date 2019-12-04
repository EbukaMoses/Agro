<?php include("admin_header.php");   ?>
      <div class="content-wrapper">
        
<div class="page-title">
    <div>
        <h1><i class="fa fa-expeditedssl"></i> Reset Password</h1>
    </div>
    <div>
        
    </div>
</div>

<div class="card">
        <form method="POST" action="">	
        <section>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 shift">
                    <div class="panel panel-primary ch">
                        <div class="panel-heading">
                            <h4 class="txt">Candidate Password Reset</h4>
                        </div><br>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">Username/Reg Number:</span>
                                        <input name="username" class="form-control" required="" type="text">
                                    </div><br>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="sizing-addon2">New Password:</span>
                                        <input name="new_password" class="form-control" required="" type="text">
                                    </div><br>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <button type="submit" name="change_password_btn" class="btn btn-primary btn-md" style=""><span class="glyphicon glyphicon-user"></span>&nbsp; Reset Password</button><br> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4"></div>
            </div>
        </section>
    </form>
</div>
      </div>
        <?php include("admin_footer.php");   ?>