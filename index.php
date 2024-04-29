<?php include 'parts/header.php'; ?>
<?php include 'conn.php'; ?>

<div class="container">
    <h2>Product Grid</h2>
    <div class="grid gap">
        <?php
        $products = getAllProducts();
        foreach ($products as $product) {
            echo '<div class="col-xs-12 col-md-4">';
            echo '<figure class="figure product">';
            echo '<img src="' . $product['thumbnail'] . '" alt="' . $product['name'] . '">';
            echo '<figcaption>';
            echo '<div>' . $product['name'] . '</div>';
            echo '<div>$' . $product['price'] . '</div>';
            echo '</figcaption>';
            echo '</figure>';
            echo '</div>';
        }
        ?>
    </div>
</div>


<?php include 'parts/footer.php'; ?>
