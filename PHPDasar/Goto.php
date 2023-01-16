<?php

goto a;
b:
echo "For Looping" . PHP_EOL;
for ($i = 0; $i < 5; $i++) {
    echo "* " . PHP_EOL;
}
goto c;

a:
echo "melangkah";
goto b;

c:
echo "done";

?>