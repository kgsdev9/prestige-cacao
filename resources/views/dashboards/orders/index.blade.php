@extends('layout.layout')

@section('title', 'File d\'attente des utilisateurs - Moyo')

@section('content')
    <main class="page-wrapper">
        <section class="container py-5">
            <h1 class="mb-4 text-center">File d'attente des utilisateurs inscrits à Moyo</h1>

            <a href="{{ route('file.attente.pdf') }}" class="btn btn-primary mb-3">
                Télécharger la liste en PDF
            </a>


            @if ($users->isEmpty())
                <div class="alert alert-warning text-center">
                    Aucun utilisateur inscrit pour le moment.
                </div>
            @else
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom complet</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Profession</th>
                            <th>Adresse</th>
                            <th>Date d'inscription</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->nomcomplet }}</td>
                                <td>{{ $user->telephone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->profession }}</td>
                                <td>{{ $user->adresse }}</td>
                                <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </section>
    </main>
@endsection
