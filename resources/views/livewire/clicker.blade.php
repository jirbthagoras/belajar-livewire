<div>

    @if (session("success"))
        <span class="w-100 py-3 bg-green-300 rounded">{{session("success")}}</span>
    @endif

    <form wire:submit='createNewUser' action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1"
        wire:model='name' type="text" placeholder="name">

        @error("name")
            <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror

        <br>


        <input class="block rounded border border-gray-100 px-3 py-1 mb-1"
        wire:model='email' type="text" placeholder="email">

        @error("email")
            <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror

        <br>


        <input class="block rounded border border-gray-100 px-3 py-1 mb-1"
        wire:model.defer='password' type="password" placeholder="password">

        @error("password")
            <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror

        <br>

        <div wire:loading.delay.longer>
            <span class="text-green-500"> Sending ...</span>
        </div>

        <button wire:loading.va
         class="block rounded px-3 py-1 bg-gray-400 text-white">Create</button>
    </form>

    <hr>

    @foreach ($users as $user)
        <h3>{{$user->name}}</h3>
    @endforeach

    <br>

    {{$users->links()}}

</div>
