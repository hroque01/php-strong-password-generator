<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>

    <!-- #### Milestone 1
Creare un `form` che invii in `GET` la lunghezza della password. Una nostra funzione utilizzerà *questo dato* per generare una **password casuale** da restituire all’utente. La **password** dovra' essere composta da *lettere minuscole e maiuscole, numeri e simboli*
Scriviamo tutto (logica e layout) in un unico file `index.php`. -->
    <form method="post">
        <label for="password">Password</label>
        <input type="text" name="password">
        <input type="submit" value="Generate">
    </form>
</body>

</html>