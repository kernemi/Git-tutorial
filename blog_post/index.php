<?php
$jsonDataFile = 'json_data.json';

// Check if the file exists
if (file_exists($jsonDataFile)) {
    // Read the JSON file and decode it
    $jsonData = json_decode(file_get_contents($jsonDataFile), true);

    // Check if there are posts to display
    if (!empty($jsonData['blog_posts'])) {
        // Loop through each blog post and display them
        foreach ($jsonData['blog_posts'] as $postId => $post) {
            echo '<div>';
            echo '<h2>' . htmlspecialchars($post['title']) . '</h2>';
            echo '<p>' . nl2br(htmlspecialchars($post['content'])) . '</p>'; // nl2br to preserve line breaks
            echo '<p>Published on: ' . htmlspecialchars($post['timestamp']) . '</p>';
            echo '<p><a href="delete_post.php?post_id=' . $postId . '" onclick="return confirm(\'Are you sure you want to delete this post?\');">Delete Post</a></p>';
            echo '<p><a href="post.php?post_id=' . $postId . '">View Post</a></p>';
            echo '</div>';
            echo '<hr>';
        }
    } else {
        echo '<p>No blog posts found.</p>';
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Blog Homepage</h1>

    <!-- Container to display blog posts dynamically -->
    <div id="json_data-container"></div>
    
    <p><a href="post.php">View Post</a></p>
    <p><a href="add_post.php">Add New Post</a></p>
    <p><a href="update_post.php">update Post</a></p>
    <p><a href="edit_post.php">Edit Post</a></p>

    <p><a href="register.php">Register now</a></p>
    <p>Already have an account  <a href="login.php">login</a></p>

    <script>
        // Use AJAX to fetch and display blog posts dynamically
        window.onload = function () {
            var jsonDataContainer = document.getElementById('json_data-container');

            // Create an XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure it to make a GET request to get_posts.php
            xhr.open('GET', 'get_posts.php', true);

            // Set up a callback function to handle the response
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Parse the JSON response
                        var jsonData = JSON.parse(xhr.responseText);

                        // Display each blog post in the container
                        jsonData.forEach(function (post) {
                            var postDiv = document.createElement('div');
                            postDiv.innerHTML = '<h2>' + post.title + '</h2>' +
                                '<p>' + post.content + '</p>' +
                                '<p>Published on: ' + post.timestamp + '</p>' +
                                '<p><a href="delete_post.php?post_id=' + post.post_id + '" onclick="return confirm(\'Are you sure you want to delete this post?\');">Delete Post</a></p>' +
                                '<hr>';
                            jsonDataContainer.appendChild(postDiv);
                        });
                    } else {
                        // Handle error
                        console.error('Failed to fetch json data:', xhr.status, xhr.statusText);
                    }
                }
            };

            // Send the request
            xhr.send();
        };
    </script>

</body>
</html>
