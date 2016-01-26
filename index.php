<?php
   ob_start();
   session_start();
?>

    <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
                
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
                  $_SESSION['loggedIn'] = true;
                  header('Location: search.php');
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
 
<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title>Recruiting GitLabs</title>  
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="js/recruit.js"></script>
        <link rel="stylesheet" href="css/style.css">   
  </head>
   
   <body>

    <div class="login-block">
    <h1>GitLabs</h1><br>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="POST">
     <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="login" class="login login-submit" value="Submit">
  </form>

        <div class="login-help">
    <a href="register.html">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>    

   </body>
</html>