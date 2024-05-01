<?php
session_start();
//var_dump($_SESSION);
//var_dump($_SESSION["admin"]);
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
    <title>Dog-shelter-test-app</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>



    <!-- site header -->
    <header id="site_header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- menu options -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                    </ul>
                    <?php if ($showForm) : ?>
                        <a class="btn btn-outline-success" href="registration.php" target="_blank">Registrati</a>
                        <a class="btn btn-outline-success" href="login_page.php">Login</a>
                    <?php else : ?>
                        <div class="profile">Hello <?php echo $_SESSION["name"]; ?></div>
                        <a href="logout.php?logout=true">Logout</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>


    <!-- site main -->
    <main id="site_main">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

                <!-- dog cards -->
                <!-- while loop continues until fetch_assoc returns false (when rows are over) -->
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <div class="col">
                        <div class="card">
                            <img src="https://montagnolirino.it/wp-content/uploads/2015/12/immagine-non-disponibile.png" class="card-img-top" alt="dog-picture">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                                <div class="breed">
                                    <span><strong>Razza: </strong></span>
                                    <span><?php echo $row["breed"]; ?></span>
                                </div>
                                <div class="age">
                                    <span><strong>Età: </strong></span>
                                    <span><?php echo $row["age"]; ?></span>
                                </div>
                                <div class="gender">
                                    <span><strong>Sesso: </strong></span>
                                    <span><?php echo $row["gender"]; ?></span>
                                </div>
                                <div class="weight">
                                    <span><strong>Peso: </strong></span>
                                    <span><?php echo $row["weight"]; ?></span>
                                </div>
                                <div class="id">
                                    <span><strong>id: </strong></span>
                                    <span class="dog_id"><?php echo $row["id"]; ?></span>
                                </div>
                                <p class="card-text description"><?php echo $row["description"]; ?></p>
                                <button type="button" id="<?php echo $row["id"]; ?>" class="adopt btn btn-primary dog<?php echo $row["id"]; ?>">Adopt</button>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php if ($_SESSION["admin"] == true) : ?>
                <a class="btn btn-success" href="add_dog.php">Aggiungi</a>
            <?php endif; ?>
        </div>

    </main>
    <footer id="site_footer" class="py-3">
        <div class="container">
            <?php if ($showForm) : ?>
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                        Admin
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                        <div class="card card-body">
                            <form action="login.php" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input class="form-control" type="email" name="email" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input class="form-control" type="password" name="password" id="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </footer>




    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- script axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- script js -->
    <script type="module" src="main.js"></script>
</body>

</html>