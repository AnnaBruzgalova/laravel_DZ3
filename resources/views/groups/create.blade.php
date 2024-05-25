@extends('layouts.app')

@section('content')
<h1>Создать новую группу</h1>
<form method="POST" action="{{ route('groups.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Название группы</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="start_from">Дата начала обучения</label>
        <input type="date" class="form-control" id="start_from" name="start_from" required>
    </div>
    <div class="form-group">
        <label for="is_active">Активна</label>
        <input type="checkbox" id="is_active" name="is_active">
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
@endsection
