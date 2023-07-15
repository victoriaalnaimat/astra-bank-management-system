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
        <?php
        session_start();

        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        include("connfile.php");

        $resulttt = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //echo ("working");
            $actypeName = $_POST['actypeName'];
            $acdetails = $_POST['acdetails'];
            $facility = $_POST['facility'];
            $minbal = $_POST['minbal'];
            //echo $v1." ".$v2;
            $sqlvar = "insert into actypeTab values('$actypeName','$acdetails','$facility','$minbal')";
            $result = $conn->query($sqlvar);
            if ($result) {
                $resulttt = "Record Inserted";
            } else {
                $resulttt = "Record Not Inserted, seems that there's a problem !";
            }
        }
        ?>
        <form name="form1" method="post" action="adminacdet.php">
            <table width="80%" border="1" cellspacing="5" cellpadding="5" align="center">
                <tr>
                    <th colspan="4" style="text-align: center;">New Banking Account Type Entry</th>
                </tr>
                <tr>
                    <td>Account Name (Type)</td>
                    <td><input type="text" name="actypeName " style="width: 300px;"></td>
                </tr>
                <tr>
                    <td>Account Details</td>
                    <td><input type="text" name="acdetails" style="width: 300px;"></td>
                </tr>
                <tr>
                    <td>Facilities</td>
                    <td><input type="text" name="facility" style="width: 300px;"></td>
                </tr>
                <tr>
                    <td>Minimum Balance</td>
                    <td><input type="text" name="minbal" style="width: 300px;"></td>
                </tr>
                <tr>
                    <td><a href="admin_mainpage.php">Back</a></td>
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
    <footer style="height: fit-content;">
        <p>&copy; 2023 Astra Bank. All rights reserved.</p>
    </footer>
</body>

</html>