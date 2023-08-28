<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");
session_start();
$resulttt = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Astra Bank</title>
  <link rel="stylesheet" href="styles/styles-admin-login.css">
  <link rel="stylesheet" href="styles/adminacdet.css">
  <link rel="stylesheet" href="AstraBank_Victoria/styles.css">
  <script src="script.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- Fontawesome Icons  -->
  <script src="https://kit.fontawesome.com/7433d3320f.js" crossorigin="anonymous"></script>
  <style>
    table {
      margin: 50px auto;
      /* Adjusted the margin */
      border-collapse: collapse;
      background-color: rgba(255, 255, 255, 0.7);
      /* Updated background color with transparency */
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    th {
      background-color: #333 !important;
      color: #fff;
      font-weight: bold !important;
      font-size: 20px !important;
      padding: 15px;
      text-align: center;
    }

    td {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid #ccc;
    }

    /* Apply different background transparency to even rows */
    tr:nth-child(even) {
      background-color: rgba(255, 255, 255, 0.9);
      /* Change the alpha value (0.9) to adjust the transparency */
    }

    /* Apply different background transparency to odd rows */
    tr:nth-child(odd) {
      background-color: rgba(255, 255, 255, 0.7);
      /* Change the alpha value (0.7) to adjust the transparency */
    }
  </style>
</head>

<body style="background-image:url(AstraBank_Victoria/assets/images/pic1.png);">
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
              <a class="nav-link" href="admin_login.php" style="background-color: transparent;">Admin Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customeracdetlist.php" style="background-color: transparent;">Customer Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="background-color: transparent;">Back to Home-Page</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="responsive-menu">
      <ul class="nav-links">
        <li><a href="admin_login.php" style="background-color: transparent;">Admin Login</a></li>
        <li><a href="customeracdetlist.php" style="background-color: transparent;">Customer Login</a></li>
        <li><a href="index.php" style="background-color: transparent;">Back to Home-Page</a></li>
      </ul>
    </div>
  </header>
  <div class="content">
    <form name="form1" method="post" action="customer_signup.php">
      <table width="80%" border="1" cellspacing="5" cellpadding="5" align="center">
        <tr>
          <th colspan="4" style="text-align: center;">customer Signup</th>
        </tr>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $v1 = $_POST['acno'];
          $v2 = $_POST['acName'];
          $v3 = $_POST['MobileNo'];
          $v4 = $_POST['email'];
          $v5 = $_POST['acAdd'];
          $v6 = $_POST['pword'];
          $v7 = $_SESSION['actype'];
          $v8 = 'N'; // Default value for custapp
          $v9 = 0.00; // Default value for balance
      
          $sqlvar = "INSERT INTO custactab values($v1,'$v2',$v3,'$v4','$v5','$v6','$v7','N', $v9)";
          $result = $conn->query($sqlvar);
      
          if ($result) {
              $resulttt = "Record Inserted";
          } else {
              $resulttt = "Record Not Inserted, there seems to be a problem!";
          }
      } else {
          $_SESSION['actype'] = $_GET['actype'];
      }
      

        ?>

        <tr>
          <td>Account Number (10 Digits)</td>
          <td><input type="number" name="acno" min="1000000000" max="9999999999" maxlength="10"></td>
        </tr>
        <tr>
          <td>Person Name</td>
          <td><input type=text name=acName></td><!-- ...4 -->
        </tr>
        <tr>
          <td>Mobile No.</td>
          <td><input type=text name=MobileNo maxlength="10"></td><!-- ...6 -->
        </tr>
        <tr>
          <td>E-mail</td>
          <td><input type="text" name="email"></td><!-- ...7 -->
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea name=acAdd rows=4></textarea></td><!-- ...5 -->
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="pword" id="password"></td>
        </tr>
        <tr>
          <td>Retype Password</td>
          <td><input type="password" name="text7" id="retypePassword"></td>
        </tr>
        <tr>
          <td colspan="2">
            <div id="passwordWarning" style="color: red;"></div>
          </td>
        </tr>

        <tr>
          <td><a href="customeracdetlist.php">Back</a></td>
          <td><input type="submit" name="Login" class="back-link" style="background-color: #343131c7;
    text-decoration: none !important;
    color: #ffffff !important;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 4px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"></td>
        </tr>
        <tr>
          <td colspan="2"><?php echo $resulttt; ?></td>
        </tr>
      </table>
    </form>
  </div>
  <footer>
    <p>&copy; 2023 Astra Bank. All rights reserved.</p>
  </footer>
  <script>
    const passwordInput = document.getElementById("password");
    const retypePasswordInput = document.getElementById("retypePassword");
    const passwordWarning = document.getElementById("passwordWarning");

    retypePasswordInput.addEventListener("keyup", validatePasswords);

    function validatePasswords() {
      const password = passwordInput.value;
      const retypePassword = retypePasswordInput.value;

      if (password !== retypePassword) {
        passwordWarning.textContent = "Passwords do not match!";
      } else {
        passwordWarning.textContent = "";
      }
    }
  </script>

</body>

</html>