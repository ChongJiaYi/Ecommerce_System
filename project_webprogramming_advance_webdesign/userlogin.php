<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = $_POST['email']; 
    $loginPassword = $_POST['password'];

    if (empty($loginUsername) || empty($loginPassword)) {
        echo "Please enter both email and password.";
    } else {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database_name = "e_commerce_system";

        $conn = new mysqli($servername, $username, $password, $database_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT id, username, password FROM register WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $loginUsername, $loginUsername);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($loginPassword, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header("Location: homepage.php");
                exit();
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "User not found";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
    body{
    background-color: rgba(121, 122, 214, 0.534);
    }

    .login{
    margin-top: 10px;
    position: absolute;
    background: #f1f7fe;
    border-radius: 20px;
    padding: 20px;
    width: 50%;
    left: 25%;
    text-align: center;
    outline: solid 2px rgb(161, 104, 161);
    }

    .logintext{
    background: #3e4684;
    padding: 5px;
    margin-bottom: 10px;
    color: white;
    font-family: cursive;
    }

    .logintext h3{
    margin: 0px;
    }

    .loginpic{
    justify-content: center;
    width: 80px;
    height: 100px;
    }

    .login .email{
    background: white;
    box-shadow: 0 0 2px #f1f7fe;
    margin-top: 10px;
    border-radius: 20px;
    color: black;
    padding: 10px;
    text-align: left;
    outline: solid 1px;
    }

    .login .email input{
    outline: none;
    border: none;
    }

    .login .password{
    background: white;
    box-shadow: 0 0 2px #f1f7fe;
    margin-top: 10px;
    border-radius: 20px;
    color: black;
    padding: 10px;
    text-align: left;
    outline: solid 1px;
    }

    .login .password input{
    outline: none;
    border: none;
    }

    .login .loginbutton{
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 10px;
    background: #3e4684;
    color: white;
    border: none;
    border-radius: 30px;
    font-size: 20px;
    font-weight: 600;
    width: 200px;
    font-family: sans-serif;
    }

    button{
    cursor: pointer;
    }

    button:hover{
    opacity: 0.8;
    }

    .login .loginfooter{
    display: flex;
    font-size: 20px;
    color: #5e5e5e;
    justify-content: space-between;
    margin-bottom: 5px;
    }

    .login .loginfooter span{
    cursor: pointer;
    }

    .footer{
    position: absolute;
    background-color: rgb(121, 122, 214);
    display: flex;
    padding: 20px;
    top: 92%;
    width: 100%;
    justify-content: space-between;
    }

    .category,.aboutstore,.customerinfo,.followus,.paymentmethod,.logistic{
    flex-direction: column;
    }

    .heading{
    color: black;
    text-decoration: underline;
    margin-bottom: 10px;
    }

    .category a,.aboutstore a,.customerinfo a,.followus a{
    text-decoration: none;
    color: black;
    font-size: 14px;
    }

    .paymentmethod img,.logistic img{
    width: 60px;
    height: 35px;
    background-color: white;
    margin-bottom: 5px;
    }
    </style>
</head>

<body>
    <div class="login">
        <div class="logintext">
            <h3>WELCOME</h3>
        </div>

        <img class="loginpic" src="img/loginpic.png">

        <div class="email">
            <label for="email">Email Address</label><br>
            <input type="email" name="email" placeholder="username@gmail.com">
        </div>

        <div class="password">
            <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="********">
        </div>

        <a href="homepage.html"><button class="loginbutton">Login</button></a>

        <div class="loginfooter">
            <span><a href="sign up.html">Sign Up</a></span>
            <span><a href="forgot password.html">Forgot Password?</a></span>
        </div>
    </div>

    <div class="footer">
        <div class="category">
            <h6 class="heading">Category</h6>
            <a href="productDetails_Men.html">Men's Clothes</a><br>
            <a href="productDetails_Women.html">Women's Clothes</a>
        </div>

        <div class="aboutstore">
            <h6 class="heading">About Store</h6>
            <a href="voucher.html">Voucher</a><br>
            <a href="">Promotion</a>
        </div>

        <div class="customerinfo">
            <h6 class="heading">Customer Info</h6>
            <a href="wishlist.html">Wishlist</a><br>
            <a href="return.html">Refund & Return</a><br>
            <a href="chat.html">Customer Service</a><br>
            <a href="chat.html">Contact Us</a>
        </div>

        <div class="followus">
            <h6 class="heading">Follow Us</h6>
            <a href="">Facebook</a><br>
            <a href="">Instagram</a><br>
            <a href="">X (Twitter)</a>
        </div>

        <div class="paymentmethod">
            <h6 class="heading">Payment Method</h6>
            <img src="img/fpx.png">
            <img src="img/visa.png">
            <img src="img/applepay.png"><br>
            <img src="img/tng.png">
            <img src="img/mastercard.png">
            <img src="img/maybank.png">
        </div>

        <div class="logistic">
            <h6 class="heading">Logistic</h6>
            <img src="img/ninja.png">
            <img src="img/jnt.png">
            <img src="img/poslaju.png"><br>
            <img src="img/fedex.png">
            <img src="img/dhl.png">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>