<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<?php
$n1=0;
$n2=0;
$op=0;
$n1=$_POST['number1'];
$n2=$_POST['number2'];
$op=$_POST['operation'];
$result=" ";
if(is_numeric($n1)&& is_numeric($n2))
{

    switch($op)
    {
        case 'add':
            $result= $n1+$n2;
            break;
            case 'sub':
                $result= $n1-$n2;
                break;
                case 'mul':
                    $result= $n1*$n2;
                    break;
                    case 'div':
                        $result=$n1/$n2;
                    }
                }
?>

<body>
 <center>   <form action="" method="POST" >
        <input type="number" name="number1" placeholder="Enter Number 1" value="<?php echo $n1 ?>" ><br>
        <input type="number" name="number2" placeholder="Enter Number 2" value="<?php echo $n2 ?>" ><br>
        <input readonly="readonly" name="result" placeholder="Result will be displayed here" value="<?php echo $result?>">
        <input type="submit" name="operation" value="add">
        <input type="submit" name="operation" value="sub">
        <input type="submit" name="operation" value="mul">
        <input type="submit" name="operation" value="div">
            </form>
            </center>
</body>
</html>
