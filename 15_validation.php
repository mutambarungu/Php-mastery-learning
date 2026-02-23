<?php

$errors = [];
$name = '';
$email = '';
$age = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $age = trim($_POST['age'] ?? '');

    // Validation

    if ($name === '') {
        $errors['name'] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Valid email required.";
    }

    if (!is_numeric($age) || $age < 18) {
        $errors['age'] = "Age must be 18+.";
    }

    if (empty($errors)) {
        echo "<h3>Form submitted successfully!</h3>";
    }
}
?>

<form method="POST">

    <input type="text" name="name" placeholder="Name" value="<?= htmlspecialchars($name) ?>">
    <small style="color:red"><?= $errors['name'] ?? '' ?></small>
    <br><br>

    <input type="text" name="email" placeholder="Email" value="<?= htmlspecialchars($email) ?>">
    <small style="color:red"><?= $errors['email'] ?? '' ?></small>
    <br><br>

    <input type="text" name="age" placeholder="Age" value="<?= htmlspecialchars($age) ?>">
    <small style="color:red"><?= $errors['age'] ?? '' ?></small>
    <br><br>

    <button type="submit">Submit</button>

</form>