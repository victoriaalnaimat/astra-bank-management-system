<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");

function processTransaction($senderAccount, $receiverAccount, $amount, $tranDetails)
{
    global $conn;

    // Insert transaction record for the sender (admin)
    $sqlSender = "INSERT INTO tranTab (acno, dbAmt, tranDetails) VALUES ('$senderAccount', 0, '$tranDetails')";
    $conn->query($sqlSender);

    // Insert transaction record for the receiver (customer)
    $sqlReceiver = "INSERT INTO tranTab (acno, ctAmt, tranDetails) VALUES ('$receiverAccount', $amount, '$tranDetails')";
    $conn->query($sqlReceiver);

    // Update sender's balance (admin) - No change in balance for the sender in this case (deposit)
    $balanceSender = getBalance($senderAccount);
    $balanceSender += 0; // No change in the balance for sender (admin) since it's a deposit
    $sqlUpdateSender = "UPDATE custactab SET balance = $balanceSender WHERE acno = '$senderAccount'";
    $conn->query($sqlUpdateSender);

    // Update receiver's balance (customer)
    $balanceReceiver = getBalance($receiverAccount);
    $balanceReceiver += $amount; // Add the deposited amount to the customer's balance
    $sqlUpdateReceiver = "UPDATE custactab SET balance = $balanceReceiver WHERE acno = '$receiverAccount'";
    $conn->query($sqlUpdateReceiver);
}
?>