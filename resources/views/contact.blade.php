@extends('layout')
@section('content')
    <div class="container my-5">
        <h2>Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="px-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.2563650720513!2d83.99380311113761!3d28.229897475786448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595bce2263927%3A0xd9ea85c53f13d8a9!2sAlostab!5e0!3m2!1sen!2snp!4v1691996876643!5m2!1sen!2snp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
