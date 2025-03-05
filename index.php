<?php
$requestUri = $_SERVER['REQUEST_URI'];
$filePath = __DIR__ . $requestUri;

// Check if the requested file exists
if (file_exists($filePath) {
    // Serve the file
    $mimeType = mime_content_type($filePath);
    header("Content-Type: $mimeType");
    readfile($filePath);
} else {
    // Default response
    echo "Hello, World!";
}
?>
