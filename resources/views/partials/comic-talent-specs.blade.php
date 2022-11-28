
    <div class="row row-cols-2 gx-4">
        <div class="col">
            <div class="specs">
                <h3>Specs</h3>
                <div class="series d-flex border-top py-2">
                    <div class="fw-bold">Series: </div>
                    <div class="text-info"> {{$comic[0]['series']}}</div>
                </div>
                <div class="price d-flex border-top py-2">
                    <div class="fw-bold">U.S. Price: </div>
                    <div> {{$comic[0]['price']}}</div>
                </div>
                <div class="date d-flex border-top border-bottom py-2">
                    <div class="fw-bold">On Sale Date: </div>
                    <div> {{$comic[0]['sale_date']}}</div>
                </div>
            </div>
        </div>
    </div>
</div>