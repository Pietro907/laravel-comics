<?php


$nome = 'Pietro';
$image = './resources/img/dc-logo.png';
$arrayLink = ['Characters', 'Comics', 'Movie', 'TV', 'Games', 'collectible', 'videos', 'fan', 'news', 'shop'];


?>


<header>

  <div class="container_header">
    <div class="row">
      <div class="col-3">

        <!-- Logo immagine -->
        <img src="https://picsum.photos/200/300">
      </div>

      <div class="col-9 ">

        <!-- Navbar header loop per 10 -->
        <nav class="navbar navbar-expand-sm jst_btwn">

          @foreach ($arrayLink as $link) 
          <a class="active navbar-brand" href="#">{{$link}}</a>
          @endforeach

        </nav>

      </div>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
 


</header>