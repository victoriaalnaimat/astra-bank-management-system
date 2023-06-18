<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Astra Bank</title>
</head>

<body style="background-color: lightblue;">
    <img src="images/head1.png" alt="head 1"><br><br>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("connfile.php");
    session_start();
    $resulttt="";
    echo(date('Y/m/d'));

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //echo ("working");
        $v1 = $_POST['text1'];
        $v2 = $_POST['text2'];
        $v3 = $_POST['text3'];
        //echo $v1." ".$v2;

        $nvar=1001;
        $sqlvar = "select max(tranNo) +1 from tranTab";
        $result = $conn->query($sqlvar);
        if ($row=$result->fetch_row()) {
            $nvar=$row[0];
        }
        if ($nvar===null){$nvar=1001;}
        //echo($nvar);
        $date_1=date('Y/m/d');

        $sqlvar = "insert into tranTab values($nvar,'$date_1',$v1,$v2,0,'$v3')";
        $result = $conn->query($sqlvar);
        if ($result) {
            $resulttt="Record Inserted";
        } else {
            $resulttt="Record Not Inserted, seems that there's a problem !";
        }
    }
    ?>
    <form name=form1 method="post" action="admin_deposit.php">
        <table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
            <tr>
                <td colspan=2>Deposit Entry</td>
            </tr>
            <tr>
                <td>Account No.</td>
                <td><input type=text name=text1></td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><input type=text name=text2></td>
            </tr>
            <tr>
                <td>Account Details</td>
                <td><input type=text name=text3></td>
            </tr>
            <tr>
                <td><a href="admin_mainpage.php">Back</a></td>
                <td><input type=submit name=Login style="height: 45px; width: 150px;"></td>
            </tr>
            <tr>
                <td colspan=2><?php echo $resulttt; ?></td>
            </tr>
        </table>
    </form>
    <table width=100%>
        <tr height=200>
            <td></td>
        </tr>
    </table>
    <img src="images/head2.png" alt="head 2">
</body>

</html>