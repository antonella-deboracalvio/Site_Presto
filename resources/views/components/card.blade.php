<a href="{{route('detailArticle', compact('article'))}}" class="text-decoration-none">
  <div class="card card-custom">
      <div class="hover-overlay card-image-custom" data-mdb-ripple-color="light">
        <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://mdbootstrap.com/img/new/standard/nature/111.webp'}}" class="h-100 rounded-1" alt="Immagine dell'articolo {{$article->title}}"/>
      </div>
      <h6 class="card-header text-decoration-none border ">{{$article->category->name}}</h6>
      <div class="card-body pb-1">
        <h5 class="card-title fs-5"> {{ $article->title }}</h5>
        <h5 class="card-title">€{{ $article->price }}</h5>
      </div>
      <div class="card-footer border">{{$article->created_at->diffForHumans()}}</div>
  </div>
</a>
