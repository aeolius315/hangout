@extends('layouts.app')

@section('content')
    <div class="masthead">
        <div class="container text-dark welcome">
            <h1 class="display-3 mb-4 font-weight-bold welcome-message">Welcome to Hangout</h1>
            @if (Auth::guest())
                <a class="text-light btn btn-lg btn-info mr-5 border" role="button" href="{{ route('login') }}">Login</a>
                <a class="text-light btn btn-lg btn-info ml-5 border" role="button" href="{{ route('register') }}">Register</a>
            @else
                <a href="dashboard" class="btn-get-started text-light btn btn-lg btn-info ml-5 border" role="button">Get Started</a>
            @endif
        </div>
    </div>
    <hr>
    <!-- About -->
  <section class="showcase">
    <div class="container-fluid p-0">

      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-1 my-auto showcase-text text-center pl-5 pr-5">
          <h2>Fully Responsive Design</h2>
          <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
        </div>
        <div class="col-lg-6 order-lg-2 my-auto showcase-text">
            <img class="img-fluid" src="img\about1.jpg" alt="">
        </div>
      </div>

      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <img class="img-fluid" src="img\about2.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-2 my-auto showcase-text text-center pl-5 pr-5">
          <h2>Updated For Bootstrap 4</h2>
          <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
        </div>
      </div>

      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-1 my-auto showcase-text text-center pl-5 pr-5">
          <h2>Easy to Use &amp; Customize</h2>
          <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
        </div>
        <div class="col-lg-6 order-lg-2 my-auto showcase-text">
            <img class="img-fluid" src="img\about3.jpg" alt="">
        </div>
      </div>

    </div>
  </section>
 <hr>
  <!-- Contacts -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mt-5 mb-5">The Team</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img\testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img\testimonials-2.jpg" alt="">
            <h5>Fred S.</h5>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img\testimonials-3.jpg" alt="">
            <h5>Sarah W.</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection