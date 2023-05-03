<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="greeting.php" method="GET">
        <label for="testo">Inserisci un testo</label>
        <input type="text" id="testo" name="testo" placeholder="Ciao sono..">
        <br>
        <br>
        <label for="censura">Inserisci parola da censurare</label>
        <input type="text" id="censura" name="censura">

        <button type="submit">Confronta</button>
    </form>
</body>
</html>