<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">View all products
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Featured Collection<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">The brand</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Local stores</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Customer service</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Site map</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Why buy from us</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Secure shipping</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Testimonials</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Award winning</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ethical trading</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="checkout.php" class="footer-nav__link">Sign in</a>
              </li>
              <li class="footer-nav__item">
                <a href="customer_register.php" class="footer-nav__link">Register</a>
              </li>
              <li class="footer-nav__item">
                <a href="cart.php" class="footer-nav__link">View cart</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">View your lookbook</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Track an order</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Update information</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <address class="address">
              Address: P.410, Nhà A1, Trường Đại học Xây dựng, Số 55 - Giải Phóng - Q.Hai Bà Trưng - Hà Nội.
            </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:02438696397">024.3869.6397</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:cntt@nuce.edu.vn" class="email__addr">cntt@nuce.edu.vn</a>
            </div>
            <div class="social">
              <a href="https://www.facebook.com/cnttdhxd" class="social__link"><i class="icon-facebook"></i>
              <a href="#" class="social__link"><i class="icon-instagram"></i>
            </div>
          </div>

        </div>
      </div>
      </div>
    </footer>
</body>

</html>
