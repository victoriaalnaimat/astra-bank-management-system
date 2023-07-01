<!DOCTYPE html>
<html lang="eng">

<head>
  <title>Astra Bank</title>
  <link rel="stylesheet" href="styles/styles-Customer-Signup.css">
  <script src="script.js" defer></script>
</head>

<body>
  <header>
    <div class="header-container">
      <img src="logo.png" alt="Astra Bank Logo" class="logo">
      <nav>
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

  <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("connfile.php");
    session_start();
    $resulttt="";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //echo ("working");
        $v1 = $_POST['text1'];
        $v2 = $_POST['text2'];
        $v3 = $_POST['text3'];
        $v4 = $_POST['text4'];
        $v5 = $_POST['text5'];
        $v6 = $_POST['text6'];


        $v7=$_SESSION['actype'];
        //echo $v1." ".$v2;
        $sqlvar = "insert into CustAcTab values($v1,'$v2',$v3,'$v4','$v5','$v6','$v7','N')";
        //echo $sqlvar;
        $result = $conn->query($sqlvar);
        if ($result) {
            $resulttt="Record Inserted";
        } else {
            $resulttt="Record Not Inserted, seems that there's a problem !";
        }
    }
    else {
        $_SESSION['actype']=$_GET['actype'];
    }
    ?>

  <form name=form1 method="post" action="customer_signup.php">
  <table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
            <tr>
                <td colspan=2>customer Signup</td>
            </tr>
            <tr>
                <td>Account Number (10 Digits)</td>
                <td><input type="text" name="text1" maxlength="10"></td><!-- ...still 1 -->
            </tr>
            <tr>
                <td>Person Name</td>
                <td><input type=text name=text2></td><!-- ...4 -->
            </tr>
            <tr>
                <td>Mobile No.</td>
                <td><input type=text name=text3 maxlength="10"></td><!-- ...6 -->
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type=text name=text4></td><!-- ...7 -->
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name=text5 rows=4></textarea></td><!-- ...5 -->
            </tr>
            <tr>
                <td>Password</td>
                <td><input type=password name=text6></td><!-- ...2 -->
            </tr>
            <tr>
                <td>Retype Password</td>
                <td><input type=password name=text7></td><!-- ...3 -->
            </tr>
            <tr>
                <td><a href="customeracdetlist.php">Back</a></td>
                <td><input type=submit name=Login style="height: 45px; width: 150px;"></td>
            </tr>
            <tr>
                <td colspan=2><?php echo $resulttt; ?></td>
            </tr>
        </table>
  </form>

  <table width=100%>
    <tr height=200>
      <td></td>
    </tr>
  </table>

  <footer>
    <p>&copy; 2023 Astra Bank. All rights reserved.</p>
  </footer>
</body>

</html>
