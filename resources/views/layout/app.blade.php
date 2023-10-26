<?php

/* 

Concentratevi sul layout:

- create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...)

- fate dei parziali per includere header e footer tramite.



- Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config

- Abbellite il tutto sfruttando Sass e bootstrap ove necessario (ma un pó di sass fatelo!).




Bonus: 
- Create più pagine che condividono lo stesso layout

Assets:

https://github.com/boolean-it/ex-laravel9-dc-comics/blob/main/config/comics.php (i fumetti sono qui)

screenshots in allegato nel .zip

Nota:
Per oggi dovete fare la pagina con l'elenco dei fumetti e NON la pagina del singolo fumetto!!

*/











?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    \

</head>

<body class="antialiased">


    <header>
        @include ('partial.header');
    </header>

    <main>
        @include('partial.main');
    </main>

    <footer>
        @include('partial.footer');
    </footer>



</body>

</html>