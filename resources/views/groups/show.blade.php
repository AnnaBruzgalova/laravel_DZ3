<!DOCTYPE html>
<h1>Информация о группе "{{ $group->title }}"</h1>

<p>Название: {{ $group->title }}</p>
<p>Дата начала обучения: {{ $group->start_from }}</p>
<p>Статус: {{ $group->is_active ? 'Активная' : 'Неактивная' }}</p>

<a href="{{ route('groups.createStudent', $group) }}">Добавить студента</a>

<h2>Список студентов</h2>
<ul>
    @foreach($students as $student)
    <li>
        <a href="{{ route('students.show', $student) }}">{{ $student->surname }} {{ $student->name }}</a>
    </li>
    @endforeach
</ul>