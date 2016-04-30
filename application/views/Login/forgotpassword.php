<div class="container" style="padding-top: 150px; padding-bottom:150px;">
    
<div class="col-md-9 col-md-offset-4">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Sign In </strong></h3></div>
  <div class="panel-body">
   <form role="form" method="post" action="<?php echo site_url('Login/logincheck') ?>" id="formLogin">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="username" class="form-control" name="username" placeholder="username">
  </div>
  <div class="form-group">
    <label for="password">Password <a href="/sessions/forgot_password">(forgot password)</a></label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-sm btn-default">Sign in</button>
</form>
  </div>
</div>
</div>
    
</div>

