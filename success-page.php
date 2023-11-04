<?php 

// sessione aperta per poter ottenere la variabile da index.php
session_start();


// se la password è settata vado avanti
if(isset($_SESSION['password'])){
    // creo il componente da stampare in pagina
    $password = $_SESSION['password'];
} else {
    // se la password non è settata reindirizzo alla pagina iniziale
    header('Location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- PERSONAL STYLE -->
    <link rel="stylesheet" href="style/style.css">
    <title>Password Generata</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <h1>La password generata è:</h1>
            <p><?php echo $password ?></p>
        </div>

    </div>
</body>
</html>