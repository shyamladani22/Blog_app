<?php
include ('includes/db.php');
include './includes/header.php';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $slug = $_POST['slug'];

    $sql = "INSERT INTO articles (title, description, category, slug) VALUES ('$title', '$description', '$category', '$slug')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New article created successfully..")
        header("Location: index.php"); </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Applcation</title>
</head>

<body>
    <h1>Blog Application</h1>

    <form method="post" action="create.php">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>

        <label for="category">Category:</label><br>
        <input type="text" id="category" name="category"><br><br>

        <label for="slug">Slug:</label><br>
        <input type="text" id="slug" name="slug"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
include './includes/footer.php';
?>