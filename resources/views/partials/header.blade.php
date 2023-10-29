<?php


$nome = 'Pietro';
$image = './resources/img/dc-logo.png';
$arrayLink = ['Characters', 'Comics', 'Movie', 'TV', 'Games', 'collectible', 'videos', 'fan', 'news', 'shop'];
$arrayBrands = [$image];

?>




<div class="container_header">
  <div class="row">

    <div class="col-3">

      <!-- Logo immagine -->
      <img class="logo" src="{{Vite::asset('resources/img/dc-logo.png')}}">

    </div>

    <div class="col-8">

      <!-- Navbar header loop per 10 -->
      <nav class="navbar navbar-expand-sm">

        @foreach ($arrayLink as $link)
        <a class="active navbar-brand" href="#"><b>{{$link}}</b></a>
        @endforeach

      </nav>

    </div>
    <div class="col-2">

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
    </div>

  </div>
</div>