<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @include('tasks._create')
            </div>
        </div>


        <div style="margin-bottom: 15px">
        </div>
        <ul class="list-group mt-4">

            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex justify-content-between"> {{ $index + 1 }} - {{ $task->list }}

                    <div>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-info">Edit</a>
                        <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>
</x-app-layout>


{{-- <ul>
    @foreach ($tasks as $index => $task)
        <li>{{ $index + 1 }} {{ $task->list }}</li>
@endforeach
</ul> --}}
