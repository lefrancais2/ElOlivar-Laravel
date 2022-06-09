{{-- <div id="carouselExampleSlidesOnly" class="carousel slide carousel-header" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/user/c_v_r" class="d-block w-100 carousel-images-lg" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/user/c_v_r" class="d-block w-100 carousel-images-lg" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/user/c_v_r" class="d-block w-100 carousel-images-lg" alt="...">
      </div>
    </div>
  </div> --}}
  <style>
    .carousel-control-test{
      border: 2px solid gray;
      border-radius: 50%;
      padding: 20px!important;
      font-size: 8px!important;
    }
  </style>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('storage/portada/portada1.png')}}" class="d-block w-100 carousel-images-lg" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('storage/portada/portada2.png')}}" class="d-block w-100 carousel-images-lg" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('storage/portada/portada3.png')}}" class="d-block w-100 carousel-images-lg" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>