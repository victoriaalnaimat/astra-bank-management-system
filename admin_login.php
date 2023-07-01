<!DOCTYPE html>
<html lang="en">

<head>
  <title>Astra Bank</title>
  <link rel="stylesheet" href="styles/styles-admin-login.css">
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
    <div class="login-container">
      <h2>Admin Login</h2>
      <?php
      error_reporting(E_ALL);
      ini_set('display_errors', 1);

      include("connfile.php");
      session_start();
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //echo ("working");
        $v1 = $_POST['text1'];
        $v2 = $_POST['text2'];
        //echo $v1." ".$v2;
        $sqlvar = "select * from logintab where userid='$v1' and pword='$v2'";
        $result = $conn->query($sqlvar);
        if ($result->num_rows > 0) {
          header("location: admin_mainpage.php");
        } else {
          echo ("userid or password is not correct");
        }
      }
      ?>
      <form name="form1" method="post" action="admin_login.php">
        <div class="form-group">
          <label for="text1">UserID</label>
          <input type="text" name="text1" id="text1">
        </div>
        <div class="form-group">
          <label for="text2">Password</label>
          <input type="password" name="text2" id="text2">
        </div>
        <div class="form-group">
          <a href="mainpage.php">Back</a>
          <input type="submit" name="Login" value="Login">
        </div>
      </form>
    </div>
    <div class="image-container"></div>
  </main>

  <footer>
    <p>&copy; 2023 Astra Bank. All rights reserved.</p>
  </footer>
</body>

</html>
