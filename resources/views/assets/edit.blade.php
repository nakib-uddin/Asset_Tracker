<x-app-layout>
    <!-- resources/views/assets/edit.blade.php -->

    <form action="{{ route('assets.update', $asset->id) }}" method="POST" class="max-w-lg mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="asset_type_id" class="block text-sm font-medium text-gray-700">Asset Type:</label>
            <select name="asset_type_id" id="asset_type_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @foreach($assetTypes as $assetType)
                    <option value="{{ $assetType->id }}" {{ $assetType->id == $asset->asset_type_id ? 'selected' : '' }}>{{ $assetType->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Responsive Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                <input type="text" name="description" id="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('description', $asset->description ?? '') }}">
            </div>

            <div class="mb-4">
                <label for="purchase_date" class="block text-sm font-medium text-gray-700">Purchase Date:</label>
                <input type="date" name="purchase_date" id="purchase_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('purchase_date', $asset->purchase_date ?? '') }}">
            </div>

            <div class="mb-4">
                <label for="purchase_price" class="block text-sm font-medium text-gray-700">Purchase Price:</label>
                <input type="number" name="purchase_price" id="purchase_price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('purchase_price', $asset->purchase_price ?? '') }}">
            </div>

            <div class="mb-4">
                <label for="condition" class="block text-sm font-medium text-gray-700">Condition:</label>
                <input type="text" name="condition" id="condition" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('condition', $asset->condition ?? '') }}">
            </div>

            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Location:</label>
                <input type="text" name="location" id="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('location', $asset->location ?? '') }}">
            </div>

            <div class="mb-4">
                <label for="used_by" class="block text-sm font-medium text-gray-700">Used By:</label>
                <input type="text" name="used_by" id="used_by" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('used_by', $asset->used_by ?? '') }}">
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
                <input type="text" name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ old('status', $asset->status ?? '') }}">
            </div>
        </div>
        
        <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Save
        </button>
    </form>
</x-app-layout>
