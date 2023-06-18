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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //echo ("working");
        $v1 = $_POST['text1'];
        $v2 = $_POST['text2'];
        $v3 = $_POST['text3'];
        $v4 = $_POST['text4'];
        //echo $v1." ".$v2;
        $sqlvar = "insert into actypeTab values('$v1','$v2','$v3','$v4')";
        $result = $conn->query($sqlvar);
        if ($result) {
            $resulttt="Record Inserted";
        } else {
            $resulttt="Record Not Inserted, seems that there's a problem !";
        }
    }
    ?>
    <form name=form1 method="post" action="adminacdet.php">
        <table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
            <tr>
                <td colspan=2>Banking Account Types Entry</td>
            </tr>
            <tr>
                <td>Account Name (Type)</td>
                <td><input type=text name=text1></td>
            </tr>
            <tr>
                <td>Account Details</td>
                <td><input type=text name=text2></td>
            </tr>
            <tr>
                <td>Facilities</td>
                <td><input type=text name=text3></td>
            </tr>
            <tr>
                <td>Minimum Balance</td>
                <td><input type=text name=text4></td>
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