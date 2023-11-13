<?php require_once "../controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: ../user-otp.php');
        }
    }
}else{
    header('Location: ../login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oly Maths</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../qa.css" />
    <link rel="stylesheet" href="../header.css" />
    <script src="../header.js"></script>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

   .navbar .btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 7px 14px; /* Adjust the padding as per your preference */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px /* Adjust the font size as per your preference */
  cursor: pointer;
  border-radius: 5px;
  margin-left: 50px; /* Add space to the left of the button */

}

.btn:hover {
  background-color: #45a049;
}

body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    h1 {
      color: #333;
      text-align: center;
    }

    .container {
      max-width: 450px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 95%;
      padding: 8px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 10px;
      padding: 8px 16px;
      font-size: 16px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .result {
      margin-top: 20px;
      text-align: center;
      overflow-wrap: break-word;
      word-wrap: break-word;
      hyphens: auto;
      max-width: 100%;
    }

    .btn-clear {
      margin-top: 10px;
      padding: 8px 16px;
      font-size: 16px;
      background-color: #ff6f6f;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    </style>

  </head>
  <body>

  <nav class="sidebar">

<a href="../index.php" class="logo"><img src="../images/logo.png" alt="">Oly Maths</a>



<div class="menu-content">
  <ul class="menu-items">
    <div class="menu-title">Contents</div>
    <li class="item">
      <div class="submenu-item">
        <span>Basic Arithmetic</span>
        <i class="fa-solid fa-chevron-right"></i>
      </div>

      <ul class="menu-items submenu">
        <div class="menu-title">
          <i class="fa-solid fa-chevron-left"></i>
          Sub Contents
        </div>
        <li class="item">
          <a href="../BasicArithmetic/multiply.php">Multiplication</a>
        </li>
        <li class="item">
          <a href="../BasicArithmetic/division.php">Division</a>
        </li>
        <li class="item">
          <a href="../BasicArithmetic/Exponential.php">Exponential</a>
        </li>
        <li class="item">
          <a href="../BasicArithmetic/Modulo.php">Modulo</a>
        </li>
        <li class="item">
          <a href="../BasicArithmetic/Logarithm.php">Logarithm</a>
        </li>
        <li class="item">
          <a href="../BasicArithmetic/Arithmetic_Progression.php">Arithmetic Progression</a>
        </li>
        <li class="item">
          <a href="../BasicArithmetic/Geometric_Progression.php">Geometric Progression</a>
        </li>
      </ul>
    </li>
    <li class="item">
      <div class="submenu-item">
        <span>Prime Numbers</span>
        <i class="fa-solid fa-chevron-right"></i>
      </div>

      <ul class="menu-items submenu">
        <div class="menu-title">
          <i class="fa-solid fa-chevron-left"></i>
          Sub Contents
        </div>
        <li class="item">
          <a href="../PrimeNumbers/nth_prime.php">nth prime</a>
        </li>
        <li class="item">
          <a href="../PrimeNumbers/Primality.php">Primality</a>
        </li>
        <li class="item">
          <a href="../PrimeNumbers/PrimeCount.php">Prime Count [π(n)]</a>
        </li>
        <li class="item">
          <a href="../PrimeNumbers/PrimeFactors.php">Prime Factors</a>
        </li>
        <li class="item">
          <a href="../PrimeNumbers/Primorial.php">Primorial</a>
        </li>
        <li class="item">
          <a href="../PrimeNumbers/TwinPrimes.php">Twin Primes</a>
        </li>
        <li class="item">
          <a href="../PrimeNumbers/PrimeList.php">Prime List</a>
        </li>
      </ul>
    </li>


    <li class="item">
      <div class="submenu-item">
        <span>Number Theory </span>
        <i class="fa-solid fa-chevron-right"></i>
      </div>

      <ul class="menu-items submenu">
        <div class="menu-title">
          <i class="fa-solid fa-chevron-left"></i>
          Sub Contents
        </div>
        <li class="item">
          <a href="../NumberTheory/GreatestCommon.php">Greatest Common Divisor (GCD)</a>
        </li>
        <li class="item">
          <a href="../NumberTheory/lcm.php">Lowest Common Multiple (LCM)</a>
        </li>
        <li class="item">
          <a href="../NumberTheory/ExtendedEuler.php">Extended Euler Algorithm </a>
        </li>
        <li class="item">
          <a href="../NumberTheory/EulerCriterion.php">Euler's Criterion </a>
        </li>
        <li class="item">
          <a href="../NumberTheory/LinearDiophantineEquation.php">Linear Diophantine Equation</a>
        </li>
        <li class="item">
          <a href="../NumberTheory/MersennePrime.php">Mersenne Prime</a>
        </li>
        <li class="item">
          <a href="../NumberTheory/WilsonTheorem.php">Wilson Theorem </a>
        </li>
        <li class="item">
          <a href="../NumberTheory/PrimitiveRoots.php">Primitive Roots</a>
        </li>
      </ul>
    </li>

    <li class="item">
      <div class="submenu-item">
        <span>Polynomials  </span>
        <i class="fa-solid fa-chevron-right"></i>
      </div>

      <ul class="menu-items submenu">
        <div class="menu-title">
          <i class="fa-solid fa-chevron-left"></i>
          Sub Contents
        </div>
        <li class="item">
          <a href="../Polynomials/PolynomialMultiplication.php">Polynomial Multiplication</a>
        </li>
        </ul>
    </li>


    <li class="item">
      <div class="submenu-item">
        <span> Arithmetic Functions </span>
        <i class="fa-solid fa-chevron-right"></i>
      </div>

      <ul class="menu-items submenu">
        <div class="menu-title">
          <i class="fa-solid fa-chevron-left"></i>
          Sub Contents
        </div>
        <li class="item">
          <a href="../ArithmeticFunctions/EulerTotientFunction.php">Euler Totient Function (Φ(n))</a>
        </li>
        <li class="item">
          <a href="../ArithmeticFunctions/SumofDivisorsFunction.php">Sum of Divisors Function (σ(n))</a>
        </li>
        <li class="item">
          <a href="../ArithmeticFunctions/PrimeOmegaFunctions.php">Prime Omega Functions (ω(n) & Ω(n)) </a>
        </li>
        <li class="item">
          <a href="../ArithmeticFunctions/MobiusFunction.php">Mobius Function (μ(n))</a>
        </li>
        <li class="item">
          <a href="../ArithmeticFunctions/MertensFunction.php">Mertens Function (M(n))</a>
        </li>
        <li class="item">
          <a href="../ArithmeticFunctions/p-adicValuation.php">p-adic Valuation (Γp)</a>
        </li>
        <li class="item">
          <a href="../ArithmeticFunctions/CarmichaelLambdaFunction.php">Carmichael Lambda Function (λ(n)) </a>
        </li>
        <li class="item">
          <a href="../ArithmeticFunctions/ChebyshevFunction.php">Chebyshev Function (Ψ(s))</a>
        </li>
      </ul>
    </li>


    <li class="item">
      <div class="submenu-item">
        <span>Binary Quadratic Functions   </span>
        <i class="fa-solid fa-chevron-right"></i>
      </div>

      <ul class="menu-items submenu">
        <div class="menu-title">
          <i class="fa-solid fa-chevron-left"></i>
          Sub Contents
        </div>
        <li class="item">
          <a href="../BinaryQuadratic/CommonProperties.php">Common Properties</a>
        </li>
        </ul>
    </li>

        <li class="item">
      <div class="submenu-item">
        <span>Fun  </span>
        <i class="fa-solid fa-chevron-right"></i>
      </div>

      <ul class="menu-items submenu">
        <div class="menu-title">
          <i class="fa-solid fa-chevron-left"></i>
          Sub Contents
        </div>
        <li class="item">
          <a href="../Fun/Kaprekar_sConstant.php">Kaprekar's Constant </a>
        </li>

        <li class="item">
          <a href="../Fun/FibonacciSequence.php">Fibonacci Sequence </a>
        </li>

        <li class="item">
          <a href="../Fun/Pascal_sTriangle.php">Pascal's Triangle  </a>
        </li>

        <li class="item">
          <a href="../Fun/GoldenRatio.php">Golden Ratio </a>
        </li>
        </ul>
    </li>



  </ul>
</div>
</nav>
    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
      <div class="navbar-items">
      <h6>Welcome <?php echo $fetch_info['fname'] ?></h6>
        <a href="../index.php" class="logo"><img src="../images/logo.png" alt="">Oly Maths</a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"></a><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"></a><ion-icon name="logo-twitter"></ion-icon></a>
        <a href="#"></a><ion-icon name="logo-linkedin"></ion-icon></a>
        <button type="button" class="btn btn-light"><a href="../logout-user.php">Logout</a></button>
      </div>

    </nav>


    <main class="main">
    <section>
    <div class="container">
    <h1>Arithmetic Progression</h1>
    <h4>This returns the arithmetic progression upto the desired nth term plus the nth term.</h4>
    <div>
      <label for="terms">Enter the first term (a), number of terms (n), and common difference (d) separated by commas:</label>
      <input type="text" id="terms" onkeydown="handleEnterKey(event)">
    </div>
    <div>
      <button onclick="generateProgression()">Generate</button>
      <button class="btn-clear" onclick="clearValues()">Clear</button>
    </div>
    <div class="result" id="result"></div>
  </div>

  <script>
    function generateProgression() {
      var termsInput = document.getElementById("terms");
      var resultOutput = document.getElementById("result");

      var inputValues = termsInput.value.split(",");
      var firstTerm = parseInt(inputValues[0]);
      var numTerms = parseInt(inputValues[1]);
      var commonDifference = parseInt(inputValues[2]);

      if (isNaN(firstTerm) || isNaN(numTerms) || isNaN(commonDifference)) {
        resultOutput.textContent = "Please enter valid numbers for the first term, number of terms, and common difference.";
        return;
      }

      var progression = [];
      var nthTerm = firstTerm + (numTerms - 1) * commonDifference;

      for (var i = 0; i < numTerms; i++) {
        var term = firstTerm + i * commonDifference;
        progression.push(term);
      }

      var sequence = progression.join(", ");
      var nthTermLabel = numTerms === 1 ? "1st Term" : numTerms === 2 ? "2nd Term" : numTerms === 3 ? "3rd Term" : numTerms + "th Term";
      var output = "Sequence: " + sequence + "<br><br>" + nthTermLabel + ": " + nthTerm;

      resultOutput.innerHTML = output;
    }

    function clearValues() {
      var termsInput = document.getElementById("terms");
      var resultOutput = document.getElementById("result");

      termsInput.value = "";
      resultOutput.textContent = "";
    }

    function handleEnterKey(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        generateProgression();
      }
    }
  </script>

</section>


<div class="navigation">
        <ul>
          <li class="list">
            <a href="../index.php">
              <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="text">Home</span>
              <span class="circle"></span>
            </a>
          </li>
          <li class="list">
            <a href="../discussion.php">
              <span class="icon">
                <ion-icon name="chatbox-outline"></ion-icon>
              </span>
              <span class="text">Discussioin</span>
              <span class="circle"></span>
            </a>
          </li>
          <li class="list">
            <a href="../about.php">
              <span class="icon">
                <ion-icon name="person-outline"></ion-icon>
              </span>
              <span class="text">Profile</span>
              <span class="circle"></span>
            </a>
          </li>
          <li class="list">
            <a href="../login-user.php">
              <span class="icon">
                <ion-icon name="person-add"></ion-icon>
              </span>
              <span class="text">Sign in</span>
              <span class="circle"></span>
            </a>
          </li>
          <li class="list">
            <a href="../contact.php">
              <span class="icon">
                <ion-icon name="call"></ion-icon>
              </span>
              <span class="text">Contact Us</span>
              <span class="circle"></span>
            </a>
          </li>
          <div class="indicator"></div>
        </ul>
      </div>
      <script>
        // Get the current page URL
        var currentPageUrl = window.location.href;

        // Get all the navigation list items
        var navigationItems = document.querySelectorAll('.navigation .list');

        // Loop through each navigation item
        navigationItems.forEach(function(item) {
          // Get the anchor tag within the list item
          var anchor = item.querySelector('a');

          // Get the href value of the anchor tag
          var href = anchor.getAttribute('href');

          // Check if the href matches the current page URL
          if (currentPageUrl.includes(href)) {
            // Add the "active" class to the list item
            item.classList.add('active');
          }
        });
      </script>
      <script>
            // Get the navigation list items
var navigationItems = document.querySelectorAll('.navigation .list');

// Loop through each navigation item
navigationItems.forEach(function (item) {
  // Remove the "active" class from all navigation items
  item.classList.remove('active');
});

// Find the "Sign in" menu item and add the "active" class
var signInMenuItem = document.querySelector('.navigation .list:nth-child(1)');
signInMenuItem.classList.add('active');

            </script>

      <script src="../main.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../script_1.js"></script>
    </main>

    <script src="../script.js"></script>
  </body>
</html>
