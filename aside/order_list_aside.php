<?php

$path = $_SERVER["REQUEST_URI"];

// echo $path;
// 透過路徑取得檔名
$file = basename($path);
// echo $file;
// $a = array("所有商品", "登山車基礎車款", "單避震腳踏車", "全避震登山車", "管理下架商品");

// if (!isset($_GET["p"])) {
//     $p = 1;
// } else {
//     $p = $_GET["p"];
// }
// if (!isset($_GET["nav_name_id"])) {
//     $nav_name_id = 0;
// } else {
//     $nav_name_id = $_GET["nav_name_id"];
// }

// // ------type = ?↓
// switch ($nav_name_id) {

//     case "1":
//         $path_name = "goral_biker_product.php?product_category_id=1";
//         break;
//     case "2":
//         $path_name = "goral_biker_product.php?product_category_id=2";
//         break;
//     case "3":
//         $path_name = "goral_biker_product.php?product_category_id=3";
//         break;
//     case "4":
//         $path_name = "goral_biker_off_product.php";
//         break;
//     default:
//         $path_name = "goral_biker_product.php";
// }

?>

<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100 w-100">
    <a href="" class="d-flex align-items-center justify-content-center mb-3 mb-md-0 text-white text-decoration-none ">
        <span class="fs-4">訂單</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">


        <li class="nav-item">
            <a href="goral_biker_order_list.php" class="nav-link  fst-6 text-center text-wrap text-white
               
               <?php
                if ((strpos($file, "product_category_id") === false) && (strpos($file, "goral_biker_off_product") === false)) echo "active" ?>

                " aria-current="page">
                訂單
            </a>
        </li>

        <!-- <li class="nav-item">
            <a href="goral_biker_order_list.php" class="nav-link  fst-6 text-center text-wrap  text-white
            <?php
            if (strpos($file, "product_category_id=1") !== false) {
                echo ("active");
            }
            ?>

            " aria-current="page">
                訂單分類
            </a>
        </li> -->


    </ul>
</div>