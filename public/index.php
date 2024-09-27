<?php
require '../vendor/autoload.php';
require '../src/Factory/ContentFactory.php';

// Get the request URI
$requestUri = $_SERVER['REQUEST_URI'];

try {
    switch ($requestUri) {
        case '/founder/text':
            $content = \Factory\ContentFactory::createContent('text');
            echo $content->render();
            break;

        case '/founder/html':
            $content = \Factory\ContentFactory::createContent('html');
            echo $content->render();
            break;

        case '/founder/pdf':
            // Get the content object for PDF
            $pdfContent = \Factory\ContentFactory::createContent('pdf');
            // Render the PDF
            $pdfContent->render();
            exit; // Ensure no further output occurs

        default:
            echo "404 Not Found";
            break;
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
