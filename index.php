<?php
require 'vendor/autoload.php';

// Function to convert Markdown to HTML
function markdown_to_html($markdown_file) {
    // Check if the file exists
    if (file_exists($markdown_file)) {
        // Read Markdown content from file
        $markdown_content = file_get_contents($markdown_file);
        // Create Parsedown object
        $parsedown = new Parsedown();
        // Convert Markdown to HTML
        $html_content = $parsedown->text($markdown_content);
        // Return HTML content
        return $html_content;
    } else {
        // If file doesn't exist, return an error message
        return "<p>Error: Markdown file not found!</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markdown Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="p-5 ">
    <div  id="markdown-content">
        <?php
        // Call the function to display Markdown content
        echo markdown_to_html('example1.md');
        ?>
    </div>
    </div>
</body>
</html>
