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
    $user_name		= filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $user_password		= filter_var($_POST["user_password"], FILTER_SANITIZE_STRING);



    $result = user_login($user_name,$user_password);


    if ($result == 1){
        $output = json_encode(array( //create JSON data
            'type'=>'text',
            'text' => 'You are login'
        ));
        $_SESSION['username'] = $user_name;



    }else{
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Invalid user name or password'
        ));

    }

    die($output); //exit script outputting json data

}
?>