<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");

if (isset($_GET['account_actype'])) {
    $account_actype = $_GET['account_actype'];

    // Use a prepared statement to prevent SQL injection
    $sqlvar = "DELETE FROM actypeTab WHERE actypeName=?";
    $stmt = $conn->prepare($sqlvar);
    $stmt->bind_param("s", $account_actype);

    if ($stmt->execute()) {
        header("Location: adminacdetlist.php");
        exit();
    } else {
        $deleteError = "Failed to delete record";
    }
} else {
    $deleteError = "Account number is not set.";
}
?>
