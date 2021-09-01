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

  <!-- ..................... slider ......................... -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12 m-auto">
        <div id="slider1" class="carousel slide mb-5" data-ride="carousel">
          <ol class="carousel-indicators">
            <li class="active" data-target="#slider1" data-slide-to="0"></li>
            <li data-target="#slider1" data-slide-to="1"></li>
            <li data-target="#slider1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-fluid" src="./images/1-1.jpg" alt="First Slide" />
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="./images/1-2.jpg" alt="Second Slide" />
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="./images/1-3.jpg" alt="Third Slide" />
            </div>
          </div>
          <!-- ....... controls ....... -->
          <a href="#slider1" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>

          <a href="#slider1" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- .................. multiple slider .................... -->
  <div class="container-fluid py-5 bg-gray1">
    <div class="container text-center">
      <div class="row mx-auto my-auto">
        <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item active">
              <div class="col-lg-4 col-md-6">
                <img class="gallery" src="images/1.jpg">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6">
                <img class="gallery" src="images/2.jpg">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6">
                <img class="gallery" src="images/3.jpg">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6">
                <img class="gallery" src="images/4.jpg">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6">
                <img class="gallery" src="images/5.jpg">
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-4 col-md-6">
                <img class="gallery" src="images/6.jpg">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev  w-auto" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next  w-auto" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- ..................... 3 parts ......................... -->

  <section id="section" class=" container-fluid text-muted text-center py-5">
    <div class="container-fluid ">
      <p class="textindex">دسته بندی ها</p>
      <div class="row">

        <div class="col-sm-12 col-lg-4 mb-4">
          <a href="product.php#shirts">
            <img src="./images/shirt.jpg" class="parts3 parts img-fluid"></img>
            <button class="btn  partsbtn">شومیز و تاپ </button></a>
        </div>

        <div class="col-sm-12 col-lg-4 mb-4">
          <a href="product.php#pants">
            <img src="./images/pants.jpg" class="parts3 parts img-fluid"></img>
            <button class="btn partsbtn">شلوار و دامن</button></a>
        </div>

        <div class="col-sm-12 col-lg-4 mb-4">
          <a href="product.php#shoes">
            <img src="./images/shoes.jpg" class="parts3 parts img-fluid"></img>
            <button class="btn  partsbtn">کفش و بوت</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ........................ texts ....................... -->
  <div class="container-fluid p-4 bg-gray1">
    <div class="container-fluid">
      <p class="textindex">سوالات متداول</p>
      <div class="row">
        <div class=" col-sm-12 col-lg-6 mb-4 ">
          <div class="accordion" id="accordionExample">

            <div class="card cardtext">
              <div class="card-header">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne">
                    شما با چه برند هایی کار میکنید ؟
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                <div class="card-body">
                  گوچی ، دیور ، ال وی ، دی اند جی ، جوجو ، بالنسیاگا ، زارا
                </div>
              </div>
            </div>

            <div class="card cardtext">
              <div class="card-header">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2">
                    هزینه از حساب من کم شده اما با خطا مواجه شدم؟
                  </button>
                </h2>
              </div>

              <div id="collapse2" class="collapse" data-parent="#accordionExample">
                <div class="card-body ">
                  تا 72 ساعت یا خرید شما تکمیل میشود یا هزینه به حساب شما برمیگردد
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="col-sm-12 col-lg-6 mb-4">
          <div class="accordion" id="accordionExample">

            <div class="card cardtext">
              <div class="card-header">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3">
                    آیا پوشاک مردانه به محصولات اضافه میشود ؟
                  </button>
                </h2>
              </div>

              <div id="collapse3" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                  خیر ، ما به صورت اختصاصی پوشاک زنانه رائه میدهیم
                </div>
              </div>
            </div>

            <div class="card cardtext">
              <div class="card-header">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse4">
                    زمان تحویل محصولات چقدر است ؟
                  </button>
                </h2>
              </div>

              <div id="collapse4" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                  1 هفته الی 10 روز کاری
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ....................... footer ....................... -->
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