<?php
//Make a sorting thing
require_once("db-connect.php");
if(!isset($_GET["id"])){
    header("location: 404.php");
}

$id=$_GET["id"];
// echo $id;

$select = mysqli_query($conn, "SELECT * FROM product_category WHERE product_category_id = '".$_GET["id"]."'");
if(mysqli_num_rows($select) == 0) {
    exit('This Method Does Not Exist');
}else{
//SOFT DELETE
$sql="DELETE FROM product_category WHERE product_category_id ='$id'";



if ($conn->query($sql) === TRUE) {
    	echo "ja";
} else {
    	echo "nein: " . $conn->error;
}
$conn->close();
header("location: product_category_page.php");
}
?>