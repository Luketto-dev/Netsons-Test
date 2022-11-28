<div class="comics-container pb-3 position-relative">
    <h2 class="text-white text-center pt-5 pb-2">Our Comics</h2>
    <div class="pb-5">
        <form action="{{ route('comics.home') }}" method="GET">
            @csrf
            <div class="text-white fs-5 pb-2">Search by Comics name</div>
            <input name="name" id="name" type="text" class="p-1 me-1 w-25">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    @if ($comics)
        <div class="row row-cols-2 row-cols-md-4 gy-5">

            @foreach ($comics as $comic)
                <div class="col">
                    @include('partials.ComicsCard', [
                        'comic' => $comic,
                    ])
                </div>
            @endforeach
        </div>
    @else
        <div class="">
            <h3 class="text-danger text-center">Non ci sono fumetti relativi alla tua ricerca riprova...</h3>
        </div>

    @endif



</div>
