<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $acno = $_POST['acno'];
    $name = $_POST['Name'];
    $address = $_POST['Address'];
    $mobile = $_POST['MobileNo'];
    $email = $_POST['Email'];
    $accountType = $_POST['AccountType'];

    $sqlvar = "UPDATE CustAcTab SET Name='$name', Address='$address', MobileNo='$mobile', Email='$email', AccountType='$accountType' WHERE acno='$acno'";

    $result = $conn->query($sqlvar);

    if ($result) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    if (isset($_GET['acno'])) {
        $acno = $_GET['acno'];
        $sqlvar = "SELECT * FROM CustAcTab WHERE acno='$acno'";
        $result = $conn->query($sqlvar);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $name = $row['Name'];
            $address = $row['Address'];
            $mobile = $row['MobileNo'];
            $email = $row['Email'];
            $accountType = $row['AccountType'];
        } else {
            echo "Invalid Account Number.";
        }
    } else {
        echo "Account Number is not set.";
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
                <td colspan=2>Customer Edit</td>
            </tr>
            <tr>
                <td>Account Number</td>
                <td><input type="text" name="acno" value="<?php echo isset($acno) ? $acno : ''; ?>" readonly></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="Name" value="<?php echo isset($name) ? $name : ''; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="Address" value="<?php echo isset($address) ? $address : ''; ?>"></td>
            </tr>
            <tr>
                <td>Mobile No.</td>
                <td><input type="text" name="MobileNo" value="<?php echo isset($mobile) ? $mobile : ''; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" value="<?php echo isset($email) ? $email : ''; ?>"></td>
            </tr>
            <tr>
                <td>Account Type</td>
                <td><input type="text" name="AccountType" value="<?php echo isset($accountType) ? $accountType : ''; ?>"></td>
            </tr>
            <tr>
                <td><a href="admin_customer_list.php">Back</a></td>
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
