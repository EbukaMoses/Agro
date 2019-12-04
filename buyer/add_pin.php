<?php include("admin_header.php");   ?>
      <div class="content-wrapper">
         

 <div class="page-title">
  <div>
    <h1><i class="fa fa-eye"></i> Add PIN</h1>
  </div>
  <div>
    
  </div>
</div>

<div class="card">
        <form action="" method="POST">
        <div class="panel panel-primary ch">
            <div class="panel-heading">					
                <h4 class="text-center">Add a New Pin</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table table-striped">
                            <tbody><tr>
                                <td>Add a New Pin</td>
                                <td>
                                    <input name="add_subject" placeholder="Type a New Pin" class="form-control" required="" type="text">
                                </td>
                            </tr>
                        </tbody></table>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <button name="add_subject_btn" class="btn btn-primary" style="border-radius:10px;" type="submit">Add</button>
                            </div>
                            <br><br>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>      </div>
        <?php include("admin_footer.php");   ?>