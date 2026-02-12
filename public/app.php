<?php
if (isset($_POST['number1'])) {
    $num1 = $_POST['number1'];
    $oprator = $_POST['oprator'];
    $num2 = $_POST['number2'];
    $result = null;
    switch ($oprator) {
        case 'plus':
            $result = $num1 + $num2;
            break;
        case 'minus':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        default:
            $result = $num1 / $num2;
            break;
    }
}
