<?php
include "connect-db-ol.php";

function getItemsByCat($catagoryId)
{
    foreach ($db->query('SELECT * FROM items as i WHERE categoryid = '. $catagoryId .'') as $row) {
        $image = 'img/' . $row['image'] . '.jpg';
        echo
            '<div class="card">
                    <img src="' . $image . '"alt="' . $image . '" style="width:100%">
                    <h3>' . $row["name"] . '</h3>
                    <p class="price">$' . $row["price"] . '</p>
                    <p><a href="additem.php">Add to Cart</a></p>
                </div>';
    }
}

