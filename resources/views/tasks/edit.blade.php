@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスク編集ページ</h1>

<div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-md-6">

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
    {!! Form::label('status', '進捗:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div> 

        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
</div>
    </div>
@endsection

