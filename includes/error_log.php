<?php
function logError($message) {
    $logFile = __DIR__ . '/../logs/logi.txt';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message\n";
    
    // Create logs directory if it doesn't exist
    if (!file_exists(dirname($logFile))) {
        mkdir(dirname($logFile), 0777, true);
    }
    
    // Append error message to log file
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}
?>