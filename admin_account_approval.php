<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");
$account_number = $_GET['acno'];
$sqlvar = "update CustAcTab set custapp='Y' where acno=$account_number";
$result = $conn->query($sqlvar);
if ($result) {
    header('location:admin_customer_account_approval.php');
}
?>