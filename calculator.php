<?php
require_once 'calculator_functions.php';

$currentValue = 0;
$input = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['input'])) {
        $input = json_decode($_POST['input']);
    }

    if (isset($_POST)) {
        foreach ($_POST as $key=>$value) {
            if ($key == 'equal') {
                $currentValue = calculateInput($input); //Current value gets the calculated input by the users input.
                $input = []; //We set the user input to an empty array.
                $input[] = $currentValue; //We add the current value of the numbers to the input array.
            } else if ($key == 'ce') {
                array_pop($input); //This will remove the last entry from the array.
            } else if ($key == 'c') {
                $input = [];
                $currentValue = 0;
            } else if ($key == 'back') {
                $lastPointer = count($input)-1;
                if (is_numeric($input[$lastPointer])) {
                    array_pop($input);
                }
            } else if ($key != 'input') {
                $input[] = $value;
            }
        }
    }
}
?>