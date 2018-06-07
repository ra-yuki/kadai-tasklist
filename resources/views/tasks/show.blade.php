@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>ID[{{$task->id}}] Details</h1>
        <h2>Content</h2>
        <p>{{$task->content}}</p>
        <h2>Status</h2>
        <p>{{$task->status}}</p>
        <p>{!! link_to_route('tasks.edit', 'edit', ['id'=>$task->id]) !!}</p>
        {!! Form::model($task, ['route'=>['tasks.destroy', $task->id], 'method'=>'delete']) !!}
            {!! Form::submit('delete') !!}
        {!! Form::close() !!}
    </div>
@endsection