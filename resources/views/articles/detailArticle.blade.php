<x-layout>

    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
        </a>
      </div>

      
    <h1>{{$article->title}}</h1>

    <p>Descrizione: {{$article->description}}</p>
    <p>Prezzo: {{$article->price}} </p>
    <p>Categoria: {{$article->category->name}}</p>
    <p>Inserzionista: {{$article->user->name}}</p>
    <p>Data di creazione: {{$article->created_at->format('d/m/Y')}}</p>
    
</x-layout>