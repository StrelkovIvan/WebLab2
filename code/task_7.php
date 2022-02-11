<?php
function printStringReturnNumber()
{
    echo "text\n <br>";
    return 3;
}
$int = printStringReturnNumber();
echo $int;
