<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200 overflow-x-auto">
                <h2 class="text-2xl font-bold mb-8">Asset List</h2>

                <!-- Form for exporting within specified date range -->
                <div class="mt-4 flex flex-wrap justify-center sm:justify-start space-x-4">
                    <form action="{{ route('assets.filter') }}" method="GET" class="flex items-center space-x-4">
                        <label for="from_date" class="self-center">From Date:</label>
                        <input type="date" id="from_date" name="from_date" class="border rounded px-1 py-1">
                        <label for="to_date" class="self-center">To Date:</label>
                        <input type="date" id="to_date" name="to_date" class="border rounded px-2 py-1">
                        <button type="submit" class="px-3 py-2 bg-gray-500 text-white hover:bg-gray-600">Apply Filter</button>
                        <button type="submit" formaction="{{ route('assets.export', ['format' => 'xlsx']) }}" class="px-3 py-2 bg-gray-500 text-white hover:bg-gray-600">Export XLSX</button>
                        <button type="submit" formaction="{{ route('assets.export', ['format' => 'pdf']) }}" class="px-3 py-2 bg-gray-500 text-white hover:bg-gray-600">Export PDF</button>
                        <button type="submit" formaction="{{ route('assets.export', ['format' => 'csv']) }}" class="px-3 py-2 bg-gray-500 text-white hover:bg-gray-600">Export CSV</button>
                    </form>    
                </div>


                @if ($assets->count() > 0)
                    <div class="overflow-x-auto mt-4">
                        <table class="min-w-full divide-y divide-gray-200">
                            <!-- Table Header -->
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Asset Type Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Purchase Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Purchase Price</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Condition</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Used By</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <!-- Table Body -->
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($assets as $asset)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $asset->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ optional($asset->assetType)->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $asset->description }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $asset->purchase_date }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $asset->purchase_price }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $asset->condition }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $asset->location }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $asset->used_by }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $asset->status }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($user && $user->isSuperadmin())
                                                <a href="{{ route('assets.edit', $asset->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                <form action="{{ route('assets.destroy', $asset->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $assets->links() }}
                    </div>
                @else
                    <p class="mt-4">No assets found.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
