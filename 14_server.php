<?php

// print_r($_SERVER);


echo $_SERVER['REQUEST_METHOD'];

echo $_SERVER['REQUEST_URI'] . "<br>";


echo $_SERVER['HTTP_HOST'] . "<br>";


echo $_SERVER['PHP_SELF'] . "<br>";


echo $_SERVER['SERVER_NAME'] . "<br>";

echo $_SERVER['REMOTE_ADDR'] . "<br>";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Form Submitted";
} else {
    echo "Form Not Submitted";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <button>submit</button>
    </form>
</body>

</html>