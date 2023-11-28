<?php
$jsonDataFile = 'json_data.json';

// Check if the file exists
if (file_exists($jsonDataFile)) {
    // Read the JSON file and decode it
    $jsonData = json_decode(file_get_contents($jsonDataFile), true);

    // Get the post ID from the request (you may sanitize and validate this input)
    $postId = isset($_GET['post_id']) ? $_GET['post_id'] : null;

    // Check if the post ID is valid
    if ($postId && isset($jsonData['blog_posts'][$postId])) {
        $post = $jsonData['blog_posts'][$postId];
    } else {
        echo '<p>Error: Invalid blog post ID.</p>';
        exit();
    }
} else {
    echo '<p>Error: JSON data file not found.</p>';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($post['title']); ?> - Blog Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>

    <div>
        <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
        <p>Published on: <?php echo htmlspecialchars($post['timestamp']); ?></p>
        <!-- Add other details as needed -->
    </div>

    <p><a href="index.php">Back to Homepage</a></p>
</body>
</html>
