<x-app-layout>
    <!-- resources/views/assets/form.blade.php -->

    <form action="{{ route('assets.store') }}" method="POST" class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
        @csrf
        @isset($method)
            @method($method)
        @endisset

        <div class="mb-4">
            <label for="asset_type_id" class="block text-sm font-medium text-gray-700">Asset Type:</label>
            <select name="asset_type_id" id="asset_type_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @foreach($assetTypes as $assetType)
                    <option value="{{ $assetType->id }}">{{ $assetType->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
            <input type="text" name="description" id="description" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="purchase_date" class="block text-sm font-medium text-gray-700">Purchase Date:</label>
            <input type="date" name="purchase_date" id="purchase_date" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="purchase_price" class="block text-sm font-medium text-gray-700">Purchase Price:</label>
            <input type="number" name="purchase_price" id="purchase_price" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="condition" class="block text-sm font-medium text-gray-700">Condition:</label>
            <input type="text" name="condition" id="condition" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="location" class="block text-sm font-medium text-gray-700">Location:</label>
            <input type="text" name="location" id="location" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="used_by" class="block text-sm font-medium text-gray-700">Used By:</label>
            <input type="text" name="used_by" id="used_by" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
            <input type="text" name="status" id="status" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Save
        </button>
    </form>
</x-app-layout>
