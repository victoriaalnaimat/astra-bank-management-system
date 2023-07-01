<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Astra Bank - Home Page</title>
  <link rel="stylesheet" href="AstraBank_Victoria/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- Fontawesome Icons  -->
  <script src="https://kit.fontawesome.com/7433d3320f.js" crossorigin="anonymous"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarSupportedContent">
  <header>
    <!-- Navbar Section  -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="height: 8vh;">
      <div class="container-fluid">
        <img src="AstraBank_Victoria/assets/images/logo.png" alt="Astra Bank Logo" class="logo" style="position: absolute; left: 0;height: 8vh;width: 15vh;">
        <a class="navbar-brand" href="index.php" style="font-size: 2.7vh;position: absolute; left: 12vh;">Astra Bank - Jordan</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="position: absolute; right: 0;">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#about">About Astra Bank</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#discover">Loan & Deposit Calculator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Service</a>
            </li>
          </ul>
          <button class="btn btn-warning text-dark" type="submit" style="margin-right: 1.32vh;">
            <a class="nav-link" href="customeracdetlist.php">SignUP</a>
          </button>
          <button class="btn btn-success text-dark" type="submit">
            <a class="nav-link" href="mainpage.php">Login</a>
          </button>
        </div>
      </div>
    </nav>

    <div class="mid">
      <video autoplay muted loop>
        <source class="embed-responsive" src="AstraBank_Victoria/assets/videos/1666e0f0dc2f6ac4db4084841309bca8.mp4" type="video/mp4" />
      </video>
      <div class="hero text-center">
        <h3 class="text-light display-8 fw-bold">
          Make your Banking Experince <span>Unmatchable!...</span></h3>
        <p class="text-light mx-auto">
          Astra bank is a bank that offers its services via the
          Internet, email, and other electronic means, often including
          telephone, online chat, and mobile check deposit.
        </p>
        <a class="text-dark" href="mainpage.php">Get Started</a>
      </div>
    </div>
  </header>

  <!-- About Section  -->
  <section id="about" class="about py-3">
    <div class="row align-items-center container my-3 mx-auto">
      <!-- Left Side Content Area  -->
      <div class="text col-lg-6 col-md-6 col-12 pt-5 pb-5">
        <h6>ASTRA BANK</h6>
        <h2>Unlimited Transaction with zero fees</h2>
        <p>
          This feature allows customers to initiate fund transfers between their accounts or to other beneficiaries.
          A business or current account with features like a cheque book and overdraft facility. The minimum balance required is 5000.
        </p>
        <a href="customeracdetlist.php">Learn More</a>
      </div>
      <!-- Right Side Image Area  -->
      <div class="img col-lg-6 col-md-6 col-12 pt-5 pb-5">
        <img class="img-fluid" src="AstraBank_Victoria/assets/images/1.svg" alt="" />
      </div>
    </div>
  </section>

  <!-- Discover Section  -->
  <section id="discover" class="discover py-3">
    <div class="row align-items-center container my-3 mx-auto">
      <!-- Left Side Content Area  -->
      <div class="img col-lg-6 col-md-6 col-12 pt-5 pb-5">
        <img class="img-fluid" src="AstraBank_Victoria/assets/images/2.png" />
      </div>
      <!-- Right Side Image Area  -->
      <div class="text col-lg-6 col-md-6 col-12 pt-5 pb-5">
        <h6>UNLIMITED ACCESS</h6>
        <h2>Login to your account at any time</h2>
        <p>
          <?php
          $fullText = "Allows customers to create an account or log in to their existing accounts. The signup process offers different account types with various details and facilities , Such As:
