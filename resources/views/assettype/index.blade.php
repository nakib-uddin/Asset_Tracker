<x-app-layout>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($assetTypes as $assetType)
        <tr>
            <td>{{ $assetType->id }}</td>
            <td>{{ $assetType->name }}</td>
            <td>
                <a href="{{ route('asset_types.edit', $assetType->id) }}">Edit</a>
                <form action="{{ route('asset_types.destroy', $assetType->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</x-app-layout>