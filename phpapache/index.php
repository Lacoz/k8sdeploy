<?php

$stdout = fopen('php://stdout', 'w');

echo "Hello from ". gethostname();

fwrite($stdout, "stdout\n");

?>
