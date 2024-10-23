<x-layout>
    @if(session()->has('message'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-success text-center shadow rounded">
            {{ session('message') }}
        </div>
    </div>
    @endif
    <header class="container-fluid header-custom">
        <div class="row h-100 justify-content-between">
            <div class="col-12 col-md-6 d-flex align-items-center text-white">
                <h1 class="display-3 fw-bold ps-5">
                    <span class="my-text-acc fw-bolder display-1 montserrat-bold">{{__("ui.presto")}}! <br> </span>  {{__($frase)}}
                </h1>
            </div>
            @auth
                <div class="col-12 col-md-5 d-flex justify-content-center px-5 mb-3 mb-md-0 align-items-center wrapper-btn-info-header-custom">
                    <a class="my-text-main w-100 text-center btn-info-header-custom text-decoration-none my-bg-quar rounded py-3 fw-bold" href="{{ route('createArticle') }}">{{__("ui.insert an article")}}!</a>
                </div>
            @else
                <div class="col-12 col-md-5 d-flex justify-content-center px-5 mb-3 mb-md-0 align-items-center wrapper-btn-info-header-custom">
                    <button class="btn my-text-main w-100 text-center btn-info-header-custom text-decoration-none my-bg-quar rounded py-3 fw-bold login-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">{{__("ui.insert an article")}}!</button>
                </div>
            @endauth
            
        </div>
    </header>


    {{-- testo scorrevole --}}
    <div class="testo-scorrevole h-auto my-bg-main py-md-5">
        <span class="my-text-quar display-3 fw-bolder py-2 montserrat-bold">{{__("ui.non perderti le ultime occasioni fai")}}...<span class="my-text-acc montserrat-bold"><span></span> {{__("ui.presto")}}!</span> </span>
    </div>
    <div class="wrapper container-fluid card-welcome">
        
        <div class="row justify-content-evenly">
            
            @forelse ($articles as $article)
                <a href="{{ route('detailArticle', compact('article')) }}" class="col-md-5 mx-3 col-11 articles-home mt-md-5 text-decoration-none align-content-center rounded-3" data-aos="zoom-in-up" style="background-image: linear-gradient(#141b41c2, #141b41c2), url({{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : '/storage/img/default.jpg'}});">
                    <div class="row">
                        <div class="col-4 container-vetro align-content-center ms-5">
                            <h3 class="text-white montserrat-bold">{{ $article->title }}</h3>
                        </div>
                        <div class="col-4 align-content-center ms-auto me-5 preview-last-articles">
                            <h3 class="text-white montserrat-bold">€{{ $article->price }}</h3>
                            
                            <h3 class="text-white">{{__("ui.".$article->category->name)}}</h3>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-12">
                    <h3 class="text-center"> {{__("ui.no articles")}}</h3>
                </div>
            @endforelse
        </div>
    </div>


</x-layout>





