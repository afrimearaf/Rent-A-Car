<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
        <title>Rent A Car</title>
  </head>
  <body class="log">
   <div class="container" id="container">
  <section id="content">
    <form action="login.php" method="post">
     <br><br>
      <h1 style="text-align: center;
    color: #555;">User Login</h1>
     <br>
     <br>
      <div>
        <input type="text" placeholder="Username" required="" id="username"  name="name"/>
      </div>
      <div>
        <input type="password" placeholder="Password" name="pass" required="" id="password" />
      </div>
      
      <div>
        <button name="login" type="submit" class="btn">Log In</button>
        <br><br>
        <p style="text-align: center;
    color: #555;">Already have an account? <a href="signup.php">Sign In</a></p>
      </div><br><br>
    </form>
  </section>
</div>
  </body>
</html>