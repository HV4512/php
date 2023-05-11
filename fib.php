<?php
function fib($n)
{
    if($n==0)
    return 0;
    else if($n==1)
    return 1;
    else
    return fib($n-1)+fib($n-2);
}
$n=10;
for($i =0; $i<$n;++$i){
    echo fib($i)    ;
    echo (" ");
}
?>