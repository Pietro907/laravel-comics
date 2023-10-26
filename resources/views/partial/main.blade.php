
    <div class="current_series"><b>CURRENT SERIES</b></div>
    <section>

        <div class="content img_jumbo">



        </div>

    </section>

    <div class="container_main">

        <!-- Content goes here -->
        <div class="container_content">

            <div class="row">

                main content




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

    <section>

        <div class="col-2">

            <div class="card">
                <img class="img_book" :src="image" :alt="title">

                <h6>title </h6>
            </div>

        </div>

    </section>

    <section>

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


    <style>
        /* appmain */

        .current_series {
  background-color: #0282f9;
  padding: 0.5rem;
  color: #ffffff;
  position: absolute;
  top: 390px;
  left: 240px;

}

.container_foot {
  display: flex;
  justify-content: center;
}

.color {
  background-color: #0282f9;
  color: #ffffff;
  padding: 0.5rem 3rem;
  margin: -1.5rem 0 1.5rem;
  border: none;
}

main {
  font-family: Arial, Helvetica, sans-serif;

}

.content {
  margin-bottom: -1rem;
}

.img_jumbo {
  background-image: url('../assets/img/jumbotron.jpg');
  background-size: cover;
  width: 100%;
  height: 350px;


}

.container_main {
  background-color: black;
  max-width: 1920px;
  font-family: Arial, Helvetica, sans-serif;
}

.container_content {
  width: 70%;
  margin: 0 auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
  padding: 1rem 0 0;
}



.col-12>h2 {
  color: #ffffff;
}

/* jumbo */
.jumbotron {
  background-color: #0282f9;
}

.w_jumbo {
  width: 70%;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;

}
.col-3 {
  width: calc(100% / 12 * 3);
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 1rem 0;
  color: #ffffff;
}
.image {
  width: 40px;
  height: 40px;
  aspect-ratio: 1 / 1;
  object-fit: contain;
}

/* space */

.ms {
  margin-left: 0.5rem;
}
.card {
  
  width: 100%;
}

/* color */

.bg_black {
  background-color: black;
}

/* content */
.col-2 {
  color: #ffffff;
  padding: 0.5rem 0.5rem;
  margin: 0 2px;
}

.card > .img_book {
  width: 150px;
  height: 180px;
  object-fit: cover;
  object-position: top;


}

.card {
  width: 150px;
}

    </style>