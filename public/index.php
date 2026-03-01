<?php
include ('db.php');
if (isset($_GET['message'])) {
    $message = $_GET['message'];
    echo "<script> alert('$message')</script>";
}
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    echo "<script> alert('$text')</script>";
}
$result = showDepartments();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing the data from my db</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="w-[90%] mt-3 mb-3 mr-auto ml-auto">
        <table class="w-full border border-black border-collapse">
            <tr>
                <th class="border p-3 bg-gray-800 text-white text-center">ID</th>
                <th class="border p-3 bg-gray-800 text-white text-center">Name</th>
                <th class="border p-3 bg-gray-800 text-white text-center">Description</th>
                <th class="border p-3 bg-gray-800 text-white text-center">Update</th>
                <th class="border p-3 bg-gray-800 text-white text-center">delete</th>
            </tr>
            <?php while ($dep = $result->fetch_assoc()) { ?>
            <tr>
                <td class="border p-3 bg-gray-800 text-white text-center"><?php echo $dep['id'] ?></td>
                <td class="border p-3 bg-gray-800 text-white text-center"><?php echo $dep['name'] ?></td>
                <td class="border p-3 bg-gray-800 text-white text-center"><?php echo $dep['description'] ?></td>
                <td class="border p-3 bg-gray-800 text-white text-center"><a href="update.php?id=<?php echo $dep['id'] ?>">Update</a></td>
                <td class="border p-3 bg-gray-800 text-white text-center"><a href="delete.php?id=<?php echo $dep['id'] ?>">Delete</a></td>
            </tr>
            <?php } ?>
            
        </table>
    </div>
</body>
</html>