<x-app-layout>
    <h1>Tasks</h1>
    <div style="margin-bottom: 15px">
        <form action="/tasks/{{ $task->id }}" method="post">
            @method('put')
            @csrf
            @include('tasks._form')
        </form>
    </div>
</x-app-layout>
