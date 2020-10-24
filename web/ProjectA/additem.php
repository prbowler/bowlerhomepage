<?php

    include "connect-db-ol.php";
    $id = $_GET['item_id'];
    echo "id = $id";
    $query = 'SELECT * FROM items WHERE id = ' . $id .'';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($items);
    $item = $items[0];
    $image = 'img/' . $item['image'] . '.jpg';
    $name = $item['name'];
    $price = $item['price'];
     echo
        '<div class="card">
                <img src="' . $image .'"alt="'. $image .'" style="width:20%">
                <h3>' . $name . '</h3>
                <p class="price">$' . $price . '</p>
            </div>';


