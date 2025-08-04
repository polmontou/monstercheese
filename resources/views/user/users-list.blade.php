@extends('components/backend')
@section('page_title','Liste User')

@section('content')

<main>
    <h1>Liste des utilisateurs</h1>
    <a href=''>Ajouter un utilisateur</a>

    <div class="listUser">
        <ul>
    @foreach ($users as $user)
        <li>{{$user->firstname}} {{$user->lastname}}</li>
    @endforeach
        </ul>
    </div>
</main>


@endsection