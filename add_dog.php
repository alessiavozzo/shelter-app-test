<?php
require_once __DIR__ . "/session_data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog shelter - add dog</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php include_once __DIR__ . "/views/layouts/header.php" ?>

    <main id="add-dog_main">

        <!-- offcanvas for admin login -->
        <?php include_once __DIR__ . "/views/layouts/offcanvas.php" ?>

        <div class="container">
            <form action="server.php" method="post" class="w-75 my-5 mx-auto p-4 border rounded">
                <div class="name-age d-flex justify-content-between gap-2">
                    <!-- name -->
                    <div class="mb-3 w-75">
                        <label for="name" class="form-label"><span class="text-danger">*</span>Inserisci il nome del cane:</label>
                        <input type="text" name="name" id="name" required class="form-control" placeholder="Fuffi">
                    </div>
                    <!-- age -->
                    <div class="mb-3 w-25">
                        <label for="age" class="form-label">Inserisci l'età del cane:</label>
                        <input type="number" name="age" id="age" class="form-control" placeholder="Età stimata del cane">
                    </div>

                </div>
                <div class="breed-gender-weight d-flex gap-2">
                    <!-- breed -->
                    <div class="mb-3 w-50">
                        <label for="breed" class="form-label"><span class="text-danger">*</span>Inserisci la razza del cane:</label>
                        <input type="text" name="breed" id="breed" required class="form-control" placeholder="Pastore tedesco, Labrador, Meticcio...">
                    </div>
                    <!-- gender -->
                    <div class="mb-3 w-25">
                        <label for="gender" class="form-label"><span class="text-danger">*</span>Inserisci il sesso del cane:</label>
                        <input type="text" name="gender" id="gender" required class="form-control" placeholder="Maschio o Femmina">
                    </div>
                    <!-- weight -->
                    <div class="mb-3 w-25">
                        <label for="weight" class="form-label">Inserisci il peso del cane:</label>
                        <input type="number" name="weight" id="weight" class="form-control" placeholder="Peso stimato del cane">
                    </div>
                </div>
                <!-- description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Inserisci una breve descrizione del cane:</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Inserisci una breve descrizione per far conoscere il cane"></textarea>
                </div>

                <!-- button -->
                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>
        </div>
    </main>

</body>

</html>