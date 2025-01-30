<h1>Edit Book</h1>
<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $book->title }}" required>
    <br>
    <label for="publication_year">Publication Year:</label>
    <input type="number" name="publication_year" id="publication_year" value="{{ $book->publication_year }}" required>
    <br>
    <label for="author_id">Author:</label>
    <select name="author_id" id="author_id" required>
        @foreach ($authors as $author)
        <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
        @endforeach
    </select>
    <br>
    <label for="publisher_id">Publisher:</label>
    <select name="publisher_id" id="publisher_id" required>
        @foreach ($publishers as $publisher)
        <option value="{{ $publisher->id }}" {{ $book->publisher_id == $publisher->id ? 'selected' : '' }}>{{ $publisher->name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('books.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
    ← Back to Books
</a>