<!DOCTYPE html>
<h1>Список групп</h1>

<a href="{{ route('groups.create') }}">Создать новую группу</a>

<ul>
@foreach($groups as $group)
<li>
<a href="{{ route('groups.show', $group) }}">{{ $group->title }}</a>
</li>
 @endforeach
</ul>