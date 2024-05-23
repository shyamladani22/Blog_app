<?php
include ('includes/db.php');
include './includes/header.php';
?>
<?php
$result = $conn->query("SELECT * FROM articles ORDER BY created_at DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Applcation</title>
    <script src="assets/js/scripts.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h2>All Articles</h2>

    <form method="get" action="search.php">
        <input type="text" name="query" placeholder="Search articles...">
        <input type="submit" value="Search">
    </form>

    <label for="sort_date">Sort by Date:</label>
    <select id="sort_date">
        <option value="DESC">Newest First</option>
        <option value="ASC">Oldest First</option>
    </select>
    <div id="article_list"> </div> <br><br>


    <table>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><a href="view.php?slug=<?php echo $row['slug']; ?>"><?php echo $row['title']; ?></a></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php endwhile; ?>
    </table> <br><br>

</body>

</html>

<?php
include './includes/footer.php';
?>