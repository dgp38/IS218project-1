<?php
include("question.html");
$questioname = filter_input(INPUT_POST, 'quesname');
$questionbody = filter_input(INPUT_POST, 'quesbody');
$questionskill = filter_input(INPUT_POST, 'quesskill');

if($questioname)
    $name = strlen($questioname);

        if (empty($questioname))
        {
            echo "question column is empty. <br>";
        }

        elseif ($name < 4)
        {
            echo "Question name is too short. <br>";

        }

if($questionbody)
    $body = strlen($questionbody);
        if (empty($questionbody))
        {
            echo " Body question column is empty. <br>";
        }

        elseif ($body > 500)
        {
            echo "Question body is too short. <br>";

        }



$sk = explode("," ,$questionskill);
        $words = count($sk);
        if(empty($questionskill))
        {
            echo "Skills column is empty. <br>";
        }
            elseif ($words < 2)
            {
                echo "skill should be more then 2 skills. <br>";
                print_r($sk);

            }
        print_r($sk);
?>