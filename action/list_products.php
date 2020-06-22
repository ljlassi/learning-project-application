<?php
  require_once(__DIR__ . "/../config.php");
  require_once(PROJECT_DIR . '/db/ConnectDB.php');
  require_once(PROJECT_DIR . '/Controller/ProductController.php');
  require_once(PROJECT_DIR . '/Model/Product.php');

  $connect_db = new ConnectDB();
  $connect_db->connectToDB();
  $db = $connect_db->getDBObject();
  $products_controller = new ProductController();
  $products = $products_controller->listAllProducts($db);

  echo "<table class='table'>";

  foreach ($products as $product) {
    $product_name = htmlspecialchars($product['name']);
    $product_price = htmlspecialchars($product['price']);
    echo "<tr>";
    echo "<td>Product Id: </td>";
    echo "<td>" . $product['id'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Product Name: </td>";
    echo "<td>" . $product_name . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Product Price:</td>";
    echo "<td>" . $product_price . "€</td>";
    echo "</tr>";
  }

  echo "</table>";
