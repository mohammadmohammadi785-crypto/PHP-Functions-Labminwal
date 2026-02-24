<?php
$connection = new mysqli('localhost', 'root', '', 'my_db');
$command = 'SELECT * FROM department';
$result = $connection->query($command);
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
            </tr>
            <?php while ($dep = $result->fetch_assoc()) { ?>
            <tr>
                <td class="border p-3 bg-gray-800 text-white text-center"><?php echo $dep['id'] ?></td>
                <td class="border p-3 bg-gray-800 text-white text-center"><?php echo $dep['name'] ?></td>
                <td class="border p-3 bg-gray-800 text-white text-center"><?php echo $dep['description'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>