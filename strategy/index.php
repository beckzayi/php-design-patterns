<?php
interface Logger {
    public function log($data);
}

class LogToFile implements Logger {
    public function log($data) {
        var_dump('Log to file');
    }
}

class LogToDatabase implements Logger {
    public function log($data) {
        var_dump('Log to Database');
    }
}

class App {
    public function log($data, Logger $logger) {
        $logger->log($data);
    }
}

$logger = new LogToDatabase;
$app = new App;
$app->log('Something to add', $logger);
