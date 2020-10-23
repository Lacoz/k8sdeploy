<?php

$stdout = fopen('php://stdout', 'w');

echo "Hello from ". gethostname();

fwrite($stdout, json_encode($_ENV));
fwrite($stdout, "stdout\n");

?>
