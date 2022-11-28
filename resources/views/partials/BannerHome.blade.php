@php
    $bunnerLinks = [
                [
                    "img" => "buy-comics-digital-comics.png",
                    "nome" => "digital comics"
                ],
                [
                    "img" => "buy-comics-merchandise.png",
                    "nome" => "dc merchandise"
                ],
                [
                    "img" =>"buy-comics-subscriptions.png",
                    "nome" => "subscription"
                ],
                [
                    "img" => "buy-comics-shop-locator.png",
                    "nome" => "comic shop locator"
                ],
                [
                    "img" => "buy-dc-power-visa.svg",
                    "nome" => "digital comics"
                ],
            ]
@endphp 
<div class="banner">
    <div class="container">
        <ul class="banner-list d-flex align-items-center list-unstyled m-0 py-4">
            @foreach ($bunnerLinks as $bunnerLink)
            <li class="banner-item text-uppercase">
                <a class="d-flex align-items-center" href="#">
                    <img src="{{Vite::asset('resources/images/' . $bunnerLink['img'])}}" alt="">
                    <div>{{$bunnerLink['nome']}}</div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>