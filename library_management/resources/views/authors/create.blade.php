<h1>Add Author</h1>
<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="biography">Biography:</label>
    <textarea name="biography" id="biography"></textarea>
    <button type="submit">Save</button>
</form>
<a href="{{ route('authors.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">
    ← Back to Authors
</a>
