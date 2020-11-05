<?php

include("registration.html");
$first_name = filter_input(INPUT_POST, 'firstname');
$last_name = filter_input(INPUT_POST, 'lastname');
$DO_B = filter_input(INPUT_POST, 'DOB');
$emailID = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

    if(empty($first_name))
    {
        echo 'please enter firstname. <br>';
    }
    if (empty($last_name))
    {
        echo "please enter lastname. <br>";
    }
    if (empty($DO_B))
    {
        echo "please enter DOB. <br>";
    }
    if($emailID)

        $id = strpos($emailID, "@");
            if ($id == false)
            {
                echo "Please insert '@' symbol is missing in Email address. <br>";
            }
            if (empty($emailID))
            {
                echo "Email address is empty. please insert emil address with '@' symbol. <br>";
            }

    if ($password)

        $passid = strlen($password);

            if ($passid < 8)
            {
                echo "Password is not valid. it should be at least 8 character. <br>";
            }
            if (empty($passid))
            {
                echo "Password is empty. please insert password with 8 character. <br>";
            }
?>