<?php

class Product {
    private $name;
    private $image;
    private $price;

    public function __construct($name, $image, $price) {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getImagePath() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }
}


$product1 = new Product("Women Sleeveless Strappy Summer Long Dress", "assignment_image/dress (3).jpg", 50.00);
$product2 = new Product("Women Solid Butterfly Sleeve Belted Dress", "assignment_image/dress.jpg", 50.00);
$product3 = new Product("Casual Plain Button Blazer", "assignment_image/coat.jpg", 70.00);
$product4 = new Product("Women Button Pattern Cardigan", "assignment_image/cardigan.jpg", 45.90);


// Array to store product instances
$products = array($product1, $product2, $product3, $product4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Women Cloth</title>
    <!--Icone link-->
    <script src="https://kit.fontawesome.com/722e303770.js" crossorigin="anonymous"></script>
    
    <!--Font Family-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+27px:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="productDetails_Women.css">
    <style>
        
    </style>
    </head>

<body>
     <!--Header-->
     <div class="header">
        <div class="search_bar">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
            </button>
            <input type="text" id="header_search" placeholder="search">
            <button type="submit">
                <i class="fa-solid fa-camera" style="color: #000000;"></i>
            </button>  
          </div> 

          <div class="header_nav">
            <a href="">My Profile</a>
            <a href="">My Voucher</a>
            <a href="">Order History</a>
            <a href="">My Review</a>
            <a href="">Wishlist</a>
          </div>

          <a href="" class="header_profileIcon">
              <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>
              <i class="fa-solid fa-circle-user" style="color: #000000;"></i>
          </a>
  </div>

  <!--Top Content-->
  <div class="all_part">
    <div class="all_part_left">
        <div class="Categories">
              <h4>Categories</h4>
              <a href="">Female Cloth</a><br>
              <a href="">Male Cloth</a>
        </div>

        <div class="title">
              <h3>Women Cloth</h3>
              <p>Showing results for Women's Cloth</p>
        </div>
    </div>

    <div class="all_part_right">
          <p>Sort By</p>
          <select class="form-select" aria-label="Default select example">
            <option selected>Select</option>
            <option value="1">Lowest Price</option>
            <option value="2">Highest Sales</option>
          </select>
    </div>
  </div>
  <hr>
  <br>

    <!-- Main Content -->
    <div class="main_content">
        <div class="row px-xl-5" style="margin: auto;">
            <?php foreach ($products as $product): ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" id="product_image" src="<?php echo $product->getImagePath(); ?>" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 style="height: 40px;"><?php echo $product->getName(); ?></h6>
                            <div class="d-flex justify-content-center">
                                <h6>RM<?php echo $product->getPrice(); ?></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

     <!--Footer-->
  <div class="footer">
    <div class="left">

        <div class="footer_content">
            <h6>Category</h6>
            <div class="fotter_selection">
                <a href="">Men's Cloth</a>
                <a href="">Women's Cloth</a>
            </div>
        </div>

        <div class="footer_content">
            <h6>About Us</h6>
            <div class="fotter_selection">
                <a href="">Voucher</a>
                <a href="">Promotion</a>
            </div>
        </div>

        <div class="footer_content">
            <h6>Customer Info</h6>
            <div class="fotter_selection">
                <a href="">Wishlist</a>
                <a href="">Refun & Return</a>
                <a href="">Customer Service</a>
                <a href="">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="right">
          <div class="footer_content">
            <h6>Payment Method</h6>
            <div class="fotter_selection">
                <img src="assignment_image/fpx_image.png" alt="fpx">
                <img src="assignment_image/visa_image.png" alt="visa">
                <img src="assignment_image/applyPay_image.png" alt="applepay">
                  <div class="picture">
                    <img src="assignment_image/tng_image.png" alt="tng">
                    <img src="assignment_image/masterCard_image.png" alt="mastercard">
                    <img src="assignment_image/myBank_image.png" alt="myBank">
                  </div>
            </div>
        </div>

          <div class="footer_content">
              <h6>Logistics</h6>
              <div class="fotter_selection">
                <img src="assignment_image/ninjaVan_image.png" alt="ninjavan">
                <img src="assignment_image/jtExpress_image.png" alt="JT_Express">
                <img src="assignment_image/poslaju_image.png" alt="poslaju">
                  <div class="picture">
                    <img src="assignment_image/fedex_image.png" alt="fedex">
                    <img src="assignment_image/dhl_image.png" alt="dhl">
                  </div>
              </div>
          </div>
        <div class="footer_content">
            <h6>Follow Us</h6>
            <div class="fotter_selection">
                <a href="">Facebook</a>
                <a href="">Instagram</a>
                <a href="">Twitter</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
