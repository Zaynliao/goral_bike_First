<?php
//Make a sorting thing
require_once("../db-connect.php"); 
if(!isset($_GET["id"])){
    echo "this ain't it chief";
}
$id = $_GET["id"];
$name = $_GET["coupon_name"];
$code = $_GET["coupon_code"];
$content = $_GET["coupon_content"];
$date = $_GET["coupon_expiry_date"];
$discount = $_GET["coupon_discount"];
//prepare the statement
$sql="SELECT id, coupon_name, coupon_code, coupon_content, coupon_expiry_date FROM coupons WHERE valid=1";
$select = mysqli_query($conn, "SELECT * FROM coupons WHERE id = '".$_GET["id"]."'");
if(mysqli_num_rows($select) == 0) {
    exit('This Method Does Not Exist');
}
$conn -> close();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container-fluid">

        
        <form action="../coupons/coupons_edit.php?name2=" method="get">
          <h5>Coupon: <?=$id?></h5>

          <div>
          <input type="hidden" name="id" id="id" class="form-control my-2" value="<?=$id?>">
          <table class="table table-bordered w-100">
            <thead class="table-dark">
              <tr class="text-center">
                  <td>Coupon id</td>
                  <td>Coupon name</td>
                  <td>Coupon code</td>
                  <td>Coupon content</td>
                  <td>Coupon expiry date</td>
                  <td>Coupon discount</td>
                  <td>Edit coupon</td>
                  <td>Reset</td>
                </tr>
              </thead>
              <tbody>

              </tbody>
              <td>
                <?=$id?>
              </td>
              <td>
              <input type="text" name="name" id="name" class="form-control my-2" value="<?=$name?>">
              </td>
              <td>
              <input type="text" name="code" id="code" class="form-control my-2" value="<?=$code?>">
              </td>
              <td>
              <input type="text" name="content" id="content" class="form-control my-2" value="<?=$content?>">
              </td>
              <td>
              <input type="date" name="date" id="date" class="form-control mt-2" value="<?=$date?>">
              </td>
              <td>
              <input type="number" name="discount" id="discount" class="form-control mt-2" min="0" max="100" value="<?=$discount?>">
              </td>

              <input type="hidden" name="name2" id="name" class="form-control my-2" value="<?=$name?>">
              <input type="hidden" name="code2" id="code" class="form-control my-2" value="<?=$code?>">
              <input type="hidden" name="content2" id="content" class="form-control my-2" value="<?=$content?>">
              <input type="hidden" name="date2" id="date" class="form-control mt-2" value="<?=$date?>">
              <input type="hidden" name="discount2" id="discount" class="form-control mt-2" value="<?=$discount?>">
              <td>
              <button type="submit" class="btn btn-info mt-2 my-2 text-white">Submit new method</button>
              </td>
                <td>
                <button type="reset" class="btn btn-warning mt-2 my-2 text-white">Reset</button>
              </td>
            </table>
            <a href="../goral_bike_layout/goral_biker_coupons.php" class="btn btn-secondary text-white">Return</a>

          </form>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
