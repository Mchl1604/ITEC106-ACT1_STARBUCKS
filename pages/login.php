<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <?php include("../includes/cssBootstrap.php"); ?>
  <style>
    body{
      font-family: Helvetica, Arial, sans-serif;
       background-image: url(../img/bg.jpg);
       background-size: cover;
       background-repeat: no-repeat;
       background-position: center;
       min-height: 100vh;
       margin: 0;
    }

    h1 {
      font-size: 28px;
      font-weight: bold;
      color: #00754A;
    }
    
    .form-control, .form-check-input{
      border: 1px solid #e0e0e0;
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
  </style>
</head>

<body>
  <div class="d-flex justify-content-end my-5 mx-lg-5">
    <div class="card col-lg-4 mt-3 mx-5 py-5 px-4">
      <div class="d-flex justify-content-center mb-3">
      <img src="../img/logo.png" alt="" class="img-fluid" style="max-height: 60px; max-width: 40px;">
      </div>
      <h1 class="text-center">Log in</h1>
      <form action="home.php">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email Address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>
       <div class="mb-2 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
  </div>
  <p>Does not have an account? <a href="register.php">Sign up</a></p>
  <div class="d-flex justify-content-end">
    <button type="submit" class="btn">Log in</button>
    
  </div>
    </form>
  
    </div>
    
  </div>

  
  <?php include("../includes/jsBootstrap.php"); ?>
  <script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
  </script>
</body>

</html>