<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form PHP</h1>
    <form action="censura.php" method="GET">
        <label for="paragraph">Inserisci un paragrafo: </label>
        <textarea name="paragraph" id="paragraph" required></textarea>

        <label for="censura">Parola da censurare</label>
        <input type="text" name="censura" id="censura" required>

        <input type="submit" value="invia">
    </form>
</body>
</html>