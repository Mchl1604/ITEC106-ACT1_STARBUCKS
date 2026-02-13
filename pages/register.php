<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <?php include("../includes/cssBootstrap.php"); ?>
  <style>
    body{
      font-family: Helvetica, Arial, sans-serif;
       background-color: #00754A;
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

  <form action="login.php">

 
  <div class="d-flex justify-content-center mt-5">
    <div class="card col-md-4 px-4 py-4 shadow bg-body-tertiary rounded">
      <div class="d-flex justify-content-center mb-3">
      <img src="../img/logo.png" alt="" class="img-fluid" style="max-height: 60px; max-width: 40px;">
      </div>
      <h1 class="text-center">Create an Account</h1>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name" required>
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email Address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Confirm Password</label>
      </div>
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn">Finish</button>

      </div>

    </div>

  </div>
   </form>
  <?php include("../includes/jsBootstrap.php"); ?>
</body>

</html>