@extends('layouts.app')

@section('content')
<h1>{{ $student->surname }} {{ $student->name }}</h1>
<p>Группа: <a href="{{ route('groups.show', $student->group) }}">{{ $student->group->title }}</a></p>
<a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Редактировать</a>
<form method="POST" action="{{ route('students.destroy', $student) }}" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Удалить</button>
</form>
<a href="{{ route('groups.show', $student->group) }}" class="btn btn-secondary">Назад к группе</a>
@endsection
