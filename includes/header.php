<style>
  .header-nav{
     font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    color: #000000;
  }
  .sign-out{
    border: 1px solid #000000;
    border-radius: 20px;
    font-size: 12px;
    color: #ffffff;
    background-color: #000000;
  }
@media screen and (max-width: 992px) {
  .sign-out{
    background-color: #ffffff;
    border: none;
    color: #000000;
    font-size: 16px;
  }
}
</style>
<nav class="navbar navbar-expand-lg bg-white py-2">
  <div class="container-fluid">
    <a class="navbar-brand ps-4" href="home.php"><img src="../img/logo.png" alt="company-logo" style="width: 45px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

  <ul class="navbar-nav gap-3">
    <li class="nav-item">
      <a class="nav-link fw-bold header-nav" href="../pages/home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link fw-bold header-nav" href="../pages/aboutUs.php">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link fw-bold header-nav" href="../pages/contactUs.php">Contact Us</a>
    </li>
  </ul>

  <ul class="navbar-nav ms-auto ">
    <li class="nav-item mx-lg-3">
      <a class="nav-link fw-bold header-nav sign-out" href="../pages/login.php">Log out</a>
    </li>
  </ul>

</div>

    
  </div>
</nav>