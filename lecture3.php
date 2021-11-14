<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <?php 
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operator = $_POST["operator"];

        $result = '';
        switch ($operator) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
            case '/':
                $result = $number1 / $number2;
                break;
            
            default:
                echo 'invalid operator';
                break;
        }
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <!-- <input type="number" name="age"> -->
        <label for="">number One</label>
        <input type="number" name="number1">
        <br><br>
        <label for="">operator</label>
        <input type="text" name="operator">
        <br><br>
        <label for="">number Two</label>
        <input type="number" name="number2">
        <br><br>
        <input type="submit" value="Submit">
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<span>Result: $result</span>";
            }
        ?>
        
    </form>
</body>
</html>
