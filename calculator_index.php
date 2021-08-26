<?php 
require 'calculator.php';
require_once 'calculator_functions.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator by Troy Nicholls</title>
</head>
<body>
    <div class="calculator">
        <h2>Calculator</h2>
        <form method="POST">
            <input type="hidden" name="input" value='<?php echo json_encode($input); ?>'/>
            <input type="text" class="calculator-screen" value="<?php echo getInputAsString($input); ?>" disabled/>
            <div class="calculator-keys">
                <button type="submit" name="ce" value="ce">ce</button>
                <button type="submit" class="all-clear" name="c" value="c">c</button>
                <button type="submit" name="back" value="back">&#8592;</button>
                <button type="submit" class="operator" name="divide" value="/">&#247;</button>
                <button type="submit" name="7" value="7">7</button>
                <button type="submit" name="8" value="8">8</button>
                <button type="submit" name="9" value="9">9</button>
                <button type="submit" class="operator" name="multiply" value="x">x</button>
                <button type="submit" name="4" value="4">4</button>
                <button type="submit" name="5" value="5">5</button>
                <button type="submit" name="6" value="6">6</button>
                <button type="submit" class="operator" name="subtract" value="-">-</button>
                <button type="submit" name="1" value="1">1</button>
                <button type="submit" name="2" value="2">2</button>
                <button type="submit" name="3" value="3">3</button>
                <button type="submit" class="operator" name="add" value="+">+</button>
                <button type="submit" name="plusminus" value="+-">&#177;</button>
                <button type="submit" name="zero" value="0">0</button>
                <button type="submit" class="decimal" name="decimal" value=".">.</button>
                <button type="submit" class="equal" name="equal" value="=">=</button>
            </div>
        </form>
    </div>
</body>
</html>

<style>

/* Basic CSS Reset - Sets the margin and padding of every HTML element to zero and the box-sizing:border-box
declaration changes the box model by ensuring that the padding and border of an element no longer inreases its width. */

html {
    font-size:62.5%;
    box-sizing: border-box;
}
*, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: inherit;
}

/* Calculator Buttons */
button {
  height: 60px;
  background-color: #fff;
  border-radius: 3px;
  border: 1px solid #c4c4c4;
  background-color: transparent;
  font-size: 2rem;
  color: #333;
  background-image: linear-gradient(to bottom,transparent,transparent 50%,rgba(0,0,0,.04));
  box-shadow: inset 0 0 0 1px rgba(255,255,255,.05), inset 0 1px 0 0 rgba(255,255,255,.45), inset 0 -1px 0 0 rgba(255,255,255,.15), 0 1px 0 0 rgba(255,255,255,.15);
  text-shadow: 0 1px rgba(255,255,255,.4);
}

button:hover {
  background-color: #eaeaea;
}

h2 {
    text-align: center;
}

.operator {
  color: #337cac;
}

.all-clear {
  background-color: #f0595f;
  border-color: #b0353a;
  color: #fff;
}

.all-clear:hover {
  background-color: #f17377;
}

.equal {
  background-color: #2e86c0;
  border-color: #337cac;
  color: #fff;
}

.equal:hover {
  background-color: #4e9ed4;
}

/* Calculator Styles */

/* This will absolutely center the calculator on the page and give it a border and a fixed width. */
.calculator {
    border: 1px solid #ccc;
    border-radius: 5px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
}

.calculator-screen {
    width: 100%;
    font-size: 2.5rem;
    height: 40px;
    border: none;
    background-color: #252525;
    color: #fff;
    text-align: right;
    padding-right: 20px;
    padding-left: 10px;
}

.calculator-keys {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-row-gap: 20px;
    grid-column-gap: 20px;
}

</style>