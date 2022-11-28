@extends('./layouts.app')
@section('content')
<div class="container d-flex justify-content-center flex-column align-content-center py-5">
    <h1 class="text-center py-5">
        MESSAGGIO INVIATO CORRETTAMENTE <i class="fa-solid fa-circle-check"></i>
    </h1>
    <h3 class="text-center py-5">
        Verrai automaticamente reindirizzato alla homepage in 3
        secondi...
    </h3>
</div>
</div>
@endsection


<script>
    window.onload(redirectToHome())


    function redirectToHome() {
        setTimeout(() => {
            window.location.replace("/home");
        }, 3500);
    }
</script>
