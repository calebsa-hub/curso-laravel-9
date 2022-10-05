@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')
<h1 class="font-bold">Novo usuário</h1>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="POST">
    @include('users._partials.form')
</form>
@endsection

