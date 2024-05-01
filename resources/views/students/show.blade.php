<h1>Информация о студенте</h1>

<p>Фамилия: {{ $student->surname }}</p>
<p>Имя: {{ $student->name }}</p>
<p>Группа: <a href="{{ route('groups.show', $student->group) }}">{{ $student->group->title }}</a></p>
