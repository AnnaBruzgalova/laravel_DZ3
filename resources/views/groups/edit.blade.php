@extends('layouts.app')

@section('content')
<h1>Редактировать группу</h1>
<form method="POST" action="{{ route('groups.update', $group) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Название группы</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $group->title }}" required>
    </div>
    <div class="form-group">
        <label for="start_from">Дата начала обучения</label>
        <input type="date" class="form-control" id="start_from" name="start_from" value="{{ $group->start_from }}" required>
    </div>
    <div class="form-group">
        <label for="is_active">Активна</label>
        <input type="checkbox" id="is_active" name="is_active" {{ $group->is_active ? 'checked' : '' }}>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
<a href="{{ route('groups.index') }}" class="btn btn-secondary">Назад к списку групп</a>
@endsection
