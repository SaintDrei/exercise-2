<?php
    include 'config.php';

    $sql_view = "SELECT p.productID, c.categoryName, p.productImage, p.productName, p.productPrice FROM Products p
    INNER JOIN Categories c ON p.categoryID = c.CategoryID";

    $results = $con->query($sql_view);
?>


<!DOCTYPE Html>
<html>
    <head>
        <title>Product Catalog</title>
        <link href="http://bootswatch.com/cosmo/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="col-lg-3">
                <div class="well">
                    <h3 class="text-center">Advanced Search</h3>
                </div>    
            </div>
            <div class="col-lg-9">
                <div class="text-center">Product Catalog</div>
                <?php
                    while ($row = mysqli_fetch_array($results)){
                        $pid = $row['productID'];
                        $image = $row['productImage'];
                        $name = $row['productName'];
                        $cat = $row['categoryName'];
                        $price = $row['productPrice'];
                        
                        echo " 
                        <div class='col-lg-4'>
                            <a href='details.php?id=$pid' style='text-decoration:none;'>
                            <div class='thumbnail'>
                                <img src='img/products/$image' alt='$name' />
                                <div class='caption'>
                                    <h3>$name</h3>
                                    <small>Category: $cat</small><br>
                                    <small>Php$price</small>
                                    <hr/>
                                    <a href='Account/AddToCart.php?id=$pid' class='btn btn-success btn-block'> Add to Cart </a
                                </div>
                            </div>
                        </div>
                        </a>
                        </div>
                        ";
                    }
                ?>
                
            </div>
        </div>
    </body>
</html>
