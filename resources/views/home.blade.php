@extends('layout')
@section('content')
    <div class="container my-5">
        <!-- Bootstrap Slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/800x400/?nature" class="d-block w-100" alt="Nature Image 1">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/800x400/?landscape" class="d-block w-100" alt="Nature Image 2">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/800x400/?mountain" class="d-block w-100" alt="Nature Image 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Bootstrap Cards -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?nature" class="card-img-top" alt="Nature Card 1">
                    <div class="card-body">
                        <h5 class="card-title">Card Title 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?landscape" class="card-img-top" alt="Nature Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Card Title 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?mountain" class="card-img-top" alt="Nature Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Card Title 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
