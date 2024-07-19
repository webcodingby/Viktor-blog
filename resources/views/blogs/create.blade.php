<h1>Добавить статью</h1>
<form action="{{ route('blogs.store') }}" method="POST">
    @csrf
    <label>Название: <input type="text" name="title" required></label><br>
    <label>Дата: <input type="date" name="date" required></label><br>
    <label>Текст: <textarea name="content" required></textarea></label><br>
    <button type="submit">Добавить</button>
</form>
