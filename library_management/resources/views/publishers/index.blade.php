<h1>Publishers</h1>
<a href="{{ route('publishers.create') }}">Add Publisher</a>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Country</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($publishers as $publisher)
        <tr>
            <td>{{ $publisher->name }}</td>
            <td>{{ $publisher->country }}</td>
            <td>
                <a href="{{ route('publishers.edit', $publisher) }}">Edit</a>
                <form action="{{ route('publishers.destroy', $publisher) }}" method="POST" style="display:inline;">
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
