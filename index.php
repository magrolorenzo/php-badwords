<!-- Create una variabile con un paragrafo.
Leggete da un parametro GET della querystring una "badword"
Sostituite all'interno del paragrafo tutte le occorrenze della "badword" con *** (3 asterischi).
Stampate a schermo il paragrafo censurato e la lunghezza del paragrafo originale. -->
<?php
    $parag = "Il suono è la sensazione data dalla vibrazione di un corpo in oscillazione. Tale vibrazione, che si propaga nell'aria o in un altro mezzo elastico, raggiunge l'apparato uditivo dell'orecchio che, tramite un complesso meccanismo interno, crea una sensazione uditiva correlata alla natura della vibrazione; in particolar modo la membrana timpanica subendo variazioni di pressione entra in vibrazione.";
    // Esempio = vibrazione
    $badword = $_GET["badword"];
    $censored = "***";

    $new_parag = str_replace($badword, $censored, $parag);
?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>
            Censuratore
        </title>
    </head>
    <body>
        <h1>
            <?php
                echo $new_parag ;
            ?>
            <br>
            <?php
                echo strlen($new_parag);
            ?>
        </h1>
    </body>
</html>
