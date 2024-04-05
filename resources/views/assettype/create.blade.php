<x-app-layout>
    <div class="max-w-2xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> <!-- Adjust padding for small screens -->
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-10 lg:px-20 bg-white border-b border-gray-200"> <!-- Adjust padding for medium and large screens -->
                <h2 class="text-2xl font-bold mb-8">Create Asset Type</h2>
                <form action="{{ route('asset-types.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    </div>
                    <button type="submit"
                        class="inline-flex items-center justify-center w-full px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> <!-- Adjust button width for small screens -->
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
