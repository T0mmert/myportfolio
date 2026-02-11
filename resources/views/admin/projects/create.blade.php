<x-app-layout>
    <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Add New Project</h2>

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Title *</label>
                <input type="text" name="title" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Description *</label>
                <textarea name="description" rows="4" class="w-full border rounded-lg px-3 py-2" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Project Image</label>
                <input type="file" name="image" accept="image/*" class="w-full">
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Languages *</label>
                    <input type="text" name="languages" placeholder="PHP, JavaScript" class="w-full border rounded-lg px-3 py-2" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2">Tools *</label>
                    <input type="text" name="tools" placeholder="Laravel, React" class="w-full border rounded-lg px-3 py-2" required>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Project Link</label>
                <input type="url" name="link" class="w-full border rounded-lg px-3 py-2">
            </div>

            <div class="mb-6">
                <label class="flex items-center">
                    <input type="checkbox" name="is_featured" value="1" class="mr-2">
                    <span class="text-gray-700">Feature this project</span>
                </label>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Create Project</button>
                <a href="{{ route('admin.projects.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>