<div class="comics-container pb-3 position-relative">
    <h2 class="text-white text-center pt-5 pb-2">Our Comics</h2>
    <div class="text-end pb-5">
        <form  action="{{route('comics.home')}}" method="GET">
            @csrf
            <div class="text-white">Filtra per Nome Fumetto</div>
            <input name="name" id="name" type="text">
            <button type="submit">cerca</button>
        </form>
    </div>
    @if ($comics)
    <div class="row row-cols-2 row-cols-md-4 gy-5">
        
        @foreach ($comics as $comic)
        <div class="col">
            @include("partials.ComicsCard", [
                "comic" => $comic
            ])
        </div>
        @endforeach
    </div>
        @else
        <div class="">
            <h3 class="text-danger text-center">Non ci sono fumetti relativi alla tua ricerca riprova...</h3>
        </div>
        
        @endif
        
    
    <div class="text-center pb-2">
        <button class="btn btn-primary mt-4">LOAD MORE</button>
    </div>
</div>


