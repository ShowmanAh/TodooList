@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-6 ">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" name="todo" placeholder="create new todo">


        </form>
        </div>
    </div>
@foreach($todos as $todo)
    {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class=" btn btn-danger">X</a>
    <a href="{{ route('todo.edit', ['id' => $todo->id]) }}" class=" btn btn-success">Edit</a>
        @if(!$todo->completed)
            <a href="{{ route('todo.completed', ['id'=> $todo->id]) }}" class="btn btn-primary">Mark as completed</a>
        @else
            <span class="text-info" >Completed</span>
        @endif

    <hr>
    @endforeach


@endsection
