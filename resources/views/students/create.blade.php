@extends('layouts.app')

@section('content')
<h1>Добавить студента в группу {{ $group->title }}</h1>
<form method="POST" action="{{ route('groups.students.store', $group) }}">
    @csrf
    <div class="form-group">
        <label for="surname">Фамилия</label>
        <input type="text" class="form-control" id="surname" name="surname" required>
    </div>
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
<a href="{{ route('groups.show', $group) }}" class="btn btn-secondary">Назад к группе</a>
@endsection
