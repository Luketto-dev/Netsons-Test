@extends('layouts.app')

@section('content')

<div class="jumbotron p-0">
    <img src="{{Vite::asset("resources/images/jumbotron.jpg")}}" alt="">
</div>
<div class="blue-bar">
    <div class="container">
        <div class="small-container">
            <img src="{{($comic[0]['thumb'])}}" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="small-container">
        @include('partials.comic-details')
    </div>  
</div>

<div class="bg-light-grey">
    <div class="container">
        <div class="small-container py-5">
            @include('partials.comic-talent-specs')
        </div>  
    </div>
</div>
@endsection