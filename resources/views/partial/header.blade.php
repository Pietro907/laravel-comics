<?php


$nome = 'Pietro';
$image = './resources/img/dc-logo.png';
$arrayLink = ['Characters', 'Comics', 'Movie', 'TV', 'Games', 'collectible', 'videos', 'fan', 'news', 'shop'];


?>


<header>
  <div class="container_header">
    <div class="row jst_ctr">
      <div class="col-3">

        <!-- Logo immagine -->
        <img src="">
      </div>

      <div class="col-9 ">

        <!-- Navbar header loop per 10 -->
        <nav class="navbar navbar-expand-sm jst_btwn">

          @foreach ($arrayLink as $link) <div v-for="linkHeader in navHeader" class="container_a pad_x">
            <a class="active navbar-brand text-danger text-uppercase" href="#">{{$link}}</a>
          @endforeach

        </nav>

      </div>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>





  </div>


</header>

<style>
  header {
    font-family: Arial, Helvetica, sans-serif;
  }

  .logo {
    width: 60px;
    height: 60px;
  }

  .container_header {
    max-width: 1920px;
  }


  .container_header>.row {
    width: 70%;
    margin: 0 auto;

  }

  .container_a>a {
    text-decoration: none;
    color: black;

  }

  .jst_ctr {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }

  .jst_btwn {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
  }

  a.active:hover {
    color: #0282f9;
    padding-bottom: 1rem;
    border-bottom: 5px solid #0282f9;
  }


  /* space */

  .pad_x {
    padding: 0 0.5rem;
  }



  /* a.active {
  border-bottom: #0282f9;
} */
</style>