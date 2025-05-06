<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>School Name</th>
            <th>Address</th>
            <th>Actions</th> {{-- New --}}
        </tr>
    </thead>
    <tbody>
        @forelse($schools as $school)
            <tr>
                <td>{{ $school->id }}</td>
                <td>{{ $school->school }}</td>
                <td>{{ $school->address }}</td>
                <td>
                    {{-- Update button --}}
                    <a href="{{ route('school.edit', $school->id) }}">Update</a>

                    {{-- Delete button --}}
                    <form action="{{ route('school.destroy', $school->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this school?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No schools found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
