<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" media="screen" href="css/main.css" />
    <link rel="stylesheet" href=".//css/bootstrap/css/bootstrap-rtl.min.css" />
    <title>پنل مدیریت</title>
</head>

<body>
    <!--.......................connection to DB ........................-->
    <?php
    $mysqli = new mysqli("localhost", "root", "", "my-db");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    ?>
    <!--.......................check login ........................-->
    <?php
    //echo ($_SERVER['SERVER_NAME'] );
    if (!empty($_POST["login"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        echo "result : $user : $pass";
        $sqluser = "SELECT count(`id`) FROM `adminlogin` where `username`='$user' and `password`='$pass'";
        if ($result = $mysqli->query($sqluser)) {
            $row = $result->fetch_row();
            print_r($row);
            if (!empty($row) && $row[0] == 1) {
                header('Location: http://' . $_SERVER['SERVER_NAME']  . '/clothing-store/admin.php');
            }
            $result->free_result();
        }
    }
    ?>



    <!--.......................login form ........................-->

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-title">
                    پنل مدیریت
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input name="username" class="username" type="text" class="form-control">
                                <label class="form-control-label"> :نام کاربری</label>
                            </div>
                            <div class="form-group">
                                <input name="password" class="password" type="password" class="form-control">
                                <label class="form-control-label"> :رمزعبـور</label>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <input name="login" type="submit" value="LOGIN" class="btn btn-outline-primary" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>






</body>

</html>