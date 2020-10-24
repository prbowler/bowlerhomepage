<?php

    include "connect-db-ol.php";
    $id = $_GET['item_id'];
    echo "id = $id";
    $query = 'SELECT * FROM items WHERE id = ' . $id .'';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $item = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($item);
    /*
    $image = 'img/' . $item['image'] . '.jpg';
    echo
        '<div class="card">
                <img src="' . $image .'"alt="'. $image .'" style="width:100%">
                <h3>' . $item["name"] . '</h3>
                <p class="price">$' . $item["price"] . '</p>
                <p><a href="additem.php">Add to Cart</a></p>
            </div>';
    */

