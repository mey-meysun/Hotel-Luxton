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
            <img src="kolam-renang-2.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="kolam-renang-1.jp" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{url('/asset/images/kolam-renang.jpg') }}" class="d-block w-100" alt="">
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

       <div class="grid grid-cols-3 gap-3 px-4">
        <div class="card" >
          <img src="/asset/images/kolam-renang.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Kolam renang</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="kolam-renang-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Gym</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="kolam-renang-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Restoran</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="kolam-renang-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Ruang Metting</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="kolam-renang-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Playground</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card" >
          <img src="kolam-renang-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-sky-700">Spa</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div> 
    </body>
    </html>
</x-layout>