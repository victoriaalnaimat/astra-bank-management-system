<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Astra Bank</title>
</head>

<body style="background-color: lightgray;">
    <img src="images/head1.png" alt="head 1"><br><br>
    
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include("connfile.php");
    session_start();
    $resulttt="";
    //echo(date('Y/m/d'));

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //echo ("working");
        $v1 = $_SESSION['acno'];
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
        $date_1 = date('Y/m/d H:i:s');


        $sqlvar = "insert into tranTab values($nvar,'$date_1',$v1,0,$v2,'$v3')";
        //echo ($sqlvar);
        $result = $conn->query($sqlvar);
        if ($result) {
            $resulttt="Record Inserted";
        } else {
            $resulttt="Record Not Inserted, seems that there's a problem !";
        }
    }
    ?>
    <form name=form1 method="post" action="cutomer_transfer.php">
        <table width=80% border=1 cellspacing=5 cellpadding=5 align=center>
            <tr>
                <td colspan=2 align=center>Transfer Mony</td>
            </tr>
            <tr>
                <td>To Account No.</td>
                <td><input type=text name=text1></td>
            </tr>
            <tr>
                <td>Amount (JD)</td>
                <td><input type=text name=text2></td>
            </tr>
            <tr>
                <td>Transfer Details (Purpose)</td>
                <td>
                    <select name=text3>
                        <option value="" selected disabled>Choose Deposit Purpose</option>
                        <option value="for_family">For Family</option>
                        <option value="for_friend">For Friend</option>
                        <option value="business_investment">Business Investment</option>
                        <option value="retirement_salary">Retirement Salary</option>
                        <option value="emergency_fund">Emergency Fund</option>
                        <option value="for_education">For Education</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><a href="customer_mainpage.php">Back</a></td>
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