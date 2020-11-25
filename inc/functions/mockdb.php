<?php

// This file is simply for mocking a database with hardcoded data.
// It should be removed from the project and calling the database.
$PRODUCTS = array(
        "1" => array("id" => 1, "name" => "Produit #1", "description" => "La description du produit #1"),
        "2" => array("id" => 2, "name" => "Produit #2", "description" => "La description du produit #2")
);

function fetchProductDetailsById($id) {
    global $PRODUCTS;
    if (isset($PRODUCTS[$id])) {
        return $PRODUCTS[$id];
    }
    return null;
}
