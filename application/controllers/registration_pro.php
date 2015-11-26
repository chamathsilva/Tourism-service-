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
    $usernamee		= filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $firstname		= filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
    $lastname		= filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
    $password	= filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $email		= filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $nic	= filter_var($_POST["nic"], FILTER_SANITIZE_STRING);
    $contact		= filter_var($_POST["contact"], FILTER_SANITIZE_STRING);


    $result = add_registered_user_details($usernamee,$firstname,$lastname,$password,$email,$nic,$contact,0);

    if ($result == 1){
        $output = json_encode(array( //create JSON data
            'type'=>'text',
            'text' => 'You are Registerd<br>Login now'
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