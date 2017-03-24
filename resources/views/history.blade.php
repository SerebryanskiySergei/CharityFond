@extends('layouts.app')

@section('content')

<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider layer-overlay overlay-dark pt-100" data-bg-img="http://placehold.it/1920x1280">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content text-center">
        <div class="row"> 
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="text-theme-colored font-36">Timeline</h2>
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Page Title</li>
            </ol>
          </div>
        </div>
      </div>
    </div>      
  </section>
  
  <!-- Section: vertical timeline -->
  <section>
    <div class="container pb-0">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="heading-line-bottom text-center">
            <h3>Vertical Timeline One</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="cd-timeline" class="cd-container">
    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="js/vertical-timeline/img/cd-icon-picture.svg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Jan 14</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-movie">
        <img src="js/vertical-timeline/img/cd-icon-movie.svg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Jan 18</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="js/vertical-timeline/img/cd-icon-picture.svg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Jan 24</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-location">
        <img src="js/vertical-timeline/img/cd-icon-location.svg" alt="Location">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 4</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Feb 14</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-location">
        <img src="js/vertical-timeline/img/cd-icon-location.svg" alt="Location">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Title of section 5</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <span class="cd-date">Feb 18</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-movie">
        <img src="js/vertical-timeline/img/cd-icon-movie.svg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Final Section</h2>
        <p>This is the content of the last section</p>
        <span class="cd-date">Feb 26</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->
  </section>
</div>
  @endsection