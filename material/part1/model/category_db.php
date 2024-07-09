<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
}


function delete_category($categoryID) {
    global $db;
    $query = 'DELETE FROM categories
              WHERE categoryID = :categoryToDeleteID';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryToDeleteID', $categoryID);
    $statement->execute();
    $statement->closeCursor();
}

function add_category($categoryName) {
    global $db; // Assuming $db is the PDO database connection object

    // Define the SQL query to insert a new category
    $query = 'INSERT INTO categories (categoryName)
              VALUES (:categoryName)';
    
    // Prepare the SQL statement
    $statement = $db->prepare($query);

    // Bind the value to the SQL statement
    $statement->bindValue(':categoryName', $categoryName);

    // Execute the statement
    $statement->execute();

    // Close the cursor to free up the connection to the server
    $statement->closeCursor();
}

?>