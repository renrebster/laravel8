
@extends('layout')


@section('content')
Todo MVC

<a href="{{ route('tasks.create') }}"> New task</a>

<ul>
@foreach ($tasks as $task)
    <li><a href="{{ route('tasks.show', ['task' => $task['id']]) }}">{{$task['id']}} - {{$task['name']}}</a></li>
    <form action="{{ route('tasks.destroy', ['task'=> $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete">
    </form>



@endforeach
</ul>
@endsection
