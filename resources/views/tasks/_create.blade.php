<div class="card">
    <div class="card-header">Create New Task</div>
    <div class="card-body">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">

                {{ $error }}
            </div>
        @endforeach
        <form action="/tasks" method="post" class="d-flex">
            @csrf
            @include('tasks._form')
        </form>
    </div>
</div>
