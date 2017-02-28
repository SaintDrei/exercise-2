<?php 
    include '../config.php';
    $sql_cat = "SELECT categoryName, categoryID FROM categories ORDER BY categoryName";
    $result = $con->query($sql_cat);
    $options = "";
    
    while ($row = mysqli_fetch_array($result))
    {
        $options = $options . "<option value='" . $row['categoryID'] . "'>" . $row['categoryName'] . "</option>";
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Add a Product</title>
        <link href="http://bootswatch.com/cosmo/bootstrap.min.css" rel="stylesheet">
        <link href="../css/jasny-bootstrap.min.css" rel="stylesheet">
        <script src="../ckeditor/ckeditor.js"></script>
        
    </head>
    <body>
        <div class="container">
            <div class="col-lg-offset-3 col-lg-6">
                <h1 class="text-center">Add a Product</h1>
                <form method="POST" class="well form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-lg-4">Category</label>
                        <div class="col-lg-8">
                            <select name="category" class="form-control" required>
                                <option value="">Select one...</option>
                                <option value="">Appetizer</option>                                        
                                <option value="">Beverages</option>   
                                <option value="">Main Course</option>   
                                <option value="">Soup</option>   
                                <option value="">Desert</option>   
                                <?php echo $options; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Name</label>
                        <div class="col-lg-8">
                            <input name="name" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Description</label>
                        <div class="col-lg-8">
                            <textarea name="desc" rows="10" class="form-control">
                            
                            </textarea>
                            <script>
                                CKEDITOR.replace('desc');
                                
                            </script>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Price</label>
                        <div class="col-lg-8">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Image</label>
                        <div class="col-lg-8">
                            <input type="file" name="image" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-4 col-lg-8">
                            <button name="add" class="btn btn-success">
                                Add
                            </button>
                        </div>
                    </div>
                    
                    
                </form>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="../js/jasny-bootstrap.min.js"></script>
    </body>
</html>