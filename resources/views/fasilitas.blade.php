<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/images/Gym.jpg') }}" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/images/playground.jpeg') }}" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/asset/images/restoran.jpeg') }}" class="d-block w-100" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

       <div class="grid grid-cols-3 gap-3 px-4 pt-20">
        <div class="card" >
          <img src="{{ asset('assets/images/kolam-renang.jpeg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Kolam renang</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="{{ asset('assets/images/Gym.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Gym</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="{{ asset('assets/images/restoran.jpeg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Restoran</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="{{ asset('assets/images/ruang-metting.jpeg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Ruang Metting</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="{{ asset('assets/images/playground.jpeg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Playground</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="{{ asset('assets/images/spa.jpeg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Spa</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="{{ asset('assets/images/tempat-ibadah.jpeg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Tempat Ibadah</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="{{ asset('assets/images/Gedung-pernikahan.jpeg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Gedung Pernikahan</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="{{ asset('assets/images/lapangan olahraga.webp') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Lapangan Olahraga</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div> 
    </body>
    </html>
</x-layout>