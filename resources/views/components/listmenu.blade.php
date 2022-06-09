<style>
    .box-test{
        width: 350px;
        height: 350px;
        margin-left:auto;
        margin-right: auto;
        text-align: center;
    }
    .carousel-item img{
      width: 300px;
    }
    .carousel-caption h5,.carousel-caption p{
      color:black;
      font-family: 'Kalam', cursive;
    }
</style>


<section id="list-menu">
    <div class="encabezado-list-menu-div">
        <h1 class="encabezado-list-menu">nuestro menu</h1>    
    </div>

    {{-- carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box-test d-block">
              <img src="{{asset('storage/main/plato1.png')}}" alt="">
            </div>
            
            <div class="carousel-caption d-md-block">
              
              <h5>Ricky Rickón</h5>
              <p>Uhm... delicioso</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box-test d-block">
              <img src="{{asset('storage/main/plato2.png')}}" alt="">
            </div>
            <div class="carousel-caption d-md-block">
              <h5>Chaufa estilo elOlivar</h5>
              <p> langostinos, cecina, pollo y huevo frito acompañándolo con nuestras deliciosas cremas de casa..</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box-test d-block">
              <img src="{{asset('storage/main/plato3.png')}}" alt="">
            </div>
            <div class="carousel-caption d-md-block">
              <h5>Ricky Huayro</h5>
              <p>Tienes que probarlo...</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>