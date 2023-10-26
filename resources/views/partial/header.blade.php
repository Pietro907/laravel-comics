<?php





?>


<header>
  <div class="container_header">
    <div class="row justify-content-between">
      <div class="col-3">

        <!-- Logo immagine -->
        <img src="$image" alt="logo DC Univers">

      </div>

      <div class="col-9 ">

        <!-- Navbar header loop per 10 -->
        <nav class="navbar navbar-expand-sm jst_btwn">

          @for ($i=0; $i < 5; $i++) 
            <div v-for="linkHeader in navHeader" class="container_a pad_x">
            <a class="active navbar-brand text-danger text-uppercase" href="#">{{$nome}}</a>
          @endfor

      </div>
      </nav>

    </div>
  </div>





  </div>


</header>