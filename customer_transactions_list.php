<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Astra Bank</title>
</head>

<body style="background-color: lightgray;">
    <img src="images/head1.png" alt="head 1"><br><br>
    <table align=center border=1 width=80% cellpadding=5 cellspacing=5>
        <tr><td colspan=6 align=center>Customer Transactions List (History)</td></tr>
        <tr><td>Transaction No.</td><td>Date</td><td>Account No.</td><td>Depated Amount</td><td>Credited Amount</td><td>Details</td></tr>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("connfile.php");

    session_start();
    $v1=$_SESSION['acno'];
    $sqlvar = "select * from TranTab where acno=$v1 order by tranNo desc";
    //tranNo desc means arranging transaction numbers descending (from last to first)
    $result = $conn->query($sqlvar);
    while ($row = $result->fetch_row()) {
        echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>");
    }
    ?>
    </table>
    <a href="customer_mainpage.php">Back</a>
    <table width=100%>
        <tr height=200>
            <td></td>
        </tr>
    </table>
    <img src="images/head2.png" alt="head 2">
</body>

</html>