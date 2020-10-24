<?php


function getItemsByCat($catagoryId)
{
    include "connect-db-ol.php";

    foreach ($db->query('SELECT * FROM items as i WHERE categoryid = 1') as $row) {
        $image = 'img/' . $row['image'] . '.jpg';
        $id = $row['i.id'];
        echo
            '<div class="card">
                <img src="' . $image .'"alt="'. $image .'" style="width:100%">
                <h3>' . $row["name"] . '</h3>
                <p class="price">$' . $row["price"] . '</p>
                <p><a href="additem.php">Add to Cart</a></p>
            </div>';
    }
}

