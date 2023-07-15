<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connfile.php");

function getBalance($accountNumber)
{
    global $conn; // Add this line to use the $conn variable defined in connfile.php

    $sql = "SELECT (SUM(dbAmt) - SUM(ctAmt)) AS Balance FROM tranTab WHERE acno = $accountNumber";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['Balance'];
    }

    return 0;
}
?>
