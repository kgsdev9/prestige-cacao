@extends('layout.layout')

@section('content')
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container text-center mt-5">
    <h1 class="text-success">✅ Paiement réussi !</h1>
    <p>Merci pour votre achat 🎉</p>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Retour à l'accueil</a>
</div>
@endsection
