<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="n1" placeholder="Test Data">
        <br>
        <br>
        <input type="text" name="n2" placeholder="Test Data">
        <br>
        <br>
        <select name="op" id="">
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="mul">Mul</option>
            <option value="div">Div</option>
        </select>
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
        if(isset($_POST['n1'])){
            $op = match($_POST['op']){
                'add' => '+',
                'sub' => '-',
                'mul' => '*',
                'div' => '/',
            };
            $n1 = (int)$_POST['n1'];
            $n2 = (int)$_POST['n2'];
            eval("echo '<br>result: ' . $n1 $op $n2;");
        }
    ?>
</body>
</html>