<?php
$jsonDataFile = 'json_data.json';

// Check if the file exists
if (file_exists($jsonDataFile)) {
    // Read the JSON file and decode it
    $jsonData = json_decode(file_get_contents($jsonDataFile), true);

    // Return blog posts as JSON
    header('Content-Type: application/json');
    echo json_encode($jsonData);
} else {
    // Return an error message
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(['error' => 'json data file not found.']);
}
?>
