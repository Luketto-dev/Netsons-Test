
@extends('./layouts.app')
@section('content')

<div class="jumbotron">
    <img src="{{Vite::asset('resources/images/jumbotron.jpg')}}" alt="">
</div>

<div class="bg-dark pb-5">
    
    <div class="container">
        
        @include('partials.ComicsList')
    </div>
</div>
@include('partials.BannerHome')
@include('partials.ContactUsSection')

@endsection


<script>

</script>
