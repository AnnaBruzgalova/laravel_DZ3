@extends('layouts.app')

@section('content')
<h1>Группы</h1>
<a href="{{ route('groups.create') }}" class="btn btn-primary">Создать новую группу</a>
<ul>
    @foreach ($groups as $group)
        <li>
            <a href="{{ route('groups.show', $group) }}">{{ $group->title }}</a>
        </li>
    @endforeach
</ul>
@endsection
