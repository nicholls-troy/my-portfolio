<?php

/**
 * This function allows us to output the values pressed to the screen.
 */
function getInputAsString($values) {
    $output = "";
    foreach ($values as $value) {
        $output .= $value;
    }
    return $output;  
}

/**
 * This function first allows us to concatenate more than one number together, which could also be a decimal.
 * When entering the else if, for example the number is 123 and we hit "+" on the calculator,
 * 123 will be added to the array so we can add the next number. We make $char = "" to empty it for a new value.
 * Secondly, we will calculate the user input in this function.
 */
function calculateInput($userInput) {
    //Format user input
    $array = [];
    $char = "";
    foreach ($userInput as $number) {
        if(is_numeric($number) || $number == ".") {
            $char .= $number;
        } else if (!is_numeric($number)) {
            if (!empty($char)) {
                $array[] = $char;
                $char = "";
            }
            $array[] = $number;
        }
    }
    if (!empty($char)) {
        //This is so when we add the second set of numbers, it will add it to the array without having to hit a symbol.
        $array[] = $char;
    }
    
    //Calculate user input
    $current = 0;
    $action = null;

    for ($i=0; $i<= count($array)-1; $i++) {
        if (is_numeric($array[$i])) { //If we find a number
            if ($action) { //If we have an action pressed 
                if ($action == "+") {
                    $current = $current + $array[$i]; //We add the current number to the array at the index
                }
                if ($action == "-") {
                    $current = $current - $array[$i]; //We subtract the current number to the array at the index
                }
                if ($action == "x") {
                    $current = $current * $array[$i]; //We multiply the current number to the array at the index
                }
                if ($action == "/") {
                    $current = $current / $array[$i]; //We divide the current number to the array at the index
                }
                $action = null; //Then we set the action back to null so we can use any action again.
            } else { //If no action is pressed 
                if ($current == 0) { //If the current number is zero
                    $current = $array[$i]; //Add the first number to the array.
                }
            }
        } else { //If it is not numeric, we add the action pressed to the array.
            $action = $array[$i];
        }
    }
    
    return $current;

}
?>