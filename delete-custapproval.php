<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");

if (isset($_GET['account_actype'])) {
    $account_acno = $_GET['account_actype'];

    // Use a prepared statement to prevent SQL injection
    $sqlvar = "DELETE FROM custactab WHERE acno=?";
    $stmt = $conn->prepare($sqlvar);
    $stmt->bind_param("i", $account_acno);

    if ($stmt->execute()) {
        header("Location: admin_customer_account_approval.php");
        exit();
    } else {
        $deleteError = "Failed to delete record";
    }
} else {
    $deleteError = "Account number is not set.";
}
?>
