<h1>Add Publisher</h1>
<form action="{{ route('publishers.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="country">Country:</label>
    <input type="text" name="country" id="country" required>
    <br>
    <button type="submit">Save</button>
</form>
<a href="{{ route('publishers.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
    ← Back to Publishers
</a>