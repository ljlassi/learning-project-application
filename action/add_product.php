<?php

require_once("../config.php");
require_once(PROJECT_DIR . '/db/ConnectDB.php');
require_once(PROJECT_DIR . '/Controller/ProductController.php');
require_once(PROJECT_DIR . '/Model/Product.php');

$connect_db = new ConnectDB();
$connect_db->connectToDB();
$db = $connect_db->getDBObject();
$product_name = htmlspecialchars($_POST['product_name']);
$product_price = htmlspecialchars($_POST['product_price']);
$product_id = 0;
$product = new Product($product_id, $product_name, $product_price);
$product_controller = new ProductController();
if ($product_controller->addNewProduct($db, $product) === 1) {
  echo "Product added";
  echo '<p><a href="' . SITE_URL . '">Back to front page</a></p>';
}
