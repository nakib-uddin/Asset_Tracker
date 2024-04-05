<x-app-layout>
<form action="{{ route('asset_types.update', $assetType->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $assetType->name }}" required>
    </div>
    <button type="submit">Update</button>
</form>

</x-app-layout>