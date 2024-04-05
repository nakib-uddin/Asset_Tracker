<x-app-layout>
    <div class="bg-blue-800 text-white py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h6 class="text-3xl font-bold text-center">About Us Page</h6>
            <p class="mt-4 text-lg text-center">An asset tracking system is a technology-based solution designed to monitor and manage physical assets within an organization. These assets can include anything from vehicles, machinery, equipment, tools, IT hardware, inventory, and more.</p>
        </div>
    </div>

    <h2 class="text-3xl font-bold text-center mt-12 mb-8">Our Team</h2>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('images/p1.jpg') }}" alt="Jane">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Jane Doe</div>
                    <p class="text-gray-700 text-base">CEO & Founder</p>
                    <p class="text-gray-700 text-base">Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p class="text-gray-700 text-base">jane@example.com</p>
                    <button class="mt-4 bg-black hover:bg-gray-900 text-white font-bold py-2 px-4 rounded w-full">Contact</button>
                </div>
            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('images/p2.jpg') }}" alt="Mike">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Mike Ross</div>
                    <p class="text-gray-700 text-base">Art Director</p>
                    <p class="text-gray-700 text-base">Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p class="text-gray-700 text-base">mike@example.com</p>
                    <button class="mt-4 bg-black hover:bg-gray-900 text-white font-bold py-2 px-4 rounded w-full">Contact</button>
                </div>
            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('images/p1.jpg') }}" alt="John">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">John Doe</div>
                    <p class="text-gray-700 text-base">Designer</p>
                    <p class="text-gray-700 text-base">Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p class="text-gray-700 text-base">john@example.com</p>
                    <button class="mt-4 bg-black hover:bg-gray-900 text-white font-bold py-2 px-4 rounded w-full">Contact</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
