@csrf
<div class="">
    <input class="border-2 border-black mb-2" type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}"><br>
    <input class="border-2 border-black mb-2" type="email" name="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}"><br>
    <input class="border-2 border-black mb-2" type="password" name="password" placeholder="Senha"><br>
    <button class = "bg-green-400 p-1 rounded-md font-medium" type="submit">
        Enviar
    </button>
</div>
