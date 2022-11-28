<div class="comics-container pb-3 position-relative">
    <h2 class="text-white text-center p-5">Our Comics</h2>
    <div class="row row-cols-4 gy-5">
        @foreach ($comics as $comic)
        <dv class="col">
            @include("partials.ComicsCard", [
                "comic" => $comic
            ])
        </dv>
        @endforeach
    </div>
    <div class="text-center pb-2">
        <button class="btn btn-primary mt-4">LOAD MORE</button>
    </div>
</div>

