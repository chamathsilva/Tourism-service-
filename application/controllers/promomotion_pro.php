<?php

require "dbfunctions.php";
if($_POST)

{

    //check if its an ajax request, exit if not

    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    }



    //Sanitize input data using PHP filter_var().
    $offername		= filter_var($_POST["offername"], FILTER_SANITIZE_STRING);
    $valid		= filter_var($_POST["valid"], FILTER_SANITIZE_STRING);
    $info		= filter_var($_POST["Info"], FILTER_SANITIZE_STRING);




    $result = add_Promotion($offername,$valid,$valid,$info);


    if ($result == 1){
        $output = json_encode(array( //create JSON data
            'type'=>'text',
            'text' => 'your promotion publish'
        ));
    }else{
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Some thing wrong with database try again later'
        ));

    }


    die($output);



}
?>