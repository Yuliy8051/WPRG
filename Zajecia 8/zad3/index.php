<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="text" required>
        <br>
        <select name="operation">
            <option value="reverse">Odwrócenie ciągu znaków</option>
            <option value="toUpper">Zamiana wszystkich liter na wielkie</option>
            <option value="toLower">Zamiana wszystkich liter na małe</option>
            <option value="length">Liczenie liczby znaków</option>
            <option value="trim">Usuwanie białych znaków z początku i końca ciągu</option>
        </select>
        <br>
        <input type="submit" value="Wykonaj">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        switch ($_POST["operation"]){
            case "reverse":
                echo strrev($_POST["text"]);
                break;
            case "toUpper":
                echo strtoupper($_POST["text"]);
                break;
            case "toLower":
                echo strtolower($_POST["text"]);
                break;
            case "length":
                echo strlen($_POST["text"]);
                break;
            case "trim":
                echo trim($_POST["text"]);
                break;
        }
    }
    ?>
</body>
</html>