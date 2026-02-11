<?php
if (isset($_POST['number1'])) {
    $num1 = $_POST['number1'];
    $oprator = $_POST['oprator'];
    $num2 = $_POST['number2'];
    $result = null;
    switch ($oprator) {
        case 'plus':
            $result = $num1 + $num2;
            break;
        case 'minus':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        default:
            $result = $num1 / $num2;
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/output.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="w-full h-screen flex justify-center items-center bg-black text-white border border-white">
    <div class="w-8/12 border flex items-center flex-col gap-3 rounded-sm p-3">
        <h1 class="font-bold text-2xl">Calculator</h1>
        <form class="flex flex-col gap-3 w-full" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input class="h-12 rounded-sm focus:outline-0 p-5 w-full border" type="number" name="number1">
            <select class="h-12 border rounded-sm focus:outline-0 w-full" name="oprator">
                <option class="border bg-black" value="plus">+</option>
                <option class="border bg-black" value="minus">-</option>
                <option class="border bg-black" value="multiply">*</option>
                <option class="border bg-black" value="divide">/</option>
            </select>
            <input class="h-12 rounded-sm focus:outline-0 p-5 w-full border" type="number" name="number2">
            <button class="pt-3 pb-3 pl-0 pr-0 text-white border-white border rounded-md " type="submit">Calculate</button>
        </form>
        <?php if (isset($result)) { ?>
            <p><?php echo 'Result: ' . $result ?></p>
        <?php } ?>
    </div>
</body>

</html>