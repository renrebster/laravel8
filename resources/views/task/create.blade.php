
@extends('layout')


@section('content')
<h1>New task</h1>


@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form method="POST" action="{{ route('tasks.store') }}">

    @csrf

    <div class="@error('name') error @enderror">
        <label>Task name</label>
        <input type="text" id="name" name="name" />
    </div>

    <button type="submit" class="btn">Save</button>
    <a href="{{ route('tasks.index') }}">Return</a>

</form>



@endsection
