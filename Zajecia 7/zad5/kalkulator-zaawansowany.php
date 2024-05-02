<?php
function check($a){
    if (!is_numeric($a)){
        echo "wrong number!";
        exit();
    }

}
function is_binary($a) {
    if (bindec($a) == 0 && $a != 0){
        echo "wrong number!";
        exit();
    }
}
function is_hexadecimal($a){
    if (!ctype_xdigit($a)){
        echo "wrong number!";
        exit();
    }
}
switch ($_POST['operation']){
    case 'cos':
        check($_POST['num']);
        $result = cos($_POST['num']);
        break;
    case 'sin':
        check($_POST['num']);
        $result = sin($_POST['num']);
        break;
    case 'tg':
        check($_POST['num']);
        $result = tan($_POST['num']);
        break;
    case '2:10':
        is_binary($_POST['num']);
        $result = bindec($_POST['num']);
        break;
    case '10:2':
        check($_POST['num']);
        $result = decbin($_POST['num']);
        break;
    case '10:16':
        check($_POST['num']);
        $result = dechex($_POST['num']);
        break;
    case '16:10':
        is_hexadecimal($_POST['num']);
        $result = hexdec($_POST['num']);
        break;
}
if ($_POST['operation'] == 'cos' || $_POST['operation'] == 'sin' || $_POST['operation'] == 'tg')
    echo "{$_POST['operation']}({$_POST['num']}) = $result";
else {
    $systems = explode(':', $_POST['operation']);
    echo "({$_POST['num']})<sub>$systems[0]</sub> = ($result)<sub>$systems[1]</sub>";
}
?>
