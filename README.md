<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Buy Social Media Followers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        /* Navbar Styling */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            z-index: 1000;
        }
        .navbar button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-left: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .navbar button:hover {
            background-color: #218838;
        }
        /* Container Styling */
        .container {
            max-width: 900px;
            margin: 80px auto 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px;
        }
        h2 {
            text-align: center;
        }
        .service {
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .service button {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .service button:hover {
            background-color: #218838;
        }

        /* Form Styling */
        .login-form, .signup-form, .email-confirmation, .welcome-message, .payment-form {
            display: none; /* Hidden by default */
            max-width: 400px;
            margin: 100px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container input[type="text"], 
        .form-container input[type="password"],
        .form-container input[type="email"],
        .form-container select,
        .form-container input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #218838;
        }
        .show-password {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .forgot-password, .back-to-home, .error-message {
            text-align: center;
            margin-top: 15px;
        }
        .forgot-password a, .back-to-home a {
            color: #007bff;
            text-decoration: none;
        }
        .forgot-password a:hover, .back-to-home a:hover {
            text-decoration: underline;
        }
        .error-message {
            color: red;
        }
    </style>
    <script>
        // Dummy database for login
        const usersDatabase = {
            "Mohamed": "123",
            "Rida": "0109",
            "DRIS": "1213"
        };

        // Function to show the login form
        function showLoginForm() {
            document.querySelector('.container').style.display = 'none';
            document.querySelector('.signup-form').style.display = 'none';
            document.querySelector('.email-confirmation').style.display = 'none';
            document.querySelector('.welcome-message').style.display = 'none';
            document.querySelector('.payment-form').style.display = 'none';
            document.querySelector('.login-form').style.display = 'block';
        }

        // Function to show the signup form
        function showSignupForm() {
            document.querySelector('.container').style.display = 'none';
            document.querySelector('.login-form').style.display = 'none';
            document.querySelector('.email-confirmation').style.display = 'none';
            document.querySelector('.welcome-message').style.display = 'none';
            document.querySelector('.signup-form').style.display = 'block';
            document.querySelector('.error-message').style.display = 'none'; // Reset error message
        }

        // Function to show the email confirmation page
        function showEmailConfirmation() {
            document.querySelector('.login-form').style.display = 'none';
            document.querySelector('.signup-form').style.display = 'none';
            document.querySelector('.welcome-message').style.display = 'none';
            document.querySelector('.payment-form').style.display = 'none';
            document.querySelector('.email-confirmation').style.display = 'block';
        }

        // Function to show welcome message
        function showWelcomeMessage(username) {
            document.querySelector('.login-form').style.display = 'none';
            document.querySelector('.signup-form').style.display = 'none';
            document.querySelector('.email-confirmation').style.display = 'none';
            document.querySelector('.payment-form').style.display = 'none';
            document.querySelector('.welcome-message').style.display = 'block';
            document.querySelector('.welcome-message h1').innerText = `Welcome, ${username}`;
            showPaymentForm();
        }

        // Function to show payment form
        function showPaymentForm() {
            document.querySelector('.payment-form').style.display = 'block';
        }

        // Function to go back to the main page
        function showMainPage() {
            document.querySelector('.login-form').style.display = 'none';
            document.querySelector('.signup-form').style.display = 'none';
            document.querySelector('.email-confirmation').style.display = 'none';
            document.querySelector('.welcome-message').style.display = 'none';
            document.querySelector('.payment-form').style.display = 'none';
            document.querySelector('.container').style.display = 'block';
        }

        // Function to handle login form submission
        function handleLogin(event) {
            event.preventDefault();
            const username = event.target.username.value;
            const password = event.target.password.value;

            if (usersDatabase[username] && usersDatabase[username] === password) {
                showWelcomeMessage(username);
            } else {
                alert('Invalid username or password. Please try again.');
            }
        }

        // Function to handle signup form submission
        function handleSignup(event) {
            event.preventDefault();
            const password = event.target.password.value;
            const confirmPassword = event.target['confirm-password'].value;

            if (password === confirmPassword) {
                showEmailConfirmation();
            } else {
                document.querySelector('.error-message').innerText = 'Passwords do not match.';
                document.querySelector('.error-message').style.display = 'block';
            }
        }

        // Function to calculate payment amount
        function calculatePayment() {
            const platform = document.querySelector('select[name="platform"]').value;
            const followers = parseInt(document.querySelector('input[name="followers"]').value, 10) || 0;
            const pricePerThousand = 3; // $3 for 1000 followers
            const totalAmount = Math.ceil(followers / 1000) * pricePerThousand;

            document.querySelector('.payment-form h1').innerText = `Payment for ${followers} Followers on ${platform}`;
            document.querySelector('.payment-form p').innerText = `Total Amount: $${totalAmount}`;
        }

        // Function to toggle password visibility
        function togglePasswordVisibility(passwordField, toggleButton) {
            const input = document.querySelector(passwordField);
            input.type = input.type === "password" ? "text" : "password";
            toggleButton.innerText = toggleButton.innerText === "Show" ? "Hide" : "Show";
        }
    </script>
</head>
<body>

    <!-- Fixed Navbar -->
    <div class="navbar">
        <button onclick="showSignupForm()">Sign Up</button>
        <button onclick="showLoginForm()">Login</button>
    </div>

    <!-- Main Container -->
    <div class="container">
        <h1>Buy Social Media Followers</h1>
        <h2>Select Your Platform</h2>

        <!-- Instagram Followers Service -->
        <div class="service">
            <h3>Instagram Followers</h3>
           
            <p>1000 Followers for $3</p>
            <button onclick="showPaymentForm()">Buy Now</button>
        </div>

        <!-- Facebook Followers Service -->
        <div class="service">
            <h3>Facebook Followers</h3>
            <p>1000 Followers for $3</p>
            <button onclick="showPaymentForm()">Buy Now</button>
        </div>

        <!-- TikTok Followers Service -->
        <div class="service">
            <h3>TikTok Followers</h3>
            <p>1000 Followers for $3</p>
            <button onclick="showPaymentForm()">Buy Now</button>
        </div>
    </div>

    <!-- Login Form -->
    <div class="login-form form-container">
        <h1>Login</h1>
        <form onsubmit="handleLogin(event)">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="show-password">
                <input type="checkbox" id="login-show-password" onclick="togglePasswordVisibility('input[name=password]', this)">
                <label for="login-show-password">Show Password</label>
            </div>
            <div class="forgot-password"><a href="#">Forgot Password?</a></div>
            <div class="error-message" style="display: none;"></div>
            <button type="submit">Login</button>
            <div class="back-to-home"><a href="#" onclick="showMainPage()">Back to Home</a></div>
        </form>
    </div>

    <!-- Sign Up Form -->
    <div class="signup-form form-container">
        <h1>Sign Up</h1>
        <form onsubmit="handleSignup(event)">
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm-password" placeholder="Confirm Password" required>
            <div class="show-password">
                <input type="checkbox" id="signup-show-password" onclick="togglePasswordVisibility('input[name=password]', this)">
                <label for="signup-show-password">Show Password</label>
            </div>
            <div class="error-message" style="display: none;"></div>
            <button type="submit">Sign Up</button>
            <div class="back-to-home"><a href="#" onclick="showMainPage()">Back to Home</a></div>
        </form>
    </div>

    <!-- Email Confirmation -->
    <div class="email-confirmation form-container">
        <h1>Check Your Email</h1>
        <p>Please check your email for confirmation.</p>
        <div class="back-to-home"><a href="#" onclick="showMainPage()">Back to Home</a></div>
    </div>

    <!-- Welcome Message -->
    <div class="welcome-message form-container">
        <h1></h1>
        <div class="back-to-home"><a href="#" onclick="showMainPage()">Back to Home</a></div>
    </div>

    <!-- Payment Form -->
    <div class="payment-form form-container">
        <h1>Payment</h1>
        <form onsubmit="calculatePayment(); return false;">
            <select name="platform" required>
                <option value="">Select Platform</option>
                <option value="Instagram">Instagram</option>
                <option value="Facebook">Facebook</option>
                <option value="TikTok">TikTok</option>
            </select>
            <input type="number" name="followers" placeholder="Number of Followers" required>
            <button type="submit">Calculate Amount</button>
        </form>
        <h2></h2>
        <p></p>
        <div class="back-to-home"><a href="#" onclick="showMainPage()">Back to Home</a></div>
    </div>

</body>
</html>
