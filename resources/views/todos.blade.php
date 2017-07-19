@extends('layout')


@section('content')
    <div class="cos-margin text-center" style="background: #D2D7D3">
        <div>

            <form action="/create/todo" method="post" class='cos-input'>
                
                {{ csrf_field() }}

                <input type="text" name="todo" placeholder="Create new Todo" class="form-control">
                <p>Press Enter to add Todo</p>

            </form>
        
        </div> 

        <div style="margin-top: 5%">
            @foreach($todos as $todo)

            <p class='cos-todos'>{{ $todo-> todo }}</p>
            <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class='label label-danger'>Delete</a>
            <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class='label label-info'>Edit</a>
            
            @if(!$todo->completed)
                <a href="{{route('todo.completed', [ 'id' => $todo->id ])}}" class='label label-success'>Mark as completed</a>
            @else
                <p class="label label-success">Completed</p>
            @endif

            <hr>


            @endforeach
        </div>
    </div>
@endsection