<?php
  class LoginForm{
    //properties
    private $username;
    private $password;

    //methods
    function __construct($username,$password){
      $this->username=$username;
      $this->password=$password;
    }

    public function validateInput(){
      if(empty($this->username) || empty($this->password)){
        return false;
      }
      return true;
    }


    public function renderForm(){
      echo'<form method="post">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required value="' .htmlspecialchars($this->username).'">


      <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required value="' .htmlspecialchars($this->password).'">
            <button type="submit">Login</button>

            <label>
            <input type="checkbox" checked="checked" name="reminder">Reminder Me
        </label>
        </form>';

    }

  }

  $username=isset($_POST['uname'])?$_POST['uname']:'';
  $password=isset($_POST['psw'])?$_POST['psw']:'';

  $loginForm=new LoginForm($username,$password);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>

    
    <style>
        
        body{
            background-color: rgb(253, 215, 239)
        }


        .container{
            display: flex;
        }

        .whiterect{
            height: 710px;
            width: 500px;
            background-color: white;
            margin-left: 450px;
            margin-right: 450px;
            margin-top: 80px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 40px;
            
        }

        .purplerect{
            height: 100px;
            width:500px;
            background-color: rgb(121, 122, 214);
            border-top-left-radius: 40px;
            border-top-right-radius: 40px;
            color: white;
        
        }

        .purplerect h1{
            font-style: italic;
            font-size: 70px;
            text-align: center;
            padding-top: 10px;
           
         
        }

        .circle{
            width: 220px;
            height: 220px;
            background-color: rgb(208, 203, 197);
            border-radius: 50%;
            margin-left: 140px;
            margin-top: 30px;
        }

        .circle img{
            width: 220px;
            height: 220px;
        
        }

        input[type="text"],input[type="password"]{
            margin-left: 30px;
            margin-top: 50px;
            width: 300px;
            padding: 7px 7px;
            display: inline-block;
            border: 1px solid #ccc;
        }

        form label{
            margin-left: 40px;
            margin-top: 40px;
            margin-right: 10px;
        }

        button{
            background-color: rgb(121, 122, 214);
            border:1px solid rgb(56, 35, 56) ;
            color: white;
            width: 400px;
            height: 40px;
            margin-left: 45px;
            margin-top: 30px;
            border-radius: 60px;
        }

        .footer{
            background-color: rgb(121, 122, 214);
            height: 250px;
            width: 1380px;
            margin-top: 100px;
          
        }

        .category{
            margin-left: -100px;
            width: 350px;
            height: 100px;
            padding: 15px;
            border-radius: 5px;
  
            
        }

        .category p{
            padding-top: 10px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
            
        
        }

        .category a{
            color: black;
            text-decoration: none;
            margin-top: 20px;
            font-size: 10px;
        }

        .aboutstore{
            margin-left: 50px;
            width: 350px;
            height: 100px;
            
        }

        .aboutstore p{
            padding-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
         
        }

        .aboutstore a{
            color: black;
            text-decoration: none;
            margin-top: 20px;
            font-size: 10px;
        }

        .customerinfo{
            margin-left: 50px;
            width: 350px;
            height: 200px;
        }

        .customerinfo p{
            padding-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
        }

        .customerinfo a{
            color:black;
            text-decoration: none;
            margin-top: 20px;
            font-size: 10px;
        }

        .paymentmethod{
            margin-left: 50px;
        }

        .paymentmethod p{
            padding-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;

        }

        .smallrect{
            width: 72px;
            height: 40px;
            background-color: white;
            margin-left: -10px;
            margin-top: 5px;
        }

        .smallrect1{
            width: 72px;
            height: 40px;
            background-color: white;
            margin-left: 5px;
            margin-top: 5px;
        }

        .smallrect img{
            width: 72px;
            height: 40px;
        }

        .smallrect1 img{
            width: 72px;
            height: 40px;
        }

        .logistic{
            margin-left: 50px;
        }

        .logistic p{
            padding-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
        }

        .followus{
            margin-left: 50px;
           
           
        }

        .followus p{
            margin-top: 25px;
            text-decoration: underline;
            color: black;
            font-size: 10px;
        }

        .followus a{
            color: black;
            text-decoration: none;
            margin-top: 10px;
            font-size: 10px;
            margin-left: 0px;
        }

        

        
      


    </style>
  </head>

  <body>

    <div class="whiterect">

        <div class="purplerect">
            <h1>WELCOME</h1>
        </div>

        <div class="circle">
            <img src="assignment_image/user.png">
        </div>

        <?php
        $loginForm->renderForm();

        if($_SERVER['REQUEST_METHOD']==='POST'){
          if($loginForm->validateInput()){
            echo 'Input is valid.';
          }
          else{
            echo 'Invalid input.';
          }
        }
        ?>

       

    </div>

  
        <div class="footer">

        <div class="container">

            <div class="category">
                <p>Category</p>
                <a href="#menscloth">Men's Cloth</a><br>
                <a href="#womencloth">Women's Cloth</a>
            </div>

            <div class="aboutstore">
                <p>About Store</p>
                <a href="#voucher">Voucher</a><br>
                <a href="#promotion">Promotion</a>
            </div>

            <div class="customerinfo">
                <p>Customer Info</p>
                <a href="#wishlist">Wishlist</a><br>
                <a href="#refundandreturn">Refund & Return</a><br>
                <a href="#customerservice">Customer Service</a><br>
                <a href="#contactus">Contact Us</a>
            </div>

            <div class="paymentmethod">
                <p>Payment Method</p>
                <div class="container">
                    <div class="smallrect">
                        <img src="assignment_image/fpx.png">

                    </div>

                    <div class="smallrect1">
                        <img src="assignment_image/visa.png">
                    </div>

                    <div class="smallrect1">
                        <img src="assignment_image/applepay.png">

                    </div>

                </div>

                <div class="container">
                    <div class="smallrect">
                        <img src="assignment_image/touchandgo.png">

                    </div>

                    <div class="smallrect1">
                        <img src="assignment_image/Mastercard_logo.png">

                    </div>

                    <div class="smallrect1">
                        <img src="assignment_image/maybank.png">

                    </div>
                </div>
            </div>

            <div class="logistic">
                <p>Logistic</p>
                <div class="container">
                    <div class="smallrect">
                        <img src="assignment_image/ninjavan.png">

                    </div>

                    <div class="smallrect1">
                        <img src="assignment_image/JT_Express.png">


                    </div>

                    <div class="smallrect1">
                        <img src="assignment_image/poslaju.png">

                    </div>
                </div>

                <div class="container">
                    <div class="smallrect">
                        <img src="assignment_image/fedex.png">

                    </div>

                    <div class="smallrect1">
                        <img src="assignment_image/dhl.jpg">

                    </div>

                </div>


            </div>

            <div class="followus">
                <p>Follow Us</p>
                <a href="#facebook">Facebook</a>
                <a href="#instagram">Instagram</a>
                <a href="twitter">Twitter</a>

            </div>

         </div>

        </div>

        

        
    
    
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>