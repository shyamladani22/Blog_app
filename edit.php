<?php include ('includes/db.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $slug = $_POST['slug'];

    $sql = "UPDATE articles SET title='$title', description='$description', category='$category', slug='$slug' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Article updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM articles WHERE id=$id");
    $article = $result->fetch_assoc();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Application</title>
</head>

<body>
    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $article['title']; ?>"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?php echo $article['description']; ?></textarea><br>
        <label for="category">Category:</label><br>
        <input type="text" id="category" name="category" value="<?php echo $article['category']; ?>"><br>
        <label for="slug">Slug:</label><br>
        <input type="text" id="slug" name="slug" value="<?php echo $article['slug']; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>