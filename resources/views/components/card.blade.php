<a href="{{route('detailArticle', compact('article'))}}" class="text-decoration-none">
  <div class="card card-custom">
      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'https://mdbootstrap.com/img/new/standard/nature/111.webp'}}" class="img-fluid rounded-1 card-img-top" alt="Immagine dell'articolo {{$article->title}}"/>
      </div>
      <h6 class="card-header text-decoration-none border ">{{$article->category->name}}</h6>
      <div class="card-body pb-1">
        <h5 class="card-title fs-3"> {{ $article->title }}</h5>
        <h5 class="card-title">€{{ $article->price }}</h5>
      </div>
      <div class="card-footer border">{{$article->created_at->diffForHumans()}}</div>
  </div>
</a>
