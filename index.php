<?php

$min = 8;
$max = 32;
$message = "Scegliere una password con un minimo di $min caratteri ed un massimo di $max caratteri";

if (isset($_POST['characters']) && !empty($_POST['characters'])) {
    $passlen = $_POST['characters'];
    if ($passlen < $min || $passlen > $max) {
        $message = "Errore, scegliere un numero tra $min e $max";
    } else {
        header('Location: ./success-page.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator v.2</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- PERSONAL STYLE -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Strong Password Generator</h1>
        <h2 class="text-center">Genera una password sicura</h2>
        <div class="container">
            <div class="message d-flex align-items-center justify-content-center">
                <p><?php echo $message ?></p>
            </div>
            <div class="form">
                <form action="index.php" method="POST">
                    <label for="characters" class="label">Lunghezza password:</label>
                    <input type="number" id="characters" name="characters" class="number"/>
                    <div class="buttons">
                        <button type="submit" class="btn btn-success">Invia</button>
                        <button type="submit" class="btn btn-danger">Annulla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>