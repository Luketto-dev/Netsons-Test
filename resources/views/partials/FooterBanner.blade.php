@php
    $socials =[
        "footer-facebook.png",
        "footer-twitter.png",
        "footer-youtube.png",
        "footer-pinterest.png",
        "footer-periscope.png"
];
@endphp

<div class="banner-social py-4">
    <div class="container">
        <div class="d-flex justify-content-between">
            <button class="btn btn-secondary">SING-UP NOW</button>
            <div class="follow-us d-flex align-items-center">
                <h6 class="">FOLLOW US</h6>
                @foreach ($socials as $social)
                <a class="p-2" href="#">
                    <img class="w-100" src="{{Vite::asset('resources/images/'. $social)}}" alt="">
                </a>
                @endforeach
                
            </div>
        </div>
    </div>
</div>