* Current Account: A business current account with features like a cheque book and overdraft facility. The minimum balance required is 5000.
* Fixed Deposit: A term deposit with a fixed interest rate. This account does not allow withdrawal before maturity. The minimum balance required is 10000.
* Savings Account: A standard savings account that provides an ATM card and online banking services. The minimum balance required is 1000.";

          $maxLength = 162; // Maximum number of characters to display initially

          if (strlen($fullText) > $maxLength) {
            $shortText = substr($fullText, 0, $maxLength); // Get the first part of the text
            $remainingText = substr($fullText, $maxLength); // Get the remaining part of the text
            echo '<div id="textContainer">' . $shortText . '<span id="remainingText" style="display: none;">' . $remainingText . '</span>'; // Display the short text within a container
            echo '<button onclick="toggleText(this)" style="background-color: #cc0ca2; color: white; border-radius: 10px; padding: 5px 10px; border: none; margin-top: 10px;">Read More</button></div>'; // Add a "Read More" button at the end of the container with custom styles
            echo '<script>
            function toggleText(button) {
                var textContainer = document.getElementById("textContainer");
                var remainingText = document.getElementById("remainingText");
                
                if (remainingText.style.display === "none") {
                    remainingText.style.display = "inline";
                    button.innerHTML = "Show Less";
                    button.style.backgroundColor = "black";
                    window.scrollTo(0, textContainer.offsetTop + textContainer.offsetHeight);
                } else {
                    remainingText.style.display = "none";
                    button.innerHTML = "Read More";
                    button.style.backgroundColor = "#cc0ca2";
                }
            }
          </script>'; // JavaScript code to toggle the text and scroll
          } else {
            echo $fullText; // Display the full text if it's shorter than the maximum length
          }
          ?>

        </p><br>
        <a href="#">Join Astra Bank Family Now ... !</a>
      </div>
    </div>
  </section>

  <!-- Service Section  -->
  <section id="service" class="service py-2 pb-5">
    <div class="col mx-auto align-items-center my-2">
      <!-- Heading  -->
      <div class="heading text-center pt-5">
        <h2 class="fw-bolder pb-4 text-light">Our Service</h2>
      </div>
      <div class="row mx-auto justify-content-center align-items-center text-center container">
        <!-- First Card -->
        <div class="card col-lg-3 col-md-3 col-12 m-2">
          <img class="img-fluid w-75" src="AstraBank_Victoria/assets/images/1.svg" />
          <h5 class="fw-bold pt-4">Reduce Expenses</h5>
          <p>
            Improving overall financial performance and customer satisfaction.
          </p>
        </div>
        <!-- Second Card  -->
        <div class="card col-lg-3 col-md-3 col-12 m-2">
          <img class="img-fluid w-75" src="AstraBank_Victoria/assets/images/2.png" />
          <h5 class="fw-bold pt-4">Virtual procedurs</h5>
          <p>
            Allow customers to perform various banking tasks without visiting a physical branch. These procedures leverage technology to provide convenient and accessible banking services.
          </p>
        </div>
        <!-- Third Card  -->
        <div class="card col-lg-3 col-md-3 col-12 m-2">
          <img class="img-fluid w-75" src="AstraBank_Victoria/assets/images/3.png" />
          <h5 class="fw-bold pt-4">Managing your Account Financial Status</h5>
          <p>
            Providing a summary of your account's financial status and allows you to track and manage your finances effectively. It offers features and information related to your account balance, transactions, and financial activities.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sign Up Section  -->
  <section id="signup" class="signup py-3">
    <div class="row align-items-center container my-3 mx-auto">
      <!-- Left Side Content Area  -->
      <div class="text col-lg-6 col-md-6 col-12 pt-5 pb-5">
        <h6>Wanna be a part of our Astra Bank family?<br>Come and join us !</h6>
        <h2>Creating an account is extremely easy</h2>
        <p>
        Creating an account on the Astra Bank website is a simple and straightforward process. Customers can easily sign up for an account by providing the required information. The website offers different account types to choose from, each with its own unique features and facilities.
        </p>
        <a href="#" style="background-color: #cc0ca2;">What are you waiting for? Start Now! (^o^)</a>
      </div>
      <!-- Right Side Image Area  -->
      <div class="img col-lg-6 col-md-6 col-12 pt-5 pb-5">
        <img class="img-fluid" src="AstraBank_Victoria/assets/images/4.png" />
      </div>
    </div>
  </section>

  <!-- Footer Section  -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      ©All Copy Rights Preserved - [Victoria-2023]
    </div>
    <!-- Copyright -->
  </footer>

  <!-- Bootstrap JavaScript  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>