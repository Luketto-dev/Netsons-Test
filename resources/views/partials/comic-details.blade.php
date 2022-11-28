
    <div class="comic-details py-5">
        <div class="row ">
            <div class="col-8">
                <h2 class="fw-bold">{{$comic[0]['name']}}</h2>
                <div class="d-flex justify-content-between align-items-center bg-light-green px-4 text-white">
                    <div class="comic-price py-2">
                        <span>U.S Price</span>
                        <span class="fw-bold">{{ $comic[0]['price']}}</span>
                    </div>
                    <div class="available">
                        <span class="pe-3 border-end border-dark text-light py-2">AVAILABLE</span>
                        <span class="ps-3 fw-bold py-2">Check Availability</span>
                    </div>
                </div>
                <div class="description pt-3">
                    <p>{!! $comic[0]['description'] !!}</p>
                </div>
            </div>
            <div class="col-4">
                <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
            </div>
        </div>
        
    </div>
