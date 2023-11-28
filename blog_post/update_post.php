<?php
// Assuming you have a JSON file named 'json_data.json' with an array of blog posts
$jsonDataFile = 'json_data.json';

// Check if the file exists
if (file_exists($jsonDataFile)) {
    // Read the JSON file and decode it
    $jsonData = json_decode(file_get_contents($jsonDataFile), true);

    // Get the post ID from the form submission
    $postId = isset($_POST['post_id']) ? $_POST['post_id'] : null;

    // Check if the post ID is valid
    if ($postId && isset($jsonData['blog_posts'][$postId])) {
        // Update the blog post data
        $jsonData['blog_posts'][$postId]['title'] = $_POST['title'];
        $jsonData['blog_posts'][$postId]['content'] = $_POST['content'];
        // Update other post data fields as needed

        // Write the updated data back to the JSON file
        file_put_contents($jsonDataFile, json_encode($jsonData));

        // Redirect to the homepage or display a success message
        header("Location: index.php");
        exit();
    } else {
        echo '<p>Error: Invalid blog post ID.</p>';
    }
} else {
    echo '<p>Error: JSON data file not found.</p>';
}
?>
<?php
// Assuming you have a JSON file named 'json_data.json' with an array of blog posts
$jsonDataFile = 'json_data.json';

// Check if the file exists
if (file_exists($jsonDataFile)) {
    // Read the JSON file and decode it
    $jsonData = json_decode(file_get_contents($jsonDataFile), true);

    // Get the post ID from the form submission
    $postId = isset($_POST['post_id']) ? $_POST['post_id'] : null;

    // Check if the post ID is valid
    if ($postId && isset($jsonData['blog_posts'][$postId])) {
        // Update the blog post data
        $jsonData['blog_posts'][$postId]['title'] = $_POST['title'];
        $jsonData['blog_posts'][$postId]['content'] = $_POST['content'];
        // Update other post data fields as needed

        // Write the updated data back to the JSON file
        file_put_contents($jsonDataFile, json_encode($jsonData));

        // Redirect to the homepage or display a success message
        header("Location: index.php");
        exit();
    } else {
        echo '<p>Error: Invalid blog post ID.</p>';
    }
} else {
    echo '<p>Error: JSON data file not found.</p>';
}
?>
<?php
// Assuming you have a JSON file named 'json_data.json' with an array of blog posts
$jsonDataFile = 'json_data.json';

// Check if the file exists
if (file_exists($jsonDataFile)) {
    // Read the JSON file and decode it
    $jsonData = json_decode(file_get_contents($jsonDataFile), true);

    // Get the post ID from the form submission
    $postId = isset($_POST['post_id']) ? $_POST['post_id'] : null;

    // Check if the post ID is valid
    if ($postId && isset($jsonData['blog_posts'][$postId])) {
        // Update the blog post data
        $jsonData['blog_posts'][$postId]['title'] = $_POST['title'];
        $jsonData['blog_posts'][$postId]['content'] = $_POST['content'];
        // Update other post data fields as needed

        // Write the updated data back to the JSON file
        file_put_contents($jsonDataFile, json_encode($jsonData));

        // Redirect to the homepage or display a success message
        header("Location: index.php");
        exit();
    } else {
        echo '<p>Error: Invalid blog post ID.</p>';
    }
} else {
    echo '<p>Error: JSON data file not found.</p>';
}
?>
<?php
// Assuming you have a JSON file named 'json_data.json' with an array of blog posts
$jsonDataFile = 'json_data.json';

// Check if the file exists
if (file_exists($jsonDataFile)) {
    // Read the JSON file and decode it
    $jsonData = json_decode(file_get_contents($jsonDataFile), true);

    // Get the post ID from the form submission
    $postId = isset($_POST['post_id']) ? $_POST['post_id'] : null;

    // Check if the post ID is valid
    if ($postId && isset($jsonData['blog_posts'][$postId])) {
        // Update the blog post data
        $jsonData['blog_posts'][$postId]['title'] = $_POST['title'];
        $jsonData['blog_posts'][$postId]['content'] = $_POST['content'];
        // Update other post data fields as needed

        // Write the updated data back to the JSON file
        file_put_contents($jsonDataFile, json_encode($jsonData));

        // Redirect to the homepage or display a success message
        header("Location: index.php");
        exit();
    } else {
        echo '<p>Error: Invalid blog post ID.</p>';
    }
} else {
    echo '<p>Error: JSON data file not found.</p>';
}
?>
<?php
// Assuming you have a JSON file named 'json_data.json' with an array of blog posts
$jsonDataFile = 'json_data.json';

// Check if the file exists
if (file_exists($jsonDataFile)) {
    // Read the JSON file and decode it
    $jsonData = json_decode(file_get_contents($jsonDataFile), true);

    // Get the post ID from the form submission
    $postId = isset($_POST['post_id']) ? $_POST['post_id'] : null;

    // Check if the post ID is valid
    if ($postId && isset($jsonData['blog_posts'][$postId])) {
        // Update the blog post data
        $jsonData['blog_posts'][$postId]['title'] = $_POST['title'];
        $jsonData['blog_posts'][$postId]['content'] = $_POST['content'];
        // Update other post data fields as needed

        // Write the updated data back to the JSON file
        file_put_contents($jsonDataFile, json_encode($jsonData));

        // Redirect to the homepage or display a success message
        header("Location: index.php");
        exit();
    } else {
        echo '<p>Error: Invalid blog post ID.</p>';
    }
} else {
    echo '<p>Error: JSON data file not found.</p>';
}
?>
<?php
// Assuming you have a JSON file named 'json_data.json' with an array of blog posts
$jsonDataFile = 'json_data.json';

// Check if the file exists
if (file_exists($jsonDataFile)) {
    // Read the JSON file and decode it
    $jsonData = json_decode(file_get_contents($jsonDataFile), true);

    // Get the post ID from the form submission
    $postId = isset($_POST['post_id']) ? $_POST['post_id'] : null;

    // Check if the post ID is valid
    if ($postId && isset($jsonData['blog_posts'][$postId])) {
        // Update the blog post data
        $jsonData['blog_posts'][$postId]['title'] = $_POST['title'];
        $jsonData['blog_posts'][$postId]['content'] = $_POST['content'];
        // Update other post data fields as needed

        // Write the updated data back to the JSON file
        file_put_contents($jsonDataFile, json_encode($jsonData));

        // Redirect to the homepage or display a success message
        header("Location: index.php");
        exit();
    } else {
        echo '<p>Error: Invalid blog post ID.</p>';
    }
} else {
    echo '<p>Error: JSON data file not found.</p>';
}
?>
