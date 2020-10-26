<?php
try {
    require_once 'vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    $stdout = fopen('php://stdout', 'w');
    
    print("HOSTNAME: ". gethostname() . ", ELASTICSEARCH_HOST: ". $_ENV['ELASTICSEARCH_HOST']);

    fwrite($stdout, json_encode($_ENV, JSON_PRETTY_PRINT));
    fclose($stdout);
} catch (Exception $e) {
    header("HTTP/1.1 503"); 
    print($e->getMessage());
} 
?>
