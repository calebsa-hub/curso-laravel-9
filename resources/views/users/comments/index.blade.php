@extends('layouts.app')

@section('title', "Comentários do usuário {{ $user->name }}")

@section('content')
<h1 class="font-bold">
    Comentários do usuário {{ $user->name }}
    <a class="bg-green-400 p-1 ml-2 rounded-md" href="{{ route('comments.create', $user->id) }}">New</a>
</h1>

<form class = "py-2" action="{{ route('users.index') }}" method="get">
    <input class="border-2 border-black" type="text" name="search" placeholder="Pesquisar">
    <button class="bg-green-400 p-1 rounded-md font-medium">Pesquisar</button>
</form>

<table class="table-auto rounded-md w-full bg-blue-50">
    <thead class="table-header-group bg-blue-100">
        <tr class="table-row">
            <th class="table-cell text-left">Conteúdo</th>
            <th class="table-cell text-left">Visível</th>
            <th class="table-cell text-left">Editar</th>
        </tr>
    </thead>
    <tbody class="table-row-group">
        @foreach ($comments as $comment)
            <tr class="table-row">
                <td class="table-cell">
                    {{ $comment->body }}
                </td>
                <td>
                    {{ $comment->visible ? 'SIM' : 'NÃO' }}
                </td>
                <td class="p-1">
                    <a class = "bg-yellow-300 p-1 rounded-md" href="{{ route('users.edit', $user->id) }}">Editar</a>
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
