<?php
function pdrome($s)
{
    $rs= strrev($s);
    if($rs==$s)
    echo ("$s is a palindrome<br>");
    else
    echo ("$s is not a palindrome<br>");
}
pdrome("apple");
pdrome("mom");
pdrome("madam");
?>