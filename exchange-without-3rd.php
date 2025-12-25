<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="n1" placeholder="number 1">
        <br>
        <br>
        <input type="text" name="n2" placeholder="number 2">
        <br>
        <br>
        <button type="submit">Submit</button>
        <br>
        <br>
    </form>

    <?php
        if(isset($_POST['n1'])){
            $n1 = (int)$_POST['n1'];
            $n2 = (int)$_POST['n2'];
            $n1 = $n1 + $n2;
            $n2 = $n1 - $n2;
            $n1 = $n1 - $n2;
            echo 'number 1: ' . $n1 . '<br>';
            echo 'number 2: '. $n2 . '<br>';
        }
    ?>
</body>
</html>