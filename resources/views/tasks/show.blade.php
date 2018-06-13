@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    <table class="table table-striped">
        <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-md-6">
                <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>進捗</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-info glyphicon glyphicon-heart-empty']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit ('削除', ['class' => 'btn btn-default']) !!}
    {!! Form::close() !!}
    
    
</div>
    </div>
@endsection

