@extends('layouts.app')

@section('content')
  <div class="card">
    <h3 class="card-header p-3">
      Детали задачи
    </h3>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><strong>Задача:</strong> {{ $task->name }}</li>
      <li class="list-group-item"><strong>Приоритет:</strong> {{ $task->priority }}</li>
      <li class="list-group-item"><strong>Дата создания:</strong> {{ $task->created_at }}</li>
      <li class="list-group-item"><strong>Дата редактирования:</strong> {{ $task->updated_at }}</li>
    </ul>
    <div class="card-body">
      <a class="btn btn-secondary" href="{{ route('tasks.edit', $task->id) }}">
        Редактировать
      </a>
      <a class="btn btn-danger" href="{{ route('tasks.index') }}">
        Отмена
      </a>
      <form action="{{ route('tasks.destroy', $task->id) }}" method="post" class="d-inline">
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">Удалить</button>
      </form>
    </div>
  </div>
@endsection
