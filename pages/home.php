<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    .banner {
      background-color: #32462F;
      padding: 20px 0;

    }
    .row{
      background-color: #f5f0ea;
    }
  </style>
</head>

<body>
  <?php include("../includes/header.php"); ?>
  <div class="col-md-12 banner d-flex justify-content-center align-items-center mb-3">
    <p class="text-white fw-bold fs-5 m-0">It's a great day for coffee</p>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <img src="../img/1.webp" alt="" class="img-fluid">
    </div>
    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center text-center" style="min-height: 300px;">
  <h4 class="fw-bold mb-4" style="color:#006242; ">New ways to celebrate Valentine’s</h4>
  <p class="fs-5" style="width: 500px; color:#006242;">
    Treat yourself or your loved ones to our new White Chocolate Strawberry Cream Cold Brew 
    or Strawberry Shortcake Frappuccino® blended beverage.
  </p>
</div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>