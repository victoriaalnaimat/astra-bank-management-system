<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");

if (isset($_GET['account'])) {
    $account = $_GET['account'];

    $sqlvar = "DELETE FROM CustAcTab WHERE acno='$account'";
    $result = $conn->query($sqlvar);

    if ($result) {
        header("Location: admin_customer_list.php");
        exit();
    } else {
        $deleteError = "Failed to delete record";
    }
} else {
    $deleteError = "Account number is not set.";
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

    <table width="80%" border="1" cellspacing="5" cellpadding="5" align="center">
        <tr>
            <td colspan="2">Delete Customer</td>
        </tr>
        <?php if (isset($deleteError)) : ?>
            <tr>
                <td colspan="2" style="color: red;"><?php echo $deleteError; ?></td>
            </tr>
        <?php endif; ?>
        <tr>
            <td>Account Number (10 Digits)</td>
            <td><?php echo $account; ?></td>
        </tr>
        <tr>
            <td><a href="admin_customer_list.php">Back</a></td>
            <td>
                <form action="delete.php" method="get"> <!-- Change method to "get" -->
                    <input type="hidden" name="account" value="<?php echo $account; ?>">
                    <input type="submit" name="Delete" value="Delete" style="height: 45px; width: 150px;">
                </form>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr height="200">
            <td></td>
        </tr>
    </table>

    <footer>
        <p>&copy; 2023 Astra Bank. All rights reserved.</p>
    </footer>
</body>

</html>
