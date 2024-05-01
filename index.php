<?php
require_once __DIR__ . "/session_data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog-shelter-test-app</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <?php include_once __DIR__ . "/views/layouts/header.php" ?>

    <!-- site main -->
    <main id="site_main">

        <!-- offcanvas for admin login -->
        <?php include_once __DIR__ . "/views/layouts/offcanvas.php" ?>

        <!-- container for cards -->
        <div class="container py-5">

            <!-- button to let an admin add a new dog to the list -->
            <?php if ($_SESSION["admin"] == true) : ?>
                <div class="add-dog text-end mb-3">
                    <a class="btn btn-success" href="add_dog.php">Aggiungi</a>
                </div>
            <?php endif; ?>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3">

                <!-- dog cards -->
                <!-- while loop continues until fetch_assoc returns false (when rows are over) -->
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://montagnolirino.it/wp-content/uploads/2015/12/immagine-non-disponibile.png" class="card-img-top" alt="dog-picture">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="dog-info">
                                    <!-- name -->
                                    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                                    <!-- breed -->
                                    <div class="breed mb-1">
                                        <span><strong>Razza: </strong></span>
                                        <span><?php echo $row["breed"]; ?></span>
                                    </div>
                                    <!-- age (show only if present) -->
                                    <?php if ($row["age"] != 0) : ?>
                                        <div class="age mb-1">
                                            <span><strong>Età: </strong></span>
                                            <span><?php echo $row["age"]; ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <!-- gender -->
                                    <div class="gender mb-1">
                                        <span><strong>Sesso: </strong></span>
                                        <span><?php echo $row["gender"]; ?></span>
                                    </div>
                                    <!-- weight (show only if present) -->
                                    <?php if ($row["weight"] != 0) : ?>
                                        <div class="weight mb-1">
                                            <span><strong>Peso: </strong></span>
                                            <span><?php echo $row["weight"]; ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <!-- description (show only if present-->
                                    <?php if ($row["description"] != '') : ?>
                                        <p class="card-text description mb-1"><strong>Descrizione: </strong><?php echo $row["description"]; ?></p>
                                    <?php endif; ?>

                                </div>
                                <!-- buttons: if you are a user, you can adopt a dog (redirect to another page to send an adoption request), if you are an admin you can delete a dog from the list (if it was adopted it isn't up for adoption anymore) -->
                                <?php if ($_SESSION["admin"] == true) : ?>
                                    <button type="button" id="<?php echo $row["id"]; ?>" class="delete mt-3 btn btn-danger dog<?php echo $row["id"]; ?> align-self-center w-75">Cancella</button>
                                <?php else : ?>
                                    <a href="./pages/adopt.php" class="btn btn-primary mt-3 align-self-center w-75">Adotta</a>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>

    </main>

    <!-- site footer -->
    <footer id="site_footer" class="py-3">
        <div class="container">

        </div>
    </footer>




    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- script axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- script js -->
    <script type="module" src="./assets/js/main.js"></script>
</body>

</html>