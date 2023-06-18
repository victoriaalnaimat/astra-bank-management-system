<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Astra Bank</title>
</head>

<body style="background-color: lightgray;">
    <img src="images/head1.png" alt="head 1"><br><br>
    <table align=center border=1 width=80% cellpadding=5 cellspacing=5>
    
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("connfile.php");

    session_start();
    $v1=$_SESSION['acno'];
    $sqlvar = "select * from CustAcTab where acno=$v1";
    $result = $conn->query($sqlvar);
    while ($row = $result->fetch_row()) {
        echo("<tr><td>Account No.</td><td>".$row[0]."</td></tr><tr><td>Name</td><td>".$row[1]."</td></tr><tr><td>Address</td><td>".$row[4]."</td></tr><tr><td>Mobile No.</td><td>".$row[2]."</td></tr><tr><td>E-mail</td><td>".$row[3]."</td></tr><tr><td>Account Type</td><td>".$row[6]."</td></tr>");
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