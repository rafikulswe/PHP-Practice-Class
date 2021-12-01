<?php 
    // $i = 1;
    // while ($i <= 100) {
    //     echo $i.' This was my mistake <br>';
    //     $i++;
    // }

    // for($i = 1; $i <= 50; $i++){
    //     echo $i.' This was my mistake <br>';
    // }
    $yearLimit = date('Y'); //2021
    $startYear = $yearLimit - 50; // 1921

    // for ($i=$startYear; $i <= $yearLimit; $i++) { 
    //     echo $i.'<br>';
    // }

    $fruits = ['mango', 'banana', 'apple', 'orange'];
    // var_dump($fruits[1]);
    $length = sizeof($fruits);
    for ($i=0; $i < $length; $i++) { 
        echo $fruits[$i]."<br>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <select name="" id="">
            <?php for ($i=$startYear; $i <= $yearLimit; $i++) { ?>
                <option value=""><?php echo $i; ?></option>
            <?php } ?>
        </select>
    </form>
</body>
</html>