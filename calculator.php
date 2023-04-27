<?php
    $x = $_GET['num1'];
    $y = $_GET['num2'];

    $op = $_GET['operation'];

    switch($op){
        case 'add': $result = $x+$y;break;
        case 'sub': $result = $x-$y;break;
        case 'mul': $result = $x*$y;break;
        case 'div': $result = $x/$y;break;
    }

?>




<html>
    <head>
        <title>php calculator</title>
    </head>
<body>
    <form action ="<?=$_SERVER['PHP_SELF']?>" method = "get">
    <div>
        <label for="num1">Number1</label>
        <input type = "number" name = "num1" id = "num1" value="<?=$x?>">
        <br><br>
    </div>
    <div>
        <label for = "num2">Number2</label>
        <input type="number" name = "num2" id = "num2" value="<?=$y?>">
        <br><br>
    </div>
    <div>
        <label for="result">result</label>
        <input type = "number" id ="result" value = "<?=$result ?>" disabled>
    </div>
    <div>
        <input type="submit" value="add" name="operation">
        <input type="submit" value="sub" name="operation">
        <input type="submit" value="mul" name="operation">
        <input type="submit" value="div" name="operation">
    </div>
    </form>
</body>
</html>