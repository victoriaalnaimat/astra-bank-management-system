<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Astra Bank</title>
</head>

<body style="background-color: lightgray;">
    <img src="images/head1.png" alt="head 1"><br><br>
    <table align=center border=1 width=80% cellpadding=5 cellspacing=5>
        <tr><td colspan=4 align=left><h3><a href="customer_login.php">Click here to Login</a></h3></td><tr>
        <tr><td colspan=4><h3>Please select the Account Type then Signup</h3></td><tr>
        <tr><td>Acount Name</td><td>Details</td><td>Facilities</td><td>Minimum Balance</td></tr>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("connfile.php");

    $sqlvar = "select * from actypeTab order by actypename";
    $result = $conn->query($sqlvar);
    while ($row = $result->fetch_row()) {
        echo("<tr><td><a href=customer_signup.php?actype=".$row[0].">".$row[0]."</a></td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
    }
    ?>
    </table>
    <a href="mainpage.php">Back</a>
    <table width=100%>
        <tr height=200>
            <td></td>
        </tr>
    </table>
    <img src="images/head2.png" alt="head 2">
</body>

</html>