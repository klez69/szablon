<?php
require_once 'error_log.php';

header('Content-Type: application/json');

try {
    // Get JSON data
    $jsonData = file_get_contents('php://input');
    $data = json_decode($jsonData, true);

    if (!$data) {
        throw new Exception('Invalid JSON data received');
    }

    $errorMessage = sprintf(
        "JavaScript Error: %s\nLocation: %s\nDetails: %s",
        $data['error'] ?? 'Unknown error',
        $data['location'] ?? 'Unknown location',
        json_encode($data, JSON_PRETTY_PRINT)
    );
    
    logError($errorMessage);
    
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    logError('Error in log_error.php: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>