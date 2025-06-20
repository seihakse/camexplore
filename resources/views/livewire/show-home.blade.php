<main>
    <!-- Banner Section -->
<section class="banner bg-tertiary position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="block text-center text-lg-start pe-0 pe-xl-5">
          <h1 class="text-capitalize mb-4">Explore Cambodia</h1>
          <p class="mb-4">Discover breathtaking destinations from sea to city and culture to nature</p>
          {{-- <a type="button" class="btn btn-info text-white" href="#" data-bs-toggle="modal" data-bs-target="#applyLoan">
            See More<span class="ms-2 fas fa-arrow-right" style="font-size: 14px;"></span>
          </a> --}}

        </div>
      </div>
      <div class="col-lg-6">
        <div id="cambodiaSlider" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner rounded-4 shadow">

            <div class="carousel-item active">
              <img src="{{ asset('front/images/knongpsar.jpg') }}" class="d-block w-100" alt="Angkor Wat">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-white">Knong Psar</h5>
                <p>The heaven for camp guys in Cambodia.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="{{  asset('front/images/koh-rong.jpg') }}" class="d-block w-100" alt="Koh Rong">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-white">Koh Rong</h5>
                <p>Crystal clear beaches and island escapes.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="{{  asset('front/images/independent.jpg') }}" class="d-block w-100" alt="Phnom Penh">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-white">Phnom Penh</h5>
                <p>The vibrant capital full of culture and history.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="{{  asset('front/images/ksp.jpg')  }}" class="d-block w-100" alt="Cardamom Mountains">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-white">Knong Sampov</h5>
                <p>Jungle adventures and eco-exploration.</p>
              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#cambodiaSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#cambodiaSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Keep decorative shapes -->
  <div class="has-shapes"> ... </div> <!-- your existing SVGs -->
</section>

<!-- Featured Destinations Section -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="mb-4">Featured Destinations</h2>
            <p class="lead mb-5">From ancient temples to stunning beaches, explore the diverse beauty of Cambodia.</p>
        </div>
        </div>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12"> <!-- Use full width to center the internal grid -->
        <div class="row gy-5 justify-content-center"> <!-- Center the grid items -->
          
          <!-- Blog Post 1 -->
          <div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/independent.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Independent Monument</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('destinationDetail', 7) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
          </div>
            <!-- Blog Post 2 --><div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/knongpsar.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Knong Psar</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('destinationDetail', 2) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
          </div>
            <!-- Blog Post 3 --><div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/koh-rong.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Koh Rong</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('destinationDetail', 4) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
          </div>
            <!-- Blog Post 4 --><div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/ksp.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Knong Sampov</a></h2>
                <p>Short description for the post...</p>
               <a href="{{ route('destinationDetail', 3) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
          </div>
            <!-- Blog Post 5 -->
            <div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/kompot.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Kampot Province</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('destinationDetail', 6) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
            </div>
            <div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/krsl.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">IKoh Rong Sonleom</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('destinationDetail', 5) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
            </div>

          <!-- Repeat for other blog posts -->
          <!-- ... -->

        </div>

        <!-- Pagination -->
        <div class="mt-4">
          <nav class="d-flex justify-content-center">
            <ul class="pagination">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hotels Section -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="mb-4">Recommend Hotels</h2>
            <p class="lead mb-5">Find your comfort and affordable price hotels in Cambodia. </p>
        </div>
        </div>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12"> <!-- Use full width to center the internal grid -->
        <div class="row gy-5 justify-content-center"> <!-- Center the grid items -->
          
          <!-- Blog Post 1 -->
          <div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/kprr.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Kompot River Residence</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('hotelDetail', 10) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
          </div>
            <!-- Blog Post 2 -->
          <div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/kpvbt.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Kampot Villa Boutique</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('hotelDetail', 11) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
          </div>
            <!-- Blog Post 3 --><div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/lubd sr.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Lub-D Siem Reap</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('hotelDetail', 6) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
          </div>
            <!-- Blog Post 4 --><div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/onederz sr.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Onederz Siem Reap</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('hotelDetail', 8) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
          </div>
            <!-- Blog Post 5 -->
            <div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/memoire.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Memoire palace resort & spa</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('hotelDetail', 5) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
            </div>
            <div class="col-md-4">
            <article class="blog-post text-center">
              <div class="post-slider slider-sm rounded overflow-hidden">
                <img src="front/images/pkvb.jpg" class="img-fluid w-100" alt="Post Thumbnail" style="height: 220px; object-fit: cover;">
              </div>
              <div class="pt-4">
                <h2 class="h5"><a class="text-dark" href="#">Rosewood Hotel</a></h2>
                <p>Short description for the post...</p>
                <a href="{{ route('hotelDetail', 3) }}" class="text-info fw-bold">More Details</a>
              </div>
            </article>
            </div>

          <!-- Repeat for other blog posts -->
          <!-- ... -->

        </div>

        <!-- Pagination -->
        <div class="mt-4">
          <nav class="d-flex justify-content-center">
            <ul class="pagination">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
</main>