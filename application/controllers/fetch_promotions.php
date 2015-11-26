<?php

require "dbfunctions.php";
$promotions = get_all_promotions();



foreach ($promotions as $row) {



    $hotale_name = $row['hotel_name'];
    $start_date = $row['start_date'];
    $end_date = $row['end_date'];
    $description = $row['description'];


    echo '<li>';
    echo '<div class="col_1_of_3 span_1_of_3">';
    echo '<div class="view view-fifth">';
    echo '<div class="top_box">';
    echo '<div class="price">'."$hotale_name".'</div>';
    echo '<p class="m_2">colombo</p>';
    echo '<div class="grid_img">';
    echo '<div class="css3"><img src="../../images/promotion.png" alt=""/></div>';
    echo '</div>';
    echo '<p class="m_2">Start Date : '."$start_date".'</p>';
    echo '<p class="m_2">End Date : '."$end_date".'</p>';
    echo '<p class="m_2">'."$description ".'</p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="clear"></div>';
    echo '</div>';
    echo '</li>';


}








