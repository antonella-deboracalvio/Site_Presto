<a href="{{route('detailArticle', compact('article'))}}" class="text-decoration-none card-container-custom row">
  <div class="col-12 card card-custom">
    <div class="row">
      <div class="col-4 py-0 ps-1 pe-0 ps-md-0 align-items-center d-flex col-md-12 hover-overlay card-header rounded" data-mdb-ripple-color="light">
        <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : '/storage/img/default.jpg'}}" class="img-fluid rounded-1" alt="Immagine dell'articolo {{$article->title}}"/>
      </div>
      <div class="col-8 px-0 col-md-12">
        <h6 class="card-header text-decoration-none border ">{{__("ui.". $article->category->name)}}</h6>
        <div class="card-header py-1 border-start">
          <h5 class="card-title montserrat-bold fs-5"> {{ $article->title }}</h5>
          <h5 class="card-title  montserrat-bold my-text-acc mb-0">€{{ $article->price }}</h5>
        </div>
        <div class="card-footer border">{{$article->created_at->diffForHumans()}}</div>
      </div>
    </div>
  </div>
</a>