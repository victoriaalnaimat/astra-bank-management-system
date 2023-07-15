<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $actypeName = $_POST['actypeName'];
    $acdetails = $_POST['acdetails'];
    $facility = $_POST['facility'];
    $minbal = $_POST['minbal'];

    $sqlvar = "UPDATE actypeTab SET acdetails='$acdetails', facility='$facility', minbal='$minbal' WHERE actypeName='$actypeName'";

    $result = $conn->query($sqlvar);

    if ($result) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    if (isset($_GET['actypeName'])) {
        $acno = $_GET['actypeName'];
        $sqlvar = "SELECT * FROM actypeTab WHERE actypeName='$actypeName'";
        $result = $conn->query($sqlvar);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $acdetails = $row['acdetails'];
            $facility = $row['facility'];
            $minbal = $row['minbal'];
        } else {
            echo "Invalid Account Type.";
        }
    } else {
        echo "Account Type is not set.";
    }
}
?>

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

    <form name="form1" method="post" action="edit-actype.php">
        <table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
            <tr>
                <td colspan=2>Customer Edit</td>
            </tr>
            <tr>
            <td>Account Name (Type)</td>
                    <td><input type="text" name="actypeName " style="width: 300px;" value="<?php echo isset($actypeName) ? $actypeName : ''; ?>" readonly></td>
            </tr>
            <td>Account Details</td>
                    <td><input type="text" name="acdetails" style="width: 300px;" value="<?php echo isset($acdetails) ? $acdetails : ''; ?>" readonly></td>
            </tr>
            <td>Facilities</td>
                    <td><input type="text" name="facility" style="width: 300px;" value="<?php echo isset($facility) ? $facility : ''; ?>" readonly></td>
            </tr>
            <td>Minimum Balance</td>
                    <td><input type="text" name="minbal" style="width: 300px;" value="<?php echo isset($minbal) ? $minbal : ''; ?>" readonly></td>
            </tr>
            <tr>
                <td><a href="adminacdetlist.php">Back</a></td>
                <td><input type="submit" name="Update" value="Update"></td>
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
