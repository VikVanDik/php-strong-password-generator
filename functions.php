<?php 
function passgenerator ($length) {
    // creo la variabile password che sarà quella del return
    $pass = '';
    // contatore per il ciclo
    $i = 0;
    // creo l'array di stringhe contenenti i caratteri
    $listCharacters = [
        'abcdefghijklmnopqrstuvwxyz',
        'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        '0123456789',
        '!?&%$<>^+-*/()[]{}@#_='
    ];


    // ciclo
    while (strlen($pass) < $length) {
        // ad ogni ciclo seleziono la stringa dell'array al numero del contatore da me definito
        $listCharacters = $listCharacters[$i];
        // carattere random della stringa selezionata prima
        $character = $listCharacters[rand(0, strlen($listCharacters) - 1)];
        // concateno il carattere alla password
        $pass .= $character;
        // aumento il contatore
        $i++;
        // se il contatore supera il numero delle stringhe lo riporto a 0
        if ($i > count($listCharacters)) {
            $i = 0;
        }
        // ritorno il dato della password con i caratteri in posizione random
        return str_shuffle($pass);
    }
}
?>