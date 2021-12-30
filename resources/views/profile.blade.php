<x-app-layout :title="$username ?? 'profile'">
    <h1>Profile</h1>
    <br>
    <h3>{{ $username ?? 'Name Tidak Ada' }} </h3>
</x-app-layout>
