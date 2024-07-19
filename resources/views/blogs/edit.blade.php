<h1>Редактировать статью</h1>
<form action="{{ route('blogs.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Название: <input type="text" name="title" value="{{ $blog->title }}" required></label><br>
    <label>Дата: <input type="date" name="date" value="{{ $blog->formatted_date }}" required></label><br>
    <label>Тектс: <textarea name="content" required>{{ $blog->content }}</textarea></label><br>
    <button type="submit">Обновить</button>
</form>
