<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("get_balance.php");
include("process_transaction.php"); // Include the new file

session_start();
$v1 = $_SESSION['acno'];
$balanceAmount = getBalance($v1);

// Example usage of processTransaction() for customer deposit
$depositedAmount = 100; // Replace with the actual deposited amount
processTransaction("admin", $v1, $depositedAmount, "Customer Deposit");

?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Astra Bank</title>
</head>

<body style="background-color: lightgray;">
    <img src="images/head1.png" alt="head 1"><br><br>
    <table align=center border=1 width=80% cellpadding=5 cellspacing=5>
        <tr>
            <td colspan=2>
                <h1>Balance Amount</h1>                
            </td>
            <td><?php echo $balanceAmount; ?> JD</td>
        </tr>
    </table>
    <a href="customer_mainpage.php">Back</a>
    <img src="images/head2.png" alt="head 2">
</body>

</html>