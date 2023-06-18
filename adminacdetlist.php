<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Astra Bank</title>
</head>

<body style="background-color: lightblue;">
    <img src="images/head1.png" alt="head 1"><br><br>
    <table align=center border=1 width=80% cellpadding=5 cellspacing=5>
        <tr>
            <td colspan=4 align=center>All Bank Account Types List</td>
        </tr>
        <tr>
            <td>Account Type</td>
            <td>Details</td>
            <td>Facilities</td>
            <td>Minimum Balance</td>
        </tr>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        include("connfile.php");

        $sqlvar = "select * from actypeTab order by actypename";
        $result = $conn->query($sqlvar);
        while ($row = $result->fetch_row()) {
            echo ("<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>");
        }
        ?>
    </table>
    <a href="admin_mainpage.php">Back</a>
    <table width=100%>
        <tr height=200>
            <td></td>
        </tr>
    </table>
    <img src="images/head2.png" alt="head 2">
</body>

</html>