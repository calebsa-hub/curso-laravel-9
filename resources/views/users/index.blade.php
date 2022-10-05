@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')
<h1 class="font-bold">
    Listagem de usuários
    <a class="bg-green-400 p-1 ml-2 rounded-md" href="{{ route('users.create') }}">New</a>
</h1>

<form class = "py-2" action="{{ route('users.index') }}" method="get">
    <input class="border-2 border-black" type="text" name="search" placeholder="Pesquisar">
    <button class="bg-green-400 p-1 rounded-md font-medium">Pesquisar</button>
</form>

<table class="table-auto rounded-md w-full bg-blue-50">
    <thead class="table-header-group bg-blue-100">
        <tr class="table-row">
            <th class="table-cell text-left">Nome</th>
            <th class="table-cell text-left">E-mail</th>
            <th class="table-cell text-left">Ação</th>
        </tr>
    </thead>
    <tbody class="table-row-group">
        @foreach ($users as $user)
            <tr class="table-row">
                <td class="table-cell">
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td class="p-1">
                    <a class = "bg-yellow-300 p-1 rounded-md" href="{{ route('users.edit', $user->id) }}">Editar</a>
                    | <a class = "bg-blue-300 p-1 rounded-md" href="{{ route('users.show', $user->id) }}">Detalhes</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


{{-- <ul>
    @foreach($users as $user)
        <li>
            {{ $user->name }} -
            {{ $user->email }}
            | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        </li>
    @endforeach
</ul> --}}
@endsection
