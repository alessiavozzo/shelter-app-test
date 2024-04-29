<?php
session_start();
var_dump($_SESSION);
require __DIR__ . "/connection.php";

$showForm = true;
if ($_SESSION["isLogged"] == true) {
    $showForm = false;
}

$query = "SELECT * FROM `dogs`";
$result = mysqli_query($connection, $query);
//var_dump($result);
//var_dump($result->fetch_assoc());
//$dog = $result->fetch_assoc();
//var_dump(mysqli_fetch_assoc($result));

/* while ($row = mysqli_fetch_assoc($result)) {
    var_dump($row);
}; */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

    <div>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div><?php echo $row["name"]; ?></div>
        <?php endwhile; ?>
    </div>

    <?php if ($showForm) : ?>
        <form action="login.php" method="post">
            <input type="email" name="email">
            <input type="password" name="password">
            <button type="submit">Login</button>
        </form>
    <?php else : ?>
        <a href="logout.php?logout=true">Logout</a>
    <?php endif; ?>


</body>

</html>