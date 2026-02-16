<style>
  .header-nav{
     font-family: Helvetica, Arial, sans-serif;
    color: #000000;
  }
  .profile{
    color: #ffffff;
    background-color: #00754A;
  }
  .profile:hover, .profile.show{
    color: #ffffff;
    background-color: #00754A;
  }
@media screen and (max-width: 992px) {
  .profile{
  
  }
}
</style>
<nav class="navbar navbar-expand-lg bg-white sticky-top">
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

  <div class="dropdown navbar-nav ms-auto">
  <button class="btn dropdown-toggle profile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Michael
  </button>
  <ul class="dropdown-menu ">
    <li><a class="dropdown-item" href="../pages/login.php">Log Out</a></li>
  </ul>
</div>

</div>

    
  </div>
</nav>