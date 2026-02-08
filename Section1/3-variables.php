<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Variables</title>

    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>

    <?php
    $greet1 = "Hello,";
    $greet2 = "World!";
    ?>

    <h1><?= $greet1 . " " . $greet2; ?></h1>

</body>

</html>