<div wire:poll>
    <table class="border border-b-gray-950">

        <tr>
            <th>name</th>
        </tr>
        @foreach ($users as $user)
        <tr>

                <td>{{$user->name}}</td>

        </tr>
        @endforeach

    </table>

    {{$users->links()}}
</div>
