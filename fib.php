<?php
function fib($num)
{
    if($num==0)
        return 0;
    else if($num==1)
        return 1;
    else
        return fib($num - 1) + fib($num - 2);
}
$num = 10;
for($i = 0;$i<$num;$i++)
{
    echo fib($i),' ';
}

?>