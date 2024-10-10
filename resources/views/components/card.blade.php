<div class="card  ">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
      <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
      <a href="#!">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
      </a>
    </div>
    <div class="card-header">{{$article->category->name}}</div>
    <div class="card-body">
      <h5 class="card-title"> {{ $article->title }}</h5>
      <h5 class="card-title"> {{ $article->price }}</h5>
      <p class="card-text">
        Some quick example text to build on the card title and make up the bulk of the
        card's content.
      </p>
      <button type="button" class="btn btn-primary">Dettaglio</button>
      <button type="button" class="btn btn-primary">Categoria</button>
    </div>
    <div class="card-footer">{{$article->created_at}}</div>
  </div>