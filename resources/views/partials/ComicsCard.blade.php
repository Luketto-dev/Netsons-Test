<div class="my-card ">
    <a class="text-decoration-none" href="{{route('comics.show', $comic['id'])}}">
        <img src="{{$comic['thumb']}}" alt="">
        <div class="my-card-title">
            <div class="text-white p-3 text-uppercase">{{$comic['series']}}</div>
        </div>
    </a>   
</div>

