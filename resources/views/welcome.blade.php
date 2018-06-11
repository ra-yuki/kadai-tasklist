@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>To-Dos</h1>

        {!! link_to_route('tasks.create', 'create new task', null, ['class' => 'btn btn-primary']) !!}
    </div>
@endsection