<?php

include("loginform.html");

$emailID = filter_input(INPUT_POST, 'emailID');
$password = filter_input(INPUT_POST, 'password');

    if($emailID)

            $id = strpos($emailID, '@');

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