<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="server.php" method="post">
        <!-- name -->
        <div>
            <label for="name">Inserisci il nome del cane:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <!-- age -->
        <div>
            <label for="age">Inserisci l'età del cane:</label>
            <input type="text" name="age" id="age">
        </div>
        <!-- breed -->
        <div>
            <label for="breed">Inserisci la razza del cane:</label>
            <input type="text" name="breed" id="breed" required>
        </div>
        <!-- gender -->
        <div>
            <label for="gender">Inserisci il sesso del cane:</label>
            <input type="text" name="gender" id="gender" required>
        </div>
        <!-- weight -->
        <div>
            <label for="weight">Inserisci il peso del cane:</label>
            <input type="text" name="weight" id="weight">
        </div>
        <!-- description -->
        <div>
            <label for="description">Inserisci una breve descrizione del cane:</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <!-- button -->
        <button type="submit">Invia</button>
    </form>
</body>

</html>