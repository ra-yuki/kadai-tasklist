@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>To-Dos</h1>
        @if(count($tasks) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>task</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <th>{!! link_to_route('tasks.show', $task->id, ['id'=>$task->id]) !!}</th>
                            <th>{{$task->content}}</th>
                            <th>{{$task->status}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        {!! $tasks->render() !!}
        
        {!! link_to_route('tasks.create', 'create new task', null, ['class' => 'btn btn-primary']) !!}
    </div>
@endsection