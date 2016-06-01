<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login & Register form</title>
    
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
   
    
  </head>

  <body>

    <div class="login-wrap">
  <h2>Login</h2>
  
  <div class="form">
  <form action="<?php echo base_url();?>index.php/login/proseslogin" method="post">
    <input type="text" placeholder="Username" name="username" />
    <input type="password" placeholder="Password" name="password" />
    <button type="submit"> Sign in </button>
    </form>
     <?php if(isset($error)) echo "<b><span style='color:red;'>$error</span></b>";
if(isset($logout)) echo "<b><span style='color:red;'>$logout</span></b>"; ?>
  </div>
</div>
    <script src='https://code.jquery.com/jquery-1.10.0.min.js'></script>

        <script src="<?php echo base_url();?>assets/js/index.js"></script>

    
    
    
  </body>
</html>
