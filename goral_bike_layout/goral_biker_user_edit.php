<?php
if (!isset($_GET["id"])) {
    header("location:../user/404.php");
}


$id = $_GET["id"];

require_once("../db-connect.php");
$sql = "SELECT * FROM user WHERE id='$id'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (!$row) {
    header("location:../user/404.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>User Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- css & bs5 -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>
    <div class="container-fluid p-0">
        <header class="header">
            <?php require("../goral_bike_layout/goral_biker_nav.php") ?>
        </header>
        <section class="row vh-100">
            <aside class="aside col-2 p-0">
                <?php require("../aside/user_aside.php") ?>
            </aside>
            <article class="article col-10 ">
                <?php require("../user/function/user_edit.php") ?>  
            </article>
        </section>
        <footer class="footer bg-light">

        </footer>

        <!-- Bootstrap JavaScript Libraries -->
        <?php require("../user/js.php") ?>
</body>

</html>