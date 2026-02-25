<?php

$errors = [];
$name = '';
$email = '';
$age = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $password = trim($_POST['password'] ?? '');

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
    if ($password === '' || strlen($password) < 8) {
        $errors['password'] = "Password must be at least 8 characters.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W]).{8,}$/', $password)) {
        $errors['password'] = "Password must be at least 8 characters, include a number and a special character.";
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

    <input type="password" name="password" placeholder="Password" value="<?= htmlspecialchars($password) ?>">
    <small style="color:red"><?= $errors['password'] ?? '' ?></small>
    <br><br>

    <button type="submit">Submit</button>

</form>