<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Blog Post</h1>

    <?php
    // Assuming you have a unique identifier for the blog post (e.g., post ID) passed through the URL
    // Replace 'your_identifier_key' with the actual key used in your application
    $postId = isset($_GET['your_identifier_key']) ? $_GET['your_identifier_key'] : null;

    // Fetch the blog post data based on the identifier
    // Your logic for fetching the post data from your data source (JSON, database, etc.) goes here

    // Assuming $postData is an associative array containing post data
    $postData = [
        'title' => 'Sample Title', // Replace with actual title
        'content' => 'Sample Content', // Replace with actual content
        // Add other post data fields as needed
    ];

    // Check if the post data is valid
    if ($postId && $postData) {
    ?>
        <!-- Blog Post Edit Form -->
        <form action="update_post.php" method="post">
            <input type="hidden" name="post_id" value="<?php echo $postId; ?>">
            
            <label for="title">Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($postData['title']); ?>" required>

            <label for="content">Content:</label>
            <textarea name="content" rows="4" required><?php echo htmlspecialchars($postData['content']); ?></textarea>

            <!-- Add other input fields for editing additional post information -->

            <button type="submit">Update Post</button>
        </form>
    <?php
    } else {
        echo '<p>Error: Invalid blog post data.</p>';
    }
    ?>

    <p><a href="index.php">Back to Homepage</a></p>
</body>
</html>
