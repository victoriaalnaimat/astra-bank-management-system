<!DOCTYPE html>
<html lang="en">

<head>
  <title>Astra Bank</title>
  <link rel="stylesheet" href="styles/styles-customer-login.css">
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
  <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    include("connfile.php");
    session_start();
    $_SESSION['acno'] =00;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //echo ("working");
        $v1=$_POST['text1'];
        $v6=$_POST['text6'];
        //echo $v1." ".$v2;
        $sqlvar = "SELECT * FROM CustAcTab WHERE acno = $v1 AND pword = '$v6' AND custapp = 'Y'";
        $result=$conn ->query($sqlvar);
        if ($result ->num_rows > 0) {
            $_SESSION['acno'] =$v1;
            header("location: customer_mainpage.php");
        } else {
        echo ("userid or password is not correct");
        }
    }
    ?>
    <form name="form1" method="post" action="customer_login.php">
      <div class="form-container">
        <h2>Customer Login</h2>
        <div class="form-group">
          <label for="account">Account No.</label>
          <input type="text" name="text1" id="account" maxlength="10">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="text6" id="password">
        </div>
        <div class="form-actions">
          <a href="customeracdetlist.php">Back</a>
          <input type="submit" name="Login" value="Login">
        </div>
      </div>
    </form>
  </main>

  <footer>
    <p>&copy; 2023 Astra Bank. All rights reserved.</p>
  </footer>
</body>

</html>
