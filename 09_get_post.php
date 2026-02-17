<?php
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>

    <div>
        <input type="submit" name="submit" value="Submit">
    </div>

</form>