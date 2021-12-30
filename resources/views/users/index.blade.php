<x-app-layout>

    <div class="container">
        <h1>User</h1>
        @foreach ($users as $user)
            <li><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a> </li>

        @endforeach

    </div>
</x-app-layout>
