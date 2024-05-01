<h1>Добавление студента в группу "{{ $group->title }}"</h1>

<form action="{{ route('groups.storeStudent', $group) }}" method="post">
    @csrf
    <label for="surname">Фамилия:</label><br>
    <input type="text" id="surname" name="surname"><br>
    <label for="name">Имя:</label><br>
    <input type="text" id="name" name="name"><br>
    <button type="submit">Добавить</button>
</form>