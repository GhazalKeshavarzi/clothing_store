<!DOCTYPE html>
<html lang="fa">

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
    <!--....................... Delete ........................-->
    <?php

    $name = "";
    $size = "";
    $color = "";
    $material = "";
    $price = "";
    $category = "";

    if (!empty($_POST["delete"]) && !empty($_POST["id"])) {
        $id = $_POST["id"];
        $pic = $_POST["pic"];

        $sql = "delete from `products` where `id`=$id";
        if ($mysqli->query($sql) === TRUE) {
            unlink("upload/" . $pic);
            echo "رکورد جدید با موفقیت حذف شد";
        } else {
            echo "خطا :  " . $sql . "<br>" . $mysqli->error;
        }
        header($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
    }
    /*....................... Edit ........................*/
    if (!empty($_POST["edit"]) && !empty($_POST["id"])) {
        $id = $_POST["id"];
        echo $id;
        $pic = $_POST["pic"];

        $sqlProduct = "SELECT p.id, p.id_cat, p.name, p.size, p.price, p.material, p.color, p.picture FROM `products` as p where p.id=$id";
        if ($resultProduct = $mysqli->query($sqlProduct)) {
            $Product = $resultProduct->fetch_row();

            $name = $Product[2];
            $size = $Product[3];
            $color = $Product[6];
            $material = $Product[5];
            $price = $Product[4];
            $category = $Product[1];
        }
        $resultProduct->free_result();
    }
    if (!empty($_POST["name"]) && !empty($_POST["size"]) && !empty($_POST["color"])  && !empty($_POST["material"]) && !empty($_POST["price"])  && !empty($_FILES["picture"]["name"])  && !empty($_POST["category"])) {
        $id = $_POST["pid"];
        $pic = $_POST["pic"];
        $name = $_POST["name"];
        $size = $_POST["size"];
        $color = $_POST["color"];
        $material = $_POST["material"];
        $price = $_POST["price"];
        $category = $_POST["category"];

        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        $check = getimagesize($_FILES["picture"]["tmp_name"]);
        if ($check !== false) {
            echo "فایل یک عکس است " . $check["mime"] . ".\n";
            $uploadOk = 1;
        } else {
            echo "فایل یک عکس نیست";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "فایل وجود دارد!!!!";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["picture"]["size"] > 500000) {
            echo "فایل شما خیلی بزرگ است ، دوباره سعی کنید!!!!";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "خطا ! شما فقط میتوانید فایل های عکس با پسوندهای (jpg,png,jpeg,gif) را بارگذاری کنید";
            $uploadOk = 0;
        }

        // Check if $upload is set to 0 by an error
        if ($uploadOk == 0) {
            echo "خطا!!! فایل شما بارگذاری نشد";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                $picture = ($_FILES["picture"]["name"]);
                echo "------$id-----";
                if (empty($id)) {
                    echo "درج شد";
                    $sql = "insert into `products` (`id_cat`, `name`, `price`, `size` , `material`, `color`, `picture`) values ('$category','$name','$price','$size','$material','$color','$picture')";
                } else {
                    echo "به روز شد";
                    unlink("upload/" . $pic);
                    $sql = "update `products` set `id_cat`='$category', `name`='$name', `price`='$price', `size` ='$size', `material`='$material', `color`='$color', `picture`='$picture' where id=$id";
                }


                if ($mysqli->query($sql) === TRUE) {
                    echo "رکورد جدید با موفقیت اضافه شد.";
                } else {
                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                }

                echo "فایل با نام : " . htmlspecialchars(basename($_FILES["picture"]["name"])) . " بارگذاری شده است";
                header($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
            } else {
                echo "خطا !!! مشکلی در بارگذاری فایل شما رخ داده است";
            }
        }
    }
    ?>
    <div class="container mt-3 admin adwidth">
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="  form-group">
                <label>نام محصول</label>
                <input type="text" class="form-control" value="<?php echo $name; ?>" required="require" name="name">
            </div>
            <div class="form-group">
                <label>سایز</label>
                <input type="text" class="form-control" value="<?php echo $size; ?>" required="require" name="size">
            </div>
            <div class="form-group">
                <label>رنگ</label>
                <input type="text" class="form-control" value="<?php echo $color; ?>" required="require" name="color">
            </div>
            <div class="form-group">
                <label>جنس</label>
                <input type="text" class="form-control" value="<?php echo $material; ?>" required="require" name="material">
            </div>
            <div class="form-group">
                <label>قیمت</label>
                <input type="text" class="form-control" value="<?php echo $price; ?>" required="require" name="price">
            </div>
            <div class="form-group">
                <label>عکس محصول</label>
                <input type="file" class="form-control" required="require" name="picture">
            </div>
            <div class="form-group adwidth ">
                <label for="exampleFormControlSelect1">دسته بندی ها</label>
                <select class="form-control admin" required="require" name="category">
                    <?php
                    $sql = "SELECT * FROM `product_cat`";
                    if ($result = $mysqli->query($sql)) {
                        while ($row = $result->fetch_row()) {
                    ?>
                            <option class="admin" <?php echo $category == $row[0] ? 'selected="selected"' : ''; ?> value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                    <?php
                        }
                        $result->free_result();
                    }
                    ?>
                </select>
            </div>
            <input type="hidden" name="pid" value="<?php if (!empty($id)) echo $id; ?>">
            <input type="hidden" name="pic" value="<?php if (!empty($pic)) echo $pic; ?>">
            <button type="submit" class="btn btn-primary"><?php echo !empty($id) ? 'ویرایش' : 'ثــبـت'; ?></button>
        </form>
        <br><br><br><br><br><br><br>
        <!--.............................Table...........................-->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">عنوان دسته بندی</th>
                    <th scope="col">نام محصول</th>
                    <th scope="col">سایز</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">جنس</th>
                    <th scope="col">رنگ</th>
                    <th scope="col">عکس</th>
                    <th scope="col">ویرایش / حذف</th>
                </tr>
            </thead>
            <tbody>
                <!--.............................read files from DB...........................-->
                <?php

                $sqlProduct = "SELECT p.id, c.title, p.name, p.size, p.price, p.material, p.color, p.picture FROM `products` as p join `product_cat` as c where p.id_cat=c.id";
                if ($resultProduct = $mysqli->query($sqlProduct)) {
                    $i = 0;
                    while ($Product = $resultProduct->fetch_row()) {

                        $i++;
                ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $Product[1]; ?></td>
                            <td><?php echo $Product[2]; ?></td>
                            <td><?php echo $Product[3]; ?></td>
                            <td><?php echo $Product[4]; ?></td>
                            <td><?php echo $Product[5]; ?></td>
                            <td><?php echo $Product[6]; ?></td>
                            <td><img style="width: 50px;" src="./upload/<?php echo $Product[7]; ?>" /></td>
                            <td>
                                <form method="post" action="#">
                                    <input type="hidden" name="pic" value="<?php echo $Product[7]; ?>" />
                                    <input type="hidden" name="id" value="<?php echo $Product[0]; ?>" />
                                    <input class="btn btn-warning" type="submit" name="edit" value="ویرایش" />
                                </form>
                                <form method="post" action="#">
                                    <input type="hidden" name="pic" value="<?php echo $Product[7]; ?>" />
                                    <input type="hidden" name="id" value="<?php echo $Product[0]; ?>" />
                                    <input class="btn btn-danger" type="submit" onclick="return confirm('آیتم حذف شود؟')" name="delete" value="حذف" />
                                </form>

                            </td>
                        </tr>
                <?php
                    }
                    $resultProduct->free_result();
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

<script src="javascript/jquery.min.js"></script>
<script src="./css/bootstrap/js/bootstrap.min.js"></script>
<script src="javascript/main.js"></script>

</html>