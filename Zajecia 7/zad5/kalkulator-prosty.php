<?php
switch ($_POST['operation']){
    case '+':
        $result = $_POST['num1'] + $_POST['num2'];
        break;
    case '-':
        $result = $_POST['num1'] - $_POST['num2'];
        break;
    case '*':
        $result = $_POST['num1'] * $_POST['num2'];
        break;
    case '/':
        $result = $_POST['num1'] / $_POST['num2'];
        break;
}
echo "{$_POST['num1']} + {$_POST['num2']} = $result";
?>