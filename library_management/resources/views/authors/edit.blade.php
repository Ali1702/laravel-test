<h1>Edit Author</h1>

<form action="{{ route('authors.update', $author) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $author->name }}" required>
    <br>
    <label for="biography">Biography:</label>
    <textarea name="biography" id="biography">{{ $author->biography }}</textarea>
    <br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('authors.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">
    ← Back to Authors
</a>