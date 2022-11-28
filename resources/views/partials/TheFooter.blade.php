@php
    $dcComicsLinks=[
                "Characters",
                "comics",
                "Movies",
                "TV",
                "Games",
                "Videos",
                "News",            
];

    $dcLinks =[
        "Terms Of Use",
        "Privacy Policy",
        "Ad Choices",
        "Adversting",
        "Jobs",
        "Subscriptions",
        "Talent Worshops", 
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact Us"           
];

    $sitesLinks=[
            "DC",
            "Mad Magazine",
            "DC Kids",
            "DC Universe",
            "DC Power Visa"
];


@endphp

<footer>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4 py-4">
                <div class="row">
                    <div class="col-4">
                        <div class="links-title text-white">
                            <h5>DC COMICS</h5>
                        </div>
                        <ul class="list-unstyled footer-list">
                            @foreach ( $dcComicsLinks as $link)
                            <li>
                                <a class="text-decoration-none" href="#">{{$link}}</a>
                            </li>
                            @endforeach    
                        </ul>                
                    </div>
                    <div class="col-4">
                        <div class="links-title text-white">
                            <h5>DC</h5>
                        </div>
                        <ul class="list-unstyled footer-list">
                            @foreach ($dcLinks as $link)
                            <li >
                                <a class="text-decoration-none" href="#">{{$link}}</a>
                            </li>
                            @endforeach
                        </ul>                
                    </div>
                    <div class="col-4">
                        <div class="links-title text-white">
                            <h5>Sites</h5>
                        </div>
                        <ul class="list-unstyled footer-list">
                            @foreach ($sitesLinks as $link)
                            <li>
                                <a class="text-decoration-none" href="#">{{$link}}</a>
                            </li>
                            @endforeach
                        </ul>                
                    </div>
                </div>
            </div>
            <div class="col-5 overflow-hidden">
                <div class="dc-logo position-relative">
                    <img class="" src="{{ Vite::asset('resources/images/dc-logo-bg.png')}}" alt="">
                </div>    
            </div>
        </div>
    </div>
    @include('partials.FooterBanner')

</footer>