@csrf
<div class="">
    <textarea class="w-full border-2 border-black mb-2" type="text" name="body" placeholder="Comentário" value="{{ $user->name ?? old('name') }}"></textarea><br>
    <label for="visible">
        Visível? <input type="checkbox" name="visible" id="">
    </label><br>
    <button class = "w-full bg-green-400 p-1 rounded-md font-medium" type="submit">
        Enviar
    </button>
</div>
