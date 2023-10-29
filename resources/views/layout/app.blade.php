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







$nome = 'Pietro';
$image = './resources/img/dc-logo.png';
$arrayBooks = ['https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300',  'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300',];
$arrayBooksTitles = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];









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

    <!-- Style -->
    @vite('resources/js/app.js')

</head>

<body class="antialiased">


    <header>
        @include ('partials.header')
    </header>

    <main>

        <div class="current_series"><b>CURRENT SERIES</b></div>

        <section>

            <div class="content img_jumbo">

                <!-- img background -->

            </div>

        </section>

        <div class="container_main">

            <!-- Content goes here -->
            <div class="container_content">

                <div class="row r_series_books">

                    <!-- mian content fumetti -->
                    @foreach ($products as $book => $info)
                    <div class="col-2 col_books">
                        <div class="card card_book">
                            <h5>{{$info['title']}}</h5>
                            <img src="{{$info['thumb']}}" alt="">
                            <!-- <p>{{$info['description']}}</p> -->
                            <!-- <p>{{$info['price']}}</p>
                            <p>{{$info['series']}}</p>
                            <p>{{$info['sale_date']}}</p>
                            <p>{{$info['type']}}</p> -->
                        </div>
                    </div>
                    @endforeach



                </div>

            </div>

            <div class="container_foot">

                <div class="row jst_btwn">

                    <!-- Button load more -->
                    <div class="col none_bg_img jst_ctr">

                        <div class="sing_up">

                            <button class="color" type="button"><b>LOAD MORE</b></button>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Books loop -->
        <section>

            <div class="col-2">

                <div class="card">
                    <img class="img_book" :src="image" :alt="title">

                    <h6>title </h6>
                </div>

            </div>

        </section>

        <section id="jumbo">

            <!-- jumbotron -->
            <div class="jumbotron">
                <div class="row jst_ctr w_jumbo">

                    <div v-for="(link , i) in jumbo.navJumbo" class="col-3">

                        <img :src="link.image" class="image" alt="">

                        <div class="card">
                            <h4 class="ms">link.text </h4>
                        </div>

                    </div>

                </div>
            </div>


        </section>

    </main>

    <footer>
        @include('partials.footer')
    </footer>



</body>

</html>