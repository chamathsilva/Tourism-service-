<?php

require "dbfunctions.php";
$promotions = get_all_promotions();

$temp = 1;

foreach ($promotions as $row) {


    $id = $row['p_id'];
    $hotale_name = $row['hotel_name'];
    $start_date = $row['start_date'];
    $end_date = $row['end_date'];
    $description = $row['description'];

    $temp2 = '<button type="submit" formaction="updatePromotions.php?id='.$id.'&name='.$hotale_name.'&date='.$start_date.'&disc='.$description.'"class="btn btn-success buttonmargin">Update</button>';
    //$temp3 = '<button type="submit" formaction="../controllers/Delete_promotion.php?id='.$id.' "class="btn btn-danger buttonmargin">Delete</button>';

    $temp3 = '<button type="submit" onclick="myFunction('.$id.')" class="btn btn-danger buttonmargin">Delete</button>';


    echo '<tr class="cart_item">';

    echo '<td class="product-price">';
    echo '<span class="amount">'.$temp.'</span>';
    echo '</td>';

    echo '<td class="product-name">';
    echo '<a>'.$hotale_name.'</a>';
    echo '</td>';

    echo '<td class="product-name">';
    echo '<span class="amount">'.$start_date.'</span>';
    echo '</td>';

    echo '<td class="product-quantity">';
    echo '<span class="amount">';
    echo '<form action="update_user.php?id = test" role = "form" method="post">';
    echo $temp2;
    echo '</form>';
    echo '</span>';
    echo '</td>';

    echo '<td class="product-name">';
    echo '<span class="amount">'.$temp3.'</span>';
    echo '</td>';



    echo '</tr>';

    $temp += 1;

}


