<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");

session_start();
$resulttt = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $v1 = $_SESSION['acno']; // Transferor account number (logged-in customer)
    $v2 = $_POST['text1']; // Receptor account number (the account to which the transfer is made)
    $v3 = $_POST['text2']; // Amount to transfer
    $v4 = $_POST['text3']; // Transfer details

    $nvar = 1001;
    $sqlvar = "select max(tranNo) +1 from tranTab";
    $result = $conn->query($sqlvar);
    if ($row = $result->fetch_row()) {
        $nvar = $row[0];
    }
    if ($nvar === null) {
        $nvar = 1001;
    }
    $date_1 = date('Y/m/d H:i:s');

    // Insert transaction record for the transferor (logged-in customer)
    $sqlvar = "insert into tranTab values($nvar,'$date_1',$v1,0,$v3,'$v4')";
    $result = $conn->query($sqlvar);
    if ($result) {
        $resulttt = "Record Inserted";
    } else {
        $resulttt = "Record Not Inserted, seems that there's a problem!";
    }

    // Update transferor's balance (logged-in customer)
    $sqlTransferor = "SELECT balance FROM custactab WHERE acno = '$v1'";
    $resultTransferor = $conn->query($sqlTransferor);
    if ($rowTransferor = $resultTransferor->fetch_assoc()) {
        $balanceTransferor = $rowTransferor['balance'];
        $balanceTransferor -= $v3; // Deduct the transferred amount from the transferor's balance
        $sqlUpdateTransferor = "UPDATE custactab SET balance = '$balanceTransferor' WHERE acno = '$v1'";
        $conn->query($sqlUpdateTransferor);
    }

    // Update receptor's balance (receptor customer)
    $sqlReceptor = "SELECT balance FROM custactab WHERE acno = '$v2'";
    $resultReceptor = $conn->query($sqlReceptor);
    if ($rowReceptor = $resultReceptor->fetch_assoc()) {
        $balanceReceptor = $rowReceptor['balance'];
        $balanceReceptor += $v3; // Add the transferred amount to the receptor's balance
        $sqlUpdateReceptor = "UPDATE custactab SET balance = '$balanceReceptor' WHERE acno = '$v2'";
        $conn->query($sqlUpdateReceptor);
    }
}
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
        <form name=form1 method="post" action="cutomer_transfer.php">
            <table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
                <tr>
                    <td colspan=2 align=center style="background-color: darkslategray;color: #ffffff;"><h4>Transfer Mony</h4></td>
                </tr>
                <tr>
                    <td>To Account No.</td>
                    <td><input type=text name=text1 maxlength="10" style="width: 300px;"></td>
                </tr>
                <tr>
                    <td>Amount (JD)</td>
                    <td><input type=text name=text2 style="width: 300px;"></td>
                </tr>
                <tr>
                    <td>Transfer Details (Purpose)</td>
                    <td>
                        <select name=text3 style="width: 300px;">
                            <option value="" selected disabled>Choose Deposit Purpose</option>
                            <option value="for_family">For Family</option>
                            <option value="for_friend">For Friend</option>
                            <option value="business_investment">Business Investment</option>
                            <option value="retirement_salary">Retirement Salary</option>
                            <option value="emergency_fund">Emergency Fund</option>
                            <option value="for_education">For Education</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><a href="customer_mainpage.php">Back</a></td>
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