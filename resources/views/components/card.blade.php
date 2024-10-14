<div class="card">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
      <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
      <a href="{{route('byCategory', ['category'=>$article->category])}}">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
      </a>
    </div>
    <a href="#" class="card-header text-decoration-none">{{$article->category->name}}</a>
    <div class="card-body">
      <h5 class="card-title"> {{ $article->title }}</h5>
      <h5 class="card-title">€{{ $article->price }}</h5>
      <a href="{{route('detailArticle', compact('article'))}}" class="btn my-bg-quar btn-info-custom">Maggiori Informazioni</a>
    </div>
    <div class="card-footer">{{$article->created_at->diffForHumans()}}</div>
  </div>