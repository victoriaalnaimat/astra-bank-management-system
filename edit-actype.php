<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $v1 = $_POST['text1'];
    $v2 = $_POST['text2'];
    $v3 = $_POST['text3'];
    $v4 = $_POST['text4'];

    $sqlvar = "UPDATE actypeTab SET text1='$v1', text2='$v2', text3='$v3', text4='$v4' WHERE text1='$v1'";

    $result = $conn->query($sqlvar);

    if ($result) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    if (isset($_GET['text1'])) {
        $v1 = $_GET['text1'];
        $sqlvar = "SELECT * FROM actypeTab WHERE text1='$v1'";
        $result = $conn->query($sqlvar);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $v1 = $row['text1'];
            $address = $row['text2'];
            $mobile = $row['text3'];
            $email = $row['text4'];
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

    <form name="form1" method="post" action="edit.php">
        <table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
            <tr>
                <td colspan=2>Account Type Edit</td>
            </tr>
            <tr>
                <td>Account Name (Type)</td>
                <td><input type="text" name="text1" style="width: 300px;" value="<?php echo isset($acno) ? $acno : ''; ?>" readonly></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="text2" style="width: 300px;" value="<?php echo isset($name) ? $name : ''; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="text3" style="width: 300px;" value="<?php echo isset($address) ? $address : ''; ?>"></td>
            </tr>
            <tr>
                <td>Mobile No.</td>
                <td><input type="text" name="text4" style="width: 300px;" value="<?php echo isset($mobile) ? $mobile : ''; ?>"></td>
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