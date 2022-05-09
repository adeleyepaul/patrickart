@extends('layout.app')

@section('content')

<!--main-->
<main>
  <!--subheader-->
  <section id="subheader" data-speed="8" data-type="background" style="background-position: 50% 0px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Projects</h1>
        </div>
      </div>
    </div>
    <div class="crumb">
      <div class="container">
        <ul>
          <li><a href="/">Home</a></li>
          <li class="sep">/</li>
          <li> Projects </li>
        </ul>
      </div>
    </div>
  </section>
  <!--subheader-->
  <!--section-portfolio-->
  <section id="section-portfolio" class="no-bottom" aria-label="section-portfolio">
    <div class="text-center">
      <ul id="filters" class="clearfix">
        <li><span class="filter " data-filter=".app, .card, .icon, .logo, .web">All Projects</span></li>
        <li><span class="filter" data-filter=".app">Residential</span></li>
        <li><span class="filter" data-filter=".icon">Office</span></li>
        <li><span class="filter" data-filter=".logo">Commercial</span></li>
      </ul>
    </div>
    <div id="portfoliolist" class="projects2">
      <div class="portfolio logo" data-cat="logo">
        <figure class="effect-oscar"> <img src="images/art12.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2>Commercial Project</h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio logo" data-cat="logo">
        <figure class="effect-oscar"> <img src="images/art11.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Commercial Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio logo" data-cat="logo">
        <figure class="effect-oscar"> <img src="images/art9.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Commercial Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio logo" data-cat="logo">
        <figure class="effect-oscar"> <img src="images/art8.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Commercial Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio logo" data-cat="logo">
        <figure class="effect-oscar"> <img src="images/art14.jpeg" width="80%" title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Commercial Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio app" data-cat="app">
        <figure class="effect-oscar"> <img src="images/art1.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Residential Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio app" data-cat="app">
        <figure class="effect-oscar"> <img src="images/art10.jpeg" width="80%" title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Residential Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio app" data-cat="app">
        <figure class="effect-oscar"> <img src="images/art4.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Residential Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio app" data-cat="app">
        <figure class="effect-oscar"> <img src="images/art3.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Residential Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio logo" data-cat="logo">
        <figure class="effect-oscar"> <img src="images/art5.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Commercial Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      {{-- <div class="portfolio icon" data-cat="icon">
        <figure class="effect-oscar"> <img src="images/art3.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Projects </h2> --}}
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            {{-- </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div> --}}
      <div class="portfolio icon" data-cat="icon">
        <figure class="effect-oscar"> <img src="images/art2.jpeg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Office Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio icon" data-cat="icon">
        <figure class="effect-oscar"> <img src="images/art1.jpeg" width="80%"  title=""  class="img-responsive" />
          <figcaption>
            <div>
              <h2> Office Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
      <div class="portfolio card" data-cat="app">
        <figure class="effect-oscar"> <img src="assets/img/pf-3.jpg" width="80%"  title="" class="img-responsive" />
          <figcaption>
            <div>
              <h2> Office Project </h2>
              {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
            </div>
            <a href="project-single.html">View more</a> </figcaption>
        </figure>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>
  <!--section-portfolio-->
  <!--Contact us-->
  <section id="call-to-action" class="call-to-action bg-color dark text-center">
    <h6><a href="/contact" class="btn btn-line-black btn-big hvr-sweep-to-left">Contact us</a></h6>
  </section>
  <!--Contact us-->
</main>
<!--main-->

@endsection
