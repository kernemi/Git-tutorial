<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Blog Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add New Blog Post</h1>

    <!-- Blog Post Form -->
    <form action="process_post.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea>

        <label for="image">Upload Image:</label>
        <input type="file" name="image" accept="image/*">

        <button type="submit">Add Post</button>
    </form>

    <p><a href="index.php">Back to Homepage</a></p>
</body>
</html>

