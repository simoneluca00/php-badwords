<?php
/* 
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$chosenWord = (isset($_GET['badWord'])) ? $_GET['badWord'] : '';

// Metodologia con EMPTY
// if (!empty($_GET['badWord'])) {
//     $chosenWord = $_GET['badWord'];
// } else {
//     $replacedParagraph = $originalParagraph;
// }

$originalParagraph = "Ogni operazione eseguita sul Web coinvolge un client ed un server. Un client è un dispositivo (ad esempio un browser) che effettua una richiesta ad un server remoto. Il server remoto attraverso un linguaggio di scripting (come per esempio PHP) interpreta la richiesta del client ed invia una risposta (ad esempio una pagina HTML, un oggetto JSON o un XML) al client. A questo punto il client è in grado di interpretare, a sua volta, la risposta ricevuta e fornirla all'utente; nel caso del browser riceverà una pagina HTML che mostrerà all'utente.";

$originalLength = strlen($originalParagraph);

$replacedParagraph = str_ireplace($chosenWord, '***', $originalParagraph);

$replacedLength = strlen($replacedParagraph);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>

    <style>
        h1 {
            text-align: center;
        }

        p {
            font-size: 1.5em;
        }

        form {
            width: 20%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>

    <div>
        <h1>
            Paragrafo iniziale
        </h1>

        <h3>
            Lunghezza paragrafo:
            <?php echo $originalLength ?>
        </h3>

        <p>
            <?php echo $originalParagraph ?>
        </p>

    </div>

    <div>
        <h1>
            Paragrafo modificato
        </h1>

        <h3>
            Lunghezza paragrafo:
            <?php echo $replacedLength ?>
        </h3>

        <p>
            <?php echo $replacedParagraph ?>
        </p>

    </div>

    <form method="get">
        <label for="badWord">Inserisci la parola che vuoi sostituire:</label>
        <input type="text" name="badWord">
        <button type="submit">Conferma</button>
    </form>
</body>
</html>