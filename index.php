<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <?php require_once __DIR__ . '/helper.php';
    ?>

    <!-- #### Milestone 1
    Creare un `form` che invii in `GET` la lunghezza della password. Una nostra funzione utilizzerà *questo dato* per generare una **password casuale** da restituire all’utente. La **password** dovra' essere composta da *lettere minuscole e maiuscole, numeri e simboli*
    Scriviamo tutto (logica e layout) in un unico file `index.php`. -->

    <h1>
        <?php echo (@$result); ?>
    </h1>
    <form method="get">
        <label for="password">Lunghezza password</label>
        <input type="number" name="passGen" id="passGen">
        <input type="submit" value="Generate" name="gen">
    </form>
</body>

</html>