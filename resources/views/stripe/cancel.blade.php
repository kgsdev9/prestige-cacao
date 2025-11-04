@extends('layout.layout')

@section('content')
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container text-center mt-5">
    <h1 class="text-danger">❌ Paiement annulé</h1>
    <p>Votre transaction n’a pas été finalisée.</p>
    <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Retour</a>
</div>
@endsection
