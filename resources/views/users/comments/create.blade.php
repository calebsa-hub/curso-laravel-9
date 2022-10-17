@extends('layouts.app')

@section('title', "Novo comentário de {{ $user->name }}")

@section('content')
<h1 class="font-bold">Novo comentário de {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('comments.store', $user->id) }}" method="POST">
    @include('users.comments._partials.form')
</form>
@endsection

