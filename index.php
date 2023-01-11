<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<style>
    body {
        background-color: #001732;
    }

    .grey {
        color: #5f7c91;
    }

    .white {
        color: white;
    }

    .white-bg {
        background-color: white;
    }

    .cyan-bg {
        background-color: #cef4fc;
    }

    .form {
        margin-top: 20px;
    }
</style>

<body>
    <?php require_once __DIR__ . '/helper.php';
    ?>

    <div class="container">
        <h1 class="grey">Strong Password Generator</h1>
        <h3 class="white">Genera password sicura</h3>
        <div class="cyan-bg p-3">
            <div>
                <?php echo (@$result); ?>
            </div>
        </div>

        <div class="white-bg form p-3">
            <form method="get">
                <label class="w-50" for="password">Lunghezza password</label>
                <input type="text" name="passGen" id="passGen" placeholder="Scegli un numero">
                <input type="submit" value="Generate" name="gen">
            </form>
        </div>

    </div>

</body>

</html>