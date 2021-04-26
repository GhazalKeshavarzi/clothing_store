<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" media="screen" href="css/main.css" />
  <link rel="stylesheet" href=".//css/bootstrap/css/bootstrap-rtl.min.css" />
  <title>خانــه</title>
</head>

<body>
<?php
  $mysqli = new mysqli("localhost", "root", "", "my-db");

  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
  }
  ?>
  <!-- ..................... first-menu ..................... -->
  <div class="container-fluid">
    <div class="row ">

      <div class="col-4 ">
        <a class="fr nav-link iconcolor " href="product.php"><img class="icons " src="./icons/shop.png" alt="shop" /></a>
        <a class="fr nav-link iconcolor " href="favorite.php"><img class="icons  " src="icons/heart.png" alt="favorites" /></a>
        <a class="fr nav-link iconcolor " href="login.php"><img class="icons " src="icons/human.png" alt="login" /></a>
      </div>

      <div class="col-8">
        <img class="fl" src="icons/logo.png" alt="logo" />
        <a href="feedback.php">
          <button class="feedback form-inline ">
            بازخورد
          </button>
        </a>
      </div>
    </div>
  </div>

  <!-- ..................... second-menu..................... -->
  <nav class="navbar navbar-expand-sm  navbar-light mb-3 sticky-top ">
    <div class="container">
      <button class="navbar-toggler " data-toggle="collapse" data-target="#hum1">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="hum1">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item ">
            <a class="nav-link " href="index.php"><span class="bgcolormenu1 bgcolormenu">خانه</span></a>
          </li>

          <li class="nav-item dropdown ">
            <a href="product.php" class="nav-link dropdown-toggle " data-toggle="dropdown"><span class="bgcolormenu1 bgcolormenu">محصولات</span></a>
            <div class="dropdown-menu " style="text-align: center; background-color:#3b3b3b;">

              <?php
              $sql = "SELECT * FROM `product_cat`";
              if ($result = $mysqli->query($sql)) {
                while ($row = $result->fetch_row()) {
              ?>
                  <a href="product.php?cat=<?php echo $row[0]; ?>"><span class="bgcolormenu1 bgcolormenu"> <?php echo $row[1]; ?></span></a><br>
                  <hr>
              <?php
                }
                $result->free_result();
              }
              ?>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link " href="about.php"><span class="bgcolormenu1 bgcolormenu">درباره ما</span> </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="contact.php"><span class="bgcolormenu1 bgcolormenu">تماس با ما</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.php"><span class="bgcolormenu1 bgcolormenu">ثبت نام / ورود</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ..................... content..................... -->
  <div style="margin: 70px; ">
    <div class="content">
      <p>اطلاعات مربوط به سازنده : فاطمه کشاورزی دانشجوی کارشناسی ناپیوسته نرم افزار دانشکده فنی دختران شیراز</p>
    </div>
  </div>
  <!-- ....................... footer ..................... -->
  <footer class="container-fluid ">
    <div class="row text-center text-md-right mt-3 pb-3 ">

      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 bgalign">
        <h6 class="text-uppercase mb-4 font-weight-bold  footcoler">تماس با ما</h6>
        <hr>
        <p class="fas fa-home mr-3"> شیراز ، خیابان زند ، داشکده فنی دختران</p>

        <p class="fas fa-envelope mr-3"> ghazal.keshavarzi7@gmail.com</p>

        <p class="fas fa-phone mr-3"> 6070 898 937 98+</p>
      </div>

      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 bgalign">
        <h6 class="text-uppercase mb-4 font-weight-bold footcoler">لینک های متداول</h6>
        <hr>
        <div>
          <a href="index.php" class="ftAcolor">خانه</a>
          <br>
          <a href="favorite.php" class="ftAcolor">موردعلاقه ها</a>
          <br>
          <a href="product.php" class="ftAcolor">محصولات</a>
        </div>
      </div>

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 bgalign">
        <img class="footimg" src="./icons/logo.png" alt="logo">
        <hr>
        <p>فروشگاه اینترنتی لباس های زنانه<br>با بهترین کیفیت و خدمات شبانه روزی <br>در خدمت شما مشتریان عزیز هستیم</p>
      </div>

    </div>
    <div class="row d-flex align-items-center bgfoot">
      <div class="col-md-7 col-lg-8">


        <!--Copyright-->
        <h6 class="text-lg-right text-md-center foottext ">
          © کلیه حقوق مادی و معنوی این سایت محفوظ است
        </h6>
      </div>
      <div class="col-md-5 col-lg-4 ml-lg-0">
      </div>
    </div>
  </footer>

  <script src="javascript/jquery.min.js"></script>
  <script src="./css/bootstrap/js/bootstrap.min.js"></script>
  <script src="javascript/main.js"></script>
</body>

</html>