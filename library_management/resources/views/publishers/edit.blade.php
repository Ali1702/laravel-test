<h1>Edit Publisher</h1>
<form action="{{ route('publishers.update', $publisher) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $publisher->name }}" required>
    <br>
    <label for="country">Country:</label>
    <input type="text" name="country" id="country" value="{{ $publisher->country }}" required>
    <br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('publishers.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
    ← Back to Publishers
</a>
