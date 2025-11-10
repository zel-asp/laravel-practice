<x-layout title="Job" heading="Edit Job:{{ $findJob->title }}" class="bg-gray-200 h-full">
    <form method="POST" action="/jobs/{{ $findJob->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input id="title" type="text" name="title" placeholder="Software Engineer"
                                    value="{{ $findJob->title }}"
                                    class="block min-w-0 grow  py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    required />
                            </div>
                            @error('title')
                                <p class="text-red-500 text-xs font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Sallary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input id="salary" type="text" name="salary" placeholder="100,000 Per Year"
                                    value="{{ $findJob->salary }}"
                                    class="block min-w-0 grow  py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    required />
                            </div>
                        </div>
                        @error('salary')
                            <p class="text-red-500 text-xs font-semibold mt-1 ">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class=" text-red-500 text-sm font-bold mt-3 ">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif -->
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs/{{ $findJob->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button form="delete-form" type="submit"
                class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                Delete
            </button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </form>
    <form action="/jobs/{{ $findJob->id }}" method="POST" id="delete-form">
        @csrf
        @method('DELETE')
    </form>


</x-layout>