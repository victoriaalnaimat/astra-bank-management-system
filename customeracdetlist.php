<!DOCTYPE html>
<html lang="en">

<head>
  <title>Astra Bank</title>
  <link rel="stylesheet" href="styles/styles-Customer-Login-and-Signup-Page.css">
  <link rel="stylesheet" href="AstraBank_Victoria/styles.css">
  <script src="script.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- Fontawesome Icons  -->
  <script src="https://kit.fontawesome.com/7433d3320f.js" crossorigin="anonymous"></script>

</head>

<body style="background-image:url(AstraBank_Victoria/assets/images/bg2.png);">
    <header style="padding-top: 0;background: none;position: absolute;width: 50%;">
    <!-- Navbar Section  -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="height: 8vh;">
      <div class="container-fluid">
        <img src="AstraBank_Victoria/assets/images/logo.png" alt="Astra Bank Logo" class="logo" style="position: absolute; left: 0;height: 8vh;width: 15vh;">
        <a class="navbar-brand" href="index.php" style="font-size: 2.7vh;position: absolute; left: 12vh;">Astra Bank - Jordan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="position: absolute; right: 0;">
            <li class="nav-item">
              <a class="nav-link" href="admin_login.php">Admin Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customeracdetlist.php">Customer Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Back to Home-Page</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="responsive-menu">
      <ul class="nav-links">
        <li><a href="admin_login.php">Admin Login</a></li>
        <li><a href="customeracdetlist.php">Customer Login</a></li>
        <li><a href="index.php">Back to Home-Page</a></li>
      </ul>
    </div>
  </header>

  <main style="margin-top: 5vh;margin-bottom: -5vh;">
    <h2 style="color: aliceblue;background: #000;">Customer Login & Signup Page</h2><br>
    <div class="signup-container">
      <div class="signup-info" style="color: aliceblue;">
        <p>Already have an account? <a href="customer_login.php" style="background-color: rgba(255, 255, 255, 0.6);padding: 1vh;border-radius: 5px;box-shadow: 0 0 21.5px rgba(0, 0, 0, 0.2);text-decoration: none;color: darkgreen;font-weight: bolder;">Click here to Login</a></p>
      </div>
      <div class="signup-table">
        <h3>Join our Astra-Bank family!</h3>
        <p>Please select the Account Type then Signup</p>
        <table class="account-table">
          <tr>
            <th>Account Name</th>
            <th>Details</th>
            <th>Facilities</th>
            <th>Minimum Balance</th>
          </tr>
          <?php
          error_reporting(E_ALL);
          ini_set('display_errors', 1);

          include("connfile.php");

          $sqlvar = "select * from actypeTab order by actypename";
          $result = $conn->query($sqlvar);
          while ($row = $result->fetch_row()) {
            echo ("<tr><td><a href=customer_signup.php?actype=" . $row[0] . ">" . $row[0] . "</a></td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>");
          }
          ?>
        </table>
      </div>
    </div><br>
    <a href="mainpage.php" style="background-color: rgba(255, 255, 255, 0.6);padding: 1vh;border-radius: 5px;box-shadow: 0 0 21.5px rgba(0, 0, 0, 0.2);text-decoration: none;color: black;font-weight: bolder;">Back</a>
  </main>

  <footer style="height: fit-content;">
    <p>&copy; 2023 Astra Bank. All rights reserved.</p>
  </footer>
</body>

</html>