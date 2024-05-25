@extends('layouts.app')

@section('content')
<h1>{{ $group->title }}</h1>
<p>Дата начала: {{ $group->start_from }}</p>
<p>Активна: {{ $group->is_active ? 'Да' : 'Нет' }}</p>
<a href="{{ route('groups.students.create', $group) }}" class="btn btn-primary">Добавить студента</a>
<h2>Студенты</h2>
<ul>
    @foreach ($group->students as $student)
        <li>
            <a href="{{ route('students.show', $student) }}">{{ $student->surname }} {{ $student->name }}</a>
        </li>
    @endforeach
</ul>
<a href="{{ route('groups.index') }}" class="btn btn-secondary">Назад к списку групп</a>
@endsection
