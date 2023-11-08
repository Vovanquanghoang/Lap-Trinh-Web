<?php
include("../Bai12/funtions.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['rate_submit'])) {
        if (isset($_POST['rate'])) {
            $rate = $_POST['rate'];
            setRatingInfo($id, $rate);
        }
    }
    $html = getProduct($id);
    include("../Bai12/template/view-product.php");
} else {
    $html = listProduct();
    include("../Bai12/template/products.php");
}

