<?php
require('util/main.php');

require('model/database.php');
require('model/product_db.php');

/*********************************************
 * Select some products
 **********************************************/

// Sample data
$cat_id = 1;

// Get the products
$products = get_products_by_category($cat_id);

/***************************************
 * Delete a product
 ****************************************/

// Sample data
$product_name = 'Fender Telecaster';
// Retrieve product details by name
$product = get_product_by_name($product_name);

// Dump the product details to inspect them
//var_dump($product);

// Check if product exists and get the product ID
if ($product) {
    $productID = $product['productID'];

    // Dump the product ID to inspect it
    //var_dump($productID);

    // Delete the product
    $row_count = delete_product($productID);

    // Display an appropriate message
    if ($row_count > 0) {
        $delete_message = "Product with ID $productID was deleted.";
    } else {
        $delete_message = "No product was deleted.";
    }
} else {
    $delete_message = "Product not found.";
}




/***************************************
 * Insert a product
 ****************************************/

// Sample data
$category_id = 1;
$code = 'tele';
$name = 'Fender Telecaster';
$description = 'NA';
$price = '949.99';

// Insert the data

$newProduct_id = add_product($category_id, $code, $name, $description, $price, $discount_percent = 0);

// Check if the product was added successfully and display a message
if ($newProduct_id) {
    $insert_message = "Product with ID $newProduct_id was successfully added.";
} else {
    $insert_message = "Failed to add the product.";
}

include 'home.php';
?>