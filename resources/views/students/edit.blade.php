@extends('layouts.app')

@section('content')
<h1>Редактировать студента</h1>
<form method="POST" action="{{ route('students.update', $student) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="surname">Фамилия</label>
        <input type="text" class="form-control" id="surname" name="surname" value="{{ $student->surname }}" required>
    </div>
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
<a href="{{ route('students.show', $student) }}" class="btn btn-secondary">Назад к студенту</a>
@endsection
