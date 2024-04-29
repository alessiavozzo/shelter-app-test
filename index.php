<?php
require __DIR__ . "/connection.php";


$query = "SELECT * FROM `dogs`";
$result = mysqli_query($connection, $query);
var_dump($result);
//var_dump($result->fetch_assoc());
//$dog = $result->fetch_assoc();
//var_dump(mysqli_fetch_assoc($result));

while ($row = mysqli_fetch_assoc($result)) {
    var_dump($row);
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

    <div class="while-loop">

    </div>

</body>

</html>