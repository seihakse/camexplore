<main>
    <div class="section">
  <div class="container">
    <div class="row justify-content-center">
        <!-- Back Button -->
        <div class="mb-4">
            <a href="{{ url()->previous() }}" class="btn btn-info">
                <i class="fas fa-arrow-left me-2 font-l"></i> Back
            </a>
        </div>
      <div class="col-lg-10">
        <div class="mb-5">
          <h2 class="mb-4" style="line-height:1.5">{{ $hotel->title }}</h2>
          {{-- <span>15 March 2020 <span class="mx-2">/</span> </span>
          <p class="list-inline-item">Category : <a href="#!" class="ml-1">Photography </a>
          </p> --}}
          {{-- <p class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a href="#!"
              class="ml-1">Image </a>
          </p> --}}
        </div>
        @if ($hotel->image != "")
        <div class="mb-5 text-center">
          <div class="post-slider rounded overflow-hidden">
            <img loading="lazy" decoding="async" src="{{ asset('storage').'/'.$hotel->image}}" alt="Post Thumbnail">
            
          </div>
        </div>          
        @endif
        <div class="content">
            {!! $hotel->content !!}
        </div>
      </div>
    </div>
  </div>
</div>
</main>