@extends('User.layout.main')
@section('usercontent')
<style>
.slide {
  margin-top: -6.5rem ;
}

</style>
<section class="ftco-section bg-light">

			<div class="container">
      <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-mdb-interval="10000">
      <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" height="250vh" class="d-block w-100" alt="Wild Landscape"/>
    </div>
    <!-- <div class="carousel-item" data-mdb-interval="2000">
      <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="d-block w-100" alt="Camera"/>
    </div>
    <div class="carousel-item">
      <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100" alt="Exotic Fruits"/>
    </div> -->
  </div>
  <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
				<div class="row justify-content-start mb-5 pb-2">
          <div class="col-md-4 heading-section ftco-animate">

          

          	<span class="subheading subheading-with-line"><small class="pr-2 bg-white">Modular Kitchen </small></span>
            <h2 class="mb-4">Designs</h2>
          </div>
          <div class="col-md-8 pl-md-5 heading-section ftco-animate">
          	
          </div>
        </div>	
				<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('user/images/image_1.jpg')}});">
              </a>
              
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('user/images/image_2.jpg')}});">
              </a>
              
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('user/images/image_3.jpg')}});">
              </a>
              
            </div>
          </div>
        </div>
			</div>
		</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@endsection