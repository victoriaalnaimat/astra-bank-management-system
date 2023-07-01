<!DOCTYPE html>
<html lang="en">

<head>
  <title>Astra Bank</title>
  <link rel="stylesheet" href="styles/styles-Customer-Login-and-Signup-Page.css">
  <script src="script.js" defer></script>
</head>

<body>
  <header>
    <div class="header-container">
      <img src="logo.png" alt="Astra Bank Logo" class="logo">
      <nav>
        <ul class="nav-links">
          <li><a href="admin_login.php">Admin Login</a></li>
          <li><a href="customeracdetlist.php">Customer Login</a></li>
          <li><a href="index.php">Back to Home-Page</a></li>
        </ul>
        <div class="burger-menu">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
      </nav>
    </div>
    <div class="responsive-menu">
      <ul class="nav-links">
        <li><a href="admin_login.php">Admin Login</a></li>
        <li><a href="customeracdetlist.php">Customer Login</a></li>
        <li><a href="index.php">Back to Home-Page</a></li>
      </ul>
    </div>
  </header>

  <main>
    <h2>Customer Login & Signup Page</h2>
    <div class="signup-container">
      <div class="signup-info">
        <h3>Already have an account? <a href="customer_login.php" style="background-color: rgba(255, 255, 255, 0.6);padding: 7px;border-radius: 5px;box-shadow: 0 0 21.5px rgba(0, 0, 0, 0.2);">Click here to Login</a></h3>
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
    </div>
    <a href="mainpage.php">Back</a>
  </main>

  <footer>
    <p>&copy; 2023 Astra Bank. All rights reserved.</p>
  </footer>
</body>

</html>
