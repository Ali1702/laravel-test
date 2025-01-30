<h1>Authors</h1>
<a href="{{ route('authors.create') }}">Add Author</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Biography</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->biography }}</td>
                <td>
                    <a href="{{ route('authors.edit', $author) }}">Edit</a>
                    <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
    ← Back to Dashboard
</a>
