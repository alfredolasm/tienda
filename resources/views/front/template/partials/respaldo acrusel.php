<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

  
    <!-- SLIDER DE LAS OFERTAS-->

    @foreach($articles as $article)
    <div class="col-6 col-lg-auto">
      <div class="card border-primary mb-3" style="max-width: 30rem;">
        <a href=" {{route('front.view.article', $article->slug)}} ">
          @foreach($article->images as $image)
            <img style="height: 100px; width: 100%; display: block;" src="{{ asset('images/articles/'.$image->name) }}" alt="Card image">
          @endforeach
        </a>
        <h6 class=""></h6>
         <div class="card-body">
          <a href=" {{route('front.view.article', $article->slug)}} ">
            <h5 class="card-title">{{ $article->title }}</h5>
          </a>
        </div> 
        
        <div class="card-footer text-muted">
          <div class="row  justify-content-between">
            <div class="col-6"><small class="text-muted"><a href="{{route('front.search.category', $article->category->name)}} ">{{$article->category->name}}</a></small></div> 
            <div class="col-6"><small class="text-muted"> {{$article->created_at->diffForHumans()}} </small></div>
          </div>
        </div>
      </div>
    </div>  
  @endforeach


    
    <div class="carousel-item active">
      <div class="row">
        <div class="col-6 col-lg-3">
          <div class="card mb-3 ">
            <img style="height: 200px; width: 100%; display: block;" src="/images/front/_kitcloucecoesport2.jpg" alt="Card image">
              <ul class="list-group list-group-flush">
              <p class="text-center"><strong>Deportivos</strong></p>
              <p class="list-group-item lead text-center text-danger"><strong>$25</strong></p>
            </ul>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card mb-3 ">
            <img style="height: 200px; width: 100%; display: block;" src="/images/front/_kitcloucecoesport3.jpg" alt="Card image">
              <ul class="list-group list-group-flush">
              <p class="text-center"><strong>Deportivos</strong></p>
              <p class="list-group-item lead text-center text-danger"><strong>$25</strong></p>
            </ul>
          </div>
        </div>
        <div class="d-none d-lg-block col-lg-3">
          <div class="card mb-3 ">
            <img style="height: 200px; width: 100%; display: block;" src="/images/front/_kitcloucecoesport4.jpg" alt="Card image">
              <ul class="list-group list-group-flush">
              <p class="text-center"><strong>Deportivos</strong></p>
              <p class="list-group-item lead text-center text-danger"><strong>$25</strong></p>
            </ul>
          </div>
        </div>
        <div class="d-none d-lg-block col-lg-3">
          <div class="card mb-3 ">
            <img style="height: 200px; width: 100%; display: block;" src="/images/front/_kitcloucecoesport4.jpg" alt="Card image">
              <ul class="list-group list-group-flush">
              <p class="text-center"><strong>Deportivos</strong></p>
              <p class="list-group-item lead text-center text-danger"><strong>$25</strong></p>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="carousel-item">
      <div class="row">
        <div class="col-6 col-lg-3">
          <div class="card mb-3 ">
            <img style="height: 200px; width: 100%; display: block;" src="/images/front/_kitcloucecoesport2.jpg" alt="Card image">
            <ul class="list-group list-group-flush">
              <p class="text-center"><strong>Deportivos</strong></p>
              <p class="list-group-item lead text-center text-danger"><strong>$25</strong></p>
            </ul>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="card mb-3 ">
            <img style="height: 200px; width: 100%; display: block;" src="/images/front/_kitcloucecoesport4.jpg" alt="Card image">
              <ul class="list-group list-group-flush">
              <p class="text-center"><strong>Deportivos</strong></p>
              <p class="list-group-item lead text-center text-danger"><strong>$25</strong></p>
            </ul>
          </div>
        </div>
        <div class="d-none d-lg-block col-lg-3">
          <div class="card mb-3 ">
            <img style="height: 200px; width: 100%; display: block;" src="/images/front/_kitcloucecoesport3.jpg" alt="Card image">
              <ul class="list-group list-group-flush">
              <p class="text-center"><strong>Deportivos</strong></p>
              <p class="list-group-item lead text-center text-danger"><strong>$25</strong></p>
            </ul>
          </div>
        </div>
        <div class="d-none d-lg-block col-lg-3">
          <div class="card mb-3 ">
            <img style="height: 200px; width: 100%; display: block;" src="/images/front/_kitcloucecoesport2.jpg" alt="Card image">
              <ul class="list-group list-group-flush">
              <p class="text-center"><strong>Deportivos</strong></p>
              <p class="list-group-item lead text-center text-danger"><strong>$25</strong></p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
