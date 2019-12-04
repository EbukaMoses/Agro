<?php include("header.php");   ?>
    <section>
       <br>
       <br>
       
       <center><h1>Send Us a Message</h1></center>
       <br>
       
        <div class="container">
        <div class="row">
           <div class="col-md-2">
                
            </div>    
            <div class="col-md-8">
                <div class="sout">
                    <p class="card-text">               
                         <input type="text" placeholder="Fullname" id="name" class="form-control">
                         <br>
                         <input type="email" placeholder="Email" id="mail" class="form-control">
                         <br>
                         <select class="form-control" name="" id="">
                             <option value="">--Select--</option>
                             <option value="">Buyer</option>
                             <option value="">Seller</option>
                             <option value="">Other</option>
                         </select>
                         <br>
                         <br>
                         <textarea name="" id="msg" class="form-control" cols="30" rows="10"></textarea>
                         <center><button class="btn btn-success"  id="send_msg"><i class="fa fa-paper-plane-o"></i>&nbsp;Send Message</button>
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                
            </div>
            
        </div>
        </div>

        <br>
        <br>
    </section>
   <?php include("footer.php");   ?>