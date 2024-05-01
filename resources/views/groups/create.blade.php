<!DOCTYPE html>
<h1>Создание новой группы</h1>

<form action="{{ route('groups.store') }}" method="post">
    @csrf
    <label for="title">Название группы:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="start_from">Дата начала обучения:</label><br>
    <input type="date" id="start_from" name="start_from"><br>
    <label for="is_active">Начало обучения:</label><br>
    <input type="checkbox" id="is_active" name="is_active" value="1"><br>
    <button type="submit">Создать</button>
</form>