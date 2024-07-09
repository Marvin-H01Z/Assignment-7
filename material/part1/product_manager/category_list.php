<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>&nbsp;</th>
        </tr>        
        
        <?php foreach ($categories as $category) : ?>
            <tr>
                <!-- add category rows here -->
                <td><?php echo $category['categoryName']; //categoryName is the Name in the DB ?></td> 
                <td><?php echo $category['categoryID']; ?></td>
                <!-- Delete Buton and calling delete function in product_manager/index -->
                <td><form action="." method="post">
                    <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="categoryToDelete" value="<?php echo $category['categoryID']; ?>">
                    <input type="submit" value="Delete this F*er"> <!-- The visible Buton -->
                </form></td>
            </tr> 
        <?php endforeach; ?>
        
    </table>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="add_category">

        <h2>Add Category</h2>
      
        <label>Category Name: </label>
        <input type="text" name="newCategoryName_POST" />
        <input type="submit" value="Add" />
        <br>
    </form>
    <!-- add code for form here -->

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>