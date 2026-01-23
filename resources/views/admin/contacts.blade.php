<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-6">Contact Submissions</h2>
        
        @if($contacts->count() > 0)
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-left">Subject</th>
                            <th class="py-3 px-6 text-left">Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach($contacts as $contact)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">{{ $contact->name }}</td>
                            <td class="py-3 px-6 text-left">{{ $contact->email }}</td>
                            <td class="py-3 px-6 text-left">{{ $contact->subject }}</td>
                            <td class="py-3 px-6 text-left">{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-500">No messages yet.</p>
        @endif
    </div>
</x-app-layout>