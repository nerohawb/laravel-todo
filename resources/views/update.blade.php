@extends('layout')


@section('content')
    
    <div>

        <form action="{{ route('todo.save', ['id' => $todo->id ]) }}" method="post">
            
            {{ csrf_field() }}

            <input type="text" name="todo" value = "{{$todo->todo}}" placeholder="Create new Todo">

        </form>
    
    </div> 
@endsection