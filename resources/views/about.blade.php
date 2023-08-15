@extends('layout')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="px-4">
                    <h2>About Our Company</h2>
                    <p>Welcome to XYZ Corp, a leading innovator in cutting-edge technology solutions. With a strong
                        commitment to excellence and a passion for pushing the boundaries of what's possible, we've been
                        transforming industries since our inception.</p>
                    <p>Our team of experts is dedicated to delivering state-of-the-art solutions that empower
                        businesses and individuals to thrive in the digital age. From software development to
                        cybersecurity and beyond, we're here to drive innovation forward.</p>
                    <p>From pioneering software development that streamlines processes and enhances user experiences, to
                        implementing robust cybersecurity measures that safeguard sensitive data, our commitment to
                        excellence drives us to push the boundaries of innovation. We believe that technology has the
                        potential to transform businesses and lives, and we're here to make that transformation a
                        reality.</p>

                </div>
            </div>
            <div class="col-md-6">
                <!-- Larger Carousel Slider -->
                <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://source.unsplash.com/1200x600/?nature" class="d-block w-100"
                                alt="Nature Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/1200x600/?landscape" class="d-block w-100"
                                alt="Nature Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://source.unsplash.com/1200x600/?mountain" class="d-block w-100"
                                alt="Nature Image 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#aboutCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#aboutCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
