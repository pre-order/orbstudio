<div class="container" style="padding-top: 150px; padding-bottom:150px;">

    <p class="alert alert-danger">
    <?php echo validation_errors(); ?>
    </p>
    
    
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
          
     <div class="panel-heading">
         <div class="panel-title" style="padding-left: 20%; padding-right: 20%" >
             <h1 class="icon-logo" style="font-size:  35px; vertical-align: ">
                 <span style="font-size:  20px">pre-order.com</span>   
             </h1> 
                  
        </div>
     </div>

  <div class="panel-body">
            <div style="font-family: Tw Cen MT">
                <h1 style="color: #757475">Let's get <em style="color:#EA5C75"><b>started..</b></em></h1>
            </div>
            <form role="form" method="post" action="<?php echo site_url('Login/logincheck') ?>" id="formLogin">
                <div class="form-group ">
                    <input type="email" class="form-control form-login" name="email" placeholder="E-mail">
                </div>
                <div class="form-group ">
                    <input type="password" class="form-control form-login" name="password" placeholder="Password">
                    <a href="/sessions/forgot_password">(forgot password)</a>
                 </div>
                <button type="submit" class="btn btn-default-login btn-block">Login</button>
            </form>
  </div>
        
        <div class="panel-footer">
             <div class="panel-title" style="padding-left: 55%">
                 <h1 class="icon-logo" style="font-size:  25px; vertical-align: ">
                 <span style="font-size:  15px">pre-order.com</span>   
             </h1> 
             </div>
        </div>
</div>
</div>
    
</div>