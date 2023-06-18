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
    </tr>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("connfile.php");

    session_start();
    $v1=$_SESSION['acno'];
    $sqlvar = "select (sum(dbAmt) - sum(ctAmt)) as Balance from tranTab where acno=$v1";
    $result = $conn->query($sqlvar);
    while ($row = $result->fetch_row()) {
        echo("<tr><td>Balance Amount</td><td>".$row[0]." JD</td></tr>");
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