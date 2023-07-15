<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");
session_start();
$_SESSION['acno'] = 00;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //echo ("working");
  $v1 = $_POST['text1'];
  $v6 = $_POST['text6'];
  //echo $v1." ".$v2;
  $sqlvar = "SELECT * FROM CustAcTab WHERE acno = $v1 AND pword = '$v6' AND custapp = 'Y'";
  $result = $conn->query($sqlvar);
  if ($result->num_rows > 0) {
    $_SESSION['acno'] = $v1;
    header("location: customer_mainpage.php");
  } else {
    $loginError = "User ID or password is not correct";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Astra Bank</title>
  <link rel="stylesheet" href="styles/styles-admin-login.css">
  <link rel="stylesheet" href="AstraBank_Victoria/styles.css">
  <script src="script.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!-- Fontawesome Icons  -->
  <script src="https://kit.fontawesome.com/7433d3320f.js" crossorigin="anonymous"></script>
  <style>
    *,
    *:before,
    *:after {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #080710;
    }

    .background {
      width: 430px;
      height: 520px;
      position: absolute;
      transform: translate(-50%, -50%);
      left: 50%;
      top: 50%;
    }

    .background .shape {
      height: 200px;
      width: 200px;
      position: absolute;
      border-radius: 50%;
    }

    .shape:first-child {
      background: linear-gradient(#1845ad,
          #23a2f6);
      left: -80px;
      top: -80px;
    }

    .shape:last-child {
      background: linear-gradient(to right,
          #ff512f,
          #f09819);
      right: -30px;
      bottom: -80px;
    }

    form {
      height: 520px;
      width: 400px;
      background-color: rgba(255, 255, 255, 0.13);
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
      padding: 50px 35px;
    }

    form * {
      font-family: 'Poppins', sans-serif;
      color: #ffffff;
      letter-spacing: 0.5px;
      outline: none;
      border: none;
    }

    form h3 {
      font-size: 32px;
      font-weight: 500;
      line-height: 42px;
      text-align: center;
    }

    label {
      display: block;
      margin-top: 30px;
      font-size: 16px;
      font-weight: 500;
    }

    input {
      display: block;
      height: 50px;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.07);
      border-radius: 3px;
      padding: 0 10px;
      margin-top: 8px;
      font-size: 14px;
      font-weight: 300;
    }

    ::placeholder {
      color: #e5e5e5;
    }

    button {
      margin-top: 50px;
      width: 100%;
      background-color: #ffffff;
      color: #080710;
      padding: 15px 0;
      font-size: 18px;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
    }

    .social {
      margin-top: 30px;
      display: flex;
    }

    .social div {
      background: red;
      width: 150px;
      border-radius: 3px;
      padding: 5px 10px 10px 5px;
      background-color: rgba(255, 255, 255, 0.27);
      color: #eaf0fb;
      text-align: center;
    }

    .social div:hover {
      background-color: rgba(255, 255, 255, 0.47);
    }

    .social .fb {
      margin-left: 25px;
    }

    .social i {
      margin-right: 4px;
    }

    .shape:first-child {
      background: linear-gradient(to right, #40826D, #ECFFDC);
      /* Change the gradient colors here */
      left: -80px;
      top: -80px;
    }

    .shape:last-child {
      background: linear-gradient(to left, #008080, #ECFFDC);
      /* Change the gradient colors here */
      right: -30px;
      bottom: -80px;
    }
  </style>
</head>

<body style="background-image:url(AstraBank_Victoria/assets/images/pic1.png);">
  <header style="padding-top: 0;background: none;position: absolute;width: 50%;">
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

  <main style="margin-bottom: -5vh;">
    <div class="background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>
    <div class="login-container">
      <form name="form1" method="post" action="customer_login.php">
        <div class="form-container">
          <h3>Customer Login</h3>


          <?php if (isset($loginError)) : ?>
          <p style="color: red;"><?php echo $loginError; ?></p>
        <?php endif; ?>

        <label for="account">UserID</label>
        <input type="text" name="text1" id="account" maxlength="10" placeholder="Enter your UserID here....">

        <label for="password">Password</label>
        <input type="password" name="text6" id="password" placeholder="Enter your password here...."><br/>

        <div class="form-group">
          <input type="submit" name="Login" value="Login"><br/>
          <a href="customeracdetlist.php" style="background-color: rgba(255, 255, 255, 0.6);padding: 1vh;border-radius: 5px;box-shadow: 0 0 21.5px rgba(0, 0, 0, 0.2);text-decoration: none;color: black;font-weight: bolder;text-align: center;display: block;
  width: 100%;">Back</a>
        </div>
      </form>
    </div>
  </main>

  <footer style="height: fit-content;">
    <p>&copy; 2023 Astra Bank. All rights reserved.</p>
  </footer>
</body>

</html>