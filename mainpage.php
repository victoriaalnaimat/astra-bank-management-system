<!DOCTYPE html>
<html lang="en">

<head>
  <title>Astra Bank</title>
  <link rel="stylesheet" href="styles/styles-mainpage.css">
  <link rel="stylesheet" href="AstraBank_Victoria/styles.css">
  <script src="script.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- Fontawesome Icons  -->
  <script src="https://kit.fontawesome.com/7433d3320f.js" crossorigin="anonymous"></script>

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .video-background {
      position: relative;
      top: 0;
      left: 0;
      width: 100%;
      height: 90vh;
      z-index: 0;
      object-fit: cover;
    }

    .mid {
      height: 64vh;
      overflow: hidden;
    }

    footer {
      padding: 0;
      margin: 0;
      background-color: rgba(0, 0, 0, 0.2);
      text-align: center;
    }
  </style>
</head>

<body>
  <video autoplay muted loop class="video-background">
    <source src="AstraBank_Victoria/assets/videos/1666e0f0dc2f6ac4db4084841309bca8.mp4" type="video/mp4" />
  </video>
  <header style="padding-top: 0;background: none;position: absolute;width: 50%;">
    <!-- Navbar Section  -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="height: 8vh;">
      <div class="container-fluid">
        <img src="AstraBank_Victoria/assets/images/logo.png" alt="Astra Bank Logo" class="logo" style="position: absolute; left: 0;">
        <a class="navbar-brand" href="index.php" style="font-size: 2.7vh;position: absolute; left: 12vh;">Astra Bank - Jordan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="position: absolute; right: 0;">
            <li class="nav-item">
              <a class="nav-link" href="#about">About Astra Bank</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#discover">Loan & Deposit Calculator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Service</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="mid">
      <div class="hero text-center" style="height: 2.1vh;margin-top: -16.1vh;width: 100%;">
        <h1 class="text-light display-8 fw-bold">Welcome to Astra Bank</h1>
        <p class="text-light mx-auto">Experience the future of banking</p><br>
        <button style="border: none;background:none;margin-bottom: 5vh;"><a class="text-dark" style="padding: 2vh;font-size: 2.1vh;" href="admin_login.php">Admin Login</a></button><br>
        <button style="border: none;background:none;margin-bottom: 5vh;"><a class="text-dark" style="padding: 2vh;font-size: 2.1vh;" href="customeracdetlist.php">Customer Login & SignUP</a></button><br>
        <button style="border: none;background:none;margin-bottom: 5vh;"><a class="text-dark" style="padding: 2vh;font-size: 2.1vh;" href="index.php">Back to Home-Page</a></button><br>
      </div>
    </div>
  </header>
  <!-- Footer Section  -->
  <footer class="bg-dark text-center text-white" style="padding: 0px;">
    <!-- Grid container -->
    <div style="margin: 0px;">
      <!-- Section: Social media -->
      <section>
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
      </section>
      <!-- Section: Social media -->

      <!-- Grid container -->

      <!-- Copyright -->
      <div style="background-color: rgba(0, 0, 0, 0.2); margin: 0px; text-align: center;">
        ©All Copy Rights Preserved - [Victoria-2023]
      </div>
      <!-- Copyright -->
    </div>
  </footer>
</body>

</html>