<?php
    require_once "inc/functions/mockdb.php";

    $productId = $_GET["product_id"];
    $product = fetchProductDetailsById($productId);

    // TODO: What happened if the ID is invalid?
?>

<?php require_once "inc/shared/header.php"; ?>

<div class="container">
    <h1><?=$product["name"] ?></h1>
    <p><h1><?=$product["description"] ?></h1></p>
</div>

<?php require_once "inc/shared/footer.php"; ?>