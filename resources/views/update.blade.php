@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 ">
            <form action="{{ route('todo.update', ['id' => $todo->id]) }}" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" name="todo" placeholder="create new todo" value="{{ $todo->todo }}">


            </form>
        </div>
    </div>


@endsection
