<h1>Список статей</h1>
<a href="{{ route('blogs.create') }}">Добавить статью</a>
<ul>
    @foreach ($blogs as $blog)
        <li>
            {{ $blog->title }} - {{ $blog->formatted_date }}
            <a href="{{ route('blogs.edit', $blog->id) }}">Редактировать</a>
            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </li>
    @endforeach
</ul>
