@extends('layouts.app')

@section('title', 'Listagem do usuário')

@section('content')
<h1 class="font-semibold">Listagem do usuário {{ $user->name }}</h1>

<div class="py-2">
    <ul>
        <li class="font-medium">Nome: <span class="font-normal">{{ $user->name }}</span></li>
        <li class="font-medium">E-mail: <span class="font-normal">{{ $user->email }}</span></li>
        <li class="font-medium">Criado em: <span class="font-normal">{{ $user->created_at }}</span></li>
    </ul>
</div>


<form action="{{ route('users.delete', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="bg-red-400 rounded-md p-2 font-medium" type="submit">Deletar</button>
</form>

@endsection

