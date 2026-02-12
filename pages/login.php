<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <?php include("../includes/cssBootstrap.php"); ?>
  <style>
    body{
       font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
       background-color: #f5f0ea;
    }

    h1 {
      font-size: 28px;
      font-weight: bold;
      color: #00754A;
    }
    .card, .form-control, .form-check-input{
      border: 1px solid #000000;
    }
    a{
      color: #00754A;
      font-weight: bold;
      text-decoration: none;
    }
    .btn{
      background-color: #00754A;
      color: #FFFFFF;
      border-radius: 30px;
      font-weight: bold;
      transition: .3s;
    }
    .btn:hover{
      background-color: #00754A;
      color: #FFFFFF;
      opacity: .8;
    }
    .form-control:focus{ 
     background-color: #B8FFB8;
    }
    .form-control:focus + label{ 
      color: #00754A;
    }
  </style>
</head>

<body>
  <?php include("../includes/loginheader.php")?>
  <div class="d-flex justify-content-center mt-5">
    <h1>Log in</h1>
  </div>

  <div class="d-flex justify-content-center mt-2">
    <div class="card col-md-4 px-4 py-5 shadow bg-body-tertiary rounded">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Username or Email Address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
       <div class="mb-2 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
  </div>
  <a href="" class=" mb-1">Forgot Password?</a>
  <p>Does not have an account? <a href="register.php">Sign up</a></p>
  <div class="d-flex justify-content-end">
    <a href="home.php" class="btn">Log in</a>
    
  </div>
  
    </div>
    
  </div>
  
  <?php include("../includes/jsBootstrap.php"); ?>
</body>

</html>