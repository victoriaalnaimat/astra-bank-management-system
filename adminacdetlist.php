<!DOCTYPE html>
<html lang="en">

<head>
    <title>Astra Bank</title>
    <link rel="stylesheet" href="styles/styles-admin-login.css">
    <link rel="stylesheet" href="AstraBank_Victoria/styles.css">
    <script src="script.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- Fontawesome Icons  -->
    <script src="https://kit.fontawesome.com/7433d3320f.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        table {
            width: 80%;
            margin: 100px auto;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.7); /* Updated background color with transparency */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #333;
            color: #fff;
            font-weight: bold;
            font-size: 20px;
            padding: 15px;
            text-align: center;
        }

        td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }

        a {
            background-color: #ffffffc7;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        a:hover {
            background-color: darkcyan;
            color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .navbar-brand {
            background-color: transparent !important; /* Remove background color */
        }

        /* Additional styles for the first page */
        .content {
            text-align: center;
            margin-top: 50px;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            border: 1px solid #333;
            border-radius: 4px;
            background-color: #fff;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .back-link:hover {
            background-color: #333;
            color: #fff;
        }

        td:not(:last-child) {
            border-right: 1px solid #ccc;
        }
    </style>
</head>

<body style="background-image:url(AstraBank_Victoria/assets/images/bg2.png);">
    <header style="padding-top: 0;background: none;position: absolute;width: 50%;">
        <!-- Navbar Section  -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="height: 8vh;">
            <div class="container-fluid">
                <img src="AstraBank_Victoria/assets/images/logo.png" alt="Astra Bank Logo" class="logo" style="position: absolute; left: 0;height: 8vh;width: 15vh;">
                <a class="navbar-brand" href="index.php" style="font-size: 2.7vh;position: absolute; left: 12vh;">Astra Bank - Jordan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="position: absolute; right: 0;">
                        <li class="nav-item">
                            <a class="nav-link" href="admin_login.php" style="background-color: transparent;">Admin Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customeracdetlist.php" style="background-color: transparent;">Customer Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" style="background-color: transparent;">Back to Home-Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="responsive-menu">
            <ul class="nav-links">
                <li><a href="admin_login.php" style="background-color: transparent;">Admin Login</a></li>
                <li><a href="customeracdetlist.php" style="background-color: transparent;">Customer Login</a></li>
                <li><a href="index.php" style="background-color: transparent;">Back to Home-Page</a></li>
            </ul>
        </div>
    </header>
    <div class="content">
        <table style="margin-bottom: 0px;">
            <tr>
                <th colspan="4" style="text-align: center;">All Bank Account Types List</th>
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
        <a class="back-link" href="admin_mainpage.php">Back</a>
    </div>
    <footer style="height: fit-content;">
        <p>&copy; 2023 Astra Bank. All rights reserved.</p>
    </footer>
</body>

</html